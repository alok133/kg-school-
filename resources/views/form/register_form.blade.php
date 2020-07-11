
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="/logo/image20.jpg">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#"> -->
    <title>K.G. Children Primary School</title>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
   <!--  <link href="css/animsition.min.css" rel="stylesheet"> -->
    <link href="css/animate.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>
<body>
     <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
         <!--header starts-->
         
         <div class="page-wrapper">
            
            <section class="contact-page inner-page">
               <div class="container">

                  <div class="row">
 
                    <div class="col-md-12">

                      <h1 style="text-align: center;font-weight: bold;">K.G. Children Primary School (Morar)</h1>
                      <br>
                        <div class="widget">
                           <div class="widget-body">
                              <form method="post" action="{{url('/kg-morar')}}" enctype="multipart/form-data" onsubmit="return myfun()">
                                @csrf
                                <span class="badge badge-pill badge-dark" style="width: 100%;"><h2 style="font-weight: bold;color: #009df2;text-align: center;">Application For Admission</h2></span>
                                <br>
                                 <div class="row">
                                    
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Full Name</label>
                                       <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Full Name" required>
                                       <br>

                                       <label for="exampleInputEmail1">Enter  Email</label>
                                       <input type="email" class="form-control" id="email" name="email"  placeholder="Enter Your Email" required>
                                       <br>

                                        <label for="exampleInputEmail1">Date Of Birth</label>
                                       <input class="form-control" placeholder="Enter DOB" type="text" name="dob" id="dob" required> 

                                       <br>

                                       <label for="exampleInputPassword1">Do you belong to Schedule Caste / Schedule Tribe / O.B.C</label><br>

                                       <input type="radio" value="Yes" name="SC_ST"> Yes
                                       <input type="radio" value="No" name="SC_ST"> No <br><br>

                                        <label for="exampleInputPassword1">Caste</label><br>
                                       <input type="text" class="form-control" name="caste" placeholder="Enter Caste">

                                       <br>

                                        <label for="exampleTextarea">Mother's Name</label><br>
                                       <input type="text" placeholder="Enter Mother's Name" name="mother_name" class="form-control" required>

                                       <br>

                                       <label for="exampleTextarea">Father's Full Name</label><br>
                                       <input type="text" placeholder="Enter Father's Name" name="father_name" class="form-control">

                                       <br>

                                        <label for="exampleInputEmail1">Father's Monthly Income</label> <br>
                                       <input type="text" placeholder="Enter Father's Monthly Income" name="monthly_income" class="form-control" required>

                                       <br>

                                       <label for="exampleInputEmail1">Occupation Of Father</label> <br>
                                       <input type="text" placeholder="Enter Father's Occupation" name="father_occupdation" class="form-control" required>

                                       <br>

                                        <label for="exampleInputEmail1">Designation Of Father</label> <br>
                                       <input type="text" placeholder="Enter Designation Of Father" name="father_designation" class="form-control" required>

                                       <br>

                                       <label for="exampleInputEmail1">Designation Of Father Is:</label> <br>
                                      <input type="radio" name="designation_transfer" value="Transferable" required> Transferable <input type="radio" name="designation_transfer" value="Non Transferable" required> Non Transferable

                                      <br>
                                      <br>

                                      <label for="exampleInputEmail1">Department Of Father</label> <br>
                                       <select class="form-control" name="department" required>

                                        <option value="0">Select Department</option>

                                        <option value="Defence">Defence</option>

                                        <option value="Central Govt">Central Goverment</option>

                                        <option value="Public Sector">Public Sector Undertaking</option>

                                        <option value="Other">Other</option>
                                         
                                       </select>

                                       <br>

                                       <label for="exampleInputEmail1">Name Of The Father / Local Guardian </label> <br>
                                       <input type="text" placeholder="Enter Name Of Guardian" name="local_guardian" class="form-control" required>

                                       <br>

                                        <label for="exampleInputEmail1">Relation With Guardian</label> <br>
                                       <input type="text" placeholder="Enter Your Relation" name="guardian_relation" class="form-control" required>

                                       <br>

                                       <label for="exampleInputEmail1">Your Local Address</label> <br>
                                       <input type="text" placeholder="Enter Your Address" name="local_address" class="form-control" required>

                                       <br>

                                       <label for="exampleInputEmail1">Phone Number</label> <br>
                                       <input type="text" placeholder="Enter Phone Number" id="mobile" name="phone_number" class="form-control" required>

                                      

                                    </div>

 <!-- **************************Right Section*********************** -->



                                    <div class="form-group col-sm-6">
                               
                                      
                                        <label for="exampleInputEmail1">Your  Permanent Address</label> <br>
                                       <input type="text" placeholder="Enter Permanent Address" name="permanent_address" class="form-control"  required>

                                       <br>

                                       <label for="exampleInputEmail1">Bonafide Residence Of M.P. or other</label> <br>
                                       <input type="text" placeholder="Enter Your Bonafide Residence" name="bonafide_residence" class="form-control" required>

                                       <br>

                                       <label for="exampleInputEmail1">Name Of Previous School Last Attend</label> <br>
                                       <input type="text" placeholder="Enter Your Pervious School Name" name="previous_school" class="form-control" required>

                                       <br>

                                       <label for="exampleInputEmail1">Class Last Attend</label> <br>
                                       <input type="text" placeholder="Enter Your Last Class" name="last_class" class="form-control" required>

                                       <br>

                                       <label for="exampleInputEmail1">Session</label> <br>
                                       <input type="text" placeholder="Enter Your Last Session" name="session" class="form-control" required>

                                        <br>

                                       <label for="exampleInputEmail1">Result</label> <br>
                                       <input type="text" placeholder="Enter Your result" name="result" class="form-control" required>

                                        <br>

                                       <label for="exampleInputEmail1">Medium</label> <br>
                                       <input type="text" placeholder="Enter Your Medium" name="medium" class="form-control" required>

                                        <br>

                                       <label for="exampleInputEmail1">Board Enrollment Number</label> <br>
                                       <input type="text" placeholder="Enter Your Enrollment Number" name="enrollment_number" class="form-control" required >


                                        <br>

                                       <label for="exampleInputEmail1">Class To Which Admission Is Saught</label> <br>
                                       <input type="text" placeholder="Enter Class In Which You Want Admission" name="next_class" class="form-control" required>

                                        <br>

                                       <label for="exampleInputEmail1">Medium</label> <br>
                                       <input type="text" placeholder="Enter Medium" name="next_medium" class="form-control" required>

                                        <br>

                                       <label for="exampleInputEmail1">Subject</label> <br>
                                       <input type="text" placeholder="Enter Subject" name="subject" class="form-control">

                                        <br>

                                       <label for="exampleInputEmail1">Number Of Document Attached</label> <br>
                                       <input type="text" placeholder="Enter Number Of Document" name="number_of_document" class="form-control" required>

                                        <br>

                                       <label for="exampleInputEmail1">T.C. Number</label> <br>
                                       <input type="text" placeholder="Enter T.C. Number" name="tc_number" class="form-control" required>

                                        <br>

                                       <label for="exampleInputEmail1">Mark-Sheet </label> <br>
                                       <input type="text" placeholder="Enter Mark-Sheet" name="mark_Sheet" class="form-control">

                                       <br>

                                       <label for="exampleInputEmail1">Mode Of Conveyance</label> <br>
                                       <input type="text" placeholder="Enter Mode Of Conveyance" name="conveyance" class="form-control">

                                       <br>

                                        <label for="exampleInputEmail1">Your Photo</label> <br>
                                       <input type="file" name="image">

                                       
                                    </div>
                                    
                                 
                                 <div class="row" style="float: right;    margin-right: 8%;">
                                   
                                       <p> <button type="submit" class="btn btn-primary">Submit</button> </p>
                                   
                                 </div>
                              </form>
                           </div>
                           <!-- end: Widget -->
                        </div>
                        <!-- /REGISTER -->
                     </div>
                     <!-- WHY? -->
                     
                     <!-- /WHY? -->
                  </div>
               </div>
            </section>
            
            <!-- start: FOOTER -->
          
            <!-- end:Footer -->
         </div>
         <!-- end:page wrapper -->

      </div>


      <!--/end:Site wrapper -->
    <!-- Bootstrap core JavaScript
    ================================================== -->

    <script>
      function myfun(){

        var a=document.getElementById("mobile").value;
        if(a==""){

          document.getElementById("message");
           swal("Error!", "Please fill the mobile number", "error");
          return false;
        }

        if(isNaN(a)){

          document.getElementById("message");
           swal("Sorry!", "Only numeric value allowed in mobile number", "error");
          return false;
        }

        if(a.length <10){

          document.getElementById("message");
           swal("Sorry!", "Mobile number be 10 digit", "error");
          return false;
        }

        if(a.length >10){

          document.getElementById("message");
           swal("Sorry!", "Mobile number be 10 digit", "error");
          return false;
        }
      }
    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>


  @include('sweetalert::alert')


</body>

</html>