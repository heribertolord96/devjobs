<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VacanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* 
        ['HTML5', 'CSS3', 'CSSGrid', 'Flexbox', 'JavaScript', 
        'jQuery', 'Node', 'Angular', 'VueJS', 'ReactJS', 'React Hooks', 'Redux',
         'Apollo', 'GraphQL', 'TypeScript', 'PHP', 'Laravel', 'Symfony', 'Python', 'Django', 'ORM', 'Sequelize', 'Mongoose', 'SQL', 'MVC', 'SASS', 'WordPress', 'Express', 'Deno', 'React Native', 'Flutter', 'MobX', 'C#', 'Ruby on Rails']
         */


        DB::table('vacantes')->insert([
            'titulo' => "CSS editor",
            'imagen' => "https://placekitten.com/g/500/500",
            'descripcion' => "Desarrollador frontend y maquetador con habilidades bbien ergas en eel c s s",
            'skills' => "HTML5, CSS3, CSSGrid, Flexbox, JavaScript",
            'categoria_id' => "2", //7
            'experiencia_id' => "3", //8
            'ubicacion_id' => "3", //7
            'salario_id' => "3", //4
            'user_id' => "1",
            'activa' => 1
        ]);

        DB::table('vacantes')->insert([
            'titulo' => "js master editor",
            'imagen' => "https://placekitten.com/g/500/500",
            'descripcion' => "Desarrollador frontend especialista en css",
            'skills' => "Angular, 'VueJS, 'ReactJS",
            'categoria_id' => "2", //7
            'experiencia_id' => "3", //8
            'ubicacion_id' => "3", //7
            'salario_id' => "3", //4
            'user_id' => "1",
            'activa' => 1
        ]);
    }
}
