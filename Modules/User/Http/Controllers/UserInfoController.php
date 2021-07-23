<?php

namespace Modules\User\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Routing\Controller;
use App\Http\Controllers\Controller;
class UserInfoController extends Controller
{

    public function edit($id)
    {
        $viewData = [
            'id' => $id
        ];
        return view('user::pages.info.update', $viewData);
    }
    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        User::find($id)->update($data);
        return redirect()->back();
    }

    public function storeedit($id)
    {
        $viewData = [
            'id' => $id
        ];
        return view('user::pages.info.store', $viewData);
    }
    public function storeupdate(Request $request, $id)
    {
        
    }
}
