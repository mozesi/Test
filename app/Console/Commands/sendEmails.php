<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
Use App\Models\Post;
use App\Jobs\NewPostEmailJob;

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
                    NewPostEmailJob::dispatch($subscriber, $newpost);
                }
                
                $post = Post::find($newpost->id);
                $post->status = 2;
                $post->save();
            }

        }
    
}

