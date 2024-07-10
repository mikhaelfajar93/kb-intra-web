<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::beginTransaction();
        try {
            $admin = User::create([
                'name' => 'admin',
                'email' => 'admin@kbvalbury.com',
                'password' => Hash::make('admin'),
            ]);

            $role_adm = Role::create(['name' => 'Administrator']);
            $role_comp = Role::create(['name' => 'Compliance']);
            $role_hrd = Role::create(['name' => 'HRD']);
            $role_it = Role::create(['name' => 'IT']);
            $role_legal = Role::create(['name' => 'Legal']);
            $role_settlement = Role::create(['name' => 'Settlement']);
            $role_cso = Role::create(['name' => 'CSO']);
            $role_digital_bussiness = Role::create(['name' => 'Digital Bussiness']);
            $role_ga = Role::create(['name' => 'GA']);
            $role_purchasing = Role::create(['name' => 'Purchasing']);
            $role_accounting = Role::create(['name' => 'Accounting']);
            $role_finance = Role::create(['name' => 'Finance']);
            $role_rm = Role::create(['name' => 'Risk Management']);
            $role_research = Role::create(['name' => 'Research']);
            $role_strategic_sales = Role::create(['name' => 'Strategic Sales']);
            $role_institusi = Role::create(['name' => 'Institusi']);
            $role_inhouse = Role::create(['name' => 'Inhouse']);
            $role_fix_income = Role::create(['name' => 'Fix Income']);
            $role_wmai = Role::create(['name' => 'WMAI']);
            $role_ib = Role::create(['name' => 'IB']);

            $permission = Permission::create(['name' => 'upload comp']);
            $permission = Permission::create(['name' => 'upload hrd']);
            $permission = Permission::create(['name' => 'upload it']);
            $permission = Permission::create(['name' => 'upload legal']);
            $permission = Permission::create(['name' => 'list comp']);
            $permission = Permission::create(['name' => 'list hrd']);
            $permission = Permission::create(['name' => 'list it']);
            $permission = Permission::create(['name' => 'list legal']);
            $permission = Permission::create(['name' => 'input comp']);
            $permission = Permission::create(['name' => 'input hrd']);
            $permission = Permission::create(['name' => 'input it']);
            $permission = Permission::create(['name' => 'input legal']);
            $permission = Permission::create(['name' => 'delete file comp']);
            $permission = Permission::create(['name' => 'delete file hrd']);
            $permission = Permission::create(['name' => 'delete file it']);
            $permission = Permission::create(['name' => 'delete file legal']);

            $role_adm->givePermissionTo(['upload comp', 'upload hrd', 'upload it', 'upload legal', 'list comp', 'list hrd', 'list it', 'list legal',
                'input comp', 'input hrd', 'input it', 'input legal',
                'delete file comp', 'delete file hrd', 'delete file it', 'delete file legal']);
            $role_comp->givePermissionTo(['upload comp', 'list comp', 'input comp', 'delete file comp']);
            $role_hrd->givePermissionTo(['upload hrd', 'list hrd', 'input hrd', 'delete file hrd']);
            $role_it->givePermissionTo(['upload it', 'list it', 'input it', 'delete file it']);
            $role_legal->givePermissionTo(['upload legal', 'list legal', 'input legal', 'delete file legal']);

            $admin->assignRole('admin');

            DB::commit();
        } catch (Throwable $th) {
            DB::rollback();
        }
    }
}
