<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'product_name' => 'Starbucks Espresso',
            'product_price' => '70000',
            'product_img' => 'product-1.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => 'Starbucks là một trong những hãng sản xuất cafe lớn nhất trên thế giới. Espresso của Starbucks có vị đắng mạnh mẽ và được phục vụ trong nhiều loại đồ uống.',
            'product_feature' => '1',
            'product_status' => '0',
            'type_id' => '1',
            'manu_id' => '1'
        ]);
        DB::table('products')->insert([
            'product_name' => 'Lavazza Qualita Rossa',
            'product_price' => '60000',
            'product_img' => 'product-2.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => 'Lavazza là một hãng sản xuất cafe nổi tiếng của Italy. Qualita Rossa là một loại cafe nóng được pha từ hạt Arabica và Robusta, có vị đắng và hương thơm cay đặc trưng.',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '1',
            'manu_id' => '2'
        ]);
        DB::table('products')->insert([
            'product_name' => 'Illy Espresso',
            'product_price' => '40000',
            'product_img' => 'product-3.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => ' Illy là một hãng sản xuất cafe nổi tiếng của Italy, với hương vị đắng và đậm đà. Espresso của Illy có thể được uống đơn hoặc được sử dụng để tạo ra các loại đồ uống phức tạp khác.',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '1',
            'manu_id' => '3'
        ]);

        DB::table('products')->insert([
            'product_name' => "Dunkin' Donuts Original Blend",
            'product_price' => '35000',
            'product_img' => 'product-4.jpg',
            'product_qty' => '40',
            'product_sold' => '0',
            'product_description' => 'Dunkin Donuts là một trong những hãng sản xuất cafe lớn nhất tại Hoa Kỳ. Original Blend của họ có vị đắng mạnh, đậm đà và hơi ngọt.',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '1',
            'manu_id' => '4'
        ]);

        DB::table('products')->insert([
            'product_name' => "Peet's Coffee Major Dickason's Blend",
            'product_price' => '40000',
            'product_img' => 'product-5.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => "Peet's Coffee là một hãng sản xuất cafe nổi tiếng tại Hoa Kỳ. Major Dickason's Blend là một loại cafe đậm đà, có hương vị cay và ngọt.",
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '1',
            'manu_id' => '5'
        ]);

        DB::table('products')->insert([
            'product_name' => 'Nespresso',
            'product_price' => '75000',
            'product_img' => 'product-6.jpg',
            'product_qty' => '60',
            'product_sold' => '0',
            'product_description' => 'Nespresso là một thương hiệu cafe nổi tiếng của Thụy Sĩ, sản xuất ra các loại cafe được đóng gói sẵn trong hộp nhôm. Các loại cafe của Nespresso có hương vị đặc trưng từ các hạt Arabica và Robusta.',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '1',
            'manu_id' => '6'
        ]);

        DB::table('products')->insert([
            'product_name' => 'Folgers Classic Roast',
            'product_price' => '25000',
            'product_img' => 'product-7.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => 'Folgers là một trong những thương hiệu cafe lớn nhất tại Hoa Kỳ. Classic Roast của họ là một loại cafe nóng đơn giản, có vị đắng mạnh và hương thơm đặc trưng.',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '1',
            'manu_id' => '7'
        ]);

        DB::table('products')->insert([
            'product_name' => 'Tim Hortons Original Blend',
            'product_price' => '20000',
            'product_img' => 'product-8.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => 'Tim Hortons là một trong những hãng sản xuất cafe lớn nhất tại Canada. Original Blend của họ có vị đắng nhẹ, hơi ngọt và có hương thơm cà phê đặc trưng.',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '1',
            'manu_id' => '8'
        ]);

        DB::table('products')->insert([
            'product_name' => 'Caribou Coffee Caribou Blend',
            'product_price' => '25000',
            'product_img' => 'product-9.jpg',
            'product_qty' => '40',
            'product_sold' => '0',
            'product_description' => 'Caribou Coffee là một hãng sản xuất cafe nổi tiếng của Hoa Kỳ. Caribou Blend của họ có vị đắng nhẹ, hơi ngọt và có hương thơm cà phê đặc trưng.',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '1',
            'manu_id' => '9'
        ]);

        DB::table('products')->insert([
            'product_name' => 'Maxwell House Original Roast',
            'product_price' => '55000',
            'product_img' => 'product-10.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => ' Maxwell House là một thương hiệu cafe nổi tiếng tại Hoa Kỳ. Original Roast của họ là một loại cafe đơn giản, có vị đắng mạnh và h',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '1',
            'manu_id' => '10'
        ]);

        DB::table('products')->insert([
            'product_name' => 'Cold Brew',
            'product_price' => '15000',
            'product_img' => 'product-11.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => 'Cold Brew: là loại cafe được ngâm lạnh trong nước từ 12 đến 24 giờ, tạo ra hương vị đậm đà và thơm ngon. ',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '3',
            'manu_id' => '1'
        ]);
        DB::table('products')->insert([
            'product_name' => 'Iced Latte',
            'product_price' => '20000',
            'product_img' => 'product-12.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => 'Iced Latte: là một sự kết hợp giữa espresso và sữa, được thêm đá và đường để tạo ra một loại thức uống mát lạnh ngon miệng. ',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '3',
            'manu_id' => '4'
        ]);
        DB::table('products')->insert([
            'product_name' => 'Frappuccino',
            'product_price' => '25000',
            'product_img' => 'product-13.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => 'Frappuccino: là một loại thức uống cafe đông lạnh được pha chế với đá xay nhuyễn, sữa và các hương vị khác như caramel, mocha, hoặc vani. ',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '3',
            'manu_id' => '4'
        ]);
        DB::table('products')->insert([
            'product_name' => 'Vietnamese Iced Coffee',
            'product_price' => '35000',
            'product_img' => 'product-14.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => 'Vietnamese Iced Coffee: được pha từ cafe robusta rang xay, đường và sữa đặc, được pha chế trong một cái phin và được đổ vào đá',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '3',
            'manu_id' => '11'
        ]);
        DB::table('products')->insert([
            'product_name' => 'Iced Mocha',
            'product_price' => '20000',
            'product_img' => 'product-15.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => 'Iced Mocha: là sự kết hợp giữa espresso, sô cô la và sữa, được thêm đá và đường để tạo ra một thức uống mát lạnh thơm ngon. ',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '3',
            'manu_id' => '1'
        ]);
        DB::table('products')->insert([
            'product_name' => 'Nitro Cold Brew',
            'product_price' => '40000',
            'product_img' => 'product-16.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => 'Nitro Cold Brew: là một loại cafe ngâm lạnh, được thêm khí nitơ để tạo ra một loại cafe uống lạnh mịn màng và đậm đà.',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '3',
            'manu_id' => '5'
        ]);
        DB::table('products')->insert([
            'product_name' => 'Iced Americano',
            'product_price' => '20000',
            'product_img' => 'product-17.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => 'Iced Americano: là loại cafe đen, pha chế bằng cách thêm nước đá vào espresso để tạo ra một loại thức uống lạnh mát ngon miệng. ',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '3',
            'manu_id' => '9'
        ]);
        DB::table('products')->insert([
            'product_name' => 'Affogato',
            'product_price' => '35000',
            'product_img' => 'product-18.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => 'Affogato: là một thức uống Ý truyền thống, là sự kết hợp giữa một phần kem và một phần cafe espresso, tạo ra một loại thức uống đáng yêu và ngon miệng.',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '3',
            'manu_id' => '3'
        ]);
        DB::table('products')->insert([
            'product_name' => 'Thai Iced Coffee',
            'product_price' => '35000',
            'product_img' => 'product-19.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => 'Thai Iced Coffee: được pha từ cafe robusta rang xay, đường, sữa đặc và gia vị như đậu khấu, hạt cumin hoặc hạt tiêu đen, được đổ vào đá.',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '3',
            'manu_id' => '11'
        ]);
        DB::table('products')->insert([
            'product_name' => 'Iced Caramel Macchiato',
            'product_price' => '15000',
            'product_img' => 'product-20.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => 'Iced Caramel Macchiato là một loại đồ uống cafe lạnh phổ biến, thường được làm từ espresso, sữa tươi, caramel và đá. Thức uống này thường có màu nâu đậm với lớp kem phía trên và nổi bật với vị caramel ngọt ngào.',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '3',
            'manu_id' => '9'
        ]);
        DB::table('products')->insert([
            'product_name' => 'Arabica',
            'product_price' => '70000',
            'product_img' => '6993.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => 'Arabica: được coi là loại hạt cafe cao cấp nhất, Arabica có hương vị ngọt ngào, thường có một chút đắng nhẹ. ',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '2',
            'manu_id' => '2'
        ]);
        DB::table('products')->insert([
            'product_name' => 'Robusta',
            'product_price' => '90000',
            'product_img' => '6993.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => 'Robusta có hương vị đắng và hơi đất, thường được sử dụng trong sản xuất cafe espresso.',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '2',
            'manu_id' => '11'
        ]);
        DB::table('products')->insert([
            'product_name' => 'Kona',
            'product_price' => '120000',
            'product_img' => '6993.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => 'Kona: được trồng trên đảo Hawaii, loại hạt cafe này có hương vị đặc trưng, thơm và ngọt ngào',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '2',
            'manu_id' => '12'
        ]);
        DB::table('products')->insert([
            'product_name' => 'Liberica',
            'product_price' => '130000',
            'product_img' => '6993.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => 'Liberica có hương vị độc đáo, thường được sử dụng để pha cafe theo phong cách cổ điển',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '2',
            'manu_id' => '11'
        ]);
        DB::table('products')->insert([
            'product_name' => 'Excelsa',
            'product_price' => '110000',
            'product_img' => '6993.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => 'Excelsa có hương vị độc đáo và hơi đắng, được sử dụng cho nhiều loại đồ uống khác nhau.',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '2',
            'manu_id' => '11'
        ]);
        DB::table('products')->insert([
            'product_name' => 'Java',
            'product_price' => '150000',
            'product_img' => '6993.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => 'Java có hương vị đậm đà, mạnh mẽ, thường được sử dụng để pha cafe đen. ',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '2',
            'manu_id' => '5'
        ]);
        DB::table('products')->insert([
            'product_name' => 'Sumatra',
            'product_price' => '180000',
            'product_img' => '6993.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => 'Sumatra có hương vị đặc trưng, độ đắng và hơi cay, thường được sử dụng để pha cafe đen và espresso. ',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '2',
            'manu_id' => '9'
        ]);
        DB::table('products')->insert([
            'product_name' => 'Ethiopia Yirgacheffe',
            'product_price' => '220000',
            'product_img' => '6993.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => 'Ethiopia Yirgacheffe có hương vị đặc trưng, thường có hương vị trái cây và mùi thơm của hoa. ',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '2',
            'manu_id' => '1'
        ]);
        DB::table('products')->insert([
            'product_name' => 'Colombia',
            'product_price' => '145000',
            'product_img' => '6993.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => 'Colombia có hương vị đậm đà, độ đắng vừa phải và hơi chua.',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '2',
            'manu_id' => '7'
        ]);
        DB::table('products')->insert([
            'product_name' => 'Brazil',
            'product_price' => '170000',
            'product_img' => '6993.jpg',
            'product_qty' => '50',
            'product_sold' => '0',
            'product_description' => 'Brazil có hương vị đậm đà, thường có hương vị chocolate và độ đắng vừa phải. ',
            'product_feature' => '0',
            'product_status' => '0',
            'type_id' => '2',
            'manu_id' => '3'
        ]);
    }
}
