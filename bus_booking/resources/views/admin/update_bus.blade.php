<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">

   @include('admin.css')

   <style type="text/css">
  h1{
    text-align: center;
  }
   </style>
  </head>
  <body>
    @include('admin.header')

      @include('admin.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <div class="container">
                <h1>UPDATE BUS</h1>

                <form action="{{url('edit_bus',$data->id)}}" method="Post" enctype="multipart/form-data">

                    @csrf
                    <div class="form-group">
                        <label>Bus Name</label>
                        <input type="text" name='title' value="{{ $data->bus_title }}" class="form-control">
                      </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Origin</label>
                        <input type="text" name='depature' value="{{ $data->start_From }}" class="form-control">
                        </div>
                      <div class="form-group col-md-6">
                        <label>Destination</label>
                        <input type="text" name='arrivals' value="{{ $data->destination }}" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" cols="150" rows="3">{{ $data->description }}</textarea>
                      </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Bus Capacity</label>
                        <select name="type" class="form-control">
                            <option value="{{ $data->bus_capacity}}">{{ $data->bus_capacity}}</option>
                            <option value="17">17 Seater</option>
                            <option value="29">29 Seater</option>
                            <option value="60">60 Seater</option>
                            <option value="Other">Other</option>
                        </select>
                        </div>
                      <div class="form-group col-md-2">
                        <label>Price</label>
                        <input type="number" name="price" value="{{ $data->price }}"  class="form-control">
                      </div>
                      <div class="form-group col-md-3">
                        <label>Date</label>
                        <input type="date" name="bus_date" value="{{ $data->bus_date }}"  class="form-control">
                      </div>
                      <div class="form-group col-md-3">
                        <label>Depature Time</label>
                        <input type="time" name="bus_time" value="{{ $data->bus_time }}"  class="form-control">
                      </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label>Current Image</label>
                            <img src="/bus/{{$data->image}}" alt="" width="50px" height="50px">
                            </div>
                          <div class="form-group col-md-10">
                            <label>Upload Image</label>
                            <input type="file" name='image' class="form-control-file" >
                          </div>
                        </div>


                    {{-- <div class="form-group col-md-6">
                        <label>Upload Image</label>
                        <img src="/bus/{{$data->image}}" alt="" width="50px" height="50px">
                        </div>
                    <div class="form-group col-md-6">
                        <label>Upload Image</label>
                        <input type="file" name='image' class="form-control-file" >
                        </div> --}}




{{-- 
                        <div class="div_deg">
                            <label> Current Image</label>
                           <img src="/bus/{{$data->image}}" alt="" width="100px" height="100px">
                        </div>
    
                        <div class="div_deg">
                            <label> Upload Image</label>
                            <input type="file" name='image'>
                        </div> --}}




                        <input class="btn btn-outline-primary" type="submit" value="Add Bus">
                  </form>
                  



            </div>
          </div>
        </div>
      </div>

       @include('admin.footer')
  </body>
</html>