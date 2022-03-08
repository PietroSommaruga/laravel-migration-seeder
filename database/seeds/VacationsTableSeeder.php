<?php
use Faker\Generator as Faker;
use App\Vacation;
use Illuminate\Database\Seeder;

class VacationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 5; $i++) {
            $vacation= new vacation();
            $vacation->country = $faker->country();
            $vacation->city = $faker->city();
            $vacation->created_at = $faker->created_at();
            $vacation->updated_at = $faker->updated_at();
            $vacation -> save();

        }
        
            // $vacation->country = $faker['ita'];
            // $vacation->city = $faker['mi'];
    }
}
