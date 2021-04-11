<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Mail\MyEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->my_one = 'Demo One Value';
        $objDemo->my_two = 'Demo Two Value';
        $objDemo->sender = '190103276@stu.sdu.edu.kz';
        $objDemo->receiver = '190103276@stu.sdu.edu.kz';
    
        Mail::to("190103276@stu.sdu.edu.kz")->send(new MyEmail($objDemo));
    }
}
