@component('mail::message')
# Kính chào quý khách đến với chúng tôi!

Hoa Sài Gòn vừa nhận được **_đơn hàng {{$bill->id}}_** của quý khách đặt ngày {{$bill->created_at}} với hình thức thanh toán là **{{ ($bill->payment) ? "" : "Thanh toán trực tiếp"}}**.
Chúng tôi sẽ gửi sản phẩm đến quý khách trong thời gian nhanh nhất có thể.

Đơn hàng sẽ được giao đến : {{$bill->recipient}} - {{$bill->address}} - {{$bill->phone_number}}

@component('mail::table')
    | Tên sản phẩm  | Số lượng      | Đơn giá  | Tổng giá   |
    | ------------- |:-------------:|:--------:|:----------:|
    @foreach($billDetail as $value)
    | {{\App\Http\Controllers\ProductController::getProductById($value->id_product)->name}} |{{ $value->quantity}}  | {{$value->unit_price }}  |  {{$value->quantity * $value->unit_price}}  |
    @endforeach
    | ------------- |:-------------:|:--------:|{{$bill->total}} đ|
@endcomponent
<br>
Lưu ý:<br>
    - Trong một số trường hợp, Hoa Sài Gòn sẽ thực hiện cuộc gọi hoặc gửi tin nhắn đến số điện thoại quý khách đã đăng ký để xác nhận đơn hàng.<br>
    Để đơn hàng được xử lý nhanh chóng, xin quý khách vui lòng thực hiện theo hướng dẫn của cuộc gọi hoặc nội dung tin nhắn nhận được.<br>

<br>
<br>
Quý khách cần hỗ trợ thêm?<br>
Nếu có bất cứ thắc mắc nào, mời quý khách tham khảo trang liên hệ khách hàng. Để liên hệ với chúng tôi, quý khách vui lòng để lại tin nhắn tại trang Liên hệ.

Thanks,<br>
{{ config('app.name') }}
@endcomponent

