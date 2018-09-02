<?php
include_once "templates/header.php";
include_once "functions/functions.php";
?>

<form class="main-search-holder" method="post" action="functions/main-search.php">
    <div class="text-input-holder">
        <input class="main-search-input" name="main_search_input" type="text" placeholder="Search...">
    </div>
    <div class="input-buttons-holder">
        <input type="submit" class="search-button button-search-main disabled-input" name="main_button" value="Pretrazi" disabled>
        <input type="submit" class="search-button button-search-first disabled-input" name="quick_button" value="Iz prve ruke" disabled>
    </div>
</form>

<?php

if($_GET['number_of_results'] != 0){
?>

    <p class="search-results-counter"> Prikazano je <?php echo $_GET['number_of_results'] ?> rezultata za rec <strong><?php echo $_GET['initial_word']; ?></strong>:</p>
    <div class="search-results-container">

<?php
    foreach ($_GET as $key => $value){
        if($key !== 'number_of_results' && $key != 'initial_word'){
            //this is needed since it will be formated with _ insted of . because it was array key
            $reformated_key = str_replace("_", ".", $key);
            echo "<div class='single-search-result'>";
            echo "<p class='search-result'>" . $value . get_current_rating_form($reformated_key) . "</p>";
            echo "<p class='search-result-rate-now'>Oceni doskocicu " . get_rating_form() ." <a href='#' class='search-result-rate-trigger'>oceni</a></p>";
            echo "</div>";
        }
    };

?>
    </div>
<?php

} else{
?>
    <p class="search-results-counter no-results"> Nema rezultata pretrage :( </p>
<?php
}

?>