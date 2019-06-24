<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MCustomerSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('m_customers')->truncate();
        $data_list = [
            [1,'顧客氏名','コキャクカナシメイ','000','1111','2222','777','8888','9999','123456','東京都','埼玉区','住所1','住所2']
        ];
        foreach ($data_list as $data) {
            DB::table('m_customers')->insert([
                'id' => $data[0],
                'customer_name' => $data[1],
                'customer_kana_name' => $data[2],
                'tel_no1' => $data[3],
                'tel_no2' => $data[4],
                'tel_no3' => $data[5],
                'fax_no1' => $data[6],
                'fax_no2' => $data[7],
                'fax_no3' => $data[8],
                'post_no' => $data[9],
                'prefectures' => $data[10],
                'address1' => $data[11],
                'address2' => $data[12],
                'created_at' => NULL,
                'updated_at' => NULL
            ]);

        }
    }
}
