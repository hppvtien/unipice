<?php
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
    function count_order()
    {
        $order = App\Models\Cart\Order::where('created_at','<',date_format(Carbon\Carbon::now(), 'Y-m-d'))->get();
        $count_order = count($order);
        return $count_order;
    }
    function count_contact()
    {
        $contact = App\Models\Contact::where('created_at','<',date_format(Carbon\Carbon::now(), 'Y-m-d'))->get();
        $count_contact = count($contact);
        return $count_contact;
    }