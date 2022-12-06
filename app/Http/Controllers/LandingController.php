<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(Request $r) {



        $posts = array(
            (object) [
              'title' => 'title 1',
              'color' => 'green'
            ],
            (object) [
              'title' => 'title 2',
              'color' => 'yellow'
             ],
             (object) [
               'title' => 'title 3',
               'color' => 'red'
             ]
          );

          $myJSON = json_encode($posts);

          echo $myJSON;



        // $namaNama = ['namaSatu', 'namaDua', 'namaTiga'];


        // dd($namaNama);
        // for($i=0; $i<count($namaNama); $i++) {
        //     // echo $namaNama[$i];
        //     // dd($namaNama[$i]);
        // }

        // $myJSON = json_encode($namaNama);

        // echo $myJSON;

        // return view('landing', [
        //     'title' => $r->get('title'),
        //     'peserta' => $namaNama,
        // ]);
    }

    public function hides() {
      return view('hide');
    }
}
