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
                        <th scope="col">From</th>
                        <th scope="col">To</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Capacity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <td>{{ $item->bus_title }}</td>
                        <td>{{ $item->start_From }}</td>
                        <td>{{ $item->destination }}</td>
                        <td>{{ $item->bus_date }}</td>
                        <td>{{ $item->bus_time }}</td>
                        <td>{{ $item->bus_capacity }}</td>
                        <td>K{{ $item->price }}</td>
                        <td>
                            <img src="bus/{{ $item->image }}" alt="" width="30px" height="30px">
                        </td>
                        <td>
                            <a href="{{ url('bus_update', $item->id )}}" class="btn btn-outline-success">
                                Update
                            </a>
                            <a onclick="return confirm('Are you sure, you want to delete this record?')" href="{{ url('bus_delete', $item->id )}}" class="btn btn-outline-danger">
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            <!-- Pagination Links -->
            <div class="d-flex justify-content-end">
                {!! $data->links() !!}
            </div>
        </div>
      </div>
       @include('admin.footer')
  </body>
</html>