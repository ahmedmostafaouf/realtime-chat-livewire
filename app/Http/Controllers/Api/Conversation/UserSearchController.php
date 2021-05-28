<?php

namespace App\Http\Controllers\Api\Conversation;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserSearchController extends Controller
{
   public function index(Request $request){

       if (!$q = $request->get('q', '')) {
           return response()->json([]);
       }

       $users = User::where('id', '!=', $request->excludedUser)
           ->where(DB::raw('LOWER(name)'), 'like', '%' . Str::lower($q) . '%')
           ->get(['id', 'name']);

       return $users;
   }
}
