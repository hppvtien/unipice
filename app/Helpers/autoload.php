<?php

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
        $description_string = $string_cut.'...';
        return $description_string;
    }
       /**
     * Show the form for editing the specified resource.
     * @param string $tring
     * @return string $slug
     */
    function getSlugCategory($tring)
    {
        $getSlug = 'san-pham/'.$tring.'.html';
        return $getSlug;
    }
    function getSlugProduct($tring)
    {
        $getSlug = '/san-pham/'.$tring;
        return $getSlug;
    }
    function getSlugPost($tring)
    {
        $getSlug = '/bai-viet/'.$tring;
        return $getSlug;
    }
    function getSlugPostCate($tring)
    {
        $getSlug = '/danh-muc-bai-viet/'.$tring;
        return $getSlug;
    }
    function count_order()
    {
        $order = App\Models\Cart\Uni_Order::where('created_at','<',date_format(Carbon\Carbon::now(), 'Y-m-d'))->get();
        $count_order = count($order);
        return $count_order;
    }
    function count_contact()
    {
        $contact = App\Models\Uni_Contact::where('created_at','<',date_format(Carbon\Carbon::now(), 'Y-m-d'))->get();
        $count_contact = count($contact);
        return $count_contact;
    }
    function formatVnd($price)
    {
        $vndfm = number_format($price, 0, '', ','). ' đ';
        return $vndfm;
    }
    function get_category_id($product_id){
        $catid = App\Models\Product_Category::where('product_id','=', $product_id)->pluck('category_id')->first();
        return $catid;
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
    function getNameStore($id){
        $storeName = App\Models\Uni_Store::where('user_id',$id)->where('store_status',1)->pluck('store_name')->first();
        return $storeName;
    }

    function get_user_comment_product($product_id){
        $user = App\Models\User::where('id','=',$product_id)->pluck('name')->first();
        return $user;
    }
    function get_min_box($id){
        $minbox = App\Models\Uni_Product::where('id',$id)->pluck('min_box')->first();
        return $minbox;
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