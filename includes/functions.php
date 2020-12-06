<?php 
    $result = array();

    function getAllUsers($conn){

        $query = "SELECT * FROM users";

        $runQuery = $conn->query($query);

        while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)) {
            $result[] = $row;
        }

        return $result[0];
    }