<?php
use App\Trainer;
use Illuminate\Database\Seeder;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::create([
            'name' => 'fadee kharshoum',
            'spec' => 'web devlopment',
            'img'  => '1.png'
        ]);
        Trainer::create([
            'name' => 'anwar makhous',
            'spec' => 'Ai',
            'img'  => '2.png'
        ]);
        Trainer::create([
            'name' => 'hala bilal',
            'spec' => 'dentist',
            'img'  => '3.png'
        ]);
        Trainer::create([
            'name' => 'ahmad shahla',
            'spec' => 'doctor',
            'img'  => '4.png'
        ]);
        Trainer::create([
            'name' => 'ali shaban',
            'spec' => 'english teacher',
            'img'  => '5.png'
        ]);

    }
}
