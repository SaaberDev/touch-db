<?php

namespace SaaberDev\TouchDB\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use SaaberDev\TouchDB\Abstract\InteractWithDB;

class InitQuery extends InteractWithDB
{
    protected static array $query;

    protected static array $array;

    protected static string $queryStatement;

    public static string $prepareStatement = '';

    protected static array $defaultSelect = [
        'TABLE_SCHEMA',
        'TABLE_NAME',
        'COLUMN_NAME',
        'ORDINAL_POSITION',
        'COLUMN_DEFAULT',
        'IS_NULLABLE',
        'DATA_TYPE',
        'CHARACTER_MAXIMUM_LENGTH',
        'CHARACTER_SET_NAME',
        'COLLATION_NAME',
        'COLUMN_TYPE',
        'COLUMN_KEY',
        'EXTRA',
    ];

    public function __construct($selectColumns = [])
    {
        parent::__construct();
        if (! empty($selectColumns)) {
            static::$array = $selectColumns;
        } else {
            static::$array = static::$defaultSelect;
        }
    }

    public function columnInstance(): Column
    {
        return new Column();
    }

    public function tableInstance(): Table
    {
        return new Table($this);
    }

    public static function prepareQuery(): InitQuery
    {
        static::$prepareStatement = implode(', ', array_map(function ($select) {
            return $select.' as '.strtolower($select);
        }, static::$array));

        return new static(static::$array);
    }

    protected static function runQuery($select): array
    {
        $sql = static::getSql($select);
        static::$query = DB::select($sql, [static::$database_name]);

        return static::$query;
    }

    public function get(): Collection
    {
        $prepareQuery = static::prepareQuery();
        static::$queryStatement = $prepareQuery::$prepareStatement;

        return new Collection(array_map(function ($query) {
            return (array) $query;
        }, static::runQuery(static::$queryStatement)));
    }
}
