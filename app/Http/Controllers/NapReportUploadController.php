<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\NapReportUploadImport;
use App\Models\NapReportUpload;
use Maatwebsite\Excel\Facades\Excel;

class NapReportUploadController extends Controller
{
    public function index_NapReport()
    {
        // Paginate with 20 items per page
        $napPosts = NapReportUpload::paginate(10);
        return view('admin.nap_report', compact('napPosts'));
    }

    public function index_NapReportUpload()
    {
        $napReportUploads = NapReportUpload::all();
        return view('admin.nap_report_upload', compact('napReportUploads'));
    }

    public function importExcelData(Request $request)
    {
        $request->validate([
            'import-file'=>[
                'required',
                'file'
            ],
        ]);

        try {
            Excel::import(new NapReportUploadImport, $request->file('import-file'));
            return redirect()->back()->with('status', 'Imported Successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error importing file: ' . $e->getMessage());
        }
    }
}
