<?php

namespace Database\Seeders;

use Database\Factories\TagFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        try{
            \DB::table('admins')->insert([
                'name' => 'Adsmo',
                'email' => 'adsmo@gmail.com',
                'phone' => '0979467612',
                'password' => \Hash::make('123456789')
            ]);
        }catch (\Exception $exception){
            Log::error("[Seed Admin] ". $exception->getMessage());
        }

        try{
            \DB::table('users')->insert([
                'name' => 'Adsmo',
                'email' => 'adsmo@gmail.com',
//                'phone' => '0986420994',
                'password' => \Hash::make('123456789')
            ]);
        }catch (\Exception $exception){
            Log::error("[Seed User] ". $exception->getMessage());
        }

        $this->run(TagFactory::class);
    }
}
