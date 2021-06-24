<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Education\Course;
use App\Models\Education\CourseContent;
use App\Models\Education\CourseVideo;
use App\Models\Education\CourseFaq;
use App\Models\Question;
use App\Models\Vote;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class CourseController extends Controller
{

    public function getCourseDetail($id, $request)
    {
        $courseDetail = Course::with('teacher:id,t_name,t_avatar,t_slug,t_job')
            ->where([
                'id'       => $id,
                'c_status' => Course::STATUS_DEFAULT
            ])->first();

        if (!$courseDetail) return abort(404);

        $courses = Course::with('teacher:id,t_name,t_avatar,t_slug,t_job')
            ->where('c_status', Course::STATUS_DEFAULT)
            ->orderByDesc('id')
            ->paginate(3);

        $courseFaq = CourseFaq::where('course_id', $id)
            ->orderBy('id', 'asc')
            ->get();
        $courseContent = CourseContent::with('videos')->where('cc_course_id', $id)
            ->orderBy('cc_sort', 'asc')
            ->get();

        $courseVideo = CourseVideo::where('cv_course_id', $id)
            ->orderBy('id', 'asc')
            ->get();

        // lấy đánh giá của khoá học
        $votes = Vote::with('user:id,name,avatar')->where('v_id', $id)
            ->orderByDesc('id')
            ->get();
        $count_vote = count($votes);
        $sum_star = 0;
        $star_5 = 0;
        $star_4 = 0;
        $star_3 = 0;
        $star_2 = 0;
        $star_1 = 0;
        foreach ($votes as $key => $items) {
            $sum_star += $items->v_number;
            if ($items->v_number == 5) {
                $star_5 += 1;
            } elseif ($items->v_number == 4) {
                $star_4 += 1;
            } elseif ($items->v_number == 3) {
                $star_3 += 1;
            } elseif ($items->v_number == 2) {
                $star_2 += 1;
            } else {
                $star_1 += 1;
            }
        }
        if ($count_vote != 0) {
            $avg_star = round(($sum_star / $count_vote), 1);
        } else {
            $avg_star = 0;
        }
        $votesData = [
            '5'            => $star_5,
            '4'            => $star_4,
            '3'            => $star_3,
            '2'            => $star_2,
            '1'            => $star_1
        ];

        // Hiển thị bài học
        $questions = Question::with('answers')
            ->where('q_course_id', $courseDetail->id)
            ->orderByDesc('id')
            ->limit(2)
            ->get();

        //3 Hiển thị thông kê
        $votesDashboard = Vote::groupBy('v_number')
            ->where('v_id', $id)
            ->select(\DB::raw('count(v_number) as count_number'), \DB::raw('sum(v_number) as total'))
            ->addSelect('v_number')
            ->get()->toArray();

        $voteDefault = $this->mapRatingDefault();

        foreach ($votesDashboard as $key => $item) {
            $voteDefault[$item['v_number']] = $item;
        }

        $votesDashboard = $voteDefault;
        \SEOMeta::setTitle($courseDetail->c_name);
        \SEOMeta::setDescription($courseDetail->c_description_seo);
        \SEOMeta::setCanonical(\Request::url());
        \OpenGraph::setDescription($courseDetail->c_description_seo);
        \OpenGraph::setTitle($courseDetail->c_title_seo);
        \OpenGraph::setUrl(\Request::url());
        \OpenGraph::addProperty('type', 'articles');
        \OpenGraph::addImage(URL::to('').pare_url_file($courseDetail->c_avatar));

        $viewData = [
            'courses'        => $courses,
            'courseFaq'        => $courseFaq,
            'votes'          => $votes,
            'courseContent'  => $courseContent,
            'votesDashboard' => $votesDashboard,
            'courseDetail'   => $courseDetail,
            'courseVideo'    => $courseVideo,
            'questions'      => $questions,
            'votesData'      => $votesData,
            'count_vote'     => $count_vote,
            'avg_star'       => $avg_star
        ];

        return view('pages.course.index', $viewData);
    }

    private function mapRatingDefault()
    {
        $ratingDefault = [];
        for ($i = 1; $i <= 5; $i++) {
            $ratingDefault[$i] = [
                "count_number" => 0,
                "total"        => 0,
                "v_number"     => 0
            ];
        }

        return $ratingDefault;
    }
    public function showMessagesSuccess($message = 'Bạn đã bình luận thành công')
    {
        return \Session::flash('toastr',[
            'type' => 'success',
            'message' => $message
        ]);
    }
    public function showMessagesError($message = 'Vui lòng kiểm tra lại thông tin')
    {
        return \Session::flash('toastr',[
            'type' => 'error',
            'message' => $message
        ]);
    }
    public function voteComment(Request $request)
    {
        $idVote = Vote::insertGetId([
            'v_user_id' =>  get_data_user('web'),
            'v_id' => $request->rv_id,
            'v_number' => $request->star_vote,
            'v_name' => get_data_user_name('web'),
            'v_content' => $request->rv_content,
            'created_at' => Carbon::now()
        ]);
        if ($idVote) {
            $message = $this->showMessagesSuccess();
            return  $message;
        } 
            $message = $this->showMessagesError();
            return  $message;
       
    }
}
