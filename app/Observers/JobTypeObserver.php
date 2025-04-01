<?php

namespace App\Observers;

use App\Models\Experience;
use App\Models\JobType;

class JobTypeObserver
{
    /**
     * Handle the JobType "created" event.
     */
    public function created(JobType $jobType): void
    {
        //
    }

    /**
     * Handle the JobType "updated" event.
     */
    public function updated(JobType $jobType): void
    {
        //
    }

    /**
     * Handle the JobType "deleting" event.
     */
    public function deleting(JobType $jobType): void
    {
        $experiences = Experience::where('job_type_id', $jobType->id)->get();
        if (!empty($experiences)) {
            foreach ($experiences as $experience) {
                $experience->delete();
            }
        }
    }

    /**
     * Handle the JobType "deleted" event.
     */
    public function deleted(JobType $jobType): void
    {
        //
    }

    /**
     * Handle the JobType "restored" event.
     */
    public function restored(JobType $jobType): void
    {
        //
    }

    /**
     * Handle the JobType "force deleted" event.
     */
    public function forceDeleted(JobType $jobType): void
    {
        //
    }
}
