<?php

namespace App\Http\Controllers\Front;

use App\Course;
use App\Http\Controllers\Controller;
use App\SiteContent;
use App\Student;
use App\Test;
use App\Trainer;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function getHome()
    {
        $data['banner']=SiteContent::select('content')->where('name', 'banner')->first();

        $data['courses']=Course::select('id', 'name' , 'small_desc', 'cat_id', 'trainer_id', 'img', 'price')
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();
        $data['courses_count']= Course::count();
        $data['trainers_count']= Trainer::count();
        $data['students_count']= Student::count();

        $data['tests']= Test::select('name', 'spec', 'desc', 'img')->get();
        return view('front.index')->with($data);
    }
}
