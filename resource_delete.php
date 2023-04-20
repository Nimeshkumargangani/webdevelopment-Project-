<?php
require 'config.php';
// Data Fetch
$R_id = $_POST['delete_id'];
echo $R_id;
// Query
$delete_sql = "DELETE FROM resources WHERE id='$R_id'";

$result = $conn->query($delete_sql);
if ($result) {
    echo "Row Deleted";
    header('location:manage_resources.php');
}


?>