<?php

namespace App\Http\Livewire\Conversation;

use App\Models\Conversation;
use Illuminate\Support\Collection;
use Livewire\Component;

class ConversationList extends Component
{
    public $conversations ;

    public function getListeners()
    {
        return [
            'echo-private:User.' . auth()->id() . ',Conversation\\ConversationUpdated' => 'updateConversationFromBroadcast',
            'echo-private:User.' . auth()->id() . ',Conversation\\ConversationCreated' => 'createConversationFromBroadcast'
        ];
    }
    public function updateConversationFromBroadcast($payload){
        if (!$this->conversations->contains($payload['conversation']['id'])){
            $this->conversations->prepend(Conversation::find($payload['conversation']['id']));
        } else {
            $this->conversations->find($payload['conversation']['id'])->fresh();
        }

    }
    public function createConversationFromBroadcast($payload){
        return $this->conversations->prepend(Conversation::find($payload['conversation']['id']));
    }

    public function mount(Collection $conversations){
        $this->conversations = $conversations->reverse();
    }
    public function render()
    {
        return view('livewire.conversation.conversation-list');
    }
}
