<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class EnsureAdminSeeder extends Command
{
    protected $signature = 'app:ensure-admin {email=admin@petik.ac.id} {password=admin123}';

    protected $description = 'Pastikan user admin default ada di tabel users dengan role admin';

    public function handle(): int
    {
        $email = $this->argument('email');
        $password = $this->argument('password');

        $user = User::query()->where('email', $email)->first();

        if (! $user) {
            User::create([
                'name' => 'Admin PeTIK',
                'email' => $email,
                'password' => Hash::make($password),
                'role' => 'admin',
                'email_verified_at' => now(),
            ]);

            $this->info('Admin dibuat: ' . $email);
            return 0;
        }

        if ($user->role !== 'admin') {
            $user->role = 'admin';
            $user->save();
        }

        $user->password = Hash::make($password);
        $user->save();

        $this->info('Admin dipastikan ada dan password diset ulang: ' . $email);
        return 0;
    }
}

