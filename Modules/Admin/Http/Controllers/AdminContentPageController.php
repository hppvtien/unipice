<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Content_Page;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Requests\AdminPageRequest;

class AdminContentPageController extends AdminController
{
    public function create($id)
    {
      
        return view('admin::pages.content_page.create');
    }

    public function store(Request $request, $id)
    {
       
        $data = $request->except(['avatar', 'save', '_token','thumbnail','content','name','desscription']);
        $data['page_id'] = $id;
        $data['name'] = $request->name;
        $data['desscription'] = $request->desscription;
        $data['content'] = $request->content;
        $data['thumbnail'] = $request->thumbnail;
        $pageID = Content_Page::insertGetId($data);
        if ($pageID) {
            $this->showMessagesSuccess();
            return redirect()->route('get_admin.page.edit',$id);
        }
        $this->showMessagesError();
        return redirect()->back();
    }


    public function edit($id)
    {
        $content_pages = Content_Page::find($id);
        return view('admin::pages.content_page.update', compact('content_pages'));
    }

    public function update(Request $request, $id)
    {
        $content_page = Content_Page::find($id);
        $data = $request->except(['avatar', 'save', '_token','thumbnail','content']);
        $data['name'] = $request->name;
        $data['desscription'] = $request->desscription;
        $data['content'] = $request->content;
        $data['updated_at'] = Carbon::now();
        if($request->thumbnail){
            Storage::delete('public/uploads/'.$content_page->thumbnail);
            $data['thumbnail'] = $request->thumbnail;
        } else{
            $data['thumbnail'] = $content_page->thumbnail;
        }
        $content_page->fill($data)->save();

        $this->showMessagesSuccess();
        return redirect()->route('get_admin.page.edit',$content_page->page_id);
    }

    public function delete($id, Request $request)
    {
        if ($request->ajax()) {
            $content_page = Content_Page::find($id);
            if ($content_page){
                Storage::delete('public/uploads/'.$content_page->thumbnail);
                $content_page->delete();
            } 
            return response()->json([
                'status' => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }

        return redirect()->to('/');
    }

    
}
