<?php

namespace Modules\Admin\Http\Controllers\Cart;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Cart\Uni_Order_Nap;
use Modules\Admin\Http\Controllers\AdminController;
use Mail;
use App\Mail\EmailOrderSpiceClub;
use Carbon\Carbon;
class AdminOrderSpiceClubController extends AdminController
{

    public function index()
    {
    $uni_order = Uni_Order_Nap::with('user:id,name,email')->where('status', '!=', 4)->orderByDesc('id')->paginate(20);
    $viewData = [
        'uni_order' => $uni_order
    ];
    return view('admin::pages.uni_nap_spice_club.index', $viewData);
    }
    public function trash()
    {
        $uni_order = Uni_Order_Nap::with('user:id,name,email')->where('status', 4)->orderByDesc('id')->paginate(20);
        $viewData = [
            'uni_order' => $uni_order
        ];
        return view('admin::pages.uni_nap_spice_club.trash', $viewData);
    }
    public function movetrash($id)
    {
        $uni_order = Uni_Order_Nap::findOrFail($id);
        $data['status'] = 4;
        $uni_order->fill($data)->update();
        $this->showMessagesSuccess('Cập nhật thành công');
        return redirect()->back();
    }
    public function edit($id, Request $request)
    {
        $uni_order = Uni_Order_Nap::findOrFail($id);
        $status = Uni_Order_Nap::getStatusGlobal();
        $viewData = [
            'uni_order' => $uni_order,
            'status' => $status
        ];
        return view('admin::pages.uni_nap_spice_club.update', $viewData);
    }

    public function update(Request $request, $id)
    {
        $uni_order_sc = Uni_Order_Nap::findOrFail($id);
        $data['status'] = $request->status;
        if( $uni_order_sc->end_year == NULL){
            if( $request->status == 2){
                $data['end_year'] = Carbon::now()->subYear(-1);
                Mail::to($uni_order_sc['email'])->send(new EmailOrderSpiceClub($uni_order_sc));
                
            }else{
            $data['end_year'] = NULL;
            }
        }
        $uni_order_sc->fill($data)->update();
        $this->showMessagesSuccess('Cập nhật thành công');
        return redirect()->back();
    }

   
}
