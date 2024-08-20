<?php

namespace Database\Seeders;

use App\Models\Branch;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Throwable;

class DataBranches extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::beginTransaction();
        try {
            $time_now = Carbon::now();

            $branches = [
                [
                    'BranchID' => 'ho',
                    'BranchName' => 'head office',
                    'created_at' => $time_now,
                    'updated_at' => $time_now,
                ],
                [
                    'BranchID' => 'bjm',
                    'BranchName' => 'banjarmasin',
                    'created_at' => $time_now,
                    'updated_at' => $time_now,
                ],
                [
                    'BranchID' => 'diy',
                    'BranchName' => 'yogyakarta',
                    'created_at' => $time_now,
                    'updated_at' => $time_now,
                ],
                [
                    'BranchID' => 'dps',
                    'BranchName' => 'bali',
                    'created_at' => $time_now,
                    'updated_at' => $time_now,
                ],
                [
                    'BranchID' => 'jid',
                    'BranchName' => 'jakarta institutional division',
                    'created_at' => $time_now,
                    'updated_at' => $time_now,
                ],
                [
                    'BranchID' => 'jkn',
                    'BranchName' => 'sudirman',
                    'created_at' => $time_now,
                    'updated_at' => $time_now,
                ],
                [
                    'BranchID' => 'jks',
                    'BranchName' => 'kelapa gading',
                    'created_at' => $time_now,
                    'updated_at' => $time_now,
                ],
                [
                    'BranchID' => 'jpi',
                    'BranchName' => 'puri indah',
                    'created_at' => $time_now,
                    'updated_at' => $time_now,
                ],
                [
                    'BranchID' => 'jpk',
                    'BranchName' => 'pantai indah kapuk',
                    'created_at' => $time_now,
                    'updated_at' => $time_now,
                ],
                [
                    'BranchID' => 'jpl',
                    'BranchName' => 'pluit',
                    'created_at' => $time_now,
                    'updated_at' => $time_now,
                ],
                [
                    'BranchID' => 'mdn',
                    'BranchName' => 'medan',
                    'created_at' => $time_now,
                    'updated_at' => $time_now,
                ],
                [
                    'BranchID' => 'mks',
                    'BranchName' => 'makassar',
                    'created_at' => $time_now,
                    'updated_at' => $time_now,
                ],
                [
                    'BranchID' => 'mlg',
                    'BranchName' => 'malang',
                    'created_at' => $time_now,
                    'updated_at' => $time_now,
                ],
                [
                    'BranchID' => 'pbr',
                    'BranchName' => 'pekanbaru',
                    'created_at' => $time_now,
                    'updated_at' => $time_now,
                ],
                [
                    'BranchID' => 'pdg',
                    'BranchName' => 'padang',
                    'created_at' => $time_now,
                    'updated_at' => $time_now,
                ],
                [
                    'BranchID' => 'plg',
                    'BranchName' => 'palembang',
                    'created_at' => $time_now,
                    'updated_at' => $time_now,
                ],
                [
                    'BranchID' => 'ptk',
                    'BranchName' => 'pontianak',
                    'created_at' => $time_now,
                    'updated_at' => $time_now,
                ],
                [
                    'BranchID' => 'sby',
                    'BranchName' => 'surabaya',
                    'created_at' => $time_now,
                    'updated_at' => $time_now,
                ],
                [
                    'BranchID' => 'smg',
                    'BranchName' => 'semarang',
                    'created_at' => $time_now,
                    'updated_at' => $time_now,
                ],
                [
                    'BranchID' => 'sol',
                    'BranchName' => 'solo',
                    'created_at' => $time_now,
                    'updated_at' => $time_now,
                ],
                [
                    'BranchID' => 'mdc',
                    'BranchName' => 'manado',
                    'created_at' => $time_now,
                    'updated_at' => $time_now,
                ],
                [
                    'BranchID' => 'jsd',
                    'BranchName' => 'jakarta strategic division',
                    'created_at' => $time_now,
                    'updated_at' => $time_now,
                ],
                [
                    'BranchID' => 'jbi',
                    'BranchName' => 'jambi',
                    'created_at' => $time_now,
                    'updated_at' => $time_now,
                ],
                [
                    'BranchID' => 'jgs',
                    'BranchName' => 'gading serpong',
                    'created_at' => $time_now,
                    'updated_at' => $time_now,
                ],
                // Tambahkan cabang lain sesuai kebutuhan
            ];

            foreach ($branches as $branchData) {
                Branch::create($branchData);
            }

            DB::commit();
            $this->command->info('Branches seeded successfully.');
        } catch (Throwable $th) {
            DB::rollback();
            $this->command->error('Error seeding Branches: ' . $th->getMessage());
        }
    }
}
