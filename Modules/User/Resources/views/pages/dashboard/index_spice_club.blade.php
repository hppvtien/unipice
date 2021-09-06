@extends('user::pages.layout.app_master_user')
@section('content')

<main id="maincontent" class="">

    <div class="columns">
        <div class="d-none d-md-block">
            @include('user::pages.component._inc_menu_user')
        </div>
        <div class="col-lg-12 d-lg-none d-block" style="padding-left: 0;padding-right:0">
            @include('user::pages.component._inc_menu_user')
        </div>
        <div class="column main padding_css">

            <input name="form_key" type="hidden" value="ti05PgAwYARp0X1u">
            <div class="block block-dashboard-info">
                <div class="block-title"><strong>Thành viên Spice Club</strong></div>
            </div>
            <div class="block-content">
              @if(get_data_user('web'))
              <div class="box box-information">
                 
                  <div class="box-content">
                      <p class="newsletter-label text-dark">
                          <span class="text-primary">Tên khách hàng: </span>{{ get_data_user('web','name') }}<br>
                      </p>
                      <p class="newsletter-label text-dark">
                          <span class="text-primary">Email: </span>{{ get_data_user('web','email') }}<br>
                      </p>
                  </div>
              </div>
              @endif
          </div>
        </div>
        <div class="column main">
            <div class="block block-dashboard-info">
                <table class="table">
                    <thead>
                      <tr>
                        <th class="text-spice" style="width:5%" scope="col">STT</th>
                        <th class="text-spice" style="width:10%" scope="col">Mã đơn</th>
                        <th class="text-spice" scope="col">Họ tên</th>
                        <th class="text-spice" scope="col">Ngày tạo</th>
                        <th class="text-spice" scope="col">Hết hạn</th>
                        <th class="text-spice" scope="col">Trạng thái</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($uni_order_nap as $key=> $item)
                        <tr class="">
                            <th class="text-spice">{{$key+1}}</th>
                            <td class="text-spice"> #SC{{ $item->id }}</td>
                            <td class="text-spice">{{ $item->name }}</td>
                            <td class="text-spice">{{date_format(date_create($item->created_at),"d/m/Y") }}</td>
                            <td class="text-spice">Trọn đời</td>
                            <td class="text-spice">{{ $item->status == 2 ? 'Active':'No Active' }}</td>
                          </tr>
                        @endforeach
                      
                    </tbody>
                  </table>
                  @foreach ($uni_order_nap as $key=> $item)
                  @if ($item->status == 4)
                  <div class="box-actions">
                    <a class="a-btn a-btn--primary" href="{{ route('get.recharge.up') }}"><span>Gia hạn</span></a>
                </div>
                  @endif
                 
                @endforeach
            </div>
        </div>

    </div>
</main>
@stop
