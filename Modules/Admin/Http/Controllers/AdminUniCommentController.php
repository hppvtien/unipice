<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Uni_Comment;
use App\Models\Blog\SeoBlog;
use App\Service\Seo\RenderUrlSeoBLogService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Requests\AdminUniColorRequest;

class AdminUniCommentController extends AdminController
{
    public function index()
    {
        $uni_comment = Uni_Comment::where('type','question')->orderByDesc('id')
            ->paginate(20);

        $viewData = [
            'uni_comment' => $uni_comment
        ];
        return view('admin::pages.uni_comment.index', $viewData);
    }
    public function index_rv()
    {
        $uni_comment = Uni_Comment::where('type','review')->orderByDesc('id')
            ->paginate(20);

        $viewData = [
            'uni_comment' => $uni_comment
        ];
        return view('admin::pages.uni_comment.index_rv', $viewData);
    }

    
    public function edit($id)
    {
        $uni_comment = Uni_Comment::findOrFail($id);
        return view('admin::pages.uni_comment.update',compact('uni_comment'));
    }

    public function update(Request $request, $id)
    {
        $uni_comment = Uni_Comment::findOrFail($id);
        $data['updated_at'] = Carbon::now();

        $data['status'] = $request->status;
        $data['noi_dung_answer'] = $request->noi_dung_answer;

        $uni_comment->fill($data)->save();
        $this->showMessagesSuccess();
        return redirect()->route('get_admin.uni_comment.index');
    }
    public function editRv(Request $request)
    {
        $id = $request->v_id;
        $vote = Uni_Comment::where('id', $id)->first();
        $vote->status = $vote->status == 1 ? 0 : 1;    
        $vote->save();
    }

    public function delete(Request $request, $id)
    {
        if($request->ajax())
        {
            $uni_comment = Uni_Comment::findOrFail($id);
            if ($uni_comment)
            {
                $uni_comment->delete();
            }
            return response()->json([
                'status' => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }

        return redirect()->to('/');
    }
}
