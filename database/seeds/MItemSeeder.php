<?php

use Illuminate\Database\Seeder;

class MItemSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('m_items')->truncate();
        $datas = [
            ['1', '商品名1', '500',]
        ];

        foreach ($datas as $data) {
            DB::table('m_items')->insert([
                'id' => $data[0]
                , 'item_name' => $data[1]
                , 'default_price' => $data[2]
                , 'created_at' => NULL
                , 'updated_at' => NULL

            ]);
        }

    }
}
