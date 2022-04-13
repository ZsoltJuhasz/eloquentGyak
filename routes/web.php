<?php

use App\Http\Controllers\EduController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/school-list", [EduController::class, "getSchools" ]);
Route::get("/course-list", [EduController::class, "getCourses" ]);
Route::get("/student-list", [EduController::class, "getStudents" ]);
Route::get("/teacher-list", [EduController::class, "getTeachers" ]);
Route::get("/course-student", [EduController::class, "courseStudent" ]);
Route::get("/school-student", [EduController::class, "schoolStudent" ]);
Route::get("/school-teacher", [EduController::class, "schoolTeacher" ]);
Route::get("/teacher-school", [EduController::class, "teacherSchool" ]);



