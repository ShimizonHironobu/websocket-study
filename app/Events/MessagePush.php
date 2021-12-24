<?php
namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class MessagePush implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $messages;

    public function __construct($messages) {
        $this->messages = $messages; 
    }

    public function broadcastOn() {
        return new Channel('test-channel');
    }

    public function broadcastAs() {
        return 'push-test';
    }

}