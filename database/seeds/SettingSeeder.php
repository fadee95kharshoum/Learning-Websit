<?php
use App\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'name'=>'fadee kharshoum',
            'logo'=>'logo.png',
            'favicon'=>'favicon.png',
            'city'=>'syria lattakia',
            'address'=>'51 street',
            'phone'=>'0099887766',
            'work_hours'=>'mon to thurs 10am to 5pm',
            'email'=>'fadee@gmail.com',
            'map'=>'this is map text',
            'fb'=>'www.facebook.com',
            'twitter'=>'www.twitter.com',
            'insta'=>'www.instagram.com'

        ]);
    }
}
