<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\IssuedReportImport;
use App\Models\IssuedReport;
use Maatwebsite\Excel\Facades\Excel;

class IssuedReportController extends Controller
{
    public function index()
    {
        $posts = IssuedReport::all(); // Fetch all records from the database
        return view('admin.dashboard', compact('posts'));
    }

    public function index_IssuedReport(){
        $issuedReports = IssuedReport::all();
        return view('admin.issued_report', compact('issuedReports'));
    }

    public function importExcelData(Request $request){
        $request->validate([
            'import-file'=>[
                'required',
                'file'
            ],
        ]);

        Excel::import(new IssuedReportImport, $request->file('import-file'));

        return redirect()->back()->with('status', 'Imported Successfully');
    }
}
