@extends('admin.layout.master')
@section('content')

 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
<!--                <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div> -->
               <!-- <div class="header-title">
                  <h1>Add Customer</h1>
                  <small>Customer list</small>
               </div> -->
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                       <!--  <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="clist.html"> 
                              <i class="fa fa-list"></i>  Customer List </a>  
                           </div>
                        </div> -->
                        <div class="panel-body">
                           <form class="col-sm-12">

                            
                            
                            <h1 style="text-align: center;font-weight: bold;">K.G CHILDREN SCHOOL</h1>

                            <a class="btn btn-primary" href="{{url('/downloadPDF/'.$print->id)}}" style="float: right;"><i class="fa fa-print"></i> Print</a>
                            
                            
                            <p style="text-align: center;font-weight: bold;">Maharajpura , GWALIOR (M.P.) <br>[AFFLIATED TO C.B.S.E.]</p>

                            <h3 style="text-align: center;font-weight: bold;">APPLICATION FOR ADMISSION</h3>
                           
                              <img src="{{asset('/upload' .$print->image)}}" style="width: 150px;height: 150px;float: right;">
                             <div class="form-group">
                                 <label>S.No</label> &nbsp;
                                 {{$print->id}}
                              </div>

                              <div class="form-group">
                                 <label>1. &nbsp; Full Name Of the pupil</label> &nbsp;
                                 {{$print->name}}
                              </div>

                              <div class="form-group">
                                 <label> 2. &nbsp;Enter Email</label> &nbsp;
                                 {{$print->email}}
                              </div>

                               <div class="form-group">
                                 <label>3. &nbsp; Date Of Birth</label> &nbsp;
                                 {{$print->dob}}
                              </div>

                              <div class="form-group">
                                 <label>4. &nbsp;Do You Belong To SC / ST / O.B.C - Yes / No</label> &nbsp; 
                                 {{$print->SC_ST}} &nbsp; <label>Caste</label>&nbsp;
                                 {{$print->caste}}
                              </div>

                               <div class="form-group">
                                 <label>5. &nbsp;Mother's Name</label> &nbsp;
                                 {{$print->mother_name}}
                              </div>

                              <div class="form-group">
                                 <label>6. &nbsp;Full Name Of Father</label> &nbsp;
                                 {{$print->father_name}} &nbsp; <label>Monthly Income</label>  &nbsp;  {{$print->monthly_income}}
                              </div>

                              <div class="form-group">
                                 <label>7. &nbsp;Occupation Of Father</label> &nbsp;
                                 {{$print->father_occupdation}} &nbsp; <label>Designation</label>  &nbsp;  {{$print->father_designation}} &nbsp; <label>Transferable / Non Transferable</label> &nbsp; {{$print->designation_transfer}} &nbsp; <label>Department</label> &nbsp; {{$print->department}}
                              </div>

                              <div class="form-group">
                                 <label>8. &nbsp;Name Of Father / Local Guardian</label> &nbsp;
                                 {{$print->local_guardian}} &nbsp; <label>Relation</label>  &nbsp;  {{$print->guardian_relation}} &nbsp; <label>Local Address</label> &nbsp; {{$print->local_address}} &nbsp; <label>Phone Number</label> &nbsp; {{$print->phone_number}}  &nbsp; <label>Permanent Address</label> &nbsp; {{$print->permanent_address}}
                              </div>

                              <div class="form-group">
                                 <label>9. &nbsp;Bonafide Address Of M.P. or other</label> &nbsp;
                                 {{$print->bonafide_residence}} 
                              </div>

                              <div class="form-group">
                                 <label>10. &nbsp;Name Of Pervious School Last Attend</label> &nbsp;
                                 {{$print->previous_school}} &nbsp; <label>Class Last Attended</label>  &nbsp;  {{$print->last_class}} &nbsp; <label>Session</label> &nbsp; {{$print->session}} &nbsp; <label>Result</label> &nbsp; {{$print->result}}  &nbsp; <label>Medium</label> &nbsp; {{$print->medium}}
                              </div>

                              <div class="form-group">
                                 <label>11. &nbsp;Board Enrollment Number</label> &nbsp;
                                 {{$print->enrollment_number}} 
                              </div>

                              <div class="form-group">
                                 <label>12. &nbsp;Class to which admission is saught</label> &nbsp;
                                 {{$print->next_class}} &nbsp; <label>Medium</label>  &nbsp;  {{$print->next_medium}} &nbsp; <label>Subject</label> &nbsp; {{$print->subject}}
                              </div>

                               <div class="form-group">
                                 <label>13. &nbsp;SSSM ID NO.</label> &nbsp;
                                 {{$print->sssm_id}} &nbsp; <label>Aadhar Number</label>  &nbsp;  {{$print->aadhar_number}} &nbsp; <label>Student Bank A/c No. </label> &nbsp; {{$print->bank_account}}
                              </div>

                               <div class="form-group">
                                 <label>14. &nbsp;No. of document attatched</label> &nbsp;
                                 {{$print->number_of_document}} &nbsp;
                                 <label>T.C. No.</label>  &nbsp; {{$print->tc_number}} &nbsp;  <label>Mark Sheet</label>  &nbsp; {{$print->mark_Sheet}}
                              </div>
                              
                           </form>

                          
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>

@endsection