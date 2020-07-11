 <header class="main-header">
            <a href="/dashboard" class="logo">
               <!-- Logo -->
               <span class="logo-mini">
               
               </span>
               <span class="logo-lg">
               <!-- <img src="{{asset('../images/logo.png')}}" alt=""> -->
               <h2 style="color: white;font-weight: bold;">K.G School</h2>
               </span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
               <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                  <!-- Sidebar toggle button-->
                  <span class="sr-only">Toggle navigation</span>
                  <span class="pe-7s-angle-left-circle"></span>
               </a>
             
             <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                  
                    
                     
                     <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('assets/dist/img/avatar5.png')}}" class="img-circle" width="45" height="45" alt="user"></a>
                        <ul class="dropdown-menu" >
                           
                           <li>
                              <a href="{{url('/logout')}}">
                              <i class="fa fa-sign-out"></i> Signout</a>

                              
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>