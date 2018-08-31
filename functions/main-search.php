<?php

include_once "connect_db";

if(isset($_POST['main_button']) || isset($_POST['quick_button'])){

    $input_value = $_POST['main_search_input'];

    $sql = "SELECT * FROM Doskocice WHERE doskocica_initial = '" . $input_value . "' ORDER BY rating DESC";

    $query_results = $conn->query($sql);

    $query_results_counter = 0;

    $query_results_array = array();

    if(isset($query_results)){

        if($query_results->num_rows != 0){
            //echo "Doskocice za <strong>" . $input_value . "</strong>:<br/>";
            while ($row = $query_results->fetch_assoc()) {
                $query_results_counter++;
                /*echo $query_results_counter . ". " . $row['doskocica'] . '<br/>';*/
                $query_results_array[] = $row;
                if(isset($_POST['quick_button'])){
                    break;
                }
            }
        }

    } else{
        echo "Error occured while executing query" . $conn->error;
    }

    if(!empty($query_results_array)){
        header('Location: ../search-results.php?result=' . http_build_query($query_results_array));
    }

}

?>