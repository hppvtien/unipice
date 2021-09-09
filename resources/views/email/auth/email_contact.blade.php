Họ tên: {{ $data['name'] }}<br>
Email: {{ $data['email'] }}<br>
Số điện thoại: {{ $data['phone'] }}<br>
Tiêu đề: {{ $data['subject'] }}<br>
Nội dung: 
<p>{{ $data['message'] }}</p><br>
Ngày gửi: {{date_format(date_create($data['created_at']),"d/m/Y") }}