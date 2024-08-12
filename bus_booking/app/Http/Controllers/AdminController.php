<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\Gallary;
use App\Models\RoomBus;
use Notification;
use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class AdminController extends Controller
{
    //
    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;

            if($usertype == 'user')
            {
                $bus = RoomBus::all();

                $gallary = Gallary::all(); //

                return view('home.index',compact('bus','gallary')); //prevents going to user panel
                //return view('dashboard'); goes to user admin panel
            }

            else if($usertype == 'admin')
            {
                return view('admin.index');
            }
            else{
                return redirect()->back();
            }
        }
    }
    public function home()
    {
        $bus = RoomBus::all();

        $gallary = Gallary::all(); //

        return view('home.index', compact('bus','gallary'));
    }
    public function create_bus()
    {
        return view('admin.create_bus');

    }
    public function add_bus(Request $request)
    {
        $data = new RoomBus;

        $data->bus_title = $request ->title;
        $data->start_From = $request ->depature;
        $data->bus_time = $request ->bus_time;
        $data->bus_date = $request ->bus_date;
        $data->price = $request ->price;
        $data->destination = $request ->arrivals;
        $data->description = $request ->description;
        $data->bus_capacity = $request ->type;

        //image uploading
        $image=$request->image;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('bus',$imagename); //bus is a folder that will be created to

            $data->image=$imagename;
        }

        $data->save();

        return redirect()->back();
    
    }
    public function view_bus()
    {
        $data = RoomBus::orderBy('id', 'desc')->paginate(5); // Paginate results, 10 items per page
        return view('admin.view_bus', compact('data'));
    }
    public function bus_delete($id)
    {
        $data = RoomBus::find($id);
        $data->delete();

        return redirect()->back();
    }
    public function bus_update($id)
    {
        $data = RoomBus::find($id);

        return view('admin.update_bus',compact('data'));
    }
    public function edit_bus(Request $request, $id)
    {
        $data = RoomBus::find($id);

        $data->bus_title = $request ->title;
        $data->start_From = $request ->depature;
        $data->bus_time = $request ->bus_time;
        $data->bus_date = $request ->bus_date;
        $data->price = $request ->price;
        $data->destination = $request ->arrivals;
        $data->description = $request ->description;
        $data->bus_capacity = $request ->type;

        //image uploading
        $image=$request->image;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('bus',$imagename); //bus is a folder that will be created to

            $data->image=$imagename;
        }


        $data->save();
        return redirect()->back();

    }
    public function bookings()
    {
        $data = Booking::all();
        return view('admin.booking',compact('data'));
    }

    public function delete_booking($id)
    {
        $data = Booking::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function approve_book($id)
    {
        $booking = Booking::find($id);

        $booking->status='approved';
        $booking->save();

        return redirect()->back();
    }

    public function reject_book($id)
    {
        $booking = Booking::find($id);

        $booking->status='rejected';
        $booking->save();

        return redirect()->back();
    }

    public function view_gallary()
    {
        $gallary = Gallary::all();
        return view('admin.gallary',compact('gallary'));
    }

    public function upload_gallery(Request $request)
    {
        $data = new Gallary;

        $image = $request->image;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('gallary',$imagename);
            $data->image = $imagename;

            $data->save();
            return redirect()->back();
        }
    }

    public function delete_gallary($id)
    {
        $data = Gallary::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function all_messages()
    {
        $data = Contact::all();

        return view('admin.all_messages',compact('data'));
    }

    public function send_mail($id)
    {
        $data = Contact::find($id);

        return view('admin.send_mail',compact('data'));
    }


    public function mail(Request $request, $id)
    {
        $data = Contact::find($id);

        $details = [
            'greeting' => $request->greeting,

            'body' => $request->body,

            'action_text' => $request->action_text,

            'action_url' => $request->action_url,

            'endline' => $request->endline,
        ];


        Notification::send($data, new SendEmailNotification($details));

        return redirect()->back();

    
       

    }
}
