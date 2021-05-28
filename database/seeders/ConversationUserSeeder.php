<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConversationUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conversation_user')->insert([
           'user_id'=>'1',
           'conversation_id'=>'1',
           'created_at'=>now(),
           'updated_at'=>now(),
        ]);
        DB::table('conversation_user')->insert([
            'user_id'=>'2',
            'conversation_id'=>'1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('conversation_user')->insert([
            'user_id'=>'3',
            'conversation_id'=>'1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('conversation_user')->insert([
            'user_id'=>'1',
            'conversation_id'=>'2',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('conversation_user')->insert([
            'user_id'=>'4',
            'conversation_id'=>'2',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('conversation_user')->insert([
            'user_id'=>'3',
            'conversation_id'=>'2',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('conversation_user')->insert([
            'user_id'=>'4',
            'conversation_id'=>'3',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('conversation_user')->insert([
            'user_id'=>'3',
            'conversation_id'=>'3',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('conversation_user')->insert([
            'user_id'=>'1',
            'conversation_id'=>'4',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('conversation_user')->insert([
            'user_id'=>'2',
            'conversation_id'=>'4',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('conversation_user')->insert([
            'user_id'=>'4',
            'conversation_id'=>'4',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('conversation_user')->insert([
            'user_id'=>'3',
            'conversation_id'=>'4',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('conversation_user')->insert([
            'user_id'=>'1',
            'conversation_id'=>'5',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);


    }
}
