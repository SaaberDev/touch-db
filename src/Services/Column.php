<?php

namespace SaaberDev\TouchDB\Services;

class Column extends InitQuery
{
    public function select(array $array): InitQuery
    {
        return (new static($array))->prepareQuery();
    }
}
