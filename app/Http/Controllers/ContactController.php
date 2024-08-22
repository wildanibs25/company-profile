<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('backend.contact.index', compact('contacts'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'first_name'       => 'required|string|max:255',
            'last_name'        => 'required|string|max:255',
            'email'            => 'required|email|max:255',
            'phone'            => 'required|string',
            'message'          => 'required|string'
        ]);

        $data = $request->all();
        unset($data['first_name']);
        unset($data['last_name']);

        $data['name'] = $request->first_name . ' ' . $request->last_name;

        $contact = contact::create($data);

        if ($contact) {
            return back()->withSuccess('Data berhasil Ditambah');
        } else {
            return back()->withInput()->withErrors('Data gagal Ditambah');
        }
    }


    public function show(Contact $contact)
    {
        $contact->status = true;
        $contact->save();

        return view('backend.contact.show', compact('contact'));
    }


    public function destroy(Contact $contact)
    {
        $contact->delete();

        if ($contact) {
            return back()->withSuccess('Data berhasil Dihapus');
        } else {
            return back()->withErrors('Data gagal Dihapus');
        }
    }
}
