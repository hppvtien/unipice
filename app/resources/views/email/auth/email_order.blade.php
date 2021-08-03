<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
    <tbody>
        <tr>
            <td align="center" valign="top">
                <div id="m_5063188309675374655template_header_image">
                </div>
                <font color="#888888">
                </font>
                <font color="#888888">
                </font>
                <table border="0" cellpadding="0" cellspacing="0" width="600"
                    id="m_5063188309675374655template_container"
                    style="background-color:#ffffff;border:1px solid #dedede;border-radius:3px">
                    <tbody>
                        <tr>
                            <td align="center" valign="top">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                    id="m_5063188309675374655template_header"
                                    style="background-color:#122a67;color:#ffffff;border-bottom:0;font-weight:bold;line-height:100%;vertical-align:middle;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-radius:3px 3px 0 0">
                                    <tbody>
                                        <tr>
                                            <td id="m_5063188309675374655header_wrapper"
                                                style="padding:36px 48px;display:block">
                                                <h1
                                                    style="font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:30px;font-weight:300;line-height:150%;margin:0;text-align:left;color:#ffffff;background-color:inherit">
                                                    Cám ơn bạn đã đặt hàng</h1>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top">
                                <font color="#888888">
                                </font>
                                <font color="#888888">
                                </font>
                                <table border="0" cellpadding="0" cellspacing="0" width="600"
                                    id="m_5063188309675374655template_body">
                                    <tbody>
                                        <tr>
                                            <td valign="top" id="m_5063188309675374655body_content"
                                                style="background-color:#ffffff">
                                                <font color="#888888">
                                                </font>
                                                <font color="#888888">
                                                </font>
                                                <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td valign="top" style="padding:48px 48px 32px">
                                                                <div id="m_5063188309675374655body_content_inner"
                                                                    style="color:#636363;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:14px;line-height:150%;text-align:left">
                                                                    <p style="margin:0 0 16px">Xin chào
                                                                        {{ $data_bill['method_customer'] }},</p>
                                                                    <p style="margin:0 0 16px">Cảm ơn đã đặt hàng. Đơn
                                                                        hàng sẽ bị tạm giữ cho đến khi chúng tôi xác
                                                                        nhận thanh toán hoàn thành. Trong thời gian chờ
                                                                        đợi, đây là lời nhắc về những gì bạn đã đặt
                                                                        hàng:</p>
                                                                    <section>
                                                                        <h2
                                                                            style="color:#122a67;display:block;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:0 0 18px;text-align:left">
                                                                            Invoice</h2>
                                                                        <ul>
                                                                            <li>Mã đơn hàng:
                                                                                <strong>{{ $data_bill['method_invoice'] }}</strong>
                                                                            </li>
                                                                            <li>Date:
                                                                                <strong>{{ date_format($data_bill['created_at'], 'd/m/Y') }}</strong>
                                                                            </li>
                                                                            <li>Địa chỉ:
                                                                                <strong>{{ $data_bill['method_address'] }}</strong>
                                                                            </li>
                                                                            <li>Email:
                                                                                <strong>{{ $data_bill['method_email'] }}</strong>
                                                                            </li>
                                                                            <li>Số điện thoại:
                                                                                <strong>{{ $data_bill['method_phone'] }}</strong>
                                                                            </li>
                                                                           
                                                                        </ul>
                                                                    </section>
                                                                    <div style="margin-bottom:40px">
                                                                        <table cellspacing="0" cellpadding="6"
                                                                            border="1"
                                                                            style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;width:100%;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th scope="col"
                                                                                        style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                        Sản phẩm</th>
                                                                                    <th scope="col"
                                                                                        style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                        Số lượng</th>
                                                                                    <th scope="col"
                                                                                        style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                        Đơn giá</th>
                                                                                </tr>
                                                                                @foreach (json_decode($data_bill['method_course']) as $item)
                                                                                    <tr>
                                                                                        <th scope="col"
                                                                                            style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                            {{ $item->name }}</th>
                                                                                        <th scope="col"
                                                                                            style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                            {{ $item->qty }}</th>
                                                                                        <th scope="col"
                                                                                            style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                            {{ number_format($item->price, 0, '', '.') }}đ
                                                                                        </th>
                                                                                    </tr>
                                                                                @endforeach
                                                                            </thead>
                                                                            <tbody>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                @if ($data_bill['group_buy'] == 0)
                                                                                    @if ($data_bill['method_voucher'] != null)
                                                                                       <tr>
                                                                                          <th scope="row" colspan="2"
                                                                                             style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                             Tổng tiền VAT: </th>
                                                                                          <td
                                                                                             style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                             <span>{{ $data_bill['paid_total'] }}</span>
                                                                                          </td>
                                                                                    </tr>
                                                                                        <tr>
                                                                                            <th scope="row" colspan="2"
                                                                                                style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                                Mã giảm giá ( {{ $data_bill['method_voucher'] }} ): {{ $data_bill['method_voucher_percent'] }}%</th>
                                                                                            <td
                                                                                                style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                               @php
                                                                                                   $tal = (int)str_replace('đ', '', str_replace('.', '', $data_bill['paid_total'])) * $data_bill['method_voucher_percent']/100;
                                                                                               @endphp
                                                                                                <span>- {{ number_format($tal, 0, '', '.') }}đ</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                    @endif
                                                                                    <tr>
                                                                                        <th scope="row" colspan="2"
                                                                                            style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                            Tổng tiền:</th>
                                                                                        <td
                                                                                            style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                            <span>{{ number_format($data_bill['method_paid'], 0, '', '.') }}<span>₫</span></span>
                                                                                        </td>
                                                                                    </tr>
                                                                                @else
                                                                                    <tr>
                                                                                        <th scope="row" colspan="2"
                                                                                            style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left;border-top-width:4px">
                                                                                            Tổng số phụ:</th>
                                                                                        <td
                                                                                            style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left;border-top-width:4px">
                                                                                            <span>{{ $data_bill['total_no_vat'] }}</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row" colspan="2"
                                                                                            style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                            VAT:</th>
                                                                                        <td
                                                                                            style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                            <span>{{ $data_bill['vat_total'] }}</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    @if ($data_bill['method_voucher'] != null)
                                                                                       <tr>
                                                                                          <th scope="row" colspan="2"
                                                                                             style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                             Tổng tiền VAT: </th>
                                                                                          <td
                                                                                             style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                             <span>{{ $data_bill['paid_total'] }}</span>
                                                                                          </td>
                                                                                    </tr>
                                                                                        <tr>
                                                                                            <th scope="row" colspan="2"
                                                                                                style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                                Mã giảm giá ( {{ $data_bill['method_voucher'] }} ): {{ $data_bill['method_voucher_percent'] }}%</th>
                                                                                            <td
                                                                                                style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                               @php
                                                                                                   $tal = (int)str_replace('đ', '', str_replace('.', '', $data_bill['paid_total'])) * $data_bill['method_voucher_percent']/100;
                                                                                               @endphp
                                                                                                <span>- {{ number_format($tal, 0, '', '.') }}đ</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                    @endif
                                                                                    <tr>
                                                                                        <th scope="row" colspan="2"
                                                                                            style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                            Tổng tiền:</th>
                                                                                        <td
                                                                                            style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                                                            <span>{{ number_format($data_bill['method_paid'], 0, '', '.') }}<span>₫</span></span>
                                                                                        </td>
                                                                                    </tr>
                                                                                @endif

                                                                            </tfoot>
                                                                        </table>
                                                                    </div>
                                                                    <table id="m_5063188309675374655addresses"
                                                                        cellspacing="0" cellpadding="0" border="0"
                                                                        style="width:100%;vertical-align:top;margin-bottom:40px;padding:0">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td valign="top" width="50%"
                                                                                    style="text-align:left;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif;border:0;padding:0">
                                                                                    <h2
                                                                                        style="color:#122a67;display:block;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:0 0 18px;text-align:left">
                                                                                        Địa chỉ thanh toán</h2>
                                                                                    <address
                                                                                        style="padding:12px;color:#636363;border:1px solid #e5e5e5">
                                                                                        Đơn vị bán hàng {{ $configuration->name }}
                                                                                        <br>
                                                                                        {{ $configuration->address }}
                                                                                        <br><a
                                                                                            href="tel:{{ $configuration->hotline }}"
                                                                                            style="color:#122a67;font-weight:normal;text-decoration:underline"
                                                                                            target="_blank">{{ $configuration->hotline }}</a>
                                                                                        <br><a
                                                                                            href="mailto:{{ $configuration->email }}"
                                                                                            target="_blank">{{ $configuration->email }}</a>
                                                                                    </address>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p style="margin:0 0 16px">Chúng tôi mong sớm hoàn thành đơn đặt hàng của bạn.</p>
                                                                    <font color="#888888">
                                                                    </font>
                                                                </div>
                                                                <font color="#888888">
                                                                </font>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <font color="#888888">
                                                </font>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <font color="#888888">
                                </font>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <font color="#888888">
                </font>
            </td>
        </tr>
        <tr>
            <td align="center" valign="top">
                <table border="0" cellpadding="10" cellspacing="0" width="600"
                    id="m_5063188309675374655template_footer">
                    <tbody>
                        <tr>
                            <td valign="top" style="padding:0;border-radius:6px">
                                <table border="0" cellpadding="10" cellspacing="0" width="100%">
                                    <tbody>
                                        <tr>
                                            <td colspan="2" valign="middle" id="m_5063188309675374655credit"
                                                style="border-radius:6px;border:0;color:#8a8a8a;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:12px;line-height:150%;text-align:center;padding:24px 0">
                                                <p style="margin:0 0 16px">Unimind</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
