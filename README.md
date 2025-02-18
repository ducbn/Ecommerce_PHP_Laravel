Dự án Bán Hàng Laravel 11
Mô Tả Dự Án
Dự án này là một hệ thống bán hàng trực tuyến được xây dựng bằng Laravel 11, sử dụng Laravel Breeze để xác thực người dùng và MySQL làm cơ sở dữ liệu. Giao diện được thiết kế bằng HTML & CSS thuần, tập trung vào trải nghiệm người dùng đơn giản và hiệu quả.

Chức Năng Chính
1. Xác Thực Người Dùng
Đăng ký tài khoản: Người dùng có thể đăng ký bằng email và mật khẩu.
Đăng nhập/Đăng xuất: Sau khi đăng ký, người dùng có thể đăng nhập vào hệ thống và đăng xuất khi không sử dụng.
Middleware bảo vệ route: Chỉ những người dùng đã đăng nhập mới có thể truy cập vào các trang giỏ hàng, đặt hàng, thanh toán và lịch sử đơn hàng.
2. Sản Phẩm
Hiển thị danh sách sản phẩm: Trang chủ hiển thị tất cả các sản phẩm có sẵn trong cửa hàng.
Lọc sản phẩm theo danh mục: Người dùng có thể chọn danh mục để xem các sản phẩm liên quan.
Trang chi tiết sản phẩm: Khi nhấp vào một sản phẩm, hệ thống sẽ hiển thị trang chi tiết với thông tin mô tả, giá cả và nút thêm vào giỏ hàng.
3. Giỏ Hàng
Thêm sản phẩm vào giỏ hàng: Người dùng có thể thêm sản phẩm vào giỏ hàng từ trang danh sách hoặc trang chi tiết sản phẩm.
Cập nhật số lượng: Trong giỏ hàng, người dùng có thể thay đổi số lượng sản phẩm đã thêm.
Xóa sản phẩm khỏi giỏ hàng: Cho phép người dùng xóa sản phẩm không mong muốn khỏi giỏ hàng.
Tính tổng giá trị đơn hàng: Hệ thống tự động tính tổng tiền dựa trên các sản phẩm trong giỏ hàng.
4. Đặt Hàng (Đang Triển Khai)
Nhập thông tin đặt hàng: Người dùng cần nhập thông tin cá nhân (tên, địa chỉ, số điện thoại) để đặt hàng.
Xác nhận đơn hàng: Sau khi điền thông tin, người dùng nhấn nút "Xác nhận đặt hàng" để tiếp tục sang bước thanh toán.
5. Thanh Toán (Đang Triển Khai)
Tích hợp PayPal: Khi người dùng nhấn "Xác nhận đặt hàng", hệ thống sẽ chuyển hướng đến trang thanh toán PayPal.
Hiển thị thông báo sau khi thanh toán: Nếu thanh toán thành công, người dùng sẽ nhận được thông báo xác nhận.
Tích hợp VNPay (Dự kiến bổ sung sau)
6. Lịch Sử Đơn Hàng (Chưa Làm)
Hiển thị danh sách đơn hàng đã đặt: Người dùng có thể xem lại các đơn hàng trước đó của mình.
Chi tiết đơn hàng: Nhấn vào một đơn hàng để xem thông tin chi tiết về sản phẩm, giá cả và trạng thái đơn hàng.
