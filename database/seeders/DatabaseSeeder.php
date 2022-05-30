<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [
                'product_name' => 'Camera 2528T', 'type_id' => 5, 'image' => 'camera-2.jfif', 'price' => 40000, 'sale_price' => 40000, 'description' =>
                '2MP IR Bullet Network Camera
            ■ Độ phân giải 2MP cảm biến CMOS 1/2.7” 
            ■ STARLIGHT chuẩn nén hình ảnh H.265+, 25/30fps@1080P, 
            ■ Độ nhạy sáng tối thiểu 0.005Lux@F1.6
            ■ Chống ngược sáng DWDR , chế độ ngày đêm(ICR), bù sáng(BLC,HLC), Chống nhiễu (3D-DNR)
            ■ Ống kính 3.6mm
            ■ Hỗ trợ tên miền DSSDDNS, P2P
            ■ Phát hiện thông minh: Hàng rào ảo, Xâm nhập. Phát hiện điện áp
            ■ Hồng ngoại 30m. Chuẩn chống nước IP67.Hỗ trợ khe cắm thẻ nhớ 256GB
            ■ Điện áp 12V DC/PoE (802.3af), công suất <4.6W
            ■ Chất liệu kim loại . Kích thước 166.2 mm × Φ70 mm (6.54" × Φ2.76"),  trọng lượng 0.48kg',
                'featured' => 1
            ],
            [
                'product_name' => 'Camera 567T', 'type_id' => 5, 'image' => 'camera-3.jfif', 'price' => 40000, 'sale_price' => 40000, 'description' =>
                '2MP IR Bullet Network Camera
            ■ Độ phân giải 2MP cảm biến CMOS 1/2.7” 
            ■ STARLIGHT chuẩn nén hình ảnh H.265+, 25/30fps@1080P, 
            ■ Độ nhạy sáng tối thiểu 0.005Lux@F1.6
            ■ Chống ngược sáng DWDR , chế độ ngày đêm(ICR), bù sáng(BLC,HLC), Chống nhiễu (3D-DNR)
            ■ Ống kính 3.6mm
            ■ Hỗ trợ tên miền DSSDDNS, P2P
            ■ Phát hiện thông minh: Hàng rào ảo, Xâm nhập. Phát hiện điện áp
            ■ Hồng ngoại 30m. Chuẩn chống nước IP67.Hỗ trợ khe cắm thẻ nhớ 256GB
            ■ Điện áp 12V DC/PoE (802.3af), công suất <4.6W
            ■ Chất liệu kim loại . Kích thước 166.2 mm × Φ70 mm (6.54" × Φ2.76"),  trọng lượng 0.48kg',
                'featured' => 1
            ],
            [
                'product_name' => 'Quần Jean bò xanh T52', 'type_id' => 1, 'image' => 'jean-2.jfif', 'price' => 60000, 'sale_price' => 50000, 'description' => '! Quần jeans nam với thiết kế mới thanh lịch trẻ trung hơn, mang lại sự tự tin tối đa cho người mặc trước những người xung quanh;

            ! Quần may từ jean nam chất bò cao cấp nên rất mềm và thoải mái khi mặc, đảm bảo sẽ không hề cảm thấy gò bó ngay cả khi di chuyển nhiều;
            
            ! Dáng quan jean nam ống côn trẻ trung ôm body tạo nên form cực chuẩn cho người mặc túi quần lớn rất thuận tiện cho việc đựng smart phone hoặc ví cỡ bự;
            
            ! Quần jeans nam đen màu sắc chuẩn được nhuộm kỹ đến hai lần giúp hạn chế tối đa việc phai màu khi sử dụng.
            
            
            
            - Màu sắc: Đen, xanh, xám đậm, xanh than;
            
            - Chất liệu: 65% linen + 35% cotton, mặt vải mịn màng, đường chỉ may tỉ mỉ, co giãn;
            
            - Thiết kế slimfit hơi ôm, trẻ trung phù hợp đi chơi, đi làm, công sở, các hoạt động hàng ngày.
            
            
            
            !!! KÍCH THƯỚC / SỐ ĐO !!!
            
            
            
            - Size 29 (S): 48-58kg, 160-168 cm
            
            - Size 30 (M): 59-62kg, 165-173 cm
            
            - Size 31 (L): 63-69kg, 169-179 cm
            
            - Size 32 (XL): 70-78kg, 175-182 cm
            
            - Size 33 (XXL):  79-85kg, 179-185 cm
            
            (Tham khảo kích thước vòng bụng, mông, gấu quần trong ảnh)
            
            
            
            !!! TRƯỚC KHI ĐẶT HÀNG !!!
            
            
            
            Khuyến khích bạn nhắn tin (chat) với Lebro để được tư vấn và gửi các ghi chú cần thiết.
            
            
            
            ☀ LƯU Ý / GHI CHÚ
            
            
            
            - Hình ảnh sản phẩm thật 100%, do Lebro chụp và quay;
            
            - Do điều kiện ánh sáng, cách cài đặt màn hình và hệ màu thay đổi giữa các dòng điện thoại,
             nên màu sắc thực tế của sản phẩm sẽ có đôi chút khác biệt so với hình ảnh (5-15%). Mong bạn thông cảm vì sự khác biệt này!
            
            
            
            ☀ BẢO HÀNH SAU BÁN HÀNG
            
            
            
            - Khi nhận hàng, nếu bạn gặp bất cứ vấn đề gì về sản phẩm, xin vui lòng nhắn tin để Lebro hỗ trợ bạn tốt nhất;
            
            - Lebro hỗ trợ đổi trả và miễn phí vận chuyển đối với sản phẩm lỗi do sản xuất trong 7 ngày đầu;
            
            - Hỗ trợ đổi kích thước/màu sắc (không hỗ trợ vận chuyển) trong 15 ngày từ khi nhận hàng (hàng còn nguyên tem mác và chưa qua sử dụng).',
                'featured' => 1
            ],
            [
                'product_name' => 'Quần Jean bò xanh T52', 'type_id' => 1, 'image' => 'jean-1.jfif', 'price' => 40000, 'sale_price' => 40000, 'description' => '! Quần jeans nam với thiết kế mới thanh lịch trẻ trung hơn, mang lại sự tự tin tối đa cho người mặc trước những người xung quanh;

            ! Quần may từ jean nam chất bò cao cấp nên rất mềm và thoải mái khi mặc, đảm bảo sẽ không hề cảm thấy gò bó ngay cả khi di chuyển nhiều;
            
            ! Dáng quan jean nam ống côn trẻ trung ôm body tạo nên form cực chuẩn cho người mặc túi quần lớn rất thuận tiện cho việc đựng smart phone hoặc ví cỡ bự;
            
            ! Quần jeans nam đen màu sắc chuẩn được nhuộm kỹ đến hai lần giúp hạn chế tối đa việc phai màu khi sử dụng.
            
            
            
            - Màu sắc: Đen, xanh, xám đậm, xanh than;
            
            - Chất liệu: 65% linen + 35% cotton, mặt vải mịn màng, đường chỉ may tỉ mỉ, co giãn;
            
            - Thiết kế slimfit hơi ôm, trẻ trung phù hợp đi chơi, đi làm, công sở, các hoạt động hàng ngày.
            
            
            
            !!! KÍCH THƯỚC / SỐ ĐO !!!
            
            
            
            - Size 29 (S): 48-58kg, 160-168 cm
            
            - Size 30 (M): 59-62kg, 165-173 cm
            
            - Size 31 (L): 63-69kg, 169-179 cm
            
            - Size 32 (XL): 70-78kg, 175-182 cm
            
            - Size 33 (XXL):  79-85kg, 179-185 cm
            
            (Tham khảo kích thước vòng bụng, mông, gấu quần trong ảnh)
            
            
            
            !!! TRƯỚC KHI ĐẶT HÀNG !!!
            
            
            
            Khuyến khích bạn nhắn tin (chat) với Lebro để được tư vấn và gửi các ghi chú cần thiết.
            
            
            
            ☀ LƯU Ý / GHI CHÚ
            
            
            
            - Hình ảnh sản phẩm thật 100%, do Lebro chụp và quay;
            
            - Do điều kiện ánh sáng, cách cài đặt màn hình và hệ màu thay đổi giữa các dòng điện thoại,
             nên màu sắc thực tế của sản phẩm sẽ có đôi chút khác biệt so với hình ảnh (5-15%). Mong bạn thông cảm vì sự khác biệt này!
            
            
            
            ☀ BẢO HÀNH SAU BÁN HÀNG
            
            
            
            - Khi nhận hàng, nếu bạn gặp bất cứ vấn đề gì về sản phẩm, xin vui lòng nhắn tin để Lebro hỗ trợ bạn tốt nhất;
            
            - Lebro hỗ trợ đổi trả và miễn phí vận chuyển đối với sản phẩm lỗi do sản xuất trong 7 ngày đầu;
            
            - Hỗ trợ đổi kích thước/màu sắc (không hỗ trợ vận chuyển) trong 15 ngày từ khi nhận hàng (hàng còn nguyên tem mác và chưa qua sử dụng).',
                'featured' => 1
            ],
            ['product_name' => 'Giày đen T2', 'type_id' => 4, 'image' => 'product-4.jpg', 'price' => 340000, 'sale_price' => 40000, 'description' => 'Vỏ bánh caramel với nhân sữa trứng mềm', 'featured' => 1],
            ['product_name' => 'Giày đen T2', 'type_id' => 4, 'image' => 'product-4.jpg', 'price' => 340000, 'sale_price' => 40000, 'description' => 'Vỏ bánh caramel với nhân sữa trứng mềm', 'featured' => 1],
            ['product_name' => 'Giày đen T2', 'type_id' => 4, 'image' => 'product-4.jpg', 'price' => 340000, 'sale_price' => 40000, 'description' => 'Vỏ bánh caramel với nhân sữa trứng mềm', 'featured' => 1],
            ['product_name' => 'Giày đen T2', 'type_id' => 4, 'image' => 'product-4.jpg', 'price' => 340000, 'sale_price' => 40000, 'description' => 'Vỏ bánh caramel với nhân sữa trứng mềm', 'featured' => 1],
            ['product_name' => 'Áo khoác T5', 'type_id' => 2, 'image' => 'áo_khoác.jpg', 'price' => 300000, 'sale_price' => 40000, 'description' => 'Chất Vải Dù mềm mịn, Màu đen Chống Nước , Chống Tia Uv Hại Da.

            Khoác Dù 2 lớp Sẽ Giúp bạn Không Bị rát da,Hại Da khi di chuyển dưới trời nắng nóng lâu.
            
             Áo chống nắng  (Full size S, M, L, XL):
            • ngăn ngừa tia UV-400 theo tiêu chuẩn Nhật Bản.
            
            ---  Bảng size Áo: 
            
            📷Size S: Cân nặng: dưới 60kg
            Chiều cao: dưới 1m68.
            📷Size M: Cân nặng: dưới 70kg
            Chiều cao: dưới 1m72
            📷Size L: Cân nặng: dưới 80kg
            Chiều cao: dưới 1m78
            📷Size XL: Cân nặng: từ 80kg đến 85kg
            
            
            • Cam kết : 1 đổi 1 hoàn tiền 200% chất liệu ko tốt hay kiểu dáng ko đúng như hình.
            • Xuất xứ: việt nam
            • Chất liệu vải mịn tạo cảm giác cực kì mát mẻ.
            
            • Có thể mặc đi làm, đi chơi, đi phượt, du lịch, dã ngoại đều được, quan trọng là rất tiện lợi.
            •Form Unisex cho cả nam và nữ
            • Ngăn chặn 97% tác động của tia cực tím và hạn chế 99% ánh nắng tiếp xúc tới da.
            Vừa đẹp- Vừa tốt cho sức khoẻ- Vừa thời trang', 'featured' => 1],
            [
                'product_name' => 'Quần Jean bò xanh T52', 'type_id' => 1, 'image' => 'jean-3.png', 'price' => 800000, 'sale_price' => 400000, 'description' => '! Quần jeans nam với thiết kế mới thanh lịch trẻ trung hơn, mang lại sự tự tin tối đa cho người mặc trước những người xung quanh;

            ! Quần may từ jean nam chất bò cao cấp nên rất mềm và thoải mái khi mặc, đảm bảo sẽ không hề cảm thấy gò bó ngay cả khi di chuyển nhiều;
            
            ! Dáng quan jean nam ống côn trẻ trung ôm body tạo nên form cực chuẩn cho người mặc túi quần lớn rất thuận tiện cho việc đựng smart phone hoặc ví cỡ bự;
            
            ! Quần jeans nam đen màu sắc chuẩn được nhuộm kỹ đến hai lần giúp hạn chế tối đa việc phai màu khi sử dụng.
            
            
            
            - Màu sắc: Đen, xanh, xám đậm, xanh than;
            
            - Chất liệu: 65% linen + 35% cotton, mặt vải mịn màng, đường chỉ may tỉ mỉ, co giãn;
            
            - Thiết kế slimfit hơi ôm, trẻ trung phù hợp đi chơi, đi làm, công sở, các hoạt động hàng ngày.
            
            
            
            !!! KÍCH THƯỚC / SỐ ĐO !!!
            
            
            
            - Size 29 (S): 48-58kg, 160-168 cm
            
            - Size 30 (M): 59-62kg, 165-173 cm
            
            - Size 31 (L): 63-69kg, 169-179 cm
            
            - Size 32 (XL): 70-78kg, 175-182 cm
            
            - Size 33 (XXL):  79-85kg, 179-185 cm
            
            (Tham khảo kích thước vòng bụng, mông, gấu quần trong ảnh)
            
            
            
            !!! TRƯỚC KHI ĐẶT HÀNG !!!
            
            
            
            Khuyến khích bạn nhắn tin (chat) với Lebro để được tư vấn và gửi các ghi chú cần thiết.
            
            
            
            ☀ LƯU Ý / GHI CHÚ
            
            
            
            - Hình ảnh sản phẩm thật 100%, do Lebro chụp và quay;
            
            - Do điều kiện ánh sáng, cách cài đặt màn hình và hệ màu thay đổi giữa các dòng điện thoại,
             nên màu sắc thực tế của sản phẩm sẽ có đôi chút khác biệt so với hình ảnh (5-15%). Mong bạn thông cảm vì sự khác biệt này!
            
            
            
            ☀ BẢO HÀNH SAU BÁN HÀNG
            
            
            
            - Khi nhận hàng, nếu bạn gặp bất cứ vấn đề gì về sản phẩm, xin vui lòng nhắn tin để Lebro hỗ trợ bạn tốt nhất;
            
            - Lebro hỗ trợ đổi trả và miễn phí vận chuyển đối với sản phẩm lỗi do sản xuất trong 7 ngày đầu;
            
            - Hỗ trợ đổi kích thước/màu sắc (không hỗ trợ vận chuyển) trong 15 ngày từ khi nhận hàng (hàng còn nguyên tem mác và chưa qua sử dụng).',
                'featured' => 1
            ],
        ]);

        DB::table('protypes')->insert([
            ['type_image' => 'jean-1.jfif', 'type_name' => 'Quần Jeans'],
            ['type_image' => 'cat-1.jpg', 'type_name' => 'Áo'],
            ['type_image' => 'quan_tay.jpg', 'type_name' => 'Quần tây'],
            ['type_image' => 'áo_khoác.jpg', 'type_name' => 'Áo khoác'],
            ['type_image' => 'product-4.jpg', 'type_name' => 'Giày'],
            ['type_image' => 'camera-2.jfif', 'type_name' => 'Máy chụp ảnh'],
        ]);
    }
}
