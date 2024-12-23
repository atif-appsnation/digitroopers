<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Mail\ReceivedMail;

use Redirect;
use App\Models\Lead;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function sendEmail(Request $request)

    {
        $visit = new Lead;
        $field = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'mobile' => 'required|max:15',
            // 'mobile' => 'required|regex:/(01)[0-9]{9}/'
            'subject' => 'max:255',
            'service' => 'max:255',
            'company' => 'max:255',
            'message' => ''
        ]);
        $visit->name = $field['name'];
        $visit->email = $field['email'];
        $visit->mobile = $field['mobile'];
        $visit->subject = "";
        $visit->service = $field['service'];
        $visit->company = "For BlackFriday";
        $visit->message = "";
        $visit->save(); {
            $details = [
                "title" => "Black Friday",
                "body" => "Black Friday deal",
                "name" => $field['name'],
                "email" => $field['email'],
                "mobile" => $field['mobile'],
                "service" => $field['service'],
            ];
            // Mail::to("info@digitroopers.com")->send(new ReceivedMail($details));
            // Mail::to($field['email'])->send(new SendMail($details));

            // return view('thank-you');
            return Redirect::to('/thank-you');
        }
    }

    public function testformat()

    {
        $details = [
            "title" => "Black Friday",
            "body" => "Black Friday deal",
            "name" => "Talha",
            "email" => "talha@futurealiti.com",
            "mobile" => "03222732309",
            "service" => "web developing",
        ];
        return view('email.email')->with('details',$details);
    }
}
