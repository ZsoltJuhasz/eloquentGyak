<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\School;
use App\Models\Course;
use App\Models\Teacher;

class EduController extends Controller
{
    public function getSchools()
    {

        $schools = School::all();

        foreach ($schools as $school) {
            echo "<pre>";
            print_r($school->school);
        }
    }

    public function getCourses()
    {
        $courses = Course::all();

        foreach ($courses as $course) {
            echo "<pre>";
            print_r($course->course);
        }
    }

    public function getStudents()
    {
        $students = Student::all();

        foreach ($students as $student) {
            echo "<pre>";
            print_r($student->name);
        }
    }

    public function getTeachers()
    {

        $teachers = Teacher::all();

        foreach ($teachers as $teacher) {
            echo "<pre>";
            print_r($teacher->teacher);
        }
    }

    public function courseStudent()
    {

        //a course az a metódus neve a Student modelben és nem a tábla neve
        $students = Student::with("course")->get(); //a withnek kell átadni hogy kivel kerüljön kapcsolatba

        //student egy collectionként tartalmazza a kurzusokat
        foreach ($students as $student) {
            echo "<pre>";
            print_r($student->name . " ");
            print_r($student->course->course); //student gyűjteményből a kurzus objektum és abból a kurzus mező
        }
    }

    public function schoolStudent()
    {
        $schools = School::with("student")->get();

        //külsővel végigmegyek az iskolákon a belsővel meg a studenten
        foreach ($schools as $school) {
            foreach ($school->student as $student) {
                echo "<pre>";
                print_r($student->name);
            }
        }
    }

    public function schoolTeacher()
    {
        //school-nak a 2-es id-ját keressük ki
        return School::find(1)->teacher;
    }

    public function teacherSchool()
    {
        return Teacher::find(3)->school; //rákapcsoljuk a school-t
    }
}
