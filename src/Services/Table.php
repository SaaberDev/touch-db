<?php

namespace SaaberDev\TouchDB\Services;

use Illuminate\Support\Collection;

class Table
{
    protected static InitQuery $initQuery;
    protected static Collection $list;

    public function __construct($initQuery)
    {
        static::$initQuery = $initQuery;
        static::$list = $initQuery->get()->pluck('table_name')->unique()->values();
    }

    public function exclude($values): Table
    {
        static::$list = static::$list->flip()->except($values)->flip()->values();

        return $this;
    }

    public function get(): Collection
    {
        return static::$list;
    }
}
