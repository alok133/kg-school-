<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MaharajpuraStudent;
use App\Student;
use PDF;

class GenratePdfController extends Controller
{
    public function downloadPDF($id){

		$print=MaharajpuraStudent::find($id);
    	$pdf = PDF::loadView('admin.maharajpura_student.maharajpura_student_pdf',compact('print'));
      	return $pdf->stream('invoice.pdf');
    }

    public function downloadPDFMorar($id){

    	$print=Student::find($id);
    	$pdf=PDF::loadView('admin.student.morar_student_pdf',compact('print'));
    	return $pdf->stream('invoice.pdf');
    }
}
