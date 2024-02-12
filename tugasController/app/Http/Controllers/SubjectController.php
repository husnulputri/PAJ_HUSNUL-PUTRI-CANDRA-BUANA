<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function viewAdminSubject()
    {
        return view('adminsubject');
    }

    public function viewStudentSubject()
    {
        return view('studentsubject');
    }

    public function viewTeacherSubject()
    {
        return view('teachersubject');
    }
}
