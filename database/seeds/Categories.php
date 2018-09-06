<?php

use Illuminate\Database\Seeder;
use App\Category;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat1 = new Category();
        $cat1->title="Mulsiman Wear";
        $cat1->description="This Categories information will be revealed soon!";
        $cat1->imagePath="";
        $cat1->save();

        $cat2 = new Category();
        $cat2->title="Square";
        $cat2->description="This Categories information will be revealed soon!";
        $cat2->imagePath="";
        $cat2->save();

        $cat3 = new Category();
        $cat3->title="Scarves";
        $cat3->description="This Categories information will be revealed soon!";
        $cat3->imagePath="";
        $cat3->save();



    }
}
