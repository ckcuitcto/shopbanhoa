@component('mail::message')
# Cảm ơn {{$contactUs->name}} đã liên hệ với chúng tôi
{{$body}}
<br>
Nếu có bất cứ thắc mắc gì, xin vui lòng liên hệ với chúng tôi!<br>
Chúng tôi sẽ **liên lạc** lại với bạn trong thời gian _sớm nhất_
<br><br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
