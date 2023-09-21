<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //this shows all the database
        $contactList = Contact::latest();

        if(request()->has('keyword')){
            $contactList = Contact::latest()->where('name','LIKE', request('keyword'));
        }

        return view('contacts.index', [
            "contactList"=>$contactList->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd(request()->all());
        $validate = request()->validate([
            "name"=>'required|min:3|max:20',
            "email"=> 'email|unique:contacts,email',
            "phone"=> 'required|unique:contacts,phone|regex:/^\d*$/',
            "website"=>'url|nullable',
            "profile"=>'image',
            "relation"=>'required',
            "birthday"=> 'date|nullable',
            "note"=>'max:100',
        ]);
        // dd($validate);

       if(request()->has('profile')){
        $imageUrl = request()->file('profile')->store('contacts','public');
        
        $validate['profile'] = $imageUrl;
        // delete the old photo from profile...
       }
        Contact::create($validate);
        return redirect()->route('contacts.index')->with('message', 'New contact has been');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('contacts.show', [
            "contact"=>$contact
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('contacts.edit', [
            "contact" => $contact
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {


        $validate = request()->validate([
            "name" => 'required|min:3|max:20',
            "email" => 'email|unique:contacts,email,'.$contact->id,
            "phone" =>
            'required',
            'unique:contacts,phone,' . $contact->id,
            'regex:/^\d*$/',
            "website" => 'url|nullable',
            "profile" => 'image',
            "relation" => 'required',
            "birthday" => 'date|nullable',
            "note" => 'max:100',
        ]);
        // dd($validate);

       
        if (request()->has('profile')) {
            $imageUrl = request()->file('profile')->store('contacts', 'public');

            $validate['profile'] = $imageUrl;
            // delete the old photo from profile...
            Storage::disk()->delete($contact->profile);
        }
        $contact->update($validate);
        return redirect()->route('contacts.show', $contact->id)->with('message', 'Contact has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->findOrFail($contact->id)->delete();
        return redirect()->route('contacts.index')->with('message', 'Contact has been Deleted');
    }
}
