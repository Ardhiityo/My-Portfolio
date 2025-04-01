<?php

namespace App\Observers;

use App\Models\Profile;
use App\Models\Pronoun;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PronounObserver
{
    /**
     * Handle the Pronoun "created" event.
     */
    public function created(Pronoun $pronoun): void
    {
        //
    }

    /**
     * Handle the Pronoun "updated" event.
     */
    public function updated(Pronoun $pronoun): void
    {
        //
    }

    /**
     * Handle the Pronoun "deleting" event.
     */
    public function deleting(Pronoun $pronoun): void
    {
        $profiles = Profile::where('pronoun_id', $pronoun->id)->get();

        if (!empty($profiles)) {
            foreach ($profiles as $profile) {
                $profile->delete();
            }
        }
    }

    /**
     * Handle the Pronoun "restored" event.
     */
    public function restored(Pronoun $pronoun): void
    {
        //
    }

    /**
     * Handle the Pronoun "force deleted" event.
     */
    public function forceDeleted(Pronoun $pronoun): void
    {
        //
    }
}
