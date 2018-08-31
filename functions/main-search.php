<?php

include_once "connect_db";

if(isset($_POST['main_button'])){

    $input_value = $_POST['main_search_input'];

    $sql = "SELECT * FROM Doskocice WHERE doskocica_initial = '" . $input_value . "' ORDER BY rating DESC";

    $query_results = $conn->query($sql);

    if(isset($query_results)){

        if($query_results->num_rows != 0){
            while ($row = $query_results->fetch_assoc()) {
                echo $row['doskocica'];
            }
        }

    } else{
        echo "Error occured while executing query" . $conn->error;
    }

} else if(isset($_POST['quick_button'])){



}


?>