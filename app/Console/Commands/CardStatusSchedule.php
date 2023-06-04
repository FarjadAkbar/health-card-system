<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Card;

class CardStatusSchedule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:cardstatus';

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
     * @return int
     */
    public function handle()
    {
        $cards = Card::all();
        
        foreach($cards as $card){
            $c = Card::where('id', $card->id)->first();
            
            $date1=date_create($c->expiry);
            $date2=date_create(date('Y-m-d', strtotime(date('Y-m-d') . "+2 week")));
            $diff=date_diff($date1,$date2);

            if(strtotime(date('Y-m-d')) > strtotime($c->expiry)){
                $c->status = 'expired';
            }
            if($diff->format("%a") <= 14){
                $c->status = 'renewal';
            }
            $c->save();
        }
    }
}
