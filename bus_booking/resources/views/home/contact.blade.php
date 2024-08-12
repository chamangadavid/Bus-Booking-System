<div class="contact">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Contact Us</h2>
             </div>

             @if(session()->has('message'))

             <div class="alert alert-success">

               <button type="button" class="close" data-bs-dismiss='alert'>X</button>
               {{session()->get('message')}}
             </div>
            

             @endif
          </div>
       </div>
       <div class="row">
          <div class="col-md-6">
             <form id="request" class="main_form" action="{{url('contact')}}" method="Post" enctype="multipart/form-data">

               @csrf

                <div class="row">
                   <div class="col-md-12 ">
                      <input class="contactus" placeholder="Name" type="text" name="name" required> 
                   </div>
                   <div class="col-md-12">
                      <input class="contactus" placeholder="Email" type="email" name="email" required> 
                   </div>
                   <div class="col-md-12">
                      <input class="contactus" placeholder="Phone Number" type="number" name="phone" required>                          
                   </div>
                   <div class="col-md-12">
                      <textarea class="textarea" placeholder="Message" type="text" name="message" required></textarea>
                   </div>
                   <div class="col-md-12">
                      <button type="submit" class="send_btn">Send</button>
                   </div>
                </div>
             </form>
          </div>
          <div class="col-md-6">
             <div class="map_main">
                <div class="map-responsive">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d246214.76486538592!2d28.199797545237438!3d-15.370760765654481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-15.31904!2d28.4491776!4m5!1s0x1940f3c2f728e3f1%3A0xe5c26f7767d1b9f9!2sH7HP%2B8FQ%20Lusaka%20Intercity%20Bus%20Terminus%2C%20Lusaka!3m2!1d-15.4216625!2d28.286234399999998!5e0!3m2!1sen!2szm!4v1723188170688!5m2!1sen!2szm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                 </div>
             </div>
          </div>
       </div>
    </div>
 </div>