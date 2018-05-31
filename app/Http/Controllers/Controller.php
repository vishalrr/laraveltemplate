<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     public function gallery()
    {

        return view('pages.gallery');
    }
     public function fullwid()
    {
        return view('pages.fullwid');
    }
     public function sideleft()
    {
        return view('pages.sideleft');
    }

     public function sideright()
    {
        return view('pages.sideright');
    }
     public function basicgrid()
    {
        return view('pages.basicgrid');
    }
}
