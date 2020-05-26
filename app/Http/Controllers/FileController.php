<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    
    public function download($fileId)
    {
        $file = File::find($fileId);
        dd($file);
    }
}
