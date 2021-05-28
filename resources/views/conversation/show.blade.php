@extends('layouts.app')

@section('content')
    <div class="container py-5 px-4">
        <!-- For demo purpose-->
        <div class="row rounded-lg overflow-hidden shadow">
        @include('conversation.partial.header')

        <!-- Users box-->
            <div class="col-5 px-0">
                <div class="bg-white">
                    <livewire:conversation.conversation-user :conversation="$conversation"
                                                             :users="$conversation->users"/>



                    <div class="messages-box">
                        <div class="list-group rounded-0">
                            <livewire:conversation.conversation-list :conversations="$conversations" />

                        </div>
                    </div>
                </div>
            </div>
            <!-- Chat Box-->
            <div class="col-7 px-0">
                <div class="px-4 py-5 chat-box bg-white">
                    <livewire:conversation.conversation-messages :conversation="$conversation"
                                                                  :messages="$conversation->messages"/>


                </div>
                <livewire:conversation.conversation-reply :conversation="$conversation" />


            </div>
        </div>
    </div>
@endsection
