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
        // dd($request);
        try {
            $configuration = Configuration::firstOrNew(['email' => $request->email]);
            $data = $request->except(['_token', 'save', 'email','avatar','d_avatar']);
            if($request->logo){
                Storage::delete('public/uploads/'.$request->d_avatar);
                $data['logo'] = $request->logo;
            } else{
                $data['logo'] = $configuration->logo;
            }
            // dd($data['logo']);
            // $configuration->fill($request->except(['_token', 'save', 'email','avatar','d_avatar']))->save();
            $configuration->fill($data)->update();
            $this->showMessagesSuccess('Cập nhật thành công');
        } catch (\Exception $exception) {
            $this->showMessagesError('Cập nhật thất bại');
            Log::error($exception->getMessage());
        }
        return redirect()->back();
    }
}
