<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
     public function index() 
    {
      $students = [
        [
            'name' => 'Wahyudi', 
            'major' => 'Informatika', 
            'age' => '22',
            'courses' => ['Pemrograman Web', 'database', 'cloud computing']
        ],
        [
            'name' => 'Siti', 
            'major' => 'Sistem Informasi', 
            'age' => '21',
            'courses' => ['UI/UX Desaing', 'Manajemen Proyek', 'IoT'],
        ],

    ];
        return view('students.index', compact('students'));
    }
}
