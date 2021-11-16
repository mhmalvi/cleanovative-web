<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactEnquiryRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendEnquiry(ContactEnquiryRequest $request)
    {
        $request->send();
    }
}
