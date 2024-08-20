<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Throwable;

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
            // $admin = User::create([
            //     'name' => 'admin',
            //     'email' => 'admin@kbvalbury.com',
            //     'password' => Hash::make('admin'),
            // ]);

            // $role_admin = Role::firstOrCreate(['name' => 'Administrator']);
            // $role_adm = Role::create(['name' => 'Administrator']);
            $role_comp = Role::firstOrCreate(['name' => 'Compliance']);
            $role_hrd = Role::firstOrCreate(['name' => 'HRD']);
            $role_it = Role::firstOrCreate(['name' => 'IT']);
            $role_legal = Role::firstOrCreate(['name' => 'Legal']);
            // $role_settlement = Role::create(['name' => 'Settlement']);
            // $role_cso = Role::create(['name' => 'CSO']);
            // $role_digital_bussiness = Role::create(['name' => 'Digital Bussiness']);
            // $role_ga = Role::create(['name' => 'GA']);
            // $role_purchasing = Role::create(['name' => 'Purchasing']);
            // $role_accounting = Role::create(['name' => 'Accounting']);
            // $role_finance = Role::create(['name' => 'Finance']);
            // $role_rm = Role::create(['name' => 'Risk Management']);
            // $role_research = Role::create(['name' => 'Research']);
            // $role_strategic_sales = Role::create(['name' => 'Strategic Sales']);
            // $role_institusi = Role::create(['name' => 'Institusi']);
            // $role_inhouse = Role::create(['name' => 'Inhouse']);
            // $role_fix_income = Role::create(['name' => 'Fix Income']);
            // $role_wmai = Role::create(['name' => 'WMAI']);
            // $role_ib = Role::create(['name' => 'IB']);

            $permissions = [
                'add compliance', 'update compliance', 'add hrd', 'update hrd',
                'add it', 'update it', 'add legal', 'update legal',
                'add settlement', 'update settlement', 'add cso', 'update cso',
                'add digital', 'update digital', 'add ga', 'update ga',
                'add purchasing', 'update purchasing', 'add accounting', 'update accounting',
                'add finance', 'update finance', 'add rm', 'update rm',
                'add research', 'update research', 'add institusi', 'update institusi',
                'add fixincome', 'update fixincome', 'add wmai', 'update wmai',
                'add ib', 'update ib',
            ];

            $it_permission = ['add it', 'update it'];
            $hrd_permission = ['add hrd', 'update hrd'];
            $legal_permission = ['add legal', 'update legal'];
            $compliance_permission = ['add compliance', 'update compliance'];

            foreach ($permissions as $permission) {
                Permission::firstOrCreate(['name' => $permission]);
            }

            // $role_admin->givePermissionTo($permissions);
            $role_it->givePermissionTo($it_permission);
            $role_comp->givePermissionTo($compliance_permission);
            $role_hrd->givePermissionTo($hrd_permission);
            $role_legal->givePermissionTo($legal_permission);

            // $permission = Permission::create(['name' => 'add compliance']);
            // $permission = Permission::create(['name' => 'update compliance']);
            // $permission = Permission::create(['name' => 'add hrd']);
            // $permission = Permission::create(['name' => 'update hrd']);
            // $permission = Permission::create(['name' => 'add it']);
            // $permission = Permission::create(['name' => 'update it']);
            // $permission = Permission::create(['name' => 'add legal']);
            // $permission = Permission::create(['name' => 'update legal']);
            // $permission = Permission::create(['name' => 'add settlement']);
            // $permission = Permission::create(['name' => 'update settlement']);
            // $permission = Permission::create(['name' => 'add cso']);
            // $permission = Permission::create(['name' => 'update cso']);
            // $permission = Permission::create(['name' => 'add digital']);
            // $permission = Permission::create(['name' => 'update digital']);
            // $permission = Permission::create(['name' => 'add ga']);
            // $permission = Permission::create(['name' => 'update ga']);
            // $permission = Permission::create(['name' => 'add purchasing']);
            // $permission = Permission::create(['name' => 'update purchasing']);
            // $permission = Permission::create(['name' => 'add accounting']);
            // $permission = Permission::create(['name' => 'update accounting']);
            // $permission = Permission::create(['name' => 'add finance']);
            // $permission = Permission::create(['name' => 'update finance']);
            // $permission = Permission::create(['name' => 'add rm']);
            // $permission = Permission::create(['name' => 'update rm']);
            // $permission = Permission::create(['name' => 'add research']);
            // $permission = Permission::create(['name' => 'update research']);
            // $permission = Permission::create(['name' => 'add institusi']);
            // $permission = Permission::create(['name' => 'update institusi']);
            // $permission = Permission::create(['name' => 'add fixincome']);
            // $permission = Permission::create(['name' => 'update fixincome']);
            // $permission = Permission::create(['name' => 'add wmai']);
            // $permission = Permission::create(['name' => 'update wmai']);
            // $permission = Permission::create(['name' => 'add ib']);
            // $permission = Permission::create(['name' => 'update ib']);

            // $role_admin = Role::findByName('Administrator');
            // $role_adm->givePermissionTo(['upload comp', 'upload hrd', 'upload it', 'upload legal', 'list comp', 'list hrd', 'list it', 'list legal',
            //     'input comp', 'input hrd', 'input it', 'input legal',
            //     'delete file comp', 'delete file hrd', 'delete file it', 'delete file legal']);
            // $role_admin->givePermissionTo(['add compliance', 'update compliance', 'add hrd', 'update hrd', 'add it', 'update it',
            //     'add legal', 'update legal', 'add settlement', 'update settlement', 'add cso', 'update cso', 'add digital', 'update digital',
            //     'add ga', 'update ga', 'add purchasing', 'update purchasing', 'add accounting', 'update accounting', 'add finance', 'update finance',
            //     'add rm', 'update rm', 'add research', 'update research', 'add institusi', 'update institusi', 'add fixincome', 'update fixincome',
            //     'add wmai', 'update wmai', 'add ib', 'update ib']);
            // $role_comp->givePermissionTo(['upload comp', 'list comp', 'input comp', 'delete file comp']);
            // $role_comp->givePermissionTo(['add compliance', 'update compliance']);
            // $role_hrd->givePermissionTo(['add hrd', 'update hrd']);
            // $role_it->givePermissionTo(['add it', 'update it']);
            // $role_legal->givePermissionTo(['add legal', 'update legal']);
            // $role_settlement->givePermissionTo(['add settlement', 'update settlement']);
            // $role_cso->givePermissionTo(['add cso', 'update cso']);
            // $role_digital_bussiness->givePermissionTo(['add digital', 'update digital']);
            // $role_ga->givePermissionTo(['add ga', 'update ga']);
            // $role_purchasing->givePermissionTo(['add purchasing', 'update purchasing']);
            // $role_accounting->givePermissionTo(['add accounting', 'update accounting']);
            // $role_finance->givePermissionTo(['add finance', 'update finance']);
            // $role_rm->givePermissionTo(['add rm', 'update rm']);
            // $role_research->givePermissionTo(['add research', 'update research']);
            // // $role_strategic_sales->givePermissionTo(['add legal', 'update legal']);
            // $role_institusi->givePermissionTo(['add institusi', 'update institusi']);
            // // $role_inhouse->givePermissionTo(['add legal', 'update legal']);
            // $role_fix_income->givePermissionTo(['add fixincome', 'update fixincome']);
            // $role_wmai->givePermissionTo(['add wmai', 'update wmai']);
            // $role_ib->givePermissionTo(['add ib', 'update ib']);

            // $admin->assignRole('admin');
            $adminRole = Role::findByName('Administrator');
            $admin = User::where('name', 'admin')->first();
            $admin->assignRole($adminRole);

            DB::commit();
            $this->command->info('Roles and Permissions seeded successfully.');
        } catch (Throwable $th) {
            DB::rollback();
            $this->command->error('Error seeding Roles and Permissions: ' . $th->getMessage());
        }
    }
}
