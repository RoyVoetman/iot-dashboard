<?php

namespace App\Events;

use App\Models\Unit;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UnitUpdated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $value;

    /**
     * Create a new event instance.
     *
     * @param  \App\Models\Unit  $unit
     */
    public function __construct(Unit $unit)
    {
        $this->ip = $unit->ip;
        $this->value = $unit->value;

    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('units');
    }
}
