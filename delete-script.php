<?php
include "config.php";
include_once "common.php";
if (isset($_GET['Id'])){
    $Id = $_GET['Id'];
    $common = new common();
    $delete = $common->deleteRecordById($connection,$Id);
    if ($delete){
        echo '<script>alert("Record deleted successfully !")</script>';
        echo '<script>window.location.href="table.php";</script>';
    }
}
