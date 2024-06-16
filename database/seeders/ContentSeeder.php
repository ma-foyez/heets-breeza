<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            'website_name' => 'Heets Breeze',
            'website_slogan' => 'Heat Up Your Vaping Experience with Heets Breeze!',
            'website_logo' => 'heets_breeze.png', // Updated logo file name
            'website_favicon' => 'favicon.png', // Updated favicon file name
            'website_description' => 'Welcome to HEATS, your ultimate source for premium e-cigarettes and vaping products. We are committed to providing you with the best quality devices and accessories to enhance your vaping experience. Discover a wide range of products designed to meet your needs and preferences, ensuring a satisfying and enjoyable experience every time.',
            'website_email' => 'info@heetsbreeze.com', // Updated email
            'website_phone' => '+971 52 462 7441',
            'whatsapp_number' => '+971524627441',

            'facebook_page' => 'https://www.facebook.com',
            'instagram_page' => 'https://www.instagram.com',
            'office_address' => 'Dubai International City, UAE',
            'about_content' => 'At HEATS, we are passionate about offering top-notch e-cigarette products that cater to both beginners and experienced vapers. Our mission is to promote a healthier alternative to traditional smoking by providing reliable and innovative vaping solutions. Explore our collection and join the HEATS community for an unparalleled vaping journey.',
            'about_image' => 'about-image.jpg', // Updated about image file name
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
