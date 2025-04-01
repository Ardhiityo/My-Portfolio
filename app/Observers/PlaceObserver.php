<?php

namespace App\Observers;

use App\Models\Place;
use App\Models\Certification;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Support\Facades\Storage;

class PlaceObserver
{
    /**
     * Handle the Place "created" event.
     */
    public function created(Place $place): void
    {
        //
    }

    /**
     * Handle the Place "updated" event.
     */
    public function updated(Place $place): void
    {
        //
    }

    /**
     * Handle the Place "deleting" event.
     */
    public function deleting(Place $place): void
    {
        $certifications = Certification::where('place_id', $place->id)->get();
        $educations = Education::where('place_id', $place->id)->get();
        $experiences = Experience::where('place_id', $place->id)->get();

        if (!empty($certifications)) {
            foreach ($certifications as $certification) {
                $certification->delete();
            }
        }

        if (!empty($educations)) {
            foreach ($educations as $certification) {
                $certification->delete();
            }
        }

        if (!empty($experiences)) {
            foreach ($experiences as $experience) {
                $experience->delete();
            }
        }
    }

    /**
     * Handle the Place "deleted" event.xp
     */
    public function deleted(Place $place): void
    {
        if (Storage::disk('public')->exists($place->logo)) {
            Storage::disk('public')->delete($place->logo);
        }
    }

    /**
     * Handle the Place "restored" event.
     */
    public function restored(Place $place): void
    {
        //
    }

    /**
     * Handle the Place "force deleted" event.
     */
    public function forceDeleted(Place $place): void
    {
        //
    }
}
