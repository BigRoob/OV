<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            ['name' => 'Acre', 'abbreviation' => 'AC'],
            ['name' => 'Alagoas', 'abbreviation' => 'AL'],
            ['name' => 'Amapa', 'abbreviation' => 'AP'],
            ['name' => 'Amazonas', 'abbreviation' => 'AM'],
            ['name' => 'Bahia', 'abbreviation' => 'BA'],
            ['name' => 'Ceara', 'abbreviation' => 'CE'],
            ['name' => 'Distrito Federal', 'abbreviation' => 'DF'],
            ['name' => 'Espirito Santo', 'abbreviation' => 'ES'],
            ['name' => 'Goias', 'abbreviation' => 'GO'],
            ['name' => 'Maranhão', 'abbreviation' => 'MA'],
            ['name' => 'Mato Grosso', 'abbreviation' => 'MT'],
            ['name' => 'Mato Grosso do Sul', 'abbreviation' => 'MS'],
            ['name' => 'Minas Gerias', 'abbreviation' => 'MG'],
            ['name' => 'Para', 'abbreviation' => 'PA'],
            ['name' => 'Paraiba', 'abbreviation' => 'PB'],
            ['name' => 'Parana', 'abbreviation' => 'PR'],
            ['name' => 'Pernambuco', 'abbreviation' => 'PE'],
            ['name' => 'Piaui', 'abbreviation' => 'PI'],
            ['name' => 'Rio de Janeiro', 'abbreviation' => 'RJ'],
            ['name' => 'Rio Grande do Norte', 'abbreviation' => 'RN'],
            ['name' => 'Rio Grande do Sul', 'abbreviation' => 'RS'],
            ['name' => 'Rondonia', 'abbreviation' => 'RO'],
            ['name' => 'Roraima', 'abbreviation' => 'RR'],
            ['name' => 'Santa Catarina', 'abbreviation' => 'SC'],
            ['name' => 'São Paulo', 'abbreviation' => 'SP'],
            ['name' => 'Sergipe', 'abbreviation' => 'SE'],
            ['name' => 'Tocantins', 'abbreviation' => 'TO'],

        ]);
    }
}
