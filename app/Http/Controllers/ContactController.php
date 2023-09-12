<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('add-contact');
    }
    public function addContact(Request $request)
    {
        // $request->all();
        //except method to remove from the req
        // $request->except('_token');

        // $request->name;

        //create method to add record
        // Contact::create($request->except('_token'));
        // Contact::create($request->except(['_token','name]));//to except multiple keys/props
        //using model object to add record
        $filename = null;
        if ($request->image) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $filename);
        }

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->city = $request->city;
        $contact->image = $filename;
        $contact->save();
        // return back(); //to back toward this page
        return back()->with('message', 'saved successfully'); //to back toward this page with message varibale

    }
    public function updateContact(Request $request)
    {
        $contact = Contact::find($request->id);
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->city = $request->city;
        $contact->update();
        return redirect()->back()->with('status', 'Contact Updated Successfully');
    }
    public function getAllContacts(Request $request)
    {
        $contacts = Contact::all();
        // dd($contacts);
        //  foreach ($contacts as $key => $value) {

        //  }
        // return  $contacts;
        return view('contact-list', compact(('contacts')));
    }
    public function edit(Request $request)
    {
        $id = $request->id;
        $contact = Contact::findOrFail($id);
        // $contact = Contact::where('id', $id)->first();
        // dd($contact);
        return view('contact-edit', compact('contact'));
    }
    public function details(Request $request)
    {
        $id = $request->id;
        // $contact = Contact::where('id', $id)->first();
        // $contact = Contact::firstWhere('id', $id);
        $contact = Contact::findOrFail($id);
        return view('contact-details', compact('contact'));
    }
    public function deleteContact(Request $request)
    {
        $id = $request->id;
        Contact::where('id', $id)->delete();
        $contacts = Contact::all();
        return view('contact-list', compact(('contacts')));
    }
}