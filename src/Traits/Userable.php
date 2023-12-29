<?php

namespace FerProjekt\LaravelUserable\Traits;

use Illuminate\Database\Eloquent\Relations\MorphTo;

trait Userable
{
    public function userable(): MorphTo
    {
        return $this->morphTo();
    }
}
