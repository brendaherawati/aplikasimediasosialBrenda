<?php

    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use App\Models\User;

    class UserTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         */
        public function run():void
        {
            User::create([
                'email'=>'Brenda29@gmail.com',
                'password'=>bcrypt('brenhwy2910'),
                'name'=>'Brenda',
            ]);
        }
    }
