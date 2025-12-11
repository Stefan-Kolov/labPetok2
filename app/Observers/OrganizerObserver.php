<?php

namespace App\Observers;

use App\Models\Organizer;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class OrganizerObserver
{
    /**
     * Handle the Organizer "created" event.
     */
    public function created(Organizer $organizer): void
    {
        // При создавање прикажи нотификација
        Session::flash('success', "Нов организатор е креиран: {$organizer->name}");
    }

    /**
     * Handle the Organizer "updated" event.
     */
    public function updated(Organizer $organizer): void
    {
        Log::info("Организаторот {$organizer->name} е ажуриран.", $organizer->getChanges());
    }

    /**
     * Handle the Organizer "deleted" event.
     */
    public function deleted(Organizer $organizer): void
    {
        Log::info("Организаторот {$organizer->name} е избришан.");
    }

    /**
     * Handle the Organizer "restored" event.
     */
    public function restored(Organizer $organizer): void
    {
        //
    }

    /**
     * Handle the Organizer "force deleted" event.
     */
    public function forceDeleted(Organizer $organizer): void
    {
        //
    }
}
