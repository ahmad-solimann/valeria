<?php

namespace Database\Seeders;

use App\Models\CategoryDetails;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
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
        $jsonString = file_get_contents("C:\\xampp\htdocs\\valeria-sys\public\categories\categories.json");
        $data = json_decode($jsonString, true);
        for($i=0; $i< sizeof($data);$i++) {
            $this->arrayJsonToDB($data[$i], null);
        }
    }
    public function insertCategory ($categoryName,$parentId){
        $id = DB::table('categories')->insertGetId([
                'name' => $categoryName,
                'category_details_id' => $this->getCategoryDetailsId(strtolower($categoryName)),
                'parent_id' => $parentId,
            ]);
        return $id;
    }

    public function arrayJsonToDB ($data,$parentId = null){
            foreach($data as $category => $value){
                if ($category!='name') {
                    $parentId= $this->insertCategory($category,$parentId);
                    foreach ($data[$category] as $index1 => $val2) {
                        $this->arrayJsonToDB($val2, $parentId);
                    }
                }
                else {
                    if (isset($value))
                    $parentId =$this->insertCategory($value,$parentId);
                }
            }
        }

        public function getCategoryDetailsId ($categoryName){
           $categoryDetails= CategoryDetails::where('name',$categoryName)->get()->first();
           if (isset($categoryDetails))
           return $categoryDetails->id;

           return null;
        }

}
