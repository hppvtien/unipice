<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Freebook;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Modules\Admin\Http\Requests\AdminFreebookRequest;

class AdminFreeBookController extends AdminController
{
    public function index()
    {
        $freebook = Freebook::orderByDesc('id')
            ->paginate(20);

        $viewData = [
            'freebook' => $freebook
        ];
        return view('admin::pages.free_book.index', $viewData);
    }

    public function create()
    {
        return view('admin::pages.free_book.create');
    }

    public function store(AdminFreeBookRequest $request)
    {
        dd($request->all());
        $data = $request->except(['save', '_token', 'file_fb', 'avatar', 'd_avatar']);
        $data['created_at'] = Carbon::now();
        if ($file_fb = $request->file_fb) {
            $file_fb = $this->processUploadFile($file_fb);
        }
       
        if (isset($file_fb) && $file_fb) $data['file_fb'] = $file_fb;

        $freebookID = Freebook::insertGetId($data);
        if ($freebookID) {
            $this->showMessagesSuccess();
            return redirect()->route('get_admin.free_book.index');
        }
        $this->showMessagesError();
        return  redirect()->back();
    }

    public function edit($id)
    {
        $freebook = Freebook::findOrFail($id);
        $viewData = [
            'id' => $id,
            'freebook' => $freebook
        ];

        return view('admin::pages.free_book.update', $viewData);
    }

    public function update(AdminFreeBookRequest $request, $id)
    {
        $freebook = Freebook::findOrFail($id);       
        $data = $request->except(['avatar', 'save', '_token', 'file_fb', 'd_avatar']);
        $data['updated_at'] = Carbon::now();
        if ($request->file_fb) {
            Storage::delete('public/uploads_Ebook/'.$freebook->file_fb);
            if ($file_fb = $request->file_fb) {
                $file_fb = $this->processUploadFile($file_fb);
            }
            if (isset($file_fb) && $file_fb) $data['file_fb'] = $file_fb;
        }
        if ($request->f_avatar){
            Storage::delete('public/uploads/'.$request->d_avatar);    
            $data['f_avatar'] = $request->f_avatar;
        } elseif (!$request->f_avatar) {
            $data['f_avatar'] = $request->d_avatar;         
        }
        $freebook->fill($data)->update();
        $this->showMessagesSuccess();
        return redirect()->route('get_admin.free_book.index');

    }

    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $freebook = Freebook::findOrFail($id);

            if ($freebook) {
                Storage::delete('public/uploads_Ebook/'.$freebook->file_fb);
                Storage::delete('public/uploads/'.$freebook->f_avatar);
                $freebook->delete();
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
                'pdf'
            ];
            $time_img =  Carbon::now();
            if (!in_array($ext, $extension)) return false;

            $filename = str_replace($ext, '', $fileName->getClientOriginalName());
            $filename = Str::slug($filename) . '-' . $time_img->getTimestamp() . '.' . $ext;
            $path = public_path() . '/storage/uploads_Ebook/';

            if (!\File::exists($path)) mkdir($path, 0777, true);

            $fileName->move($path, $filename);

            return  $filename;
        } catch (\Exception $exception) {
            Log::error("[processUploadFile] :" . $exception->getMessage());
        }

        return  null;
    }
}
