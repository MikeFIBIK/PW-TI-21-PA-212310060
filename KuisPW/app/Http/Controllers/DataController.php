<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;


class DataController extends Controller{
    public function index(){
        $data = array();
        $data['title'] = "Data Mahasiswa";
        $data['npm'] = 212310060;
        $students[] = array("npm"=>212310001, "name"=>"Mahasiswa 1", "kelas"=>"TI-21-PA");
        $students[] = array("npm"=>212310002, "name"=>"Mahasiswa 2", "kelas"=>"TI-21-PA");
        $students[] = array("npm"=>212310003, "name"=>"Mahasiswa 3", "kelas"=>"TI-21-PA");
        $students[] = array("npm"=>212310004, "name"=>"Mahasiswa 4", "kelas"=>"TI-21-PA");
        $students[] = array("npm"=>212310005, "name"=>"Mahasiswa 5", "kelas"=>"TI-21-PA");
        $students[] = array("npm"=>212310006, "name"=>"Mahasiswa 6", "kelas"=>"TI-21-PA");
        $students[] = array("npm"=>212310007, "name"=>"Mahasiswa 7", "kelas"=>"TI-21-PA");
        $data['students'] = $students;
        return view('data')->with("data",$data);
    }
}