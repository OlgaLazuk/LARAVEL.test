<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SendEmailRequests;
use App\Mail\RandEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function __invoke(SendEmailRequests $request)
    {
        Mail::to($request->input('to'))
            ->send(
                new RandEmail($request->input('message'),
                    $request->input('from')
                )
            );
    }
}
