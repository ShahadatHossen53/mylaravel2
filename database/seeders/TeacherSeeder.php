<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Teacher;
use DB;
class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Teacher::factory()->count(2000)->create();
        // $data = [
        //     [
        //         'name' => $name = Str::random(10),
        //         'email' => $name."@gamil.com",
        //         'address' => Str::random(30)
        //     ],
        // ];

        // DB::table('teachers')->insert($data);

    }
}
