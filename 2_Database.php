<?php

class Database
{
    // การสร้าง properties
    public $dbConnection;
    public $records;

    // การสร้าง method
    public function openConnection(): bool
    {
        return true;
    }

    public function fetchRecord($id): array 
    {
        return [];
    }

    //Insert Records
    public function insertRecords($data): bool
    {
        return true;
    }

    //Update Records
    public function updateRecords($id): bool
    {
        return true;
    }

    //Delete Records
    public function deleteRecords($id): bool
    {
        return true;
    }

}