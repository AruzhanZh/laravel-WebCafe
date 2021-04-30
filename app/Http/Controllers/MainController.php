<?php

namespace App\Http\Controllers;

use App\Mail\Gmail;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Subscribe;
use App\Models\Reservation;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function home() {
        return view('home');
    }
    public function menu() {
        return view('menu');
    }
    public function about() {
        return view('about');
    }
    public function reservation() {
        return view('reservation');
    }
    public function stuff() {
        return view('stuff');
    }
    public function statistics() {
        return view('statistics');
    }
    public function blog() {
        return view('blog');
    }
    public function contact() {
        return view('contact');
    }

    public function contact_check(Request $request) {
        //dd($request);

        $contact = new Contact();
        $contact-> name = $request->input('name');
        $contact-> email = $request->input('email');
        $contact-> message = $request->input('message');

        $contact->save();

        return redirect('contact');
    }

    public function subscribe_check(Request $req) {
        //dd($request);

        $subscribe = new Subscribe();
        $subscribe-> email = $req->input('email');
        $subscribe-> sender = '190103359';
        $subscribe-> reciever = '190103359';

        Mail::to("190103359@stu.sdu.edu.kz")->send(new Gmail($subscribe));

        $subscribe->save();

        return redirect('home');
    }

    public function reservation_check(Request $req) {
        //dd($request);

        $reservation = new Reservation();
        $reservation-> date = $req->input('date');
        $reservation-> time = $req->input('time');
        $reservation-> name = $req->input('name');
        $reservation-> email = $req->input('email');

        $reservation->save();

        return redirect('reservation');
    }
}
