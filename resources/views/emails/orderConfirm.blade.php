@component('mail::message')
# # Kính chào quý khách đến với chúng tôi!

@if($emailType == 1)
Hoa Sài Gòn đã xác nhận **_đơn hàng {{$bill->id}}_** của quý khách đặt ngày {{$bill->created_at}} với hình thức thanh toán là **{{ ($bill->payment) ? "" : "Thanh toán trực tiếp"}}**.
<br>
Số tiền quý khách cần thanh toán là : {{$bill->total}} đ
<br>
Vui lòng gửi lại email xác nhận ngày nhận hàng cho chúng tôi!
<br>
Lưu ý:
- Quý khách vui lòng chuẩn bị sẵn số tiền mặt tương ứng để thuận tiện cho việc thanh toán.
@else
Hoa Sài Gòn đã hủy đơn **_đơn hàng {{$bill->id}}_** của quý khách đặt ngày {{$bill->created_at}} với hình thức thanh toán là **{{ ($bill->payment) ? "" : "Thanh toán trực tiếp"}}**.
@endif
<br>
<br>
Quý khách cần hỗ trợ thêm?<br>
Nếu có bất cứ thắc mắc nào, mời quý khách tham khảo trang liên hệ khách hàng. Để liên hệ với chúng tôi, quý khách vui lòng để lại tin nhắn tại trang Liên hệ.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
