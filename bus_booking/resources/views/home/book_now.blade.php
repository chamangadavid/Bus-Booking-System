<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
    @include('home.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .form-container{
            display: flex;
            justify-content: center; /* Centers horizontally */
            align-items: center;    
        }
        /* Hide the textarea by default */
        #luggageDetails {
            display: none;
        }
    </style>
    </head>

   <!-- body -->
   <body class="main-layout">
      {{-- <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div> --}}

      <header>
        @include('home.header')
      </header>

      <div  class="our_room">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">

                    <div>
                    @if(session()->has('message'))

                   <div class="alert alert-success">
                    <button type="button" class="close" data-bs-dismiss="alert">X</button>
                    {{session()->get('message')}}

                   </div>
                    @endif
                    </div>


                    <h2>Book Now</h2>
                    <p>Fill the following below, to book your ticket </p>
                 </div>
              </div>
           </div>
           <div class="form-container">
            <div class="row">

                @if($errors)

                @foreach($errors->all() as $errors)

                <li>
                    {{$errors}}
                </li>

                @endforeach
                @endif

                <form action="{{url('add_booking', $bus->id)}}" method="Post">
                    @csrf

                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label>First name</label>
                        <input type="text" name="firstname"
                        @if(Auth::id()) 
                        value="{{Auth::user()->name}}" 
                        @endif
                        class="form-control"
                        >
                      </div>
                      <div class="form-group col-md-4">
                        <label>Last name</label>
                        <input type="text" name="lastname" class="form-control" placeholder="Enter your lastname" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label>Email</label>
                        <input type="email" name="email"
                        @if(Auth::id()) 
                        value="{{Auth::user()->email}}" 
                        @endif
                         class="form-control"
                         >
                      </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                          <label>Mobile</label>
                          <input type="number" name="phone"
                          @if(Auth::id()) 
                        value="{{Auth::user()->phone}}" 
                        @endif
                          
                          class="form-control"
                          >
                        </div>
                        {{-- <div class="form-group col-md-4">
                          <label>Seat</label>
                          <select name="seat_type" class="form-control">
                            <option selected>Choose...</option>
                            <option value="Window Seater">Window Seater</option>
                            <option value="Middle Seater">Middle Seater</option>
                            <option value="Aisle Seate">Aisle Seate</option>
                          </select>
                        </div> --}}

                        <div class="form-group col-md-4">
                            <label>Seat Type</label>
                            <select name="seat_type" class="form-control" id="seatType">
                                <option selected>Choose...</option>
                                <option value="Window">Window Seater</option>
                                <option value="Middle">Middle Seater</option>
                                <option value="Aisle">Aisle Seater</option>
                            </select>
                        </div>
                        
                        <div class="form-group col-md-4">
                            <label>Seat Number</label>
                            <select name="seat_number" class="form-control" id="seatNumber">
                                <option selected>Choose...</option>
                            </select>
                        </div>


                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label>From</label>
                          <input type="text" name="frombooking" class="form-control" placeholder="Enter boarding station" required>
                        </div>
                        <div class="form-group col-md-6">
                          <label>To</label>
                          <input type="text" name="destination" class="form-control" placeholder="Enter your destination" required>
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label>Date</label>
                          <input type="date" name="bookDate" id="bookDate" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                          <label>Time</label>
                          <input type="time" name="bookTime" class="form-control" required>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label>Adults</label>
                          <input type="number" name="adults" class="form-control" placeholder="Enter total number of adults" required>
                        </div>
                        <div class="form-group col-md-4">
                          <label>Children</label>
                          <input type="number" name="children" class="form-control" placeholder="Enter total number of children" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Luggage</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="luggages" id="luggageYes" value="Yes"> Yes
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="luggages" id="luggageNo" value="No"> No
                            </div>
                            <textarea class="form-control mt-3" name="luggages_details" id="luggageDetails" rows="3" placeholder="Enter luggage description"></textarea>
                        </div>
                      </div>

                     
                    <input type="submit" class="btn btn-primary" value="Book Ticket"></input>
                  </form>

            </div>
           </div>
                    
           <div class="row">
            
              <div class="col-md-12 col-sm-12">
                 <div id="serv_hover"  class="room">

                    

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


      <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            const luggageYes = document.getElementById('luggageYes');
            const luggageNo = document.getElementById('luggageNo');
            const luggageDetails = document.getElementById('luggageDetails');

            // Function to handle textarea visibility and state
            function handleLuggageChange() {
                if (luggageYes.checked) {
                    luggageDetails.style.display = 'block';
                    luggageDetails.removeAttribute('disabled');
                } else if (luggageNo.checked) {
                    luggageDetails.style.display = 'none';
                    luggageDetails.setAttribute('disabled', 'true');
                }
            }

            // Add event listeners
            luggageYes.addEventListener('change', handleLuggageChange);
            luggageNo.addEventListener('change', handleLuggageChange);

            // Initialize state
            handleLuggageChange();
        });

        $(function(){
            var dtToday = new Date();

            var month = dtToday.getMonth() + 1;

            var day = dtToday.getDate();

            var year = dtToday.getFullYear();

            if(month < 10)
                month = '0' + month.toString();

                if(day < 10)
                day = '0' + day.toString();

                var maxDate = year + '-' + month + '-' + day;
                $('#bookDate').attr('min',maxDate);
                $('#endDate').attr('min',maxDate);
        });

    </script>


    <script>
        document.getElementById('seatType').addEventListener('change', function () {
            const seatNumberDropdown = document.getElementById('seatNumber');
            seatNumberDropdown.innerHTML = '<option selected>Choose...</option>'; // Clear previous options
    
            const seatType = this.value;
            let seatNumbers = [];
    
            if (seatType === 'Window') {
                seatNumbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12,13, 14];
            } else if (seatType === 'Middle') {
                seatNumbers = [15, 16, 17, 18, 19, 20, 22, 23, 24, 25, 26];
            } else if (seatType === 'Aisle') {
                seatNumbers = [27, 28, 29, 30, 31, 32, 33, 34, 35, 36];
            }
    
            // Add seat numbers to the dropdown
            seatNumbers.forEach(number => {
                const option = document.createElement('option');
                option.value = number;
                option.text = number;
                seatNumberDropdown.appendChild(option);
            });
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
   </body>
</html>