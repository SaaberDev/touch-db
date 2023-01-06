<?php

namespace SaaberDev\TouchDB\Abstract;

use Illuminate\Support\Facades\Schema;

abstract class InteractWithDB
{
    protected static string $database_name;

    public function __construct()
    {
        static::$database_name = Schema::getConnection()->getDatabaseName();
    }

    /**
     * @return string
     */
    public function getDatabaseName(): string
    {
        return static::$database_name;
    }

    public static function getSql($select): string
    {
        return "SELECT {$select} FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = :database";
    }
}
