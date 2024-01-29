<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Role;

class DefaultAdminUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $usersBasic = [
            [
                'name'      => 'Wikla Pandu',
                'email'     => 'wikla@madeindonesia.com',
                'password'  => Hash::make('kuk!r4kur4kur4'),
                'roles'     => [
                    [
                        'name'          => 'Admin',
                        'guard_name'    => 'web',
                    ],
                ],
            ],
            /*
            * Guest Users
            */
            [
                'name'      => fake()->name,
                'email'     => fake()->email,
                'password'  => Hash::make('kuk!r4kur4kur4'),
                'roles'     => [
                    [
                        'name'          => 'Guest',
                        'guard_name'    => 'web',
                    ],
                ],
            ],
            [
                'name'      => fake()->name,
                'email'     => fake()->email,
                'password'  => Hash::make('kuk!r4kur4kur4'),
                'roles'     => [
                    [
                        'name'          => 'Guest',
                        'guard_name'    => 'web',
                    ],
                ],
            ],
            [
                'name'      => fake()->name,
                'email'     => fake()->email,
                'password'  => Hash::make('kuk!r4kur4kur4'),
                'roles'     => [
                    [
                        'name'          => 'Guest',
                        'guard_name'    => 'web',
                    ],
                ],
            ],
            [
                'name'      => fake()->name,
                'email'     => fake()->email,
                'password'  => Hash::make('kuk!r4kur4kur4'),
                'roles'     => [
                    [
                        'name'          => 'Guest',
                        'guard_name'    => 'web',
                    ],
                ],
            ],
            /*
            * Guest Users
            */
        ];


        DB::beginTransaction();
        try {
            foreach ($usersBasic as $userBasic)
            {
                $user = new User;
                $user->name = $userBasic['name'];
                $user->email = $userBasic['email'];
                $user->password = $userBasic['password'];
                $user->save();
    
                $roles = $userBasic['roles'];
                $rolesMap = is_array($roles) ? array_map(fn($role) => Role::where($role)->first(), $roles) : [];
                $user->syncRoles($rolesMap);
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::info('Failed save Users:' . $exception->getMessage());
        }
    }
}
