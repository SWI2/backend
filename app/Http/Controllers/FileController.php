<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    
    public function download($fileId)
    {
        $file = File::find($fileId);
        return Storage::download($file->absolute_path);
    }
}
