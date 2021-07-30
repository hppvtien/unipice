<?php

namespace Modules\Admin\Http\Controllers\Ajax;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class AdminAjaxUploadImageController extends Controller
{
    public function processUpload(Request $request)
    {
       try{
           $fileName = $request->avatar;
           $ext = $fileName->getClientOriginalExtension();

           $extension = [
               'png','jpg','jpeg'
           ];

           if(!in_array($ext, $extension)) return false;

           $filename = str_replace($ext,'',$fileName->getClientOriginalName());
           $filename =  Str::slug($filename).'-'.Carbon::now()->getTimestamp(). '.'.$ext;
           $path = public_path().'/storage/uploads/';        
           if(!\File::exists($path)) mkdir($path,0777, true);

           $fileName->move($path, $filename);

           return  $filename;
       }catch (\Exception $exception)
       {
           Log::error("[processUpload] :". $exception->getMessage());
       }

       return  false;
    }
}
