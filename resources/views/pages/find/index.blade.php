@extends('pages.layouts.app_master_frontend')
@section('contents')
<main role="main">
    <a id="main-content" tabindex="-1"></a>
    <div class="layout-content">
        <div class="region region-content">
            <div data-drupal-messages-fallback="" class="hidden"></div>
            <div id="block-frontiercoop-content" data-block-plugin-id="system_main_block">
                <div class="t-cms">
                    <div class="layout layout--onecol">
                        <div class="layout__region layout__region--content">
                            <div>
                                <div class="a-message">

                                    <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                        <p>Due to unprecedented demand we cannot guarantee the accuracy of store locator.&nbsp;</p>
                                    </div>
                                </div>
                                <!-- BASE :: FC-DESTINI -->
                                <script src="//destinilocators.com/fco/site/install/?MM=panel2"></script>
                                <iframe id="destini" src="//destinilocators.com/fco/site/locator.php?RFR=https://www.frontiercoop.com&amp;MM=panel2" scrolling="no" frameborder="0" style="width: 100%; height: 920px;" allow="geolocation">fco product locator. Your browser does not support iframes.</iframe>
                                <!-- /BASE :: FC-DESTINI -->
                            </div>

                        </div>
                    </div>

                </div>


            </div>

        </div>

    </div>


</main>
@stop
