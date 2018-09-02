<?php

function get_current_rating_form($rating = 0){
    $output = "";

    $width = $rating * 100 / 5;

    $output .= "<span class='rating-holder'>";
    $output .= "<span class='rating-stars-below'></span>";
    $output .= "<span class='rating-stars-above' style='width:" . $width . "%'></span>";
    $output .= "</span>";

    return $output;
}

function get_rating_form(){
    $output = "";

    $output .= "<span class='rating-holder'>";
    $output .= "<span class='rating-stars-empty'><span class='empty-star fa fa-star-o' data-value='1'></span><span class='empty-star fa fa-star-o' data-value='2'></span><span class='empty-star fa fa-star-o' data-value='3'></span><span class='empty-star fa fa-star-o' data-value='4'></span><span class='empty-star fa fa-star-o' data-value='5'></span></span>";
    $output .= "<span class='rating-stars-above' style='width:0%'></span>";
    $output .= "</span>";

    return $output;
}