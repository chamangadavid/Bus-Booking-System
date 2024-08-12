<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="admin/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
          <h1 class="h5">Chamanga David</h1>
          <p>Software Developer</p>
        </div>
      </div>
      <!-- Sidebar Navidation Menus-->
      <span class="heading">Main</span>
      <ul class="list-unstyled">
              <li class="active"><a href="#"> <i class="icon-home"></i>Home </a></li>
              <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Buses </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="{{ url('create_bus')}}">Add Buses</a></li>
                  <li><a href="{{ url('view_bus')}}">View Buses</a></li>
                </ul>
              </li>
              <li><a href="{{ url('bookings')}}"> <i class="icon-home"></i>Booking </a></li>
              <li><a href="{{ url('view_gallary')}}"> <i class="icon-home"></i>Gallery </a></li>
              <li><a href="{{ url('all_messages')}}"> <i class="icon-home"></i>Messages </a></li>


      </ul>
    </nav>