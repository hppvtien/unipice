@extends('pages.layouts.app_master_frontend')
@section('contents')


<main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
    <div class="page-title-wrapper">
        <h1 class="page-title">
            <span class="base">Cám ơn bạn đã mua hàng !!!</span>
        </h1>
    </div>
    <div class="columns">
        <div class="column main" style="width:100%">
            <div id="checkout" data-bind="scope:'checkout'" class="checkout-container">
                <div class="checkout-main">
                    <div class="opc-wrapper">
                       <h3>Hệ thống đã tiếp nhận đơn hàng của bạn.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@stop
