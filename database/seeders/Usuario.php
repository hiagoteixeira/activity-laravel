<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert(
            [
                [
                    "cpf" => "16798125050",
                    "nome" => "Luke Skywalker",
                ],
                [
                    "cpf" => "59875804045",
                    "nome" => "Bruce Wayne",
                ],
                [
                    "cpf" => "04707649025",
                    "nome" => "Diane Prince",
                ],
                [
                    "cpf" => "21142450040",
                    "nome" => "Bruce Banner",
                ],
                [
                    "cpf" => "83257946074",
                    "nome" => "Harley Quinn",
                ],
                [
                    "cpf" => "07583509025",
                    "nome" => "Peter Parker",
                ],
            ]
        );
    }
}