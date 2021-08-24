<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\BankInfo;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
class AdminBankInfoController extends AdminController
{
    public function index()
    {
        $bank_info = BankInfo::get();
        $viewData = [
            'bank_info' => $bank_info
        ];
        return view('admin::pages.bank_info.index', $viewData);
    }
    public function store()
    {
        return view('admin::pages.bank_info.create');
    }
    public function create(Request $request)
    {
        $data = $request->except(['save','_token']);
        $data['created_at'] = Carbon::now();
        $bankID = BankInfo::insertGetId($data);
        if($bankID)
        {
            $this->showMessagesSuccess();
            return redirect()->route('get_admin.bank_info.index');
        }
        $this->showMessagesError();
        return  redirect()->back();
    }
    public function edit($id)
    {
        $bank_info = BankInfo::find($id);
        $viewData = [
            'bank_info' => $bank_info,
        ];
        return view('admin::pages.bank_info.update', $viewData);
    }

    public function update(Request $request, $id)
    {
        $bank_info = BankInfo::find($id);
        $data = $request->except(['save', '_token']);
        $data['updated_at'] = Carbon::now();
        $bank_info->fill($data)->save();
        $this->showMessagesSuccess();
        return redirect()->route('get_admin.bank_info.index');
    }
    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $bank_info = BankInfo::find($id);
            if ($bank_info) {
                
                BankInfo::where('id', $id)->delete();
                $bank_info->delete();
            }
            return response()->json([
                'status' => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }
        return redirect()->to('/');
    }
}
