<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')
  </head>
  <body>

    @include('admin.header')

      @include('admin.sidebar')
      

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        {{-- <th scope="col">Bus_id</th> --}}
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Date</th>
                        <th scope="col">From</th>
                        <th scope="col">To</th>
                        <th scope="col">Bus</th>
                        <th scope="col">Price</th>
                        {{-- <th scope="col">Seat</th> --}}
                        {{-- <th scope="col">Seat No.</th> --}}
                        
                        {{-- <th scope="col">Time</th> --}}
                        {{-- <th scope="col">Adult</th>
                        <th scope="col">Children</th>
                        <th scope="col">Luggages</th> --}}
                        <th scope="col">Status</th>
                        <th scope="col">Status update</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    
                    <tr>
                        <td>{{$item->firstname}}</td>
                        <td>{{$item->lastname}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->bookDate}}</td>
                        <td>{{$item->frombooking}}</td>
                        <td>{{$item->destination}}</td>
                        <td>
                            {{$item->bus ? $item->bus->bus_title : 'No Bus Assigned'}}
                        </td>
                        <td>
                            K{{$item->bus ? $item->bus->price : 'N/A'}}
                        </td>

                        <td>
                            @if($item->status =='approved')
                                <span style="color: green;">Approved</span>

                                @endif

                                @if($item->status =='rejected')
                                <span style="color: red;">Rejected</span>

                                @endif

                                @if($item->status =='waiting')
                                <span style="color: yellow;">Waiting</span>

                                @endif
                        </td>
                        <td>
                           <span style="padding-right:5px;"> 
                            <a class="btn btn-outline-success" href="{{url('approve_book',$item->id)}}">Approve</a></span>
                            <a class="btn btn-outline-warning" href="{{url('reject_book',$item->id)}}">Reject</a>
                        </td>
                        <td>
                            <a onclick="return confirm('Are you sure you want to delete this?');" class="btn btn-outline-danger" href="{{url('delete_booking',$item->id)}}">Del</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

          </div>
        </div>
      </div>
  
     
       @include('admin.footer')
  </body>
</html>