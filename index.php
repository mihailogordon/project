<?php
/*Create required DB and Tables in it*/
//include_once 'db_definition.php';
?>
<?php
include_once "templates/header.php";
?>

<form class="main-search-holder" method="post" action="functions/main-search.php">
    <div class="text-input-holder">
        <input class="main-search-input" name="main_search_input" type="text" placeholder="Search...">
    </div>
    <div class="input-buttons-holder">
        <input type="submit" class="button-search-main" name="main_button" value="Pretrazi">
        <input type="submit" class="button-search-first" name="quick_button" value="Iz prve ruke">
    </div>
</form>
