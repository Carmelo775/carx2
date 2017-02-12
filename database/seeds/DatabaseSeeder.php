<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$u = new User;
        $u->id = 1;
        $u->name = 'admin';
        $u->email = 'admin@gmail.com';
        $u->password = \Hash::make('123456');
        $u->role = 0; //0 = admin
        $u->save();
	}
}
