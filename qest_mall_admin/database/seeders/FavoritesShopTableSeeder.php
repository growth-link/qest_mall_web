<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FavoritesShopTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('favorites_shop')->delete();
        
        
        
    }
}