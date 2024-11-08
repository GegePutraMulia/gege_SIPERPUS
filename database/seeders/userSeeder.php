<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Database\Factories\UserFactory;
use Spatie\Permission\Traits\HasRoles;
class userSeeder extends Seeder
{
    public function run()
    {
      
        $pustakawan=User::create([
            'username' => 'pustakawan',
            'name' => 'Pustakawan',
            'email' => 'gege@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);
        $pustakawan->assignRole('Pustakawan');
        $pustakawan->givePermissionTo('kelola_buku');
        $pustakawan->givePermissionTo('kelola_peminjaman');
        $pustakawan->givePermissionTo('kelola_pengembalian');
        
        $mahasiswa=User::create([
            'username' => 'Gege',
            'name' => 'Mahasiswa',
            'email' => 'mahasiswa@example.com',
            'password' => Hash::make('password'),
        ]);
        $mahasiswa->assignRole('member');
        $mahasiswa->givePermissionTo('lihat_buku');
        $mahasiswa->givePermissionTo('pinjam_buku');
    }
}
