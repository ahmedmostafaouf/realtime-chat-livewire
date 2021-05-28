<?php

namespace App\Events\Conversation;

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserAdd implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $conversation;
    public function __construct(Conversation $conversation ,User $user)
    {
        $this->conversation = $conversation;
        $this->user = $user;
    }

   public function broadcastWith()
   {
       return [
           'user' => [
               'id' => $this->user->id
           ]
       ];
   }

    public function broadcastOn()
    {
        return new PrivateChannel('conversations.' . $this->conversation->id);
    }
}
