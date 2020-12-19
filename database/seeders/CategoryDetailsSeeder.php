<?php

namespace Database\Seeders;

use App\Models\CategoryDetails;
use Illuminate\Database\Seeder;

class CategoryDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seeding();

    }

    public function seeding () {
        $jsonString = file_get_contents("C:\\xampp\htdocs\\valeria-sys\public\storage\categories\categorydetails.json");
        $data = json_decode($jsonString, true);
        for($i=0; $i< sizeof($data);$i++) {
            $categoryDetails = new CategoryDetails($data[$i]);
            $categoryDetails->save();
        }
    }
}
