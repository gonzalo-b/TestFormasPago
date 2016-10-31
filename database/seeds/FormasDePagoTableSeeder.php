<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class FormasDePagoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('formas_de_pago')->truncate();

        DB::table('formas_de_pago')->insert([
            'detalle' => 'Banco Citi',
            'tipofpago' => 'B',
            'diferido' => '1',
            'impcheque' => '1',
        ]);

        DB::table('formas_de_pago')->insert([
            'detalle' => 'Banco Macro',
            'tipofpago' => 'B',
            'diferido' => '1',
            'impcheque' => '0',
        ]);

        DB::table('formas_de_pago')->insert([
            'detalle' => 'Caja 1',
            'tipofpago' => 'E',
        ]);

        DB::table('formas_de_pago')->insert([
            'detalle' => 'Banco Hipotecario',
            'tipofpago' => 'B',
            'diferido' => '1',
            'impcheque' => '0',
        ]);

        DB::table('formas_de_pago')->insert([
            'detalle' => 'Caja Dolares',
            'tipofpago' => 'M',
        ]);
    }
}
