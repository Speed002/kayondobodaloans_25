<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FileDownloadController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function __invoke($file)
    {
        // dd($file);
        $file = File::find($file);
        // dd($file);
        // Ensure the file exists
        if (!$file) {
            abort(404, 'File not found');
        }
        // Check if the file exists on the 'public' disk
        if (!Storage::disk('public')->exists($file->file_path)) {
            abort(404, 'File not found on server');
        }
        // Download the file using the 'public' disk
        return Storage::disk('public')->download($file->file_path);
    }

}
