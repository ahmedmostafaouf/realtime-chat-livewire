<?php

namespace App\Http\Controllers\Conversation;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
   public function index(Request $request){
       $conversations=auth()->user()->conversations;
       return view('conversation.index',get_defined_vars());
   }
   public function create(Request $request){
       $conversations=$request->user()->conversations;
       return view('conversation.create',compact('conversations'));
   }
   public function show(Conversation $conversation ,Request $request){
       $this->authorize('show',$conversation);
       $conversations=$request->user()->conversations;
       $request->user()->conversations()->UpdateExistingPivot($conversation,['read_at'=>now()]);
       return view('conversation.show',compact('conversations','conversation'));
   }
}
