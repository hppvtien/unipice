<?php

namespace Modules\Admin\Http\Controllers\Cart;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Cart\Uni_Order_Nap;
use Modules\Admin\Http\Controllers\AdminController;
use Mail;
use App\Mail\EmailOrderSpiceClub;
use App\Mail\EmailOrderSpiceClubError;
use Carbon\Carbon;
class AdminOrderSpiceClubController extends AdminController
{

    public function index()
    {
    $uni_order = Uni_Order_Nap::with('user:id,name,email')->where('status', '!=', 3)->orderByDesc('id')->paginate(20);
    $viewData = [
        'uni_order' => $uni_order
    ];
    return view('admin::pages.uni_nap_spice_club.index', $viewData);
    }
    public function trash()
    {
        $uni_order = Uni_Order_Nap::with('user:id,name,email')->where('status', 3)->orderByDesc('id')->paginate(20);
        $viewData = [
            'uni_order' => $uni_order
        ];
        return view('admin::pages.uni_nap_spice_club.trash', $viewData);
    }
    public function movetrash($id)
    {
        $uni_order = Uni_Order_Nap::findOrFail($id);
        $data['status'] = 3;
        $uni_order->fill($data)->update();
        $this->showMessagesSuccess('Cập nhật thành công');
        return redirect()->back();
    }
    public function edit($id, Request $request)
    {
        $uni_order = Uni_Order_Nap::findOrFail($id);
        $statuss = Uni_Order_Nap::getStatusGlobal();
        $viewData = [
            'uni_order' => $uni_order,
            'statuss' => $statuss
        ];
        return view('admin::pages.uni_nap_spice_club.update', $viewData);
    }

    public function update(Request $request, $id)
    {
        $uni_order_sc = Uni_Order_Nap::findOrFail($id);
        $data['status'] = $request->status;
        // if( $uni_order_sc->end_year == NULL){
        //     if( $request->status == 2){
        //         if( $uni_order_sc->price_nap == 500000){
        //         $data['end_year'] = Carbon::now()->subYear(-1);
        //         }else if($uni_order_sc->price_nap == 1000000){
        //         $data['end_year'] = Carbon::now()->subYear(-2);
        //         }else if($uni_order_sc->price_nap == 1500000){
        //         $data['end_year'] = Carbon::now()->subYear(-3);
        //         }else if($uni_order_sc->price_nap == 2000000){
        //         $data['end_year'] = Carbon::now()->subYear(-4);
        //         }
        //     }else{
        //     $data['end_year'] = NULL;
        //     }
        // }
        $uni_order_sc->fill($data)->update();
        if( $uni_order_sc->status == 2){
        Mail::to($uni_order_sc['email'])->send(new EmailOrderSpiceClub($uni_order_sc));
        }
        if( $uni_order_sc->status == 3){
        Mail::to($uni_order_sc['email'])->send(new EmailOrderSpiceClubError($uni_order_sc));
        }
        $this->showMessagesSuccess('Cập nhật thành công');
        return redirect()->back();
    }

   
}
