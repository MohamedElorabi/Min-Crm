<?php


use Illuminate\Database\Seeder;
use App\Roles;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(rolesDB::class);
        $this->call(userDB::class);
    }
}
