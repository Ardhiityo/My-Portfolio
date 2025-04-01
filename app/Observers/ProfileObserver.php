<?php

namespace App\Observers;

use App\Models\Profile;
use Illuminate\Support\Facades\Storage;

class ProfileObserver
{
    /**
     * Handle the Profile "created" event.
     */
    public function created(Profile $profile): void
    {
        //
    }

    /**
     * Handle the Profile "updated" event.
     */
    public function updated(Profile $profile): void
    {
        //
    }

    /**
     * Handle the Profile "deleted" event.
     */
    public function deleted(Profile $profile): void
    {
        if (
            Storage::disk('public')->exists($profile->background_image) &&
            Storage::disk('public')->exists($profile->avatar)
        ) {
            Storage::disk('public')->delete($profile->background_image);
            Storage::disk('public')->delete($profile->avatar);
        }
    }

    /**
     * Handle the Profile "restored" event.
     */
    public function restored(Profile $profile): void
    {
        //
    }

    /**
     * Handle the Profile "force deleted" event.
     */
    public function forceDeleted(Profile $profile): void
    {
        //
    }
}
