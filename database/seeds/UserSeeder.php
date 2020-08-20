<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = New User;
        $user->name='Administrator';
        $user->email='admin@lamaisonnette.com.ng';
        $user->password='$2y$10$P5Ynvmz1USzOLkxOe3EFEOM4xxsL81cWRIAHdKj.c4YFVtLTPNgSm';
        $user->save();
    }
}
