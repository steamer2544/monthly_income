<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\in_and_ex;
use Mpdf\Mpdf;

class RecordController extends Controller
{
    function index() {   //ฟังชั่นแสดงหน้าจอ
        $index = in_and_ex::get();  
        return view('welcome')
        ->with('index',$index);
    }

    function edit($id) {
        $index = in_and_ex::find($id);
        return view('edit')
        ->with('index', $index);
    }

    function update(Request $req,$id) {
        //$index = in_and_ex::get();
        $req->validate([
            'name'=>'required|max:254',
        ]);

        $index = in_and_ex::find($id);
        $index->name = $req->name;
        $index->amount = $req->amount;
        $index->day = $req->day;
        $index->type = $req->type;
        $index->save();

        return redirect()->route('index');
    }

    function insert(Request $req) {
        //dd($req->type_name); //dd เป็น function ดูข้อมูล 
        $req->validate([
            'name'=>'required|unique:in_and_exes|max:254',
        ]);

        $index = new in_and_ex;
        $index->name = $req->name;
        $index->amount = $req->amount;
        $index->day = $req->day;
        $index->type = $req->type;
        $index->save();

        return redirect()->route('index');
        
    }

    function delete($id) {
        $delete = in_and_ex::find($id)->Delete();
        return redirect()->route('index');
    }

    function report() {
        // Create a new mPDF instance
        $mpdf = new Mpdf();

        // Your PDF content here
        $html = '<h1>Hello, mPDF!</h1>';

        // Load the HTML content into mPDF
        $mpdf->WriteHTML($html);

        // Output the PDF to the browser or save it to a file
        $mpdf->Output();
    }
}
