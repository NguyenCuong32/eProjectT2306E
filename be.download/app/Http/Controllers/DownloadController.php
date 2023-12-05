<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function downloadFile(Request $request,$id)
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: *");
        // Allow from any origin
        // if (isset($_SERVER['HTTP_ORIGIN'])) {
        //     $allowed_origins = array(
        //         '*',
        //     );

        //     if (in_array($_SERVER['HTTP_ORIGIN'], $allowed_origins)) {
        //         header("Access-Control-Allow-Origin: " . $_SERVER['HTTP_ORIGIN']);
        //     } else {
        //         header("HTTP/1.1 403 Origin Denied");
        //         exit;
        //     }
        // }
        $filePath = __DIR__ . '/../../../storage/files/be.doc';
        if(file_exists($filePath))
        {
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
            header('Content-Length: ' . filesize($filePath));
            readfile($filePath);
        }
        else{
            http_response_code(404);
            echo "File not found.";
        }
        echo 'download file';
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
