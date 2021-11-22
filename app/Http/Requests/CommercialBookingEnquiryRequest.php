<?php

namespace App\Http\Requests;

use App\Mail\ContactAdminMail;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Mail;

class CommercialBookingEnquiryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'max:255',
        ];
    }

    public function send()
    {
        $data = [
            'name' => $this->name,
            'business' => $this->business_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'query' => $this->message
        ];

        Mail::to('dev.quadque@gmail.com')->send(new ContactAdminMail($data));
    }
}
