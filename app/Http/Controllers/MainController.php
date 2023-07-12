<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class MainController extends Controller
{

    public function index() {

        $students = new Student();
        $students -> degree_id = 61;
        $students -> name = "New Guybrush";
        $students -> surname = "Threepwood";
        $students -> date_of_birth = "1972-08-31";
        $students -> fiscal_code = "QPXVYW51Z02T871B";
        $students -> enrolment_date = "2019-02-21";
        $students -> registration_number = "620033";
        $students -> email = "guybrush@threepwood.com!!";

        $students -> save();

        // get all students
        $students = Student :: all();
        // dd($students[0]);

        // get all students with names which starts with 'g'
        // $students = Student :: where('name', 'like', 'g%')
        //             // order by date of birth descendent
        //             -> orderBy('date_of_birth', 'desc')
        //             // limit max number of resulting students (10)
        //             -> limit(10)
        //             -> get();

        return view('home', compact('students'));
    }
}
