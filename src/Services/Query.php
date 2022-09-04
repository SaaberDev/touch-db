<?php

    namespace SaaberDev\TouchDB\Services;

    use Illuminate\Support\Collection;
    use Illuminate\Support\Facades\DB;
    use SaaberDev\TouchDB\Abstract\InteractWithDB;

    class Query extends InteractWithDB
    {
        protected array $query;
        protected string $select;
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
            'EXTRA'
        ];

        public function __construct()
        {
            parent::__construct();
        }

        /**
         * @param array $array
         * @return SelectQuery
         */
        public function select(array $array): SelectQuery
        {
            return (new SelectQuery($array))->prepareSelect();
        }

        /**
         * @return Collection
         */
        public function get(): Collection
        {
            $prepare = (new SelectQuery(static::$defaultSelect))->prepareSelect();
            $this->select = $prepare::$statement;
            return new Collection(array_map(function ($query) {
                return (array)$query;
            }, $this->runQuery($this->select)));
        }

        /**
         * @param $select
         * @return array
         */
        protected function runQuery($select): array
        {
            $sql = "SELECT {$select} FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = :database";
            $this->query = DB::select($sql, [$this->database_name]);
            return $this->query;
        }
    }
