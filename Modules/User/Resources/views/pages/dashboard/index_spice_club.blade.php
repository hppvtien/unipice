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
                <div class="block-title"><strong>Thông tin tài khoản</strong></div>
            </div>
            <div class="block-content">
              @if(get_data_user('web'))
              <div class="box box-information">
                  <strong class="box-title text-primary">
                      <span>Thông tin liên lạc</span>
                  </strong>
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
                        <th class="text-spice" scope="col">Họ tên</th>
                        <th class="text-spice" scope="col">Ngày tạo</th>
                        <th class="text-spice" scope="col">Hết hạn</th>
                        <th class="text-spice" scope="col">Trạng thái</th>
                        <th class="text-spice" style="width:10%" scope="col">Gia hạn</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="">
                        <th class="text-spice">1</th>
                        <td class="text-spice">{{ $uni_order_nap->name }}</td>
                        <td class="text-spice">{{ date('d/m/y',strtotime($uni_order_nap->updated_at)) }}</td>
                        <td class="text-spice">{{ date('d/m/y',strtotime($uni_order_nap->end_year)) }}</td>
                        <td class="text-spice">{{ $uni_order_nap->status == 2 ? 'Active':'No Active' }}</td>
                        <td class="text-spice"><i class="fa fa-edit"></i></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>

    </div>
</main>
@stop
