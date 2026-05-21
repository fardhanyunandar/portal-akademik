<?php


namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CheckAdminPassword extends Command
{
    protected $signature = 'check:admin-password {email=admin@petik.ac.id} {password=admin123}';

    protected $description = 'Cek user berdasarkan email dan verifikasi apakah password cocok dengan hash di database';

    public function handle(): int
    {
        $email = $this->argument('email');
        $password = $this->argument('password');

        $user = User::where('email', $email)->first();

        if (! $user) {
            $this->error('User tidak ditemukan: ' . $email);
            $this->line('Total user di tabel users: ' . User::count());

            $sample = User::query()->select(['id', 'email', 'role'])->orderBy('id')->limit(5)->get();
            if ($sample->isNotEmpty()) {
                $this->info('Contoh user (5 pertama):');
                foreach ($sample as $u) {
                    $this->line('#' . $u->id . ' ' . $u->email . ' role=' . ($u->role ?? 'null'));
                }
            }

            return 1;
        }

        $this->info('Ditemukan user: ' . $user->email);
        $this->info('Role: ' . ($user->role ?? 'null'));

        $ok = Hash::check($password, $user->password);
        $this->line('Password hash (prefix): ' . (is_string($user->password) ? substr($user->password, 0, 12) : 'N/A') . '...');

        if ($ok) {
            $this->info('OK: password cocok dengan hash di database');
            return 0;
        }

        $this->error('GAGAL: password TIDAK cocok dengan hash di database');
        return 2;
    }
}


