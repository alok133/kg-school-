<!DOCTYPE html>
<html>
<head>
  
  <title></title>
</head>
<body>

                              <h1 style="text-align: center;font-weight: bold;">K.G CHILDREN SCHOOL</h1>
                              <p style="text-align: center;font-weight: bold;">Morar , GWALIOR (M.P.) <br>[AFFLIATED TO C.B.S.E.]</p>
                              <h3 style="text-align: center;font-weight: bold;">APPLICATION FOR ADMISSION</h3>

                                <img src="../public/upload/{{$print->image}}" style="width: 150px;height: 150px;float: right;">


                              <div class="form-group">
                                 <label style="font-weight: bold;">S.No. :</label> &nbsp;
                                 {{$print->id}}
                              </div><br>

                              <div class="form-group">

                                 <label style="font-weight: bold;">1. &nbsp; Full Name Of the pupil :</label> &nbsp;
                                 {{$print->name}}
                              </div>
                              <br>

                              <div class="form-group">
                                 <label style="font-weight: bold;"> 2. &nbsp;Enter Email</label> &nbsp;
                                 {{$print->email}}
                              </div>
                                <br>

                               <div class="form-group">
                                 <label style="font-weight: bold;">3. &nbsp; Date Of Birth :</label> &nbsp;
                                 {{$print->dob}}
                              </div>

                                <br>


                              <div class="form-group">
                                 <label style="font-weight: bold;">4. &nbsp;Do You Belong To SC / ST / O.B.C - Yes / No :</label> &nbsp; 
                                 {{$print->SC_ST}} &nbsp; <label style="font-weight: bold;">Caste :</label>&nbsp;
                                 {{$print->caste}}
                              </div>

                                <br>

                              <div class="form-group">
                                 <label style="font-weight: bold;">5. &nbsp;Mother's Name :</label> &nbsp;
                                 {{$print->mother_name}}
                              </div>

                                <br>

                              <div class="form-group">
                                 <label style="font-weight: bold;">6. &nbsp;Full Name Of Father :</label> &nbsp;
                                 {{$print->father_name}} &nbsp; <label style="font-weight: bold;">Monthly Income :</label>  &nbsp;  {{$print->monthly_income}}
                              </div>

                                <br>

                              <div class="form-group">
                                 <label style="font-weight: bold;">7. &nbsp;Occupation Of Father :</label> &nbsp;
                                 {{$print->father_occupdation}} &nbsp; <label style="font-weight: bold;">Designation :</label>  &nbsp;  {{$print->father_designation}} &nbsp; <label style="font-weight: bold;">Transferable / Non Transferable :</label> &nbsp; {{$print->designation_transfer}} &nbsp; <label style="font-weight: bold;">Department :</label> &nbsp; {{$print->department}}
                              </div>

                                <br>

                              <div class="form-group">
                                 <label style="font-weight: bold;">8. &nbsp;Name Of Father / Local Guardian :</label> &nbsp;
                                 {{$print->local_guardian}} &nbsp; <label style="font-weight: bold;">Relation :</label>  &nbsp;  {{$print->guardian_relation}} &nbsp; <label style="font-weight: bold;">Local Address :</label> &nbsp; {{$print->local_address}} &nbsp; <label style="font-weight: bold;">Phone Number :</label> &nbsp; {{$print->phone_number}}  &nbsp; <label style="font-weight: bold;">Permanent Address :</label> &nbsp; {{$print->permanent_address}}
                              </div>

                              <br>

                              <div class="form-group">
                                 <label style="font-weight: bold;">9. &nbsp;Bonafide Address Of M.P. or other :</label> &nbsp;
                                 {{$print->bonafide_residence}} 
                              </div>

                                <br>

                              <div class="form-group">
                                 <label style="font-weight: bold;">10. &nbsp;Name Of Pervious School Last Attend :</label> &nbsp;
                                 {{$print->previous_school}} &nbsp; <label style="font-weight: bold;">Class Last Attended :</label>  &nbsp;  {{$print->last_class}} &nbsp; <label style="font-weight: bold;">Session :</label> &nbsp; {{$print->session}} &nbsp; <label style="font-weight: bold;">Result :</label> &nbsp; {{$print->result}}  &nbsp; <label style="font-weight: bold;">Medium :</label> &nbsp; {{$print->medium}}
                              </div>

                                <br>

                              <div class="form-group">
                                 <label style="font-weight: bold;">11. &nbsp;Board Enrollment Number :</label> &nbsp;
                                 {{$print->enrollment_number}} 
                              </div>

                                <br>

                              <div class="form-group">
                                 <label style="font-weight: bold;">12. &nbsp;Class to which admission is saught :</label> &nbsp;
                                 {{$print->next_class}} &nbsp; <label style="font-weight: bold;">Medium :</label>  &nbsp;  {{$print->next_medium}} &nbsp; <label style="font-weight: bold;">Subject :</label> &nbsp; {{$print->subject}}
                              </div>

                                

                                <br>

                               <div class="form-group">
                                 <label style="font-weight: bold;">14. &nbsp;No. of document attatched :</label> &nbsp;
                                 {{$print->number_of_document}} &nbsp;
                                 <label style="font-weight: bold;">T.C. No. :</label>  &nbsp; {{$print->tc_number}} &nbsp;  <label style="font-weight: bold;">Mark Sheet :</label>  &nbsp; {{$print->mark_Sheet}}
                              </div>
                              

</body>
</html>