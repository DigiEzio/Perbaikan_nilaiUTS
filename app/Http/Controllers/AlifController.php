<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\alif;
use Illuminate\Http\Request;

class AlifController extends Controller
{

        public function getData(){
            $movieData = alif::all();
            return view("komten", compact("movieData"));
        }

        public function detail($id){
            $movie = alif::find($id);
            return view('detail', compact('movie'));
        }




        // public function viewData($id){
        //     $movieData = $this->findData($id);
        //     if($movieData){
        //         return view("detail")->with(compact("mahasiswa","rata"));
        //     } else {
        //         return redirect("/");
        //     }
        // }


}
