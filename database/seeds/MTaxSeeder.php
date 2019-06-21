<?php

use Illuminate\Database\Seeder;

class MTaxSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('m_taxes')->truncate();
        $datas = [
            ['1', '0.08', NULL, NULL]
            ,    ['2', '0.10', NULL, NULL]
        ];

        foreach ($datas as $data) {
            DB::table('m_taxes')->insert([
                'id' => $data[0]
                , 'tax_rate' => $data[1]
                , 'created_at' => $data[2]
                , 'updated_at' => $data[3]

            ]);
        }

    }
}
