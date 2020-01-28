<?php
    include "includes/dbconn.php";

    function get_user_id(){
        $conn = connectDB();
        $sql = "SELECT user_id FROM users";
        $result = $conn->query($sql);

        echo $result;
    }
?>