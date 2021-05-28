<?php

namespace Database\Seeders;

use App\Models\Conversation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ConversationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Conversation::create([
           'name'=>'Family Group',
           'uuid'=>Str::uuid(),
            'user_id'=>rand(1,4),
        ]);
        Conversation::create([
            'name'=>'Work Group',
            'uuid'=>Str::uuid(),
            'user_id'=>rand(1,4),
        ]);
        Conversation::create([
            'name'=>'Love Group',
            'uuid'=>Str::uuid(),
            'user_id'=>rand(1,4),
        ]);
        Conversation::create([
            'name'=>'Art Group',
            'uuid'=>Str::uuid(),
            'user_id'=>rand(1,4),
        ]);
        Conversation::create([
            'name'=>'Game Group',
            'uuid'=>Str::uuid(),
            'user_id'=>rand(1,4),
        ]);

    }
}
