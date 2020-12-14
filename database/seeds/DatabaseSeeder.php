<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Doctor']);
        $role3 = Role::create(['name' => 'Nurse']);
        $role4 = Role::create(['name' => 'Trainee']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        $user = $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password'=>bcrypt("11111111")
        ]);
        $user->assignRole($role1);
        //creating permissions
        $permission1 = Permission::create(['name' => 'create_patient']);
        $permission2 = Permission::create(['name' => 'create_visits']);
        $permission3 = Permission::create(['name' => 'create_appointments']);
        $permission4 = Permission::create(['name' => 'create_clinic_findings']);
        $permission5 = Permission::create(['name' => 'read_patient']);
        $permission6 = Permission::create(['name' => 'read_visits']);
        $permission7 = Permission::create(['name' => 'read_appointments']);
        $permission8 = Permission::create(['name' => 'read_clinic_findings']);
        $permission9 = Permission::create(['name' => 'change_patient']);
        $permission10 = Permission::create(['name' => 'change_visits']);
        $permission11 = Permission::create(['name' => 'change_appointmets']);
        $permission12 = Permission::create(['name' => 'change_clinic_findings']);
        $permission13 = Permission::create(['name' => 'delete_patient']);
        $permission14 = Permission::create(['name' => 'delete_visits']);
        $permission15 = Permission::create(['name' => 'delete_appointments']);
        $permission16 = Permission::create(['name' => 'delete_clinic_findings']);
        //assigning permissions
        $role2->givePermissionTo($permission1);
        $role2->givePermissionTo($permission2);
        $role2->givePermissionTo($permission3);
        $role2->givePermissionTo($permission4);
        $role2->givePermissionTo($permission5);
        $role2->givePermissionTo($permission6);
        $role2->givePermissionTo($permission7);
        $role2->givePermissionTo($permission8);
        $role2->givePermissionTo($permission9);
        $role2->givePermissionTo($permission10);
        $role2->givePermissionTo($permission11);
        $role2->givePermissionTo($permission12);
        $role2->givePermissionTo($permission13);
        $role2->givePermissionTo($permission14);
        $role2->givePermissionTo($permission15);
        $role2->givePermissionTo($permission16);

        $role3->givePermissionTo($permission1);
        $role3->givePermissionTo($permission2);
        $role3->givePermissionTo($permission3);
        $role3->givePermissionTo($permission4);
        $role3->givePermissionTo($permission5);
        $role3->givePermissionTo($permission6);
        $role3->givePermissionTo($permission7);
        $role3->givePermissionTo($permission8);
        $role3->givePermissionTo($permission9);
        $role3->givePermissionTo($permission10);
        $role3->givePermissionTo($permission11);
        $role3->givePermissionTo($permission12);

        $role4->givePermissionTo($permission1);
        $role4->givePermissionTo($permission2);
        $role4->givePermissionTo($permission3);
        $role4->givePermissionTo($permission4);
        $role4->givePermissionTo($permission5);
        $role4->givePermissionTo($permission6);
        $role4->givePermissionTo($permission7);
        $role4->givePermissionTo($permission8);
    }
}
