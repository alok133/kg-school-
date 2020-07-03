@extends('admin.layout.master')
@section('content')

 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Edit Student</h1>
                  <small>Student</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="{{url('/student/print/' .$print->id)}}"> 
                              <i class="fa fa-print"></i>  Print Student Detail </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-12" action="{{url('/student/edit/' .$print->id)}}" method="post" enctype="multipart/form-data">

                            @csrf
                           	 
                              <div class="form-group col-sm-6">
                                 <label>Full Name Of the pupil</label>
                                  <input type="text" value="{{$print->name}}" name="name" class="form-control">

                                  <br>

                                  <label>Enter Email</label>
                                  <input type="text" value="{{$print->email}}" name="email" class="form-control">

                                  <br>

                                  <label>Date Of Birth</label>
                                  <input type="text" value="{{$print->dob}}" name="dob" class="form-control">

                                  <br>

                                  <label>Do You Belong To SC / ST / O.B.C </label><br>

                                  <input type="radio" value="yes" name="SC_ST"{{ $print->SC_ST == 'yes' ? 'checked' : '' }}> Yes
                                  <input type="radio" value="no" name="SC_ST" {{ $print->SC_ST == 'no' ? 'checked' : '' }}> No <br><br>

                                  <label>Caste</label><br>
                                  <input type="text" name="caste" value="{{$print->caste}}" class="form-control">

                                  <br>

                                   <label>Mother's Name</label><br>
                                  <input type="text" name="mother_name" value="{{$print->mother_name}}" class="form-control">

                                  <br>

                                   <label>Full Name Of Father</label><br>
                                  <input type="text" name="father_name" value="{{$print->father_name}}" class="form-control">

                                  <br>

                                   <label>Father's Monthly Income</label><br>
                                  <input type="text" name="monthly_income" value="{{$print->monthly_income}}" class="form-control">

                                  <br>

                                   <label>Occupation Of Father</label><br>
                                  <input type="text" name="father_occupdation" value="{{$print->father_occupdation}}" class="form-control">

                                   <br>

                                   <label>Designation</label><br>
                                  <input type="text" name="father_designation" value="{{$print->father_designation}}" class="form-control">

                                  <br>

                                  <label>Designation Of Father Is:</label><br>

                                  <input type="radio" value="Transferable" name="designation_transfer"{{ $print->designation_transfer == 'Transferable' ? 'checked' : '' }}> Transferable
                                  <input type="radio" value="Non Transferable" name="designation_transfer" {{ $print->designation_transfer == 'Non Transferable' ? 'checked' : '' }}> Non Transferable <br><br>


                                   <br>

                                   <label>Department</label><br>
                                 <select class="form-control" name="department" required>

                                        <option value="0">Select Department</option>

                                        <option value="Defence" 

                                          <?php if($print["department"]=='Defence'){

                                            echo "selected";
                                          } ?>

 
                                        >Defence</option>

                                        <option value="Central Govt"

                                          <?php if($print["department"]=='Central Govt'){

                                            echo "selected";
                                          } ?>


                                        >Central Goverment</option>

                                        <option value="Public Sector"

                                          <?php if($print["department"]=='Public Sector'){

                                            echo "selected";
                                          } ?>



                                        >Public Sector Undertaking</option>

                                        <option value="Other"


                                          <?php if($print["department"]=='Other'){

                                            echo "selected";
                                          } ?>

                                        >Other</option>
                                         
                                       
                                       </select>

                                       <br>

                                   <label>Name Of The Father / Local Guardian</label><br>
                                  <input type="text" name="local_guardian" value="{{$print->local_guardian}}" class="form-control">

                                  <br>

                                  <label>Relation With Guardian</label><br>
                                  <input type="text" name="guardian_relation" value="{{$print->guardian_relation}}" class="form-control">

                                  <br>

                                  <label>Your Local Address</label><br>
                                  <input type="text" name="local_address" value="{{$print->local_address}}" class="form-control">

                                   <br>

                                  <label>Phone Number</label><br>
                                  <input type="text" name="phone_number" value="{{$print->phone_number}}" class="form-control">

                              </div>

                              <div class="form-group col-sm-6">
                                 <label>Your Permanent Address</label>
                                  <input type="text" value="{{$print->permanent_address}}" name="permanent_address" class="form-control">

                                  <br>

                                  <label>Bonafide Residence Of M.P. or other</label>
                                  <input type="text" value="{{$print->bonafide_residence}}" name="bonafide_residence" class="form-control">

                                  <br>

                                  <label>Name Of Previous School Last Attend</label><br>

                                  <input type="text" name="previous_school" value="{{$print->previous_school}}" class="form-control">

                                  <br>


                                  <label>Class Last Attend</label><br>
                                  <input type="text" name="last_class" value="{{$print->last_class}}" class="form-control">

                                  <br>

                                   <label>Session</label><br>
                                  <input type="text" name="session" value="{{$print->session}}" class="form-control">

                                  <br>

                                   <label>Result</label><br>
                                  <input type="text" name="result" value="{{$print->result}}" class="form-control">

                                  <br>

                                   <label>Medium</label><br>
                                  <input type="text" name="medium" value="{{$print->medium}}" class="form-control">

                                  <br>

                                   <label>Board Enrollment Number</label><br>
                                  <input type="text" name="enrollment_number" value="{{$print->enrollment_number}}" class="form-control">

                                   <br>

                                   <label>Class To Which Admission Is Saught</label><br>
                                  <input type="text" name="next_class" value="{{$print->next_class}}" class="form-control">

                                  <br>

                                  <label>Medium</label><br>

                                  <input type="text" name="next_medium" value="{{$print->next_medium}}" class="form-control">


                                   <br>

                                   <label>Subject</label><br>
                                 
                                   <input type="text" name="subject" value="{{$print->subject}}" class="form-control">
                                       <br>

                                   <label>Number Of Document Attached</label><br>
                                  <input type="text" name="number_of_document" value="{{$print->number_of_document}}" class="form-control">

                                  <br>

                                  <label>T.C. Number</label><br>
                                  <input type="text" name="tc_number" value="{{$print->tc_number}}" class="form-control">

                                  <br>

                                  <label>Mark-Sheet</label><br>
                                  <input type="text" name="mark_Sheet" value="{{$print->mark_Sheet}}" class="form-control">

                                   <br>

                                  <label>Mode Of Conveyance</label><br>
                                  <input type="text" name="conveyance" value="{{$print->conveyance}}" class="form-control">

                                  <br>

                                  <label>Image</label><br>
                                  <input type="file" name="image" value="{{$print->image}}">

                                  <input type="hidden" name="current_image" value="{{$print->image}}">

                                  <img src="{{asset('/upload/' .$print->image)}}" style="width: 100px; margin-top: 10px;">


                              </div>
                              
                          
                              <div class="reset-button">
                                  <input type="submit" class="btn btn-success" value="Edit Student" style="float: right;">
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

