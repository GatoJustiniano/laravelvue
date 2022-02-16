<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Contact;
use App\Models\ContactImage;
use App\Helpers\CustomUrl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::orderBy('created_at','desc')->paginate(10);
        return view('dashboard/contact/index',['contacts' => $contacts]);

    }
    

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //$contact = Contact::findOrFail($id);
        return view('dashboard/contact/show',['contact' => $contact]);

    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->back()->with('status','Contacto eliminado con éxito');
    }
    
}
