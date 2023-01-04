<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeliveryTypeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('delivery_type')->delete();
        
        
        
    }
}