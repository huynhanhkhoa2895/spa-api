<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('service')->insert([
            [
                'name' => "Tắm trắng",
                'img' => 'b1.png',
                'description'=>'Công nghệ phi thuyền thực sự là sự tổng hợp tuyệt với nhất của các phương pháp làm đẹp và chăm sóc da tiên tiến và hiệu quả nhất hiện nay, mang đến làn da trắng hồng tự nhiên, tuyệt đối an toàn cho da.',
                'content' => 'Ánh sáng hồng ngoại với 96 hạt ánh sáng gồm 7 màu ở 8 đầu soi phân bố đa chiều sẽ giúp da hấp thu dưỡng chất nhanh gấp 5 lần so với các phương pháp thông thường. Tùy vào cơ địa của mỗi người, ngay sau buổi tắm trắng đầu tiên da bật ít nhất 1-2 tone so với màu da cũ.',
            ],
            [
                'name' => "Lột Mụn",
                'img' => 'b2.png',
                'description' => 'Dịch vụ Điều Trị Mụn tại SeoulSpa dứt điểm nỗi lo về mụn ở mặt, mụn lưng với các liệu trình đúng chuẩn Y khoa, chuyên sâu về da liễu. Tư vấn miễn phí ngay hôm nay...',
                'content' => 'Mụn là tình trạng chung và phổ biến ở rất nhiều người, vì mụn không chừa bất kỳ ai đặc biệt là ở độ tuổi dậy thì. Tuy mụn không ảnh hưởng đến sức khỏe nhưng làm mất thẩm mỹ trên khuôn mặt rất lớn, khiến chúng ta tự ti, mất tự tin trong giao tiếp, ảnh hưởng gián tiếp đến tinh thần và cuộc sống.',
            ],
            [
                'name' => "Trị Thâm",
                'img' => 'b3.png',
                'description' => 'Điều trị nám là một trong những dịch vụ “đinh” tại SeoulSpa. Trị tận gốc chân nám, hỗ trợ làm đều màu da, giúp da căng bóng, mịn mướt và tươi trẻ hơn sau liệu trình.',
                'content' => 'Bạn có cảm thấy khó chịu và mất tự tin bởi những vết thâm trên mặt và trên cơ thể không? Bạn có muốn trị thâm mụn nhanh chóng để lấy lại làn da trắng sáng tươi mới hơn không? Hãy để chúng tôi giúp bạn điều đó, với liệu trình trị mụn thâm hiệu quả trong thời gian ngắn. Giúp xử lý các vết thâm, se khít lỗ chân lông, sáng khỏe làn da. Cam kết hoàn tiền nếu kết quả điều trị không như lời tư vấn, hãy cùng tìm hiểu chi tiết hơn về liệu trình này qua bài viết dưới nhé!',
            ],
            [
                'name' => "Xóa Tàn Nhan",
                'img' => 'b4.png',
                'description' => 'Điều trị sẹo rỗ công nghệ PRP 4.0 là dịch vụ điều trị sẹo rỗ top 1 tại SeoulSpa. Mọi sẹo rỗ do mụn đều được san phẳng hiệu quả, mức độ phục hồi, tái tạo da nhanh chóng.',
                'content' => 'TML Spa bằng công nghệ Laser chỉ với một lần bắn duy nhất, các hạt melanin bị loại bỏ sẽ vỡ ra và đào thải qua đường tự nhiên của cơ thể. Đối với tình trạng nhiều tàn nhang sẽ ',

            ],
            [
                'name' => "Massage",
                'img' => 'b5.png',
                'description' => 'Cảm nhận ngay làn da không khuyết điểm với các liệu trình chăm sóc da từ cơ bản đến chuyên sâu như: hút chì thải độc da; Carboxy - thải độc da hoặc Chăm sóc da Luxury…',
                'content' => 'Da đã bảo vệ cơ thể trước các tác nhân của môi trường, không những thế da còn tạo nên vẻ đẹp của chúng ta. Do đó, không có lý do gì mà bạn lại không bảo vệ và chăm sóc da thường xuyên hơn. TML Spa khuyên bạn nên chăm sóc da để luôn giữ được một làn da khỏe mạnh, sáng mịn mỗi ngày. Chúng tôi cam kết với các dịch vụ chăm sóc da mặt tại TML bạn sẽ hài lòng với kết quả mà chúng tôi đem lại cho làn da của bạn',

            ],
        ]);
    }
}
