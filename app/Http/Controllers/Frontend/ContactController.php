<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Configuration;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\AdminContactRequest;

class ContactController extends Controller
{

    public function index()
    {
        \SEOMeta::setTitle('Liên hệ');
        \SEOMeta::setDescription('Liên hệ');
        \SEOMeta::setCanonical(\Request::url());
        \OpenGraph::setDescription('Liên hệ');
        \OpenGraph::setTitle('Liên hệ');
        \OpenGraph::setUrl(\Request::url());
        \OpenGraph::addProperty('type', 'articles');
        $config = Configuration::get();
        return view('pages.contact.index', compact('config'));
    }
 
    public function submitContact(AdminContactRequest $request)
    { 
        $data = $request->except(['save', '_token']);
        $data['created_at'] = Carbon::now();
        $contactID = Contact::insertGetId($data);
        if ($contactID) {
            $this->showMessagesSuccess();
            return redirect()->route('get.contact');
        }
        $this->showMessagesError();
        return  redirect()->back();
    }
}
