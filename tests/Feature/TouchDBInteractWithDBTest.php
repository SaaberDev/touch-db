<?php

    use SaaberDev\TouchDB\Facades\TouchDB;

    uses()->group('interact-with-db');

    it('should return database name in string', function () {
        $getTableList = TouchDB::init()->getDatabaseName();
        expect($getTableList)->toBeString();
    });

    it('should return SQL statement in string', function () {
        $select = \SaaberDev\TouchDB\Abstract\InteractWithDB::getSql('table_name, column_name');
        expect($select)->toBeString();
    });
