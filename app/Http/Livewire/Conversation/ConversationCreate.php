<?php

namespace App\Http\Livewire\Conversation;

use App\Events\Conversation\ConversationCreated;
use App\Models\Conversation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;

class ConversationCreate extends Component
{
    public $name='';
    public $body='';
    public $users=[];
    public function addUser($user){
        $this->users[]=$user;
    }
    public function create()
    {
        $this->validate([
            'users' => 'required',
            'name' => 'nullable|string',
            'body' => 'required',
        ]);
        DB::beginTransaction();

        $conversation = Conversation::create([
            'name' => $this->name,
            'uuid' => Str::uuid(),
            'user_id' => auth()->id(),
        ]);

        $conversation->messages()->create([
            'user_id' => auth()->id(),
            'body' => $this->body
        ]);

        $conversation->users()->sync($this->collectUsersIds());
        broadcast(new ConversationCreated($conversation))->toOthers();
        DB::commit();


        return redirect()->route('conversation.show', $conversation);

    }
    public function collectUsersIds()
    {
        return collect($this->users)->merge([auth()->user()])->pluck('id')->unique();
    }

    public function render()
    {
        return view('livewire.conversation.conversation-create');
    }
}
