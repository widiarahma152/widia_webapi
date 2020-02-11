<?php

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \App\Teacher::create([
				'nama' => 'widia',
				'alamat'=>'cikijing',
				'jk' => 'P'
			]);

        \App\Teacher::create([
				'nama' => 'dina',
				'alamat'=>'Maja',
				'jk' => 'P'
			]);
    }
}
