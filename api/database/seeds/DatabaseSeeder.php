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
        $this->call(LanguagesSeeder::class);
        $this->call(SkillsSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(FieldsSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
