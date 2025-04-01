<?php

namespace App\Observers;

use App\Models\Experience;
use Illuminate\Support\Facades\Storage;

class ExperienceObserver
{
    /**
     * Handle the Experience "created" event.
     */
    public function created(Experience $experience): void
    {
        //
    }

    /**
     * Handle the Experience "updated" event.
     */
    public function updated(Experience $experience): void
    {
        //
    }

    /**
     * Handle the Experience "deleted" event.
     */
    public function deleted(Experience $experience): void
    {
        foreach ($experience->image as $image) {
            if (Storage::disk('public')->exists($image)) {
                Storage::disk('public')->delete($image);
            }
        }
    }

    /**
     * Handle the Experience "restored" event.
     */
    public function restored(Experience $experience): void
    {
        //
    }

    /**
     * Handle the Experience "force deleted" event.
     */
    public function forceDeleted(Experience $experience): void
    {
        //
    }
}
