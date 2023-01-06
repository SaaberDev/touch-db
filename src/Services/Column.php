<?php

namespace SaaberDev\TouchDB\Services;

use Illuminate\Support\Collection;

class Column
{
    public $column;

    /**
     * @return InitQuery
     */
    protected static function initialize(): InitQuery
    {
        return new InitQuery();
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        foreach ($this->initialize() as $item) {
            $this->collection->push($item);
        }

        return $this->collection;
    }
}
