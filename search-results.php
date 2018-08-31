<?php

foreach ($_GET as $result){
    if(is_array($result))   {
        echo $result['doskocica'] . "<br>";
    }
};

?>