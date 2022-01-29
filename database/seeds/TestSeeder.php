<?php
use App\Test;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Test::create([
            'name' =>"mohamad agha",
            'spec' =>"Bartender",
            'desc'=> 'This is desc for mohamad agha',
            'img'=>"1.png",
        ]);
        Test::create([
            'name' =>"noor abo alhabaib",
            'spec' =>"photographer",
            'desc'=> 'This is desc for noor abo alhabaib',
            'img'=>"2.png",
        ]);
        Test::create([
            'name' =>"anas aboud",
            'spec' =>"Ai",
            'desc'=> 'This is desc for anas aboud',
            'img'=>"3.png",
        ]);
    }
}
