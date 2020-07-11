<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MaharajpuraStudent;
use RealRashid\SweetAlert\Facades\Alert;


class MaharajpuraStudentController extends Controller
{
    public function addStudent(Request $request){


    	if($request->isMethod('post')){

    		$data=$request->all();
            // echo "<pre>";print_r($data);die();

    		if($request->hasfile('image')){

    			$file=$request->file('image');
    			$filename='image'.time().'.'.$request->image->extension();
    			$destination=storage_path('../public/upload');
    			$file->move($destination,$filename);

    			$path="/" .$filename;
    		}

    		$student=new MaharajpuraStudent;

    		$student->name=$data['name'];
            $student->email=$data['email'];
            $student->dob=$data['dob'];
            $student->SC_ST=$data['SC_ST'];
            $student->caste=$data['caste'];
            $student->mother_name=$data['mother_name'];
            $student->father_name=$data['father_name'];
            $student->monthly_income=$data['monthly_income'];

            $student->father_occupdation=$data['father_occupdation'];
            $student->father_designation=$data['father_designation'];
            $student->designation_transfer=$data['designation_transfer'];
            $student->department=$data['department'];
            $student->local_guardian=$data['local_guardian'];
            $student->guardian_relation=$data['guardian_relation'];
            $student->local_address=$data['local_address'];
            $student->phone_number=$data['phone_number'];
            $student->permanent_address=$data['permanent_address'];
            $student->bonafide_residence=$data['bonafide_residence'];
            $student->previous_school=$data['previous_school'];
            $student->last_class=$data['last_class'];

            $student->session=$data['session'];
            $student->result=$data['result'];
            $student->medium=$data['medium'];
            $student->enrollment_number=$data['enrollment_number'];

            $student->next_class=$data['next_class'];
            $student->next_medium=$data['next_medium'];
            $student->subject=$data['subject'];

            $student->sssm_id=$data['sssm_id'];
            $student->aadhar_number=$data['aadhar_number'];
            $student->bank_account=$data['bank_account'];

            $student->number_of_document=$data['number_of_document'];
            $student->tc_number=$data['tc_number'];
            $student->mark_Sheet=$data['mark_Sheet'];
            $student->image=$path;

            $student->save();

            return redirect()->back()->with('success','Form Successfully Submitted!!');
    	}

    	return view('form.maharajpura_student.maharajpura_register_form');
    }

    public function viewStudentMaharajpura(){

    	$student_detail=MaharajpuraStudent::all();

    	return view('admin.maharajpura_student.view_student',compact('student_detail'));
    }

    public function editStudentMaharajpura(Request $request,$id=null){


        if($request->isMethod('post')){

            $data=$request->all();

            // echo "<pre>";print_r($data);die();

            if($request->hasfile('image')){

                $file=$request->file('image');
                $filename='image'.time().'.'.$request->image->extension();
                $destination=storage_path('../public/upload');
                $file->move($destination,$filename);

                $path="/" .$filename;
            }

            else{

                $path=$data['current_image'];
            }

            $student=MaharajpuraStudent::find($id);

            $student->name=$data['name'];
            $student->email=$data['email'];
            $student->dob=$data['dob'];
            $student->SC_ST=$data['SC_ST'];
            $student->caste=$data['caste'];
            $student->mother_name=$data['mother_name'];
            $student->father_name=$data['father_name'];
             $student->monthly_income=$data['monthly_income'];

            $student->father_occupdation=$data['father_occupdation'];
            $student->father_designation=$data['father_designation'];
            $student->designation_transfer=$data['designation_transfer'];
            $student->department=$data['department'];
            $student->local_guardian=$data['local_guardian'];
            $student->guardian_relation=$data['guardian_relation'];
            $student->local_address=$data['local_address'];
            $student->phone_number=$data['phone_number'];
            $student->permanent_address=$data['permanent_address'];
            $student->bonafide_residence=$data['bonafide_residence'];
            $student->previous_school=$data['previous_school'];
            $student->last_class=$data['last_class'];

            $student->session=$data['session'];
            $student->result=$data['result'];
            $student->medium=$data['medium'];
            $student->enrollment_number=$data['enrollment_number'];

            $student->next_class=$data['next_class'];
            $student->next_medium=$data['next_medium'];
            $student->subject=$data['subject'];

            $student->sssm_id=$data['sssm_id'];
            $student->aadhar_number=$data['aadhar_number'];
            $student->bank_account=$data['bank_account'];

            $student->number_of_document=$data['number_of_document'];
            $student->tc_number=$data['tc_number'];
            $student->mark_Sheet=$data['mark_Sheet'];
            $student->image=$path;

            $student->update();

            return redirect()->back()->with('success','Student Successfully Updated');

        }

        $print=MaharajpuraStudent::find($id);

        return view('admin.maharajpura_student.edit_student',compact('print'));
    }

    public function deleteStudentMaharajpura($id=null){

        $student=MaharajpuraStudent::find($id)->delete();

        return redirect()->back()->with('success','Student Successfully Deleted!!');
    }

    public function printStudentMaharajpura($id=null){

        $print=MaharajpuraStudent::find($id);

       return view('admin.maharajpura_student.print_student',compact('print'));
    }

}
