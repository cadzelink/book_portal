<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Response;

class manualController extends Controller
{
    public function viewManual(){
        return Response::make(file_get_contents('public/images/instmanual.pdf'), 200, [
            'content-type'=>'application/pdf',
        ]);
    }
}
