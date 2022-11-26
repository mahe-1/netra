<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
	    // ]);
	    //
    //
         $id = DB::table('users')->insertGetId([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('rockstar@312'),
	 ]);

	 $id = DB::table('users')->insertGetId([
            'name' => 'Cash',
            'email' => 'cash@gmail.com',
            'password' => Hash::make('rockstar@312'),
	 ]);

	 $id = DB::table('users')->insertGetId([
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'password' => Hash::make('rockstar@312'),
	 ]);

	  $id = DB::table('users')->insertGetId([
            'name' => 'API',
            'email' => 'api@api.com',
	    'password' => Hash::make(Str::random(60)),
            'api_token' => Str::random(60),
        ]);


    }
}
