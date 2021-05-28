<?php

namespace App\Http\Livewire\Conversation;

use App\Models\Message;
use Illuminate\Support\Collection;
use Livewire\Component;

class ConversationMessageOwn extends Component
{
    public $message ;
    public function mount(Message $message){
        $this->message=$message;
    }
    public function render()
    {
        return view('livewire.conversation.conversation-message-own');
    }
}
