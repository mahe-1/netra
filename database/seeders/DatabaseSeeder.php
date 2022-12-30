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
            'email' => 'branch@gmail.com',
            'password' => Hash::make('rockstar@312'),
	 ]);

	  $id = DB::table('users')->insertGetId([
            'name' => 'API',
            'email' => 'api@api.com',
	    'password' => Hash::make(Str::random(60)),
            'api_token' => Str::random(60),
	  ]);

	 $id = DB::table('chests')->insertGetId([
            'id' => 0,
            'name' => 'main',
            'address' => 'Bajirao Road, Pune',
         ]);

	 $id = DB::table('cash_bins')->insertGetId([
	    'chest' => 0,
            'tag1' => 'e20047153f10682146e90113',
            'tag2' => 'A1',
	    'binnum' => 'A1',
	    'amount' => 5000000
         ]);

	 $id = DB::table('cash_bins')->insertGetId([
	    'chest' => 0,
            'tag1' => 'e20047153d90682146d1010f',
            'tag2' => 'A2',
	    'binnum' => 'A2',
	    'amount' => 2500000
         ]);

    }
}
