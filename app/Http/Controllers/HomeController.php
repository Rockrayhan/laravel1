<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['title'] = 'Home Page';
        return view('home', $data);
    }

    public function about()
    {
        $data['title'] = 'About Page';
        $data['name'] = 'kakku';
        $data['fruits'] = ['apple', 'nut', 'mango'];
        return view('about', $data);
    }

    public function contact()
    {
        $data['title'] = 'Contact Page';
        return view('contact', $data);
    }

    public function store(Request $request)
    {
        $contact = new Contact();

        $messages = [
            'name.required' => 'Naam koi ??',
            'subject.required' => 'Subject den vai please',
            'subject.min' => 'Subject er length barao',
        ] ;

        $validate = $request->validate([
            'name' => 'required|min:4|max:255',
            'email' => 'email',
            'subject' => 'min:10|max:50',
            'message' => 'min:4|max:299',
        ], $messages );

        if ($validate) {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ];
            // print_r($request) ;
            $contact->insert($data);
            return redirect('contact')->with('msg' , 'We recieved your message') ;
        }
    }

    
    // view
    public function contactList(){
        $contacts = Contact::all();
        $data['messages'] = $contacts ;
        // print_r($data);
        return view('contactList', $data);
    }


// delete
    public function delete($id){
        echo $id ;
        $contact = Contact::find($id);
        $contact->delete();
        // redirect('/allcontacts');
        return redirect('/allcontacts')->with('msg' , 'Your data has been deleted') ;
    }


// edit
    public function edit($id){
        $contact = Contact::find($id);
        $data['single'] = $contact; 
        return view('contactEdit' , $data);
    }


// update
    public function update( Request $req, $id ){
        $contact = Contact::find($id);

        $messages = [
            'name.required' => 'Naam koi ??',
            'subject.required' => 'Subject den vai please',
            'subject.min' => 'Subject er length barao',
        ] ;

        $validate = $req->validate([
            'name' => 'required|min:4|max:255',
            'email' => 'email',
        ], $messages );

        if ($validate) {
            $data = [
                'name' => $req->name,
                'email' => $req->email,
                'subject' => $req->subject,
                'message' => $req->message,
            ];
            // print_r($request) ;
            $contact->update($data);
            return redirect('contact')->with('msg' , 'Your data has updated') ;
        }
    }

}
