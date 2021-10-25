<?php

namespace App\Jobs;

use App\Mail\RandEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $to;
    private $from;
    private $message;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($to, $from, $message)
    {
        $this->to = $to;
        $this->from = $from;
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->to)
            ->send(
                new RandEmail($this->message,
                    $this->from
                )
            );
    }
}
