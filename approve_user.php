<?php
    require_once('conn.php');

    $approved = $_POST['approved'];
    echo $approved;
    
    $query = "UPDATE approvals
    SET approved='$approved'
    WHERE kunde_id=$user_id"
?>