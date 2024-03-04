<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelSeeder extends Seeder
{
    
    public function run(): void
    {
        $niveles = ['PRIMERO','SEGUNDO','TERCERO','QUARTO','QUINTO','SEXTO'];
        foreach($niveles as $nivel){
            DB::table('niveles')->insert([
                'nombre' =>$nivel
            ]);
        }
    }
}
