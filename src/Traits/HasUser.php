<?php

namespace FerProjekt\LaravelUserable\Traits;

use App\Models\User;

trait HasUser
{
    protected static function bootHasUser()
    {
        static::updated(function ($userable) {
            $userable->user->update([
                'name'  => $userable->getName(),
                'email' => $userable->getEmail()
            ]);
        });

        static::deleting(function ($userable) {
            $userable->user()->delete();
        });
    }

    public abstract function getName();
    public abstract function getEmail();

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
}
