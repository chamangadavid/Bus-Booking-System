<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')
  </head>
  <body>

    @include('admin.header')

      @include('admin.sidebar')

      @include('admin.body')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Messages</th>
                        <th scope="col">Send Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                   
                    <tr>
                        <td>{{ $item->name}}</td>
                        <td>{{ $item->email}}</td>
                        <td>{{ $item->phone}}</td>
                        <td>{{ $item->message}}</td>
                        <td>
                            <a class="btn btn-outline-success" href="{{url('send_mail',$item->id)}}">Send mail</a>
                        </td>
                       
                        <td>
                            <a onclick="return confirm('Are you sure, you want to delete this record?')" href="{{ url('bus_delete', $item->id )}}" class="btn btn-outline-danger">
                                Delete
                            </a>
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