<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Routing\Route;
use phpDocumentor\Reflection\Types\Null_;

require_once  'file.php';
require_once  'guest.php';
function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data)
            )
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }

    /**
     * Show the form for editing the specified resource.
     * @param string $tring
     * @param int $sub
     * @return string $description
     */
    function desscription_cut($tring,$sub)
    {
        $string_cut = substr($tring,0,$sub);
        $description_string = $string_cut;
        return $description_string;
    }
       /**
     * get slug category.
     * @param string $tring
     * @return string $slug
     */
    function getSlugCategory($tring)
    {
        $getSlug = '/san-pham/'.$tring.'.html';
        return $getSlug;
    }
    /**
     * get size name.
     * @param int $weight
     * @return string name type
     */
    function getSizeNameType($weight)
    {
        $sizeNameType = App\Models\Uni_Size::where('id',$weight)->pluck('type_size')->first();
        return $sizeNameType;
    }
    /**
     * get slug product by ID.
     * @param int $id
     * @return string $slug
     */
    function getProductById($id)
    {
        $slug_product = App\Models\Uni_Product::where('id',$id)->pluck('slug')->first();
        $getSlug = '/san-pham/'.$slug_product;
        return $getSlug;
    }
       /**
     * get slug product.
     * @param string $tring
     * @return string $slug
     */
    function getSlugTrade($tring)
    {
        $getSlug = '/thuong-hieu/'.$tring.'.html';
        return $getSlug;
    }
       /**
     * get slug product.
     * @param string $tring
     * @return string $slug
     */
    function getSlugProduct($tring)
    {
        $getSlug = '/san-pham/'.$tring;
        return $getSlug;
    }
        /**
     * get slug post.
     * @param string $tring
     * @return string $slug
     */
    function getSlugPost($tring)
    {
        $getSlug = '/bai-viet/'.$tring;
        return $getSlug;
    }
        /**
     * get slug category post.
     * @param string $tring
     * @return string $slug
     */
    function getSlugPostCate($tring)
    {
        $getSlug = '/danh-muc-bai-viet/'.$tring;
        return $getSlug;
    }
        /**
     * get slug Single flashsale.
     * @param string $tring
     * @return string $slug
     */
    function getSlugFlashSale($tring)
    {
        $getSlug = '/khuyen-mai/'.$tring;
        return $getSlug;
    }
        /**
     * get Name Product.
     * @param string $tring
     * @return string $slug
     */
    function getNameProduct($id)
    {
        $name_peoduct = App\Models\Uni_Product::where('id',$id)->pluck('name')->first();
        return $name_peoduct;
    }
        /**
     * get Thumb Product.
     * @param string $tring
     * @return string $slug
     */
    function getThumbProduct($id)
    {
        $thumb_product = App\Models\Uni_Product::where('id',$id)->pluck('thumbnail')->first();
        return $thumb_product;
    }
        /**
     * get Thumb Product.
     * @param int $id
     * @return string $slug
     */
    function getSlugProductById($id)
    {
        $slug_product = App\Models\Uni_Product::where('id',$id)->pluck('slug')->first();
        return $slug_product;
    }
   
        /**
     * get type store.
     * @param int $id
     * @return string $type_store kim cuong
     */
    function getTypeStore($id)
    {
        $type_store = App\Models\Uni_Store::where('user_id',$id)->pluck('type_store')->first();
        return $type_store;
    }
   
        /**
     * get type store.
     * @param int $id
     * @return float $poin_store 11.222
     */
    function getPoinStore($id)
    {
        $poin_store = App\Models\Uni_Store::where('user_id',$id)->pluck('poin_store')->first();
        return $poin_store;
    }
        /**
     * get price.
     * @param int $id
     * @return float $price 11.222
     */
    function getPriceById($id)
    {
        $price_view = App\Models\Product_Size::where('id',$id)->pluck('price')->first();
        return $price_view;
    }
        /**
     * get price.
     * @param int $pricesale,$price
     * @return float $price_view 11.222
     */
    function getptSale($price,$pricesale)
    {
        if($price==null || $pricesale==null){
            $price_view =  0;
        } else {
            $price_view =  100-round($pricesale*100/$price);
        }
        
        return $price_view;
    }
        /**
     * get price.
     * @param int $id
     * @return float $string[]
     */
    function getDataStore($id)
    {
        $data_store = App\Models\Uni_Store::where('user_id',$id)->first();
        return $data_store;
    }
            /**
     * get price.
     * @param int $day
     * @return float $string[]
     */
    function countOrder($day)
    {
        
        $order_Isday = App\Models\Cart\Uni_Order::whereBetween('created_at',[date_format(Carbon\Carbon::now()->subDays($day),'Y-m-d'. ' 00:00:00'), date_format(Carbon\Carbon::now()->subDays($day),'Y-m-d'.' 23:59:59')])->get();
        $numb_order = count($order_Isday);
        return $numb_order;
    }
/**
     * get price.
     * @param int $status
     * @return int $numb_order
     */
    function alertCountOrder($status = 0)
    {
        $order_Isday = App\Models\Cart\Uni_Order::where('status',$status)->get();
        $numb_order = count($order_Isday);
        return $numb_order;
    }
    /**
     * get price.
     * @param int $status
     * @return int $numb_order_nap
     */
    function alertCountOrderNap($status = 0)
    {
        $order_Isday = App\Models\Cart\Uni_Order_Nap::where('status',$status)->get();
        $numb_order = count($order_Isday);
        return $numb_order;
    }
    /**
     * get price.
     * @param int $status
     * @return int $user chưa xác minh
     */
    function alertUser()
    {
        $order_Isday = App\Models\User::where('email_verified_at', '=',NULL)->get();
        $numb_order = count($order_Isday);
        return $numb_order;
    }
     /**
     * get price.
     * @param int $status
     * @return int Xác minh đại lý
     */
    function alertStoreDK()
    {
        $order_Isday = App\Models\Uni_Store::where('store_status',0)->get();
        $numb_order = count($order_Isday);
        return $numb_order;
    }
     /**
     * get price.
     * @param int $status
     * @return int Star và Question
     */
    function alertStar()
    {
        $order_Isday = App\Models\Uni_Comment::where('type', 'review')->where('status',0)->get();
        $alertStat = count($order_Isday);
        return $alertStat;
    }
    function alertQuestion()
    {
        $order_Isday = App\Models\Uni_Comment::where('type', 'question')->where('status',0)->get();
        $alertQuestion = count($order_Isday);
        return $alertQuestion;
    }
       /**
     * get price.
     * @param int $status
     * @return int Contact và Theo dõi
     */
    function alertContact()
    {
        $order_Isday = App\Models\Uni_Contact::where('is_newsletter', 0)->where('status',0)->get();
        $alertContact = count($order_Isday);
        return $alertContact;
    }
    function alertSubscribe()
    {
        $order_Isday = App\Models\Uni_Contact::where('is_newsletter', 1)->where('status',0)->get();
        $alertSubscribe = count($order_Isday);
        return $alertSubscribe;
    }
            /**
     * get price.
     * @param int $day
     * @return int $numb_order
     */
    function countContact($day)
    {
        
        $order_Isday = App\Models\Uni_Contact::whereBetween('created_at',[date_format(Carbon\Carbon::now()->subDays($day),'Y-m-d'. ' 00:00:00'), date_format(Carbon\Carbon::now()->subDays($day),'Y-m-d'.' 23:59:59')])->get();
        $numb_contact = count($order_Isday);
        return $numb_contact;
    }
   
            /**
     * get price.
     * @param int $day
     * @return int $numb_order
     */
    function countProduct($day)
    {
        
        $order_Isday = App\Models\Uni_Contact::whereBetween('created_at',[date_format(Carbon\Carbon::now()->subDays($day),'Y-m-d'. ' 00:00:00'), date_format(Carbon\Carbon::now()->subDays($day),'Y-m-d'.' 23:59:59')])->get();
        $numb_contact = count($order_Isday);
        return $numb_contact;
    }
            /**
     * get price.
     * @param int $day
     * @return int $numb_order
     */
    function getDiscount()
    {
        
        $discount_spiceclub = App\Models\Page::where('p_style','spice-club')->pluck('discount');
        return $discount_spiceclub;
    }
               /**
     * get size id.
     * @param int $id
     * @return string name
     */
    function getSizeId($id)
    {
        $sizeId = App\Models\Product_Size::where('product_id',$id)->pluck('size_id')->first();
        return $sizeId;
    }
               /**
     * get size name.
     * @param int $id
     * @return string name
     */
    function getSizeName($id)
    {
        $sizeName = App\Models\Uni_Size::where('id',$id)->pluck('name')->first();
        return $sizeName;
    }
               /**
     * get percent.
     * @param string $code
     * @return int percent
     */
    function getPercentVouchers($code)
    {
        $percent = App\Models\Voucher::where('code',$code)->pluck('model_percent')->first();
        return $percent;
    }
               /**
     * get size name.
     * @param int $price
     * @return int price
     */
    function getPrice($id)
    {
        $sizePrice = App\Models\Product_Size::where('product_id',$id)->pluck('price')->first();
        return $sizePrice;
    }
               /**
     * get size name.
      * @param int $price
     * @return int price
     */
    function getPriceSale($id)
    {
        $sizePrice = App\Models\Product_Size::where('product_id',$id)->pluck('price_sale')->first();
        return $sizePrice;
    }
               /**
     * get size name.
      * @param int $price
     * @return int price
     */
    function getPriceSaleStore($id)
    {
        $sizePrice = App\Models\Product_Size::where('product_id',$id)->pluck('price_sale_store')->first();
        return $sizePrice;
    }
               /**
     * get size Price.
     * @param int $uid,$price,$price_sale,$price_sale_store
     * @return int array
     */
    function getQtyInBox($id)
    {
        $sizePrice = App\Models\Product_Size::where('product_id',$id)->pluck('qty_in_box')->first();
        return $sizePrice;
    }
               /**
     * get size Price.
     * @param int $uid,$price,$price_sale,$price_sale_store
     * @return int array
     */
    function getMinBox($id)
    {
        $sizePrice = App\Models\Product_Size::where('product_id',$id)->pluck('min_box')->first();
        return $sizePrice;
    }
               /**
     * get size Price.
     * @param int $uid,$price,$price_sale,$price_sale_store
     * @return int array
     */
    function getPricePercent($uid,$price,$price_sale,$price_sale_store)
    {
        if ($uid == 1){
            $percent = 100-round($price_sale*100/$price);
        } else {
            $percent = 100-round($price_sale_store*100/$price);
        }
        return $percent;
    }
               /**
     * get size name.
     * @param int $id
     * @return string array
     */
    function getAllSizeName($id)
    {
        $sizeName = App\Models\Product_Size::where('product_id',$id)->pluck('size_id');
        return $sizeName;
    }
               /**
     * get size name.
     * @param array $cart
     * @return string array
     */
    function subtotalTax($cart)
    {
        $cart = \Cart::content();
        $subtotalTax = 0;
        foreach($cart as $key => $item){
            $subtotalTax += $item->options->product_vat;
        }
        return $subtotalTax;
      
    }
               /**
     * get size name.
     * @param array $cart
     * @return string array
     */
    function getVatProduct($id)
    {
        $product_vat = App\Models\Uni_Product::where('id',$id)->pluck('product_vat')->first();
        
        return $product_vat;
      
    }
    function checkParent($id)
    {
        $group_pid = App\Models\Uni_Category::where('parent_id',$id)->pluck('id');
        $count_cid = count($group_pid);
        return $count_cid;
    }


    function count_contact()
    {
        $contact = App\Models\Uni_Contact::where('created_at','<',date_format(Carbon\Carbon::now(), 'Y-m-d'))->get();
        $count_contact = count($contact);
        return $count_contact;
    }
    function getActive($slug)
    {
        $curent_url = \Request::url();
        $trueUrl = strpos($curent_url,$slug);
        return $trueUrl;
    }
    function formatVnd($price)
    {
        $vndfm = number_format($price, 0, '', '.'). ' ₫';
        return $vndfm;
    }
    function get_category_id($product_id){
        $catid = App\Models\Product_Category::where('product_id','=', $product_id)->pluck('category_id')->first();
        return $catid;
    }
    function countReview($product_id){
        $product_id = App\Models\Uni_Comment::where('product_id','=', $product_id)->pluck('product_id');
        $count_product = count($product_id);
        return $count_product;
    }

    function get_title_product($product_id){
        $title_product = App\Models\Uni_Product::where('id','=',$product_id)->pluck('name')->first();
        return $title_product;
    }
    function get_data_store($id){
        $store_name = App\Models\Uni_Store::where('user_id','=',$id)->pluck('store_name')->first();
        return $store_name;
    }
    function get_id_store($id){
        $store_id = App\Models\Uni_Store::where('user_id','=',$id)->pluck('id')->first();
        return $store_id;
    }

    function get_link_blank($product_id){
        $link = App\Models\Uni_Product::where('id','=',$product_id)->pluck('slug')->first();
        return route('get.product',['slug'=>$link]);
    }  
    function get_link_blank_byname($product_name){
        $link = App\Models\Uni_Product::where('name','=',$product_name)->pluck('slug')->first();
        return '/san-pham/'.$link;
    }
    function checkUid($id){
        $checkUid = App\Models\Uni_Store::where('user_id',$id)->where('store_status',1)->pluck('id')->first();
        return $checkUid;
    }
    function checkUidSpiceClub($id){
        $checkUid = App\Models\Cart\Uni_Order_Nap::where('user_id',$id)->where('status',0)->pluck('id')->first();
        return $checkUid;
    }
    function checkUidSpiceClubPay($id){
        $checkUid = App\Models\Cart\Uni_Order_Nap::where('user_id',$id)->where('status',2)->pluck('id')->first();
        return $checkUid;
    }
    function checkUserStore($id){
        $checkUid = App\Models\Uni_Store::where('user_id',$id)->where('store_status',1)->pluck('id')->first();
        return $checkUid;
    }
    function checkExitsUid($id){
        $checkUid = App\Models\Uni_Store::where('user_id',$id)->pluck('id')->first();
        return $checkUid;
    }
 
    function getNameStore($id){
        $storeName = App\Models\Uni_Store::where('user_id',$id)->where('store_status',1)->pluck('store_name')->first();
        return $storeName;
    }

    function get_user_comment_product($product_id){
        $user = App\Models\User::where('id','=',$product_id)->pluck('name')->first();
        return $user;
    }
    function get_min_box($id){
        $minbox = App\Models\Product_Size::where('id',$id)->pluck('min_box')->first();
        return $minbox;
    }
    function count_fav($id){
        $count_fav = App\Models\Favourite::where('f_user_id',$id)->get();
        return count($count_fav);
    }
    function red_heart($id,$uid){
        $red_heart = App\Models\Favourite::where('f_user_id',$uid)->where('f_id',$id)->pluck('id');
        return count($red_heart);
    }
    
    function formatPhoneNumber($phoneNumber) {
        $phoneNumber = preg_replace('/[^0-9]/','',$phoneNumber);
    
        if(strlen($phoneNumber) > 10) {
            $countryCode = substr($phoneNumber, 0, strlen($phoneNumber)-10);
            $areaCode = substr($phoneNumber, -10, 3);
            $nextThree = substr($phoneNumber, -7, );
            $lastFour = substr($phoneNumber, -4, 4);
    
            $phoneNumber = '+'.$countryCode.' ('.$areaCode.') '.$nextThree.'-'.$lastFour;
        }
        else if(strlen($phoneNumber) == 10) {
            $areaCode = substr($phoneNumber, 0, 4);
            $nextThree = substr($phoneNumber, 4, 3);
            $lastFour = substr($phoneNumber, 7, 3);
    
            $phoneNumber = ''.$areaCode.'.'.$nextThree.'.'.$lastFour;
        }
        else if(strlen($phoneNumber) == 7) {
            $nextThree = substr($phoneNumber, 0, 3);
            $lastFour = substr($phoneNumber, 3, 4);
    
            $phoneNumber = $nextThree.'-'.$lastFour;
        }
    
        return $phoneNumber;
    }



    function getCatParent($id)
    {
        $parent_pid = App\Models\Uni_Category::where('parent_id',$id)->where('parent_id','!=',0)->get();
        return $parent_pid;
    }

    function get_product_cat($id_cat){
        $mang = App\Models\Product_Category::where('category_id', '=', $id_cat)->limit(10)->pluck('product_id');
        return $mang;
    }

    function get_product_id($id_product){
        $mang = App\Models\Uni_Product::where('id',$id_product)->limit(10)->get();
        return $mang;
    }
