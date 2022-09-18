<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
       
       $contactList = Contact::all();
        return view('Backend.contact.index',['contactList' => $contactList, 'menu' => 'contact']);
    }

    public function read($id)
    {
        Contact::where(['id' => $id])->update(['read_unread' => READ]);
        return redirect()->back();
    }

    
}
