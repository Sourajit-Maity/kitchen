<?php

namespace Database\Seeders;
use App\Models\Pages;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                "name" => "Home",
                "slug" => "home_page",
            ],
            [
                "name" => "About",
                "slug" => "about_page",
            ],
            [
                "name" => "Contact",
                "slug" => "contact_page",
            ],
        ];
        foreach($datas as $data){
            Pages::create($data);
        }
    }
}
