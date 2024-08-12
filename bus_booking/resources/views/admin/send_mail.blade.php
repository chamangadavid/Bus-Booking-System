<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
   @include('admin.css')
  

  </head>
  <body>

    @include('admin.header')

      @include('admin.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

       
                <h1>Mail send to {{$data->name}}</h1>
           
            <form action="{{url('mail',$data->id)}}" method="Post" class="form">

                @csrf

                <div class="form-row">
                  <div class="form-group col-md-5">
                    <label for="inputEmail4">Greeting</label>
                    <input type="text" name="greeting" class="form-control" id="inputEmail4">
                  </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                      <label for="inputEmail4">Main Body</label>
                      <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                  </div>
                  
                    <div class="form-row">
                        <div class="form-group col-md-5">
                        <label>Action Text</label>
                        <input type="text" name="action_text" class="form-control" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                        <label>Action Url</label>
                        <input type="text" name="action_url" class="form-control" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                        <label>End Line</label>
                        <input type="text" name="endline" class="form-control" id="inputEmail4">
                        </div>
                    </div>
                    
                    <input type="submit" class="btn btn-outline-primary" value="Send mail"></input>
                </form>
            
          </div>
        </div>
      </div>
  
       @include('admin.footer')
  </body>
</html>