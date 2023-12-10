<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateRolesAndPermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-roles-and-permissions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $role = Role::create(['name' => 'admin']);
        $permission = Permission::create(['name' => 'todo']);
        $role->givePermissionTo($permission);
        
        $role = Role::create(['name' => 'cliente']);
        $permission = Permission::create(['name' => 'utiliza']);
        $role->givePermissionTo($permission);
        
        $role = Role::create(['name' => 'matematico']);
        $permission = Permission::create(['name' => 'disponer']);
        $role->givePermissionTo($permission);


    }
}
