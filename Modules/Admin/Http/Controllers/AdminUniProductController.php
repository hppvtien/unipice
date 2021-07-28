<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Uni_Product;
use App\Models\Uni_Color;
use App\Models\Uni_LotProduct;
use App\Models\Uni_Size;
use App\Models\Uni_Tag;
use App\Models\Uni_Trade;
use App\Models\Uni_Category;
use App\Models\ProductCategory;
use App\Models\ProductTag;
use App\Models\ProductTrade;
use App\Models\ProductColor;
use App\Models\ProductSize;
use App\Models\ProductLotProduct;
use App\Service\Seo\RenderUrlSeoCourseService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\AdminLotRequest;
use Modules\Admin\Http\Requests\AdminUniProductRequest;

class AdminUniProductController extends AdminController
{
    public function index()
    {
        $uni_product = Uni_Product::orderByDesc('id')->get();
        $uni_color = Uni_Color::orderByDesc('id')->get();
        $uni_lotproduct = Uni_LotProduct::orderByDesc('id')->get();
        $uni_size = Uni_Size::orderByDesc('id')->get();
        $uni_tag = Uni_Tag::orderByDesc('id')->get();
        $uni_trade = Uni_Trade::orderByDesc('id')->get();
        $uni_category = Uni_Category::orderByDesc('id')->get();

        $viewData = [
            'uni_product' => $uni_product,
            'uni_color' => $uni_color,
            'uni_lotproduct'   => $uni_lotproduct,
            'uni_size'       => $uni_size,
            'uni_tag'      => $uni_tag,
            'uni_trade'     => $uni_trade,
            'uni_category'     => $uni_category
        ];
        return view('admin::pages.uni_product.index', $viewData);
    }

    public function create()
    {
        $uni_color = Uni_Color::orderByDesc('id')->get();
        $uni_size = Uni_Size::orderByDesc('id')->get();
        $uni_tag = Uni_Tag::orderByDesc('id')->get();
        $uni_trade = Uni_Trade::orderByDesc('id')->get();
        $uni_category = Uni_Category::orderByDesc('id')->get();
        $tagOld = [];
        $categoryOld = [];
        $tradeOld = [];
        $colorOld = [];
        $sizeOld = [];
        $uni_product = [];

        $viewData = [
            'uni_color' => $uni_color,
            'uni_size'       => $uni_size,
            'uni_tag'      => $uni_tag,
            'uni_trade'     => $uni_trade,
            'tagOld'     => $tagOld,
            'tradeOld'     => $tradeOld,
            'colorOld'     => $colorOld,
            'sizeOld'     => $sizeOld,
            'categoryOld'     => $categoryOld,
            'uni_category'     => $uni_category, 
            'uni_product'     => $uni_product
        ];
    // dd($viewData);
        return view('admin::pages.uni_product.create', $viewData);
    }

