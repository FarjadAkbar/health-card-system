<?php

namespace App\Observers;

use App\{Card, History};
use App\Traits\TracksHistoryTrait;


class CardObserver
{
    use TracksHistoryTrait;
    /**
     * Handle the card "created" event.
     *
     * @param  \App\Card  $card
     * @return void
     */

     public $afterCommit = true;
    public function created(Card $card)
    {
        //
    }

    /**
     * Handle the card "updated" event.
     *
     * @param  \App\Card  $card
     * @return void
     */
    public function updating(Card $card)
    {
        //
        $this->track($card);
        if($card->isDirty('status')){
            // status has changed
            $new_status = $card->status; 
            $old_status = $card->getOriginal('status'); 

            $history_count = History::where('reference_id', $card->id)->count();
            History::create([
                'reference_table' => 'card',
                'reference_id'    => $card->id,
                'user_id'        => \Auth::user()->id,
                'body' => 'Status change ' . $old_status . ' to ' . $new_status,
                'issue_date'        => $card->expiry,
                'new_expiry'        => $card->last_expiry,
                'period'     => $history_count + 1,
            ]);
          }
    }

    /**
     * Handle the card "deleted" event.
     *
     * @param  \App\Card  $card
     * @return void
     */
    public function deleted(Card $card)
    {
        //
    }

    /**
     * Handle the card "restored" event.
     *
     * @param  \App\Card  $card
     * @return void
     */
    public function restored(Card $card)
    {
        //
    }

    /**
     * Handle the card "force deleted" event.
     *
     * @param  \App\Card  $card
     * @return void
     */
    public function forceDeleted(Card $card)
    {
        // 
    }
}
