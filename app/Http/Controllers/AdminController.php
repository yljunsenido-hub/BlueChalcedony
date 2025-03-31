<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function index_IssuedReportUpload()
    {
        return view('admin.issued_report_upload');
    }

    public function index_NapReportUpload()
    {
        return view('admin.nap_report_upload');
    }

    public function index_NapReport()
    {
        return view('admin.nap_report');
    }
}
