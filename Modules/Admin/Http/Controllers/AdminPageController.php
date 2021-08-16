<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Page;
use App\Models\Content_Page;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Modules\Admin\Http\Requests\AdminPageRequest;

class AdminPageController extends AdminController
{

    public function index()
    {
        $pages = Page::get();

        $viewData = [
            'pages' => $pages
        ];
        return view('admin::pages.page.index', $viewData);
    }

    public function create()
    {
   
        return view('admin::pages.page.create');
    }

    public function store(AdminPageRequest $request)
    {
        $data = $request->except(['avatar', 'save', '_token','p_banner']);
        $data['created_at'] = Carbon::now();

        $pageID = Page::insertGetId($data);
        if ($pageID) {
            $this->showMessagesSuccess();
            return redirect()->route('get_admin.page.index');
        }
        $this->showMessagesError();
        return redirect()->back();
    }


    public function edit($id)
    {
        $pages = Page::find($id);
        $content_pages = Content_Page::where('page_id', $id)->get();
        $viewData = [
            'pages' => $pages,
            'content_pages' => $content_pages
        ];
        return view('admin::pages.page.update', $viewData);
    }

    public function update(AdminPageRequest $request, $id)
    {
        $page = Page::find($id);
        $data = $request->except(['avatar','p_banner', 'save', '_token']);
        $data['updated_at'] = Carbon::now();
        if($request->p_banner){
            Storage::delete('public/uploads/'.$page->p_banner);
            $data['p_banner'] = $request->p_banner;
        } else{
            $data['p_banner'] = $page->p_banner;
        }
        $page->fill($data)->save();

        $this->showMessagesSuccess();
        return redirect()->route('get_admin.page.index');
    }

    public function delete($id, Request $request)
    {
        if ($request->ajax()) {
            $page = Page::find($id);
            if ($page){
                Storage::delete('public/uploads/'.$page->p_banner);
                $page->delete();
            } 
            return response()->json([
                'status' => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }

        return redirect()->to('/');
    }
}
