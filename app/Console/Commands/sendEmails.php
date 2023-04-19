<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
Use App\Models\Post;

class sendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emails:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sending emails to subscribers';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $newposts = Post::where('status','=',1)->get();
        foreach($newposts as $newpost){
            $subscribers = $newpost->website->subscribers;
                foreach($subscribers as $subscriber){
                    Mail::send('emails.new-post', $newpost, function ($message) {
                        $message->from('msukwamose1@gmail.com');
                        $message->to($subscriber->email)->subject('New Post');
                    });
                }
            }

           $post = Post::find($newpost->id);
           $post->status = 2;
           $post->save();
        }
    
}

