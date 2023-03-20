<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('blogs')->insert([
            'blog_title' => 'Our Story',
            'blog_description' => 'Một ngày đẹp trời, tôi đã tình cờ phát hiện ra một quán nước nhỏ, nằm ở một con hẻm nhỏ đầy hoa lá. Khi bước vào, không khí trong quán được đánh thức bởi hương thơm đặc trưng của cafe pha lê nguyên chất. Nhân viên phục vụ tươi cười đón tiếp tôi và giới thiệu về những loại cafe đặc biệt mà quán đang cung cấp.

            Tôi đã quyết định thử một ly cafe đen nguyên chất và không lâu sau đó, một cốc cafe đen hương thơm được đặt trước mặt tôi. Mùi hương thơm lừng lẫy của cafe, cùng vị đắng ngọt thật sự khiến tôi bị cuốn hút ngay lập tức.
            
            Khi tôi hỏi về cách pha chế cafe đó, nhân viên phục vụ tận tình giải thích rằng quán của họ chỉ sử dụng những hạt cafe nguyên chất được lựa chọn kỹ càng từ những địa điểm sản xuất chất lượng nhất trên thế giới. Họ sử dụng phương pháp rang hạt truyền thống để giữ cho hương vị và mùi thơm của cafe được giữ nguyên nhất có thể.
            
            Sau đó, tôi đã thử một số loại cafe pha trộn khác nhau, như cafe latte với sữa tươi và cà phê espresso đậm đà. Tất cả đều rất tuyệt vời và mang đến cảm giác khó quên.
            
            Quán nước của họ cũng có một không gian thoáng mát và sang trọng, được trang trí với những bức tranh nghệ thuật đầy tinh tế và những chiếc đèn lồng mềm mại. Tôi đã tìm thấy một nơi yên tĩnh để thư giãn và tận hưởng những ly cafe thơm ngon.
            
            Quán nước này đã trở thành một trong những địa điểm yêu thích của tôi để thư giãn và tận hưởng những ly cafe ngon. Tôi sẽ quay lại đây mỗi khi cảm thấy mệt mỏi hoặc cần tìm một nơi để thư giãn cùng những ly cafe tuyệt vời.',
            'blog_author' => 'Hiroe',
            'blog_img' => 'carousel-1.jpg'
        ]);
        DB::table('blogs')->insert([
            'blog_title' => 'Our Vision',
            'blog_description' => 'Là một tín đồ của cafe, tôi đã thử nhiều quán cafe khác nhau trong thành phố này. Tuy nhiên, không có quán nào khiến tôi cảm thấy thực sự thoải mái và ấm cúng như quán nước này.

            Quán nước này có không gian rất rộng rãi và sáng sủa, với những chiếc đèn nhỏ vàng lung linh, tạo ra một không khí ấm áp và thân thiện. Tôi thường ngồi đọc sách và uống cafe vào buổi sáng, và quán nước này chính là nơi tuyệt vời để tôi thưởng thức ly cafe đầu tiên của ngày.
            
            Điều tôi yêu thích nhất ở đây là những người phục vụ. Họ rất thân thiện và nhiệt tình, luôn cười và nói chuyện với khách hàng. Họ thực sự quan tâm đến tôi và luôn đảm bảo rằng tôi có một trải nghiệm tuyệt vời ở quán nước này.
            
            Cafe ở đây cũng rất đặc biệt. Quán có rất nhiều loại cafe khác nhau để bạn lựa chọn, từ cafe đen truyền thống cho đến những loại cafe đặc biệt như cafe sữa đá hay caramel macchiato. Tất cả đều được chế biến từ những hạt cafe ngon nhất và được phục vụ trong những ly tuyệt đẹp.
            
            Ngoài ra, quán cũng có rất nhiều đồ uống khác như trà và sinh tố, cũng như các loại bánh ngọt và món ăn nhẹ. Tất cả đều được làm từ những nguyên liệu tươi ngon nhất và được phục vụ trong một không gian đẹp mắt và thoải mái.
            
            Nếu bạn đang tìm kiếm một quán nước cafe với không gian ấm cúng, những người phục vụ thân thiện và cafe ngon, thì đừng bỏ qua quán nước này. Tôi tin chắc rằng bạn sẽ yêu thích nó như tôi đã làm. Hãy ghé thăm quán nước này và trải nghiệm một ly cafe tuyệt vời!',
            'blog_author' => 'Hiroe',
            'blog_img' => 'carousel-2.jpg'
        ]);
    }
}
