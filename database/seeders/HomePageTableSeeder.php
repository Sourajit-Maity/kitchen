<?php

namespace Database\Seeders;
use App\Models\Pages;
use App\Models\Homepage;
use Illuminate\Database\Seeder;

class HomePageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cms = Pages::whereSlug('home_page')->first();
        $datas = [
            "pages_id" => $cms->id,
            "banner_heading" => "CUSTOM MADE LETTERING & DECALS",
            "banner_sub_heading" => "OUTDOOR MARINE & VEHICLE QUALITY",
            "banner_content" => "FRIENDLY PRICES!",
            "banner_image" => "frontend_assets/images/banner-col-image.png",
            "content1_heading" => "Live Konsciously",
            "content1_text" => "<ul>
            <li>
                On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.. </li>
            <li>
                These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being. </li>           
            </ul>",
			"content1_image" => "frontend_assets/images/banner-col-image.png",
			
			 "content2_heading" => "Live Konsciously",
            "content2_text" => "<ul>
            <li>
                On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.. </li>
            <li>
                These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being. </li>           
            </ul>",
			"content2_image" => "frontend_assets/images/banner-col-image.png",
			
			
			 "content3_heading" => "Live Konsciously",
            "content3_text" => "<ul>
            <li>
                On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.. </li>
            <li>
                These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being. </li>           
            </ul>",
			"content3_image" => "frontend_assets/images/banner-col-image.png",
			
			
			 "content4_heading" => "Live Konsciously",
            "content4_text" => "<ul>
            <li>
                On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.. </li>
            <li>
                These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being. </li>           
            </ul>",
			"content4_image" => "frontend_assets/images/banner-col-image.png",
			


        ];
        HomePage::create($datas);
    }
}
