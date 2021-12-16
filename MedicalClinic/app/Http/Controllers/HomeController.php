<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\contactus;
use App\Models\doctor;
use App\Models\blog;
use App\Models\service;
use App\Models\patient;
use App\Models\specialty;
use Illuminate\Http\Request;
use App\Http\Requests\Contactus\validatecontactus;
use App\Http\Requests\register\validateregister;
use App\Models\appointment;
use App\Http\Requests\appointment\validate;

class HomeController extends Controller
{
    //register
    public function register()
    {
        if (Auth::guard('patient')->check()) {
            return redirect()->route('home.index');
        } else {
            return view('clients.register');
        }
    }
    //post register
    public function postregister(validateregister $request)
    {
        $add =  patient::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'name' => $request->name,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'cmnd' => $request->cmnd,
            'bhyt' => $request->bhyt,
            'phone' => $request->phone,
            'mail' => $request->mail,
            'address' => $request->address
        ]);
        if ($add) {
            return redirect()->route('userlogin.index')->with('success', 'Register successful');
        } else {
            return redirect()->route('userlogin.index')->with('fail', 'Register fail');
        }
    }

    //login
    public function login()
    {
        return view('clients.login');
    }

    //check login
    public function check_login(Request $request)
    {
        $check = Auth::guard('patient')->attempt($request->only('username', 'password'), $request->has('remember'));
        if ($check) {
            return redirect()->route('home.index');
        }
        return redirect()->back();
    }

    //logout
    public function logout()
    {
        Auth::guard('patient')->logout();
        return redirect()->route('userlogin.index');
    }

    //home
    public function home()
    {
        $service = service::paginate(3);
        $doctor = doctor::paginate(4);
        return view('clients.home', compact('service', 'doctor'));
    }

    //aboutus
    public function aboutus()
    {
        $doctor = doctor::paginate(6);
        $specialty = specialty::all();
        return view('clients.aboutus', compact('doctor', 'specialty'));
    }

    //service
    public function services()
    {
        $service = service::paginate(6);
        return view('clients.services', compact('service'));
    }
    //post service 
    public function postservices()
    {
        return view('clients.makeappointment');
    }
    //search service 
    public function searchservice(Request $request)
    {
        if ($request->option) {
            if ($request->option == 1) {
                $service = service::where('name', 'LIKE', '%' . $request->key . '%')->get();
                return view('clients.services', compact('service'));
            } else if ($request->option == 2) {
                $service = service::where('price', 'LIKE', '%' . $request->key . '%')->get();
                return view('clients.services', compact('service'));
            } else if ($request->option == 3) {
                $service = service::where('benefit', 'LIKE', '%' . $request->key . '%')->get();
                return view('clients.services', compact('service'));
            }
        }
    }

    //blog
    public function blog()
    {
        $blog = blog::orderByDesc('created_at')->get();
        return view('clients.blog', compact('blog'));
    }
    //blog detail
    public function detailblog($id)
    {
        $blog = blog::where('id', $id)->first();
        return view('clients.blogdetail', compact('blog'));
    }
    //blog search
    public function search(Request $request)
    {
        if ($request->option) {
            if ($request->option == 1) {
                $blog = blog::where('title', 'LIKE', '%' . $request->key . '%')->get();
                return view('clients.blog', compact('blog'));
            } else if ($request->option == 2) {
                $blog = blog::where('date', 'LIKE', '%' . $request->key . '%')->get();
                return view('clients.blog', compact('blog'));
            } else if ($request->option == 3) {
                $blog = blog::where('content', 'LIKE', '%' . $request->key . '%')->get();
                return view('clients.blog', compact('blog'));
            }
        }
    }

    //contact us
    public function contactus()
    {
        return view('clients.contactus');
    }
    //post contact us
    public function postcontactus(validatecontactus $request)
    {
        $add = contactus::create([
            'name'  => $request->name,
            'email'  => $request->email,
            'messages' => $request->messages,
        ]);
        if ($add) {
            return redirect()->route('usercontactus.index')->with('success', 'Sent successful');
        } else {
            return redirect()->route('usercontactus.index')->with('fail', 'Sent fail');
        }
    }

    //doctor
    public function doctor()
    {
        $doctor = doctor::all();
        return view('clients.doctor', compact('doctor'));
    }
    //doctor detail
    public function detaildoctor($id)
    {
        $doctor = doctor::where('id', $id)->first();
        return view('clients.doctordetail', compact('doctor'));
    }
    //search doctor
    public function searchdoctor(Request $request)
    {
        if ($request->option) {
            if ($request->option == 1) {
                $doctor = doctor::where('name', 'LIKE', '%' . $request->key . '%')->get();
                return view('clients.doctor', compact('doctor'));
            } else if ($request->option == 2) {
                $doctor = doctor::where('specialty_id', 'LIKE', '%' . $request->key . '%')->get();
                return view('clients.doctor', compact('doctor'));
            } else if ($request->option == 3) {
                $doctor = doctor::where('experience', 'LIKE', '%' . $request->key . '%')->get();
                return view('clients.doctor', compact('doctor'));
            }
        }
    }

    //appointment
    public function appointment($id)
    {
        if ($id == 0) {
            $service = service::all();

            return view('clients.makeappointment', compact('service'));
        } else {
            $service = service::all();
            $chooseService = service::where('id', $id)->first();

            return view('clients.makeappointment', compact('service', 'chooseService'));
        }
    }
    //post appointment
    public function postappointment(validate $request)
    {
        $add = appointment::create([
            'patient_id' => $request->id,
            'phone' => $request->phone,
            'date' => $request->date,
            'symptom' => $request->symptom,
            'service_id' => $request->service_id,
            'price' => $request->price,
        ]);
        if ($add) {
            return redirect()->route('userappointment.index', 0)->with('success', 'Sent successful');
        } else {
            return redirect()->route('userappointment.index', 0)->with('fail', 'Sent fail');
        }
    }

    //profile
    public function profile()
    {
        $auth = auth()->guard('patient')->user();
        $appointment = appointment::where('patient_id', $auth->id)->get();
        return view('clients.profile', compact('appointment'));
    }
    //post profile
    public function postprofile(validateregister $request)
    {
        $edit = patient::where('id', $request->id)->update([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'name' => $request->name,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'cmnd' => $request->cmnd,
            'bhyt' => $request->bhyt,
            'phone' => $request->phone,
            'mail' => $request->mail,
            'address' => $request->address
        ]);

        if ($edit) {
            return redirect()->route('clients.profile')->with('success', 'Edit success');
        } else {
            return redirect()->route('clients.profile')->with('fail', 'Edit fail');
        }
    }
}
