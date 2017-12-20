<?php

use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /*  for($i = 1; $i < 20; $i++)
        {
            DB::table('departments')->insert([
                'code' => str_random(10),
                'name' => str_random(10),
            ]);

        }*/
        factory(App\Departments::class,50)->create();


    }
}
