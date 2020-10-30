<?php

use App\User;
use Illuminate\Database\Seeder;
use App\StoreOnlinePermission\Models\Role;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create admin 
        $useradmin=User::create([
            'name' => 'admin',
            'email' => 'anthony.mitac@unas.edu.pe',
            'password' => Hash::make('mitac'),
        ]);
        //Create Cliente
        $usercliente=User::create([
            'name' => 'cliente',
            'email' => 'cliente@cliente.com',
            'password' => Hash::make('cliente')
        ]);

        //Create Role Admin
        $roladmin = Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'Administrador',
            'full-access' => 'yes'
        ]);
        //Create Role Admin
        $rolcliente = Role::create([
            'name' => 'Cliente',
            'slug' => 'cliente',
            'description' => 'Cliente del sistema',
            'full-access' => 'no'
        ]);
        $useradmin->roles()->sync([$roladmin->id]);
        $usercliente->roles()->sync([$rolcliente->id]);
    }
}
