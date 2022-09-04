<?php

    use SaaberDev\TouchDB\Facades\TouchDB;

    it('can get all as collection from database schema', function () {
        $getTableList = TouchDB::query()->get();
        expect($getTableList)->toBeCollection();
    });

    it('can get specific data from database schema as collection', function () {
        $select = TouchDB::query()->select(['table_name', 'column_name'])->get();
        expect($select)->toBeCollection();
    });

    it('can select table_name, column_name', function () {
        $instance = TouchDB::query();
        foreach ($instance->select(['table_name', 'column_name'])->get() as $item) {
            $this->assertArrayHasKey('table_name', (array)$item);
            $this->assertArrayHasKey('column_name', (array)$item);
        }
    });
