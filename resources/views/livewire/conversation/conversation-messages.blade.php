<div>
 @foreach($messages as $message)

     @if($message->isOwn())
            <livewire:conversation.conversation-message-own :message="$message" :key="$message->id"/>
     @else
            <livewire:conversation.conversation-message :message="$message" :key="$message->id"/>
     @endif

 @endforeach
</div>
