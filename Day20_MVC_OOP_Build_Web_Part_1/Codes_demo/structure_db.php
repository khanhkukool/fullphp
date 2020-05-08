Tên bảng + danh sách các trường
1 - categories: chứa thông tin về các danh mục trên hệ thống
id: khóa chính, int(11)
name: tên danh mục, varchar(255)
status: trạng thái danh mục 0->Ẩn 1->Hiện, tinyInt(3)
created_at: ngày tạo danh mục, timestamp
updated_at: ngày cuối cùng update danh mục, datetime

2 - users: chứa thông tin về user trên hệ thống
id: khóa chính, int(11)
username: tên đăng nhập, varchar(255)
password: mật khẩu đăng nhập, varchar(255)
avatar, first_name, last_name, jobs, last_login, facebook,
status, created_at, updated_at

3 - slides: chứa các thông tin về slide
id, avatar, news_id(khóa ngoại, liên kết với bảng news), status,
position, created_at, updated_at

4 - products: chứa các sản phẩm trên hệ thống
id: khóa chính, int(11)
category_id(khóa ngoại, liên kết với bảng categories), int(11)
news_id: các id tin tức liên quan đến sản phẩm, 1 sản phẩm có thể
có nhiều tin tức liên quan đi kèm, thì có thể có 2 giải pháp sau để
thể hiện
title: tên sản phẩm, varchar(255)
avatar: ảnh đại diện của sản phẩm, varchar(255)
price: giá sản phẩm, int(11),
summary: mô tả ngắn cho phẩm, varchar(255)
content: mô tả chi tiết cho sản phẩm, text


- Cách 1: tạo 1 bảng trung gian, liên kết 2 bảng product và news
product_news: id, product_id, news_id
1 - 1
1 - 3
1 - 4
- Cách 2: không tạo bảng mới, mà sử dụng trường news_id như hiện tại,
tuy nhiên cần phải để ý kiểu dữ liệu cho trường này, có thể
set kiểu dữ liệu là varchar(255). VD 1 gía trị củ thể : 1 || 3 || 4

status: trạng thái sản phẩm, 0 - Ẩn 1 - Hiện, tinyInt(3)
created_at: ngày tạo sản phẩm, timestamp
updated_at: ngày update sản phẩm, datetime
5 - news - chứa các thông tin về tin tức
id: khóa chính, int(11)
title: tiêu đề tin tức, varchar(255)
category_id: id danh mục mà tin tức đó thuộc về, khóa ngoại
của bảng categories
summary: mô tả ngắn cho tin tức, varchar(255)
avatar: ảnh đại diện cho tin
content: chi tiết tin, text
status: trạng thái tin: 0 - Ẩn 1 - Hiển thị, tinyint(4)
created_at: ngày tạo, timestamp
updated_at: ngày cuối cùng update danh mục, datetime

6 - Bảng orders: chứa thông tin các đơn hàng trên hệ thống
id, user_id, fullname, address, mobile, email, note, price_total, payment_status, created_at, updated_at

7 - Bảng order_detail: chứa thông tin chi tiết của order
order_id, product_id, quality