<?php

    namespace SaaberDev\TouchDB\Abstract;

    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Schema;

    abstract class InteractWithDB
    {
        protected string $database_name;

        public function __construct()
        {
            $this->database_name = Schema::getConnection()->getDatabaseName();
        }

        /**
         * @return string
         */
        public function getDatabaseName(): string
        {
            return $this->database_name;
        }
    }
