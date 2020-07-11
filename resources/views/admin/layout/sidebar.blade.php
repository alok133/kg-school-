  <aside class="main-sidebar">
            <!-- sidebar -->
            <div class="sidebar">
               <!-- sidebar menu -->
               <ul class="sidebar-menu">

                  @if(Auth::user()->admin==0)
                  <li class="active">
                     <a href="{{url('/dashboard')}}"><i class="fa fa-tachometer"></i><span>Morar</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>

                   

                   <li class="treeview">
                     <a href="#">
                     <i class="fa fa-list"></i><span>Student</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        
                        <li><a href="{{url('viewStudent')}}">View Student</a></li>
                       
                     </ul>
                  </li>

                  @else

                  <li class="active">
                     <a href="{{url('/dashboard')}}"><i class="fa fa-tachometer"></i><span>Maharajpura</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>

                   <li class="treeview">
                     <a href="#">
                     <i class="fa fa-list"></i><span>Student</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        
                        <li><a href="{{url('/viewStudentMaharajpura')}}">View Student</a></li>
                       
                     </ul>
                  </li>
                  @endif

 
               </ul>
            </div>
            <!-- /.sidebar -->
         </aside>