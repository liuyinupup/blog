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
        factory(App\User::class, 100)->create();
        $user=\App\User::find(1);
        $user->name='liuyin';
        $user->email='1304609091@qq.com';
        $user->password=bcrypt('admin886');
        $user->save();
        $user=\App\User::find(2);
        $user->name='admin';
        $user->email='liuyinupup@163.com';
        $user->password=bcrypt('admin886');
        $user->is_admin=true;
        $user->save();
        //
    }
}