    public function store(Request $request)
    {
        $data                 = $request->except(['thumbnail', 'save', '_token', 'tags', 'album']);
        $data['created_at']   = Carbon::now();
        $data['created_by'] = get_data_user('web');

        if ($request->thumbnail) {
                $thumbnail = $this->processUploadFile($request->thumbnail);
        } 
        if ($request->album) {
            $album = [];
            foreach ($request->album as $item) {
                $album[] = $this->processUploadFile($item);
            }
        } else {
            $album = [];
        }
        $param = [
            'name' => $request->name,
            'slug' => $request->slug,
            'desscription' => $request->desscription,
            'content' => $request->content,
            'meta_title' => $request->name,
            'meta_desscription' => $request->desscription,
            'created_at' => Carbon::now(),
            'created_by' => get_data_user('web'),
            'status' => $request->status,
            'is_hot' => $request->is_hot,
            'is_feauture' => $request->is_feauture,
            'order' => $request->order,
            'thumbnail' => $thumbnail,
            'album' => json_encode($album),
            'status' => $request->status,
        ];
        $productID = Uni_Product::insertGetId($param);

        if ($productID) {
            $this->showMessagesSuccess();
            $this->syncTagProduct($productID, $request->tags);
            $this->syncCatProduct($productID, $request->category);
            $this->syncSizeProduct($productID, $request->size);
            $this->syncColorProduct($productID, $request->color);
            $this->syncTradeProduct($productID, $request->trade);
            return redirect()->route('get_admin.uni_product.index');
        }
        $this->showMessagesError();
        return redirect()->back();
    }
    public function edit($id)
    {
        $uni_product     = Uni_Product::findOrFail($id);
        $uni_tag       = Uni_Tag::all();
        $uni_color       = Uni_Color::all();
        $uni_size       = Uni_Size::all();
        $uni_trade       = Uni_Trade::all();
        $uni_category       = Uni_Category::all();

        $tagOld = ProductTag::where('product_id', $id)->pluck('tag_id')->toArray() ?? [];
        $categoryOld = ProductCategory::where('product_id', $id)->pluck('category_id')->toArray() ?? [];
        $tradeOld = ProductTrade::where('product_id', $id)->pluck('trade_id')->toArray() ?? [];
        $colorOld = ProductColor::where('product_id', $id)->pluck('color_id')->toArray() ?? [];
        $sizeOld = ProductSize::where('product_id', $id)->pluck('size_id')->toArray() ?? [];
        $viewData = [
            'uni_product'       => $uni_product,
            'uni_tag'           => $uni_tag,
            'uni_color'         => $uni_color,
            'uni_size'          => $uni_size,
            'uni_trade'         => $uni_trade,
            'uni_category'      => $uni_category,
            'tagOld'            => $tagOld,
            'categoryOld'       => $categoryOld,
            'tradeOld'          => $tradeOld,
            'colorOld'          => $colorOld,
            'sizeOld'           => $sizeOld
        ];
        return view('admin::pages.uni_product.update', $viewData);
    }
    public function update(Request $request, $id)
    {
        
        $uni_product             = Uni_Product::findOrFail($id);
        $product_albumOld = json_decode(Uni_Product::where('id', $id)->pluck('album')->first());
        $data               = $request->except(['thumbnail', 'save', '_token', 'tags', 'album']);
        $data['updated_at'] = Carbon::now();
        $data['updated_by'] = get_data_user('web');
        
        if ($request->album) {
            $album = [];
            foreach ($request->album as $item) {
                $album[] = $this->processUploadFile($item);
            }
        } else {
            $album = [];
        }
        
        if ($request->thumbnail) {
            
            $thumbnail = $request->thumbnail;
            // Storage::delete('public/uploads_product/'.$uni_product->thumbnail);
        
        } else {
            $thumbnail = $uni_product->thumbnail;
        }
        $store_ab = array_merge($product_albumOld, $album);
        $param = [
            'name' => $request->name,
            'slug' => $request->slug,
            'desscription' => $request->desscription,
            'content' => $request->content,
            'meta_title' => $request->name,
            'meta_desscription' => $request->desscription,
            'updated_at' => Carbon::now(),
            'updated_by' => get_data_user('web'),
            'status' => $request->status,
            'is_hot' => $request->is_hot,
            'is_feauture' => $request->is_feauture,
            'order' => $request->order,
            'thumbnail' => $thumbnail,
            'status' => $request->status,
            'album' => json_encode($store_ab),
        ];
        // dd($param);
        $uni_product->fill($param)->save();
        $this->syncTagProduct($id, $request->tags);
        $this->syncCatProduct($id, $request->category);
        $this->syncSizeProduct($id, $request->size);
        $this->syncColorProduct($id, $request->color);
        $this->syncTradeProduct($id, $request->trade);

        // RenderUrlSeoCourseService::update($request->c_slug, SeoEdutcation::TYPE_COURSE, $id);
        $this->showMessagesSuccess();
        return redirect()->route('get_admin.uni_product.index');
    }
    public function importview($id)
    {
        $uni_lotproduct     = Uni_LotProduct::where('product_id',$id)->get();
        $viewData = [
            'uni_lotproduct'       => $uni_lotproduct,
        ];
        return view('admin::pages.uni_product.import', $viewData);
    }
    public function import(AdminLotRequest $request, $id)
    {
        $uni_product             = Uni_Product::findOrFail($id);
        $data               = $request->except(['save', '_token']);
        $qty_import = (int)$request->qty;
        $qty_product = 0;
        if($uni_product->qty == 0){
            $qty_product += $qty_import;
        } else {
            $qty_product = $uni_product->qty + $qty_import;
        };
        
        if($request->lotproduct_id){
            $param = [
                'qty' => $qty_product,
                'price' => $request->price,
                'price_sale' => $request->price_sale,
                'price_sale_store' => $request->price_sale_store,
            ];
        } else {
            $this->showMessagesError();
        }
        $uni_product->fill($param)->save();
        $uni_lotproduct     = Uni_LotProduct::findOrFail($request->lotproduct_id);
        $param_lotproduct = [
            'qty' => $uni_lotproduct->qty - $qty_import
        ];
        $uni_lotproduct->fill($param_lotproduct)->save();
        $this->syncLotProduct($id, $request->lotproduct_id, $request->qty, $request->price);

        $this->showMessagesSuccess();
        return redirect()->route('get_admin.uni_product.index');
    }
    protected function syncLotProduct($productID, $lot_product, $product_qty, $price_lotproduct)
    {
        if (!empty($lot_product)) {
                ProductLotProduct::insert([
                    'product_id' => $productID,
                    'lotproduct_id'    => $lot_product,
                    'inventory'    => $product_qty,
                    'price_lotproduct'    => $price_lotproduct,
                    'created_at'    => Carbon::now()
                ]);
        
        }
    }
    protected function syncTagProduct($productID, $tags)
    {
        if (!empty($tags)) {
            \DB::table('product_tag')->where('product_id', $productID)->delete();
            foreach ($tags as $item) {
                ProductTag::insert([
                    'product_id' => $productID,
                    'tag_id'    => $item
                ]);
            }
        }
    }
    protected function syncCatProduct($productID, $category)
    {
        if (!empty($category)) {
            \DB::table('product_category')->where('product_id', $productID)->delete();
            foreach ($category as $item) {
                ProductCategory::insert([
                    'product_id' => $productID,
                    'category_id'    => $item
                ]);
            }
        }
    }
    protected function syncSizeProduct($productID, $size)
    {
        if (!empty($size)) {
            \DB::table('product_size')->where('product_id', $productID)->delete();
            foreach ($size as $item) {
                ProductSize::insert([
                    'product_id' => $productID,
                    'size_id'    => $item
                ]);
            }
        }
    }
    protected function syncColorProduct($productID, $color)
    {
        if (!empty($color)) {
            \DB::table('product_color')->where('product_id', $productID)->delete();
            foreach ($color as $item) {
                ProductColor::insert([
                    'product_id' => $productID,
                    'color_id'    => $item
                ]);
            }
        }
    }
    protected function syncTradeProduct($productID, $trade)
    {
        if (!empty($trade)) {
            \DB::table('product_trade')->where('product_id', $productID)->delete();
            foreach ($trade as $item) {
                ProductTrade::insert([
                    'product_id' => $productID,
                    'trade_id'    => $item
                ]);
            }
        }
    }
    public function delete_album(Request $request)
    {
        $product = Uni_Product::findOrFail($request->data_id);
        $uni_product = Uni_Product::where('id', $request->data_id)->pluck('album')->first();
        $album_product = json_decode($uni_product);
        if (in_array($request->name_img, $album_product)) {
            $album_product = \array_diff($album_product, [$request->name_img]);
            
            Storage::delete('public/uploads_product/' . $request->name_img);
            array_multisort($album_product);
            $param['album'] = json_encode($album_product);
            
            $product->fill($param)->save();
        }
        return response()->json([
            'status'  => 200,
            'message' => 'Xoá dữ liệu thành công'
        ]);
    }
    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $product = Uni_Product::findOrFail($id);
            $uni_product = Uni_Product::where('id', $id)->pluck('album')->first();
         
            if ($product) {
                if($uni_product){
                    foreach(json_decode($uni_product) as $item){
                        Storage::delete('public/uploads_product/'.$item);
                    }
                }
                
                Storage::delete('public/uploads_product/'.$product->thumbnail);
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
            $path = public_path() . '/storage/uploads_Product/';

            if (!\File::exists($path)) mkdir($path, 0777, true);

            $fileName->move($path, $filename);

            return  $filename;
        } catch (\Exception $exception) {
            Log::error("[processUploadFile] :" . $exception->getMessage());
        }

        return  null;
    }
}
