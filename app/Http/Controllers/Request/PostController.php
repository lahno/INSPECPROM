<?php

namespace App\Http\Controllers\Request;

use App\Http\Requests\StoreFeedbackForm;
use App\Mail\CreateFeedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    public function sendFeedback(StoreFeedbackForm $request)
    {
//        $data = [
//            'name' => $request->name,
//            'email' => $request->email,
//            'phone' => $request->phone,
//            'message' => $request->message,
//        ];

        Mail::to('magr.info@magr.com.ua')->send(new CreateFeedback($request));
        return ['status' => true, 'message' => 'Обращение отправленно!'];
    }
}
