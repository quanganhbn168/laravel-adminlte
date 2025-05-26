<?php

namespace App\Traits;

trait Searchable
{
    public function scopeSearch($query, $keyword)
    {
        $searchableFields = $this->searchable ?? [];

        return $query->where(function ($q) use ($keyword, $searchableFields) {
            foreach ($searchableFields as $field) {
                $q->orWhere($field, 'like', '%' . $keyword . '%');
            }
        });
    }
}
