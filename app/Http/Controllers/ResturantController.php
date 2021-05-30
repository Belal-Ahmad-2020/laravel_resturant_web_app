<?php

namespace App\Http\Controllers;

// use Crypt;
use App\Models\User;
use App\Models\Resturant;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Crypt;

class ResturantController extends Controller
{
    //
       // Homepage
       public function home() {
        return view('header.home');
    }

    // list all resturants
    public function list() {
        $data = Resturant::paginate(5);
        return view('header.list', ['data'=>$data]);
    }

    // addd new resturant
    public function addResturant(Request $req) {
        $res = new Resturant;
        $req->validate([
            'name' => 'required | min:3 |string',
            'email' => 'required | email', 
            'address' => 'required',
        ]);
        $res->name=$req->name;
        $res->email=$req->email;
        $res->address=$req->address;
        $res->save();
        return redirect('list')->with('msg', "New Resturant added successfully!");

    }

    // deleteResturant
    public function delete($id) {
        Resturant::find($id)->delete();
        return redirect('list')->with('msg', 'Resturant Deleted Successfully!');
    }

    // editResturant
    public function edit($id) {
         $data =  Resturant::find($id); 
        // return $data;
        return view('edit', compact('data', $data));
    }

    public function updateRes(Request $req) {
        $rest = Resturant::find($req->id);
        $req->validate([
            'name' => 'required | min:3 |string',
            'email' => 'required | email', 
            'address' => 'required',
        ]);
        $rest->name=$req->name;
        $rest->email=$req->email;
        $rest->address=$req->address;
        $rest->update();

        $req->session()->flash('update', 'Resturant Updated Successfully');
        return redirect('list');
    }   

    // Register
    public function register(Request $req) {
        $u = new User;
        $req->validate([
            'name' => 'required | min:3 | string',
            'email' => 'required | email',
            'password' => 'required | min:4 ',
        ]);

        $u->name=$req->name;
        $u->email=$req->email;
        $u->password=Crypt::encrypt($req->password);
        $u->save();

        $req->session()->flash('msg', 'Account created successfully!');
        return redirect('register');

    }

    //Login
    public function login(Request $req) {
        $user =  User::where('email', $req->email)->get();
        $password =  Crypt::decrypt($user[0]->password);
        if($password == $req->password) {
            $req->session()->put('name', $user[0]->name);
            return redirect('/');
        }

    }

    // Logout
    public function logout() {
        if(session('name')) {
            session()->pull('name');
            return redirect('login');
        }
    }

    // About
    public function about() {
        return view('header.about');
    }

    // Contact
    public function contact() {
        return view('header.contact');
    }
    
}
