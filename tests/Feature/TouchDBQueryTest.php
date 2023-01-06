<?php

    use Illuminate\Support\Collection;
    use SaaberDev\TouchDB\Facades\TouchDB;

    uses()->group('query');

    it('can get all columns as collection from database schema', function () {
        $getTableList = TouchDB::init()->columnInstance()->get();
        expect($getTableList)->toBeInstanceOf(Collection::class);
    });

    it('can get specific column from database schema as collection', function () {
        $select = TouchDB::init()->columnInstance()->select(['table_name', 'column_name'])->get();
        expect($select)->toBeInstanceOf(Collection::class);
    });

    it('can select only table_name, column_name columns', function () {
        $instance = TouchDB::init();
        foreach ($instance->columnInstance()->select(['table_name', 'column_name'])->get() as $item) {
            $this->assertArrayHasKey('table_name', (array) $item);
            $this->assertArrayHasKey('column_name', (array) $item);
            $this->assertArrayNotHasKey('data_type', (array) $item);
        }
    });
