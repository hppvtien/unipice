<?php

namespace App\Http\Controllers\Frontend\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Cart\Order;
use App\Models\Education\CourseVideo;
use Illuminate\Http\Request;

class AjaxUserViewCourseController extends Controller
{
    public function viewCourseByVideoID(Request $request, $id)
    {
        if ($request->ajax()) {
            $user = $this->getUser();
            if (!$user) {
                return response([
                    'status' => 401,
                    'message' => "Mời bạn đăng nhập"
                ]);
            }

            $video = CourseVideo::find($id);
            if (!$video) {
                return response([
                    'status' => 404,
                    'message' => "Không tồn tại video khoá học!"
                ]);
            }


            // check xem đã mua khoá học chưa
            $order = Order::where([
                'o_user_id' => $user->id,
                'o_action_id' => $video->cv_course_id
            ])->first();
            
            if (!$order) {
                return response()->json([
                    'status' => 404,
                    'message' => 'Bạn chưa mua khóa học này!'
                ]);
            }

            if ($order->o_status === Order::STATUS_SUCCESS) {

                $html = view('pages.course_video.include._inc_video', ['video' => $video])->render();
                return response([
                    'status' => 200,
                    'html' => $html,

                ]);
            }

            return response([
                'status' => 404,
                'message' => "Bạn chưa thanh toán khóa học này"
            ]);
        }
    }

    protected function getUser()
    {
        return \Auth::guard('web')->user();
    }
}
