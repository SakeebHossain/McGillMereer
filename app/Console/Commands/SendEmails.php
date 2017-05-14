<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;

class SendEmails extends Command
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
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $find_user_query = "SELECT * FROM users";
        $users = \DB::select($find_user_query);


        // Path or name to the blade template to be rendered
        $template_path = 'email_template';

        foreach($users as $user) {


            Mail::send([ 'html'=> $template_path ], ['user' => $user], function ($m) use ($user) {
                $m->from('hello@app.com', 'Your Application');

                $m->to($user->email, $user->name)->subject('Your Reminder!');
            });

        }
    }
}
