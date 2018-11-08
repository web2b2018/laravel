<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /**
        * Use Query builder
        */
      // DB::table('admins')->insert([
      //       'name' => str_random(10),
      //       'email' => str_random(10).'@gmail.com',
      //       'job_title' => str_random(10),
      //       'password' => bcrypt('secret'),
      //   ]);

      /**
      * Use Eloquent
      */
      // \App\Admin::create([
      //   'name'	=> 'Ana',
      //   'email'	=> 'ana@gmail.com',
      //   'job_title' => 'admin',
      //   'password'	=> bcrypt('secret')
      // ]);

      /**
      * Use Model sqlite_factory
      */
      factory(\App\Admin::class, 5)->create();
    }
}
