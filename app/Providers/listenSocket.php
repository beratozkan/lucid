<?php

namespace App\Providers;

use App\Providers\socket1;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class listenSocket
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Providers\socket1  $event
     * @return void
     */
    public function handle(socket1 $event)
    {
        //
    }
}
