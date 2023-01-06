<?php

    use Illuminate\Support\Collection;
    use SaaberDev\TouchDB\Facades\TouchDB;

    uses()->group('table');

    it('can get all table names as collection from database schema', function () {
        $getTableList = TouchDB::init()->tableInstance()->get();
        expect($getTableList)->toBeInstanceOf(Collection::class);
    });

    it('can exclude table names and return collection from database schema', function () {
        $instance = TouchDB::init();
        $getTableList = $instance->tableInstance()->exclude('migrations')->get();
        expect($getTableList)->toBeInstanceOf(Collection::class);
        $this->assertNotContains('migrations', $getTableList);
    });
