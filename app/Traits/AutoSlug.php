<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait AutoSlug
{
    public static function bootAutoSlug()
    {
        static::saving(function ($model) {
            if (empty($model->slug)) {
                $source = $model->name ?? $model->title ?? null;
                if ($source) {
                    $model->slug = Str::slug($source);
                }
            }
        });
    }
}
