<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Info extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('info')->insert([
            [
                "cpf" => "16798125050",
                "genero" => 'M',
                "ano_nascimento" => 1976
            ],
            [
                "cpf" => "59875804045",
                "genero" => 'M',
                "ano_nascimento" => 1960
            ],
            [
                "cpf" => "04707649025",
                "genero" => 'F',
                "ano_nascimento" => 1988
            ],
            [
                "cpf" => "21142450040",
                "genero" => 'M',
                "ano_nascimento" => 1954
            ],
            [
                "cpf" => "83257946074",
                "genero" => 'F',
                "ano_nascimento" => 1970
            ],
            [
                "cpf" => "07583509025",
                "genero" => 'M',
                "ano_nascimento" => 1972
            ],
        ]);
    }
}