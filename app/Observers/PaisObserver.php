<?php

namespace App\Observers;

use App\Models\Pais;

class PaisObserver
{
    /**
     * Handle the Pais "created" event.
     *
     * @param  \App\Models\Pais  $pais
     * @return void
     */
    public function creating(Pais $pais)
    {
        //
        $pais->habilitado = true;
    }
   
   
     public function created(Pais $pais)
    {
        //
    }

    

    /**
     * Handle the Pais "updated" event.
     *
     * @param  \App\Models\Pais  $pais
     * @return void
     */
    public function updated(Pais $pais)
    {
        //
    }

    /**
     * Handle the Pais "deleted" event.
     *
     * @param  \App\Models\Pais  $pais
     * @return void
     */
    public function deleted(Pais $pais)
    {
        //
    }

    /**
     * Handle the Pais "restored" event.
     *
     * @param  \App\Models\Pais  $pais
     * @return void
     */
    public function restored(Pais $pais)
    {
        //
    }

    /**
     * Handle the Pais "force deleted" event.
     *
     * @param  \App\Models\Pais  $pais
     * @return void
     */
    public function forceDeleted(Pais $pais)
    {
        //
    }
}
