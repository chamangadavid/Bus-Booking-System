<!DOCTYPE html>
<html>
  <head> 
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

            <div>
                <h1>ADD BUSES</h1>
                <form action="{{url('add_bus')}}" method="Post" enctype="multipart/form-data">

                    @csrf
                    <div class="form-group">
                        <label>Bus Name</label>
                        <input type="text" name='title' class="form-control" placeholder="Enter Bus Name">
                      </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Origin</label>
                        <input type="text" name='depature' class="form-control" placeholder="Bus starts from">
                        </div>
                      <div class="form-group col-md-6">
                        <label>Destination</label>
                        <input type="text" name='arrivals' class="form-control" placeholder="Enter Bus Destination">
                      </div>
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" cols="150" rows="3" placeholder="Enter Bus Description"></textarea>
                      </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Bus Capacity</label>
                        <select name="type" class="form-control">
                            <option selected>Choose...</option>
                            <option value="17">17 Seater</option>
                            <option value="29">29 Seater</option>
                            <option value="60">60 Seater</option>
                            <option value="Other">Other</option>
                        </select>
                        </div>
                      <div class="form-group col-md-2">
                        <label>Price</label>
                        <input type="number" name="price" class="form-control" placeholder="Enter Bus Fair">
                      </div>
                      <div class="form-group col-md-3">
                        <label>Date</label>
                        <input type="date" name="bus_date" class="form-control">
                      </div>
                      <div class="form-group col-md-3">
                        <label>Depature Time</label>
                        <input type="time" name="bus_time" class="form-control">
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Upload Image</label>
                        <input type="file" name='image' class="form-control-file" >
                        </div>
                        <input class="btn btn-outline-primary" type="submit" value="Add Bus">
                  </form>
                  
                </div>
            </div>
            </div>
        </div>

       @include('admin.footer')
  </body>
</html>