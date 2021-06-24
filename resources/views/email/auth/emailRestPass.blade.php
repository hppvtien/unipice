@component('mail::message')

Xin chào {{$user_name}}
Bạn hãy ấn vào link sau để thay đổi mật khẩu mới xin cám ơn.
@component('mail::button', ['url' => route('get.resetcodepassword',$data['reset_code'])])
Đổi mật khẩu
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
