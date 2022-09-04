<?php

namespace SaaberDev\TouchDB\Services;

    use Illuminate\Support\Collection;

    class SelectQuery extends Query
    {
        protected static array $array;

        public static string $statement = '';

        public function __construct($array)
        {
            parent::__construct();
            static::$array = $array;
        }

        /**
         * @return SelectQuery
         */
        public static function prepareSelect(): SelectQuery
        {
            static::$statement = implode(', ', array_map(function ($select) {
                return $select.' as '.strtolower($select);
            }, static::$array));

            return new static(static::$array);
        }

        protected function getStatement(): string
        {
            return self::$statement;
        }

        /**
         * @return Collection
         */
        public function get(): Collection
        {
            $this->select = self::$statement;

            return new Collection(array_map(function ($query) {
                return (array) $query;
            }, parent::runQuery($this->select)));
        }
    }
