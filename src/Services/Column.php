<?php

namespace SaaberDev\TouchDB\Services;

    use Illuminate\Support\Collection;

    class Column
    {
        public $column;

        /**
         * @return Query
         */
        protected static function initialize(): Query
        {
            return new Query();
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