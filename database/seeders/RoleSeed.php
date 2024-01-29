<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $rolesBasic = [
            [
                'name' => 'Admin',
                'guard_name' => 'web',
                'permissions' => [
                    [
                        'name' => 'access_dashboard_web',
                        'guard_name' => 'web',
                    ],
                    [
                        'name' => 'access_dashboard_api',
                        'guard_name' => 'api',
                    ],
                    [
                        'name' => 'administrator',
                        'guard_name' => 'web',
                    ],
                    [
                        'name' => 'administrator',
                        'guard_name' => 'api',
                    ],
                    [
                        'name' => 'access_basic_web',
                        'guard_name' => 'web',
                    ],
                    [
                        'name' => 'access_basic_api',
                        'guard_name' => 'api',
                    ],
                ]
            ],
            [
                'name' => 'Editor',
                'guard_name' => 'web',
                'permissions' => [
                    [
                        'name' => 'access_dashboard_web',
                        'guard_name' => 'web',
                    ],
                    [
                        'name' => 'access_dashboard_api',
                        'guard_name' => 'api',
                    ],
                    [
                        'name' => 'access_basic_web',
                        'guard_name' => 'web',
                    ],
                ]
            ],
            [
                'name' => 'Guest',
                'guard_name' => 'web',
                'permissions' => [
                    [
                        'name' => 'access_basic_web',
                        'guard_name' => 'web',
                    ],
                    [
                        'name' => 'access_basic_api',
                        'guard_name' => 'api',
                    ],
                ]
            ],
        ];

        DB::beginTransaction();
        try {
            foreach($rolesBasic as $roleBasic) {
                $role = new Role;
                $role->name = $roleBasic['name'];
                $role->guard_name = $roleBasic['guard_name'];
                $role->save();
    
                $permissions = is_array($roleBasic['permissions']) ? array_map(function ($permission) {
                    $exists = Permission::where($permission);
                    if($exists->exists()) {
                        return $exists->first();
                    }

                    return new Permission($permission);
                }, $roleBasic['permissions']) : [];
    
                if($permissions) {
                    $role->permissions()->saveMany($permissions);
                }
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Failed save permission and role: '. $exception->getMessage());
        }
    }
}
