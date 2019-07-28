<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'mixartemev@gmail.com',
            'password'       => '$2y$10$UoFsFWK/n7Nwee9mJCMHx.SfCzZAWzrn/kjnF.7hSBr0JSYaAOUWi',
            'remember_token' => null,
            'created_at'     => '2019-06-03 17:34:43',
            'updated_at'     => '2019-06-03 17:34:43',
            'deleted_at'     => null,
            'status'         => 4,
            'role'           => 4,
            'sex'            => 1,
            'orient'         => 1,
            'direct'         => 1,
            'old'            => 34,
            'invited_by_id' => 1,
        ];

        (new User($user))->save();

        factory(User::class, 3)->create();
        factory(User::class, 5)->create();
        factory(User::class, 10)->create();
    }
}
