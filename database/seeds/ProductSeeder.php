<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')
            ->insert(
                [
                    'name' => 'tenis',
                    'description' => 'calzado casual',
                    'price' => 50000

                ]
            );
    }
}
