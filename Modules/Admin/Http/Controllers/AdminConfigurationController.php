<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Configuration;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
class AdminConfigurationController extends AdminController
{
    public function index(Request $request)
    {
        $configuration = Configuration::first();
        if (!$configuration) $configuration = new Configuration();

        $viewData = [
            'configuration' => $configuration
        ];

        return view('admin::pages.configuration.index', $viewData);
    }
 
    public function store(Request $request)
    {
        $configuration = Configuration::first();
        $data = $request->except(['_token', 'save', 'email','avatar','d_avatar']);
        if($request->logo){
            Storage::delete('public/uploads/'.$request->d_avatar);
            $data['logo'] = $request->logo;
        } else{
            $data['logo'] = $configuration->logo;
        }
        $data['email'] = $request->email;
        $configuration->fill($data)->update();
        $this->showMessagesSuccess('Cập nhật thành công');
  
        return redirect()->back();
    }
}
