<div  class="our_room">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Our Buses</h2>
                <p>Our fleet includes a variety of buses, ranging from city transit buses to long-distance coaches. We offer options such as standard city buses, luxury coaches, and minibuses to cater to different needs. </p>
             </div>
          </div>
       </div>

           
       <div class="row">
         @foreach($bus as $buses)
        
          <div class="col-md-4 col-sm-6">
             <div id="serv_hover"  class="room">
                <div class="room_img">
                   <figure><img src="bus/{{$buses->image}}" alt="bus images"/></figure>
                </div>
                <div class="bed_room">
                   <h3>{{ $buses->bus_title }}</h3>
                   <p style="padding: 10px">{!! Str::limit($buses->description, 50)!!} </p>

                   <a href="{{ url('bus_details', $buses->id)}}" class="btn btn-outline-primary">Bus Details</a>
                </div>
             </div>
          </div>
           @endforeach
       </div>
    </div>
 </div>