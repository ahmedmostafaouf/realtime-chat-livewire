<?php

namespace App\Http\Livewire\Conversation;

use App\Events\Conversation\ConversationUpdated;
use App\Events\Conversation\UserAdd;
use App\Models\Conversation;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Collection;

class ConversationUser extends Component
{
    public $users;
    public $conversation;
    public $conversationId;
    public function mount(Conversation $conversation ,Collection $users){
        $this->conversation=$conversation;
        $this->users=$users;
        $this->conversationId=$conversation->id;
    }
    public function getListeners()
    {
        return [
            "echo-private:conversations.{$this->conversationId},Conversation\\UserAdded" => 'pushUserFromBroadcast'
        ];
    }
    public function pushUserFromBroadcast($payload){
        $this->pushUser($payload['user']['id']);
    }

    public function pushUser($id)
    {
        $this->users->push($user=User::find($id));
        return $user;
    }

    public function addUser($user){
        if($user['id'] !=auth()->id()){
            $this->conversation->users()->syncWithoutDetaching($user['id']);
            $user= $this->pushUser($user['id']);
                broadcast(new UserAdd($this->conversation,$user))->toOthers();
                broadcast(new ConversationUpdated($this->conversation));
        }
    }
    public function render()
    {
        return view('livewire.conversation.conversation-user');
    }
}
