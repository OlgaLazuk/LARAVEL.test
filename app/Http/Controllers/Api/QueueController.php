<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SendEmailRequests;
use App\Jobs\SendEmail;
use Illuminate\Http\Request;

class QueueController extends Controller
{
    public function __invoke(SendEmailRequests $requests)
    {
        for ($i=0; $i<10; $i++){
            SendEmail::dispatch('to@to.ru', 'from1@from.ru', 'first queue');
        }

    }
}
