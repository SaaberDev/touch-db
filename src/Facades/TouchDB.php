<?php

    namespace SaaberDev\TouchDB\Facades;

    use Illuminate\Support\Facades\Facade;

    /**
     * @mixin \SaaberDev\TouchDB\TouchDB
     */
    class TouchDB extends Facade
    {
        /**
         * @return string
         */
        protected static function getFacadeAccessor(): string
        {
            return 'touchdb';
        }
    }
