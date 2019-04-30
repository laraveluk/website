<?php

namespace App\Console\Commands;

use App\Models\EventSignup;
use App\Notifications\EventUpdate;
use Illuminate\Console\Command;

class SendEventInfo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'event:info';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send community event information';

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
        $invitees = EventSignup::where('id', '>', 20)->get();

        foreach ($invitees as $invitee) {
            $invitee->notify( new EventUpdate());
        }
    }
}
