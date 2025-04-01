<?php

namespace App\Observers;

use App\Models\Education;
use Illuminate\Support\Facades\Storage;

class EducationObserver
{
    /**
     * Handle the Education "created" event.
     */
    public function created(Education $education): void
    {
        //
    }

    /**
     * Handle the Education "updated" event.
     */
    public function updated(Education $education): void
    {
        //
    }

    /**
     * Handle the Education "deleted" event.
     */
    public function deleted(Education $education): void
    {
        foreach ($education->image as $image) {
            if (Storage::disk('public')->exists($image)) {
                Storage::disk('public')->delete($image);
            }
        }
    }

    /**
     * Handle the Education "restored" event.
     */
    public function restored(Education $education): void
    {
        //
    }

    /**
     * Handle the Education "force deleted" event.
     */
    public function forceDeleted(Education $education): void
    {
        //
    }
}
