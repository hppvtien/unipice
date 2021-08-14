<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Content_Page;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Modules\Admin\Http\Requests\AdminPageRequest;

class AdminContentPageController extends AdminController
{
    public function create($id)
    {
      
        return view('admin::pages.content_page.create');
    }

    public function store(Request $request, $id)
    {
       
        $data = $request->except(['avatar', 'save', '_token','thumbnail','album','delete_thumbnail','content']);
        $data['page_id'] = $id;
        $data['content'] = $request->content;
        if ($request->thumbnail) {
            $data['thumbnail'] = $this->processUploadFile($request->thumbnail);
        } 
        $pageID = Content_Page::insertGetId($data);
        if ($pageID) {
            $this->showMessagesSuccess();
            return redirect()->route('get_admin.page.index');
        }
        $this->showMessagesError();
        return redirect()->back();
    }


    public function edit($id)
    {
        $content_pages = Content_Page::find($id);
        return view('admin::pages.page.update', compact('content_pages'));
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

    public function processUploadFile($fileName)
    {
        try {
            $ext = $fileName->getClientOriginalExtension();

            $extension = [
                'jpg', 'png', 'jpeg'
            ];
            $time_img =  Carbon::now();
            if (!in_array($ext, $extension)) return false;

            $filename = str_replace($ext, '', $fileName->getClientOriginalName());
            $filename = Str::slug($filename) . '-' . $time_img->getTimestamp() . '.' . $ext;
            $path = public_path() . '/storage/uploads_album/';

            if (!\File::exists($path)) mkdir($path, 0777, true);

            $fileName->move($path, $filename);

            return  $filename;
        } catch (\Exception $exception) {
            Log::error("[processUploadFile] :" . $exception->getMessage());
        }

        return  null;
    }
}
