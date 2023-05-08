<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProceedHistoriesDetailTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('proceed_histories_detail')->delete();
        
        \DB::table('proceed_histories_detail')->insert(array (
            0 => 
            array (
                'created_at' => '2023-05-04 00:00:00',
                'deleted_at' => NULL,
                'end_at' => '2023-05-04 00:00:00',
                'id' => 1,
                'order_no' => '000121-0000001-01122022',
                'payment_id' => 12,
                'price' => 2000,
                'send_at' => NULL,
                'sq_no' => 1,
                'start_at' => '2023-05-04 00:00:00',
                'subject_type' => 0,
                'tax_type' => 0,
                'type' => 0,
                'udpated_at' => '2023-05-04 00:00:00',
            ),
            1 => 
            array (
                'created_at' => '2023-05-04 00:00:00',
                'deleted_at' => NULL,
                'end_at' => '2023-05-04 00:00:00',
                'id' => 2,
                'order_no' => '000121-0000001-01122022',
                'payment_id' => 12,
                'price' => 3000,
                'send_at' => NULL,
                'sq_no' => 2,
                'start_at' => '2023-05-04 00:00:00',
                'subject_type' => 1,
                'tax_type' => 1,
                'type' => 0,
                'udpated_at' => '2023-05-04 00:00:00',
            ),
            2 => 
            array (
                'created_at' => '2023-05-04 00:00:00',
                'deleted_at' => NULL,
                'end_at' => '2023-05-04 00:00:00',
                'id' => 4,
                'order_no' => '000121-0000001-01122022',
                'payment_id' => 12,
                'price' => 500,
                'send_at' => NULL,
                'sq_no' => 3,
                'start_at' => '2023-05-04 00:00:00',
                'subject_type' => 2,
                'tax_type' => 0,
                'type' => 0,
                'udpated_at' => '2023-05-04 00:00:00',
            ),
            3 => 
            array (
                'created_at' => '2023-05-04 00:00:00',
                'deleted_at' => NULL,
                'end_at' => '2023-05-04 00:00:00',
                'id' => 5,
                'order_no' => '000121-0000001-01122022',
                'payment_id' => 12,
                'price' => 500,
                'send_at' => NULL,
                'sq_no' => 4,
                'start_at' => '2023-05-04 00:00:00',
                'subject_type' => 2,
                'tax_type' => 0,
                'type' => 0,
                'udpated_at' => '2023-05-04 00:00:00',
            ),
            4 => 
            array (
                'created_at' => '2023-05-04 00:00:00',
                'deleted_at' => NULL,
                'end_at' => '2023-05-04 00:00:00',
                'id' => 6,
                'order_no' => '000121-0000001-01122022',
                'payment_id' => 12,
                'price' => 1000,
                'send_at' => NULL,
                'sq_no' => 5,
                'start_at' => '2023-05-04 00:00:00',
                'subject_type' => 3,
                'tax_type' => 0,
                'type' => 0,
                'udpated_at' => '2023-05-04 00:00:00',
            ),
            5 => 
            array (
                'created_at' => '2023-05-04 00:00:00',
                'deleted_at' => NULL,
                'end_at' => '2023-05-04 00:00:00',
                'id' => 7,
                'order_no' => '000121-0000001-01122022',
                'payment_id' => 12,
                'price' => 400,
                'send_at' => NULL,
                'sq_no' => 6,
                'start_at' => '2023-05-04 00:00:00',
                'subject_type' => 4,
                'tax_type' => 0,
                'type' => 1,
                'udpated_at' => '2023-05-04 00:00:00',
            ),
            6 => 
            array (
                'created_at' => '2023-05-04 00:00:00',
                'deleted_at' => NULL,
                'end_at' => '2023-05-04 00:00:00',
                'id' => 8,
                'order_no' => '000121-0000001-01122022',
                'payment_id' => 12,
                'price' => 240,
                'send_at' => NULL,
                'sq_no' => 6,
                'start_at' => '2023-05-04 00:00:00',
                'subject_type' => 4,
                'tax_type' => 0,
                'type' => 1,
                'udpated_at' => '2023-05-04 00:00:00',
            ),
        ));
        
        
    }
}