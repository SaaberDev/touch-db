<?php

namespace SaaberDev\TouchDB\Services;

class SchemaQuery extends InitQuery
{
    public function select(array $array): InitQuery
    {
        return (new static($array))->prepareQuery();
    }
}
