<?php

namespace SaaberDev\TouchDB;

use SaaberDev\TouchDB\Services\Query;

class TouchDB
{
    public function query()
    {
        return new Query();
    }

//        public string $database_name;
//        private Collection $collection;
//
//        public function __construct()
//        {
//            $this->collection = new Collection();
//            $this->database_name = Schema::getConnection()->getDatabaseName();
//        }
//
//        /**
//         * @return Collection
//         */
//        public function getTableList(): Collection
//        {
//            return $this->getAll()->pluck('table_name')->unique()->values();
//        }
//
//        /**
//         * @return Collection
//         */
//        public function getAll(): Collection
//        {
//            $query = DB::select("SELECT TABLE_NAME AS table_name, COLUMN_NAME AS column_name, DATA_TYPE AS type FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = ?", [$this->database_name]);
//            foreach ($query as $item) {
//                $this->collection->push($item);
//            }
//
//            return $this->collection;
//        }
//
//        /**
//         * @param $model
//         * @return Collection
//         */
//        public function getAllByModel($model): Collection
//        {
//            $class = resolve($model);
//            $table = $class->getTable();
//            return $this->getAll()->where('table_name', '=', $table)->values();
//        }
//
//        /**
//         * @param $model
//         * @return Collection
//         */
//        public function getAllDateColumnsByModel($model): Collection
//        {
//            $class = resolve($model);
//            $table = $class->getTable();
//            return $this->getAllDateColumns()->where('table_name', '=', $table)->values();
//        }
//
//        /**
//         * @return Collection
//         */
//        public function getAllDateColumns(): Collection
//        {
//            return $this->getAll()->filter(function ($item) {
//                return $item->type == 'date' || $item->type == 'datetime' || $item->type == 'timestamp';
//            })->unique('column_name')->values();
//        }
}
