<div>
    @forelse($conversations as $conversation)
        <a href="{{route('conversation.show',$conversation)}}" class="list-group-item list-group-item-action rounded-0 {{ \Str::contains(request()->path(), $conversation->uuid) ? 'active text-white' : 'list-group-item-light' }}">

            <div class="media"><img src="{{asset('thems/images/default.png')}}" alt="{{$conversation->name !='' ? $conversation->name : $conversation->users()->pluck('name')->join(', ')}}" width="50" class="rounded-circle">
                <div class="media-body ml-4">
                    <div class="d-flex align-items-center justify-content-between mb-1">
                        <h6 class="mb-0">
                            {{$conversation->name !='' ? $conversation->name : $conversation->users()->pluck('name')->join(', ')}}

                        </h6><small class="small font-weight-bold">{{$conversation->messages()->first()->created_at->diffForHumans()}}</small>
                    </div>
                    <p class="font-italic mb-0 text-small" >
                        @if (!auth()->user()->hasRead($conversation))
                            <span class="{{ \Str::contains(request()->path(), $conversation->uuid) ? 'bg-white' : 'bg-primary' }} mr-2 rounded-circle" style="display: inline-table; width: 10px; height: 10px;"></span>
                        @endif
                        {{$conversation->messages()->first()->body}}</p>
                </div>
            </div>
        </a>
    @empty

    @endforelse
</div>
