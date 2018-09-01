<?php
include_once "templates/header.php";
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

foreach ($_GET as $result){
    if(is_array($result))   {
        echo $result['doskocica'] . "<br>";
    }
};

?>