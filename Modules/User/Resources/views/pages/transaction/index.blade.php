@extends('pages.layouts.app_master_frontend')
@section('contents')
    <main id="maincontent" class="">
        <div class="page messages">
            <div data-placeholder="messages"></div>
            <div data-bind="scope: 'messages'">
                <!-- ko if: cookieMessages && cookieMessages.length > 0 -->
                <!-- /ko -->

                <!-- ko if: messages().messages && messages().messages.length > 0 -->
                <!-- /ko -->
            </div>

        </div>
        <div class="columns">
            <div class="column main padding_css">
                <div class="page-title-wrapper">
                    <h1 class="page-title">
                        <span class="base" data-ui-id="page-title-wrapper">Đơn hàng</span>
                    </h1>
                </div>
                <div class="table-responsive ">
                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">STT</th>
                              <th scope="col">Họ Và Tên</th>
                              <th scope="col">Email</th>
                              <th scope="col">Điện Thoại</th>
                              <th scope="col">Điạ Chỉ</th>
                              <th scope="col">MST</th>
                              <th scope="col">PTTT</th>
                              <th scope="col">MHĐ</th>
                              <th scope="col">T.Tiền</th>
                              <th scope="col">NLPhiếu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($order_list_get_as_user_id as $item)
                                <tr>
                                    <th scope="row">{{ $i }}</th>
                                    <td class="col-md-3">
                                        <span type="" class="hover_bea" data-toggle="modal" data-target="#myModal" onclick="get_info_order(this);" id_order="{{ $item->id }}">
                                            {{ $item->customer_name }}
                                        </span>
                                    </td>
                                    <td class="col-md-3">{{ $item->email }}</td>
                                    <td class="col-md-3">{{ $item->phone }}</td>
                                    <td class="col-md-3">{{ $item->address }}</td>
                                    <td >{{ $item->taxcode }}</td>
                                    <td>{{ $item->type_pay }}</td>
                                    <td>{{ $item->code_invoice }}</td>
                                    <td>{{ number_format($item->total_money) }}</td>
                                    <td>{{ $item->created_at->format('d.m.Y H:i') }}</td>
                                </tr>
                            @php
                                $i++;
                            @endphp
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>

            <script>
                function get_info_order(id_order){
                    $.post( "{{ route('get_user.get_info_order') }}", { id_order: $(id_order).attr('id_order')})
                    .done(function( data ) {
                        $( ".modal-body" ).html( data );
                    });
                }
            </script>

            @include('user::components._inc_menu_user')
        </div> 
    </main>

    <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Chi Tiết Sản Phẩm</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
              
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
          </div>
        </div>
    </div>

@stop


