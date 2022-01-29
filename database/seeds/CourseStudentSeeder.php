<?php
use \Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CourseStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //working here without model , Laravel give you this property by class DB::
        for ($i=1 ; $i<= 20 ;$i++)
        {
            DB::table('course_student')->insert([
                'course_id'=>rand(1,18),
                'student_id'=>rand(1,50),
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
