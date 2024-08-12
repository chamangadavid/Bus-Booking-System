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

      
                <h1>Gallery</h1>


            <form action="{{url('upload_gallery')}}" method="Post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                  <label>Upload Image</label>
                  <input type="file" name="image" class="form-control-file" required>
                </div>

                <div>
                    <input type="submit" class="btn btn-outline-primary" value="Add Image"></input>
                </div>
              </form>
              <br><br>
              <div class="container">
              <div class="row">
                @foreach($gallary as $gallaries)

              <div class="col-md-4">
                <img src="/gallary/{{$gallaries->image}}" alt="images">
                <a href="{{url('delete_gallary',$gallaries->id)}}" class="btn btn-outline-danger">Delete Image</a>
              </div>
                @endforeach
              </div>
              </div>
          </div>
        </div>
      </div>

       @include('admin.footer')
  </body>
</html>