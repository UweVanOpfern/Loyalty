<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(App\Model\Program::class,10)->create();
        factory(App\Model\MurugoUser::class,10)->create();
        factory(App\Model\Transaction::class,10)->create();
    }
}
