<?php
class common
{
    public function getAllRecords($connection) {
        $query = "SELECT * FROM register";
        $result = $connection->query($query) or die("Error in query1".$connection->error);
        return $result;
    }

    public function deleteRecordById($connection,$Id) {
        $query = "DELETE FROM register WHERE Id ='$Id'";
        $result = $connection->query($query) or die("Error in query2".$connection->error);
        return $result;
    }
}