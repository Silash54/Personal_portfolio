<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.layout.dashboard');
    }
    public function message()
    {
        $message=Contact::all();
        //return $message;
        return view('admin.contact.message',compact('message'));
    }
    public function cv()
    {    $filePath = 'D:\laravel\Personal_portfolio\public\images\silas.pdf';
        if (!file_exists($filePath)) {
            return abort(404, 'File not found.');
        }
        $headers = ['Content-Type: application/pdf'];
        $fileName = 'silas.pdf';
        return response()->download($filePath, $fileName, $headers);
    }
}
