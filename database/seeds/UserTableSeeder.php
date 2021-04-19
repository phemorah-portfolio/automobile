<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // DB::table('users')->delete();
      $userRecords = [
          [
            'id'=>2,
            'username'=>'phemorah2',
            'password'=>'$2y$10$lQpEcGgHb39rSSCQpHUyVO4Eu77tMH66dgL25QKglP/mDoMizNKwO',
            'role'=>'developer',
            'employee_id'=>1,
            'created'=>date('Y-m-d h:i:s')
          ],
      ];
      DB::table('users')->insert($userRecords);
      // foreach($adminRecords as $key => $record) {
      //     \App\Admin::create($record);
      // }
    }
}
