<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Uni_FlashSale;
use App\Service\Seo\RenderUrlSeoCourseService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
// use Modules\Admin\Http\Requests\AdminCourseRequest;

class AdminUniFlashSaleController extends AdminController
{
    public function index()
    {
        $uni_flashsale = Uni_FlashSale::orderByDesc('id')->get();
        $viewData = [
            'uni_flashsale' => $uni_flashsale
        ];
        return view('admin::pages.uni_flashsale.index', $viewData);
    }

    public function create()
    {
        $uni_flashsale = [];
        return view('admin::pages.uni_flashsale.create', compact('uni_flashsale'));
    }

    public function store(Request $request)
    {
        $data                 = $request->except(['store_thumbnail', 'save', '_token', 'store_album']);
        $data['created_at']   = Carbon::now();

        if ($request->store_album) {
            $store_album = [];
            foreach ($request->store_album as $item) {
                $store_album[] = $this->processUploadFile($item);
            }
        } else {
            $store_album = [];
        }
        $param = [
            'store_name' => $request->store_name,
            'created_at' => Carbon::now(),
            'user_id' => get_data_user('web'),
            'store_area' => $request->store_area,
            'store_address' => $request->store_address,
            'store_phone' => $request->store_phone,
            'store_thumbnail' => $request->store_thumbnail,
            'store_taxcode' => $request->store_taxcode,
            'store_album' => json_encode($store_album),
            'store_status' => $request->store_status,
        ];
        $storeID = Uni_FlashSale::insertGetId($param);

        if ($storeID) {
            $this->showMessagesSuccess();
            return redirect()->route('get_admin.uni_flashsale.index');
        }
        $this->showMessagesError();
        return redirect()->back();
    }
    public function edit($id)
    {
        $uni_flashsale     = Uni_FlashSale::findOrFail($id);
        $viewData = [
            'uni_flashsale'       => $uni_flashsale
        ];
        return view('admin::pages.uni_flashsale.update', $viewData);
    }
    public function update(Request $request, $id)
    {
        if ($request) {
            $uni_flashsale             = Uni_FlashSale::findOrFail($id);
            $store_albumOld = json_decode(Uni_FlashSale::where('id', $id)->pluck('store_album')->first());

            $data               = $request->except(['store_thumbnail', 'save', '_token', 'store_album']);
            $data['updated_at'] = Carbon::now();
            $data['created_by'] = get_data_user('web');
            if ($request->store_album) {
                $store_album = [];
                foreach ($request->store_album as $item) {
                    $store_album[] = $this->processUploadFile($item);
                }
            } else {
                $store_album = [];
            }

            $store_ab = array_merge($store_albumOld, $store_album);
            // dd($store_albumOld);
            // dd($store_ab);
            if ($request->store_thumbnail) {
                Storage::delete('public/uploads/' . $uni_flashsale->store_thumbnail);
                $store_thumbnail = $request->store_thumbnail;
            } else {
                $store_thumbnail = $request->store_thumbnail;
            }

            $param = [
                'store_name' => $request->store_name,
                'created_at' => Carbon::now(),
                'user_id' => $data['created_by'],
                'store_area' => $request->store_area,
                'store_address' => $request->store_address,
                'store_phone' => $request->store_phone,
                'store_thumbnail' => $store_thumbnail,
                'store_taxcode' => $request->store_taxcode,
                'store_album' => json_encode($store_ab),
                'store_status' => $request->store_status,
            ];
            // dd($param);
            $uni_flashsale->fill($param)->save();

            // RenderUrlSeoCourseService::update($request->c_slug, SeoEdutcation::TYPE_COURSE, $id);
            $this->showMessagesSuccess();
            return redirect()->route('get_admin.uni_flashsale.index');
        }
    }


    public function delete_album(Request $request)
    {
        $store = Uni_FlashSale::findOrFail($request->data_id);
        $uni_flashsale = Uni_FlashSale::where('id', $request->data_id)->pluck('store_album')->first();
        $store_album = json_decode($uni_flashsale);

        if (in_array($request->name_img, $store_album)) {
            $store_album = \array_diff($store_album, [$request->name_img]);
            Storage::delete('public/uploads_store/' . $request->name_img);
            array_multisort($store_album);
            $param['store_album'] = json_encode($store_album);
            $store->fill($param)->save();
        }
        return response()->json([
            'status'  => 200,
            'message' => 'Xoá dữ liệu thành công'
        ]);
    }
    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $product = Uni_FlashSale::findOrFail($id);
            $uni_product = Uni_FlashSale::where('id', $id)->pluck('album')->first();

            if ($product) {
                if ($uni_product) {
                    foreach (json_decode($uni_product) as $item) {
                        Storage::delete('public/uploads_product/' . $item);
                    }
                }

                Storage::delete('public/uploads_product/' . $product->thumbnail);
                $product->delete();
                ProductTag::where('product_id', $id)->delete();
                ProductCategory::where('product_id', $id)->delete();
                ProductTrade::where('product_id', $id)->delete();
                ProductColor::where('product_id', $id)->delete();
                ProductSize::where('product_id', $id)->delete();
            }
            return response()->json([
                'status'  => 200,
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
            $path = public_path() . '/storage/uploads_Store/';

            if (!\File::exists($path)) mkdir($path, 0777, true);

            $fileName->move($path, $filename);

            return  $filename;
        } catch (\Exception $exception) {
            Log::error("[processUploadFile] :" . $exception->getMessage());
        }

        return  null;
    }
}
