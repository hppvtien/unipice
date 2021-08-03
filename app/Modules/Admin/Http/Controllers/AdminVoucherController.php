<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Admin\Http\Requests\AdminVoucherRequest;

class AdminVoucherController extends AdminController
{
    public function index()
    {
        $vouchers = Voucher::get();
        $viewData = [
            'vouchers' => $vouchers
        ];
        return view('admin::pages.voucher.index', $viewData);
    }

    public function generate_code($input = "0123456789abcdefghiklmnopqrsuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", $strength = 10)
    {
        $input_length = strlen($input);
        $random_string = '';
        for ($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
        return $random_string;
    }
    public function create()
    {

        return view('admin::pages.voucher.create');
    }

    public function store(AdminVoucherRequest $request)
    {
        $data = $request->except(['save', '_token']);
        $data['created_at'] = Carbon::now();
        $voucherID = Voucher::insertGetId($data);
        if ($voucherID) {
            $this->showMessagesSuccess();
            return redirect()->route('get_admin.voucher.index');
        }
        $this->showMessagesError();
        return redirect()->back();
    }


    public function edit($id)
    {
        $voucher = Voucher::find($id);
        return view('admin::pages.voucher.update', compact('voucher'));
    }

    public function update(AdminVoucherRequest $request, $id)
    {
        $voucher = Voucher::find($id);
        $data = $request->except(['save', '_token']);
        $data['updated_at'] = Carbon::now();
        $voucher->fill($data)->save();

        $this->showMessagesSuccess();
        return redirect()->route('get_admin.voucher.index');
    }

    public function delete($id, AdminVoucherRequest $request)
    {
        if ($request->ajax()) {
            $voucher = Voucher::find($id);
            if ($voucher){
                $voucher->delete();
            } 
            return response()->json([
                'status' => 200,
                'message' => 'Xoá dữ liệu thành công'
            ]);
        }

        return redirect()->to('/');
    }
}
