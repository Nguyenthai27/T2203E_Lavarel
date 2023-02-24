<?php

namespace App\Listeners;

use App\Events\NewOrder;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ListenNewOrder
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
     * @param  \App\Events\NewOrder  $event
     * @return void
     */
    public function handle(NewOrder $event)
    {
        //
    }
}
