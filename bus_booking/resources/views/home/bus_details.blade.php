<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
    @include('home.css')
    </head>

   <!-- body -->
   <body class="main-layout">
      {{-- <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div> --}}

      <header>
        @include('home.header')
      </header>

      <div class="about">
        <div class="container-fluid">
           <div class="row">
              <div class="col-md-5">
                 <div class="titlepage">
                    <h2>{{$bus->bus_title}}</h2>
                    <p style="text-align: justify;">{{$bus->description}}</p>
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">From</th>
                            <th scope="col">To</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Price</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{$bus->start_From}}</td>
                            <td>{{$bus->destination}}</td>
                            <td>{{$bus->bus_date}}</td>
                            <td>{{$bus->bus_time}}</td>
                            <th>K{{$bus->price}}</th>
                          </tr>
                        </tbody>
                      </table>
                    <a href="{{ url('book_now', $bus->id)}}" class="btn btn-outline-primary"> Book Now</a>
                 </div>
              </div>
              <div class="col-md-7">
                 <div class="about_img">
                    <figure><img src="/bus/{{$bus->image}}" alt="bus details" style="height: 600px; width:600px"></figure>
                 </div>
              </div>
           </div>
        </div>
     </div>  
    @include('home.footer')
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>