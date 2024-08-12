<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\Gallary;
use App\Models\RoomBus;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function bus_details($id)
    {
        $bus = RoomBus::find($id);
        return view('home.bus_details',compact('bus'));
    }

    public function book_now($id)
    {
        $bus = RoomBus::find($id);
        return view('home.book_now',compact('bus'));
    }

    public function add_booking(Request $request, $id)
    {
        $request->validate([
            'bookDate' => 'required|date',
        ]);


        $data = new Booking;

        $data->bus_id = $id;

        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->frombooking = $request->frombooking;
        $data->destination = $request->destination;
        $data->bookDate = $request->bookDate;
        $data->bookTime = $request->bookTime;
        $data->adults = $request->adults;
        $data->children = $request->children;
        $data->luggages = $request->luggages;
        $data->luggages_details = $request->luggages_details;


        $seatType = $request->seat_type;
        $seatNumber = $request->seat_number;

        $isBooked = Booking::where('bus_id','$id')
        ->where('seat_type','<=',$seatType)
        ->where('seat_number','>=',$seatNumber)->exists();

        if($isBooked)
        {
            return redirect()->back()->with('message','Seat is already booked..please try another seat');
        }
        else
        {
            $data->seat_type = $request->seat_type;
            $data->seat_number = $request->seat_number;
    
            $data->save();
    
                return redirect()->back()->with('message','Bus Ticket Booked Successfully');

        }
    }


// app/Http/Controllers/SeatController.php

public function getTakenSeats()
{
    // Retrieve all seat numbers from the Booking table
    $takenSeats = Booking::pluck('seat_number')->toArray();

    // Return the seat numbers as a JSON array
    return response()->json($takenSeats);
}

    public function contact(Request $request)
    {
        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->back()->with('message','Message sent Successfully');

    }

    public function our_buses()
    {
        $bus = RoomBus::all();
        return view('home.our_buses',compact('bus'));
    }

    public function bus_gallary()
    {
        $gallary = Gallary::all();
        return view('home.bus_gallary',compact('gallary'));
    }

    public function contact_us()
    {
        // $contact = Contact::all();
        return view('home.contact_us');
    }
}
