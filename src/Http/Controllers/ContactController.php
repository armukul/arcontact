<?php
namespace Armukul\Arcontact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Armukul\Arcontact\Models\Arcontact;
use Armukul\Arcontact\Mail\ArContactMailable;
use Armukul\Arcontact\Http\Requests\ContactStoreRequest;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('arcontact::contact');
    }

    public function store(ContactStoreRequest $request)
    {
        Arcontact::create($request->all());
        Mail::to(config('arcontact.send_email_to'))->send(new ArContactMailable($request->input('name'), $request->input('message')));

        $request->session()->flash('message', 'Contact has been added.');
        return redirect()->route('arcontact.show');
    }
}
