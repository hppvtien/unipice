@component('mail::message')

Xin chào {{$data['name']}}
 
The body of your message.

@component('mail::button', ['url' => route('verify.email',$data['code_verication'])])
Xác nhận Email
@endcomponent
<p>Copy và dán đường dẫn của website trong email của bạn</p>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
