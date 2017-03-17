<?php

namespace Otinsoft\Laravel\Database;

trait DeleteOrFail
{
    /**
     * Delete a model by its primary key or throw an exception.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @param  mixed $id
     * @return mixed
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function scopeDeleteOrFail($query, $id)
    {
        return static::findOrFail($id)->delete();
    }
}
