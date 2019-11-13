<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Permission::class)->create([
            'user_id' => 2,
            'document_id' => 3,
            'role_id' => 1,
        ]);
        factory(Permission::class)->create([
            'user_id' => 2,
            'document_id' => 2,
            'role_id' => 2,
        ]);
    }
}
