$(document).ready(function(){
    initMainSearchAvailability();
    initSearchResultsStarsRating();
});

function initMainSearchAvailability(){
    var searchForm = $(".main-search-holder");

    if(searchForm.length){
        searchForm.each(function() {
            var thisForm = $(this),
                thisFormInput = thisForm.find(".main-search-input"),
                thisFormSubmit = thisForm.find(".search-button"),
                thisFormValue;

            thisFormInput.on("change paste keyup", function(){
                thisFormValue = $(this).val();
                if(thisFormValue.length){
                    thisFormSubmit.prop("disabled", false);
                    thisFormSubmit.removeClass("disabled-input");
                } else{
                    thisFormSubmit.prop("disabled", true);
                    thisFormSubmit.addClass("disabled-input");
                }
            })
        })
    }
}

function initSearchResultsStarsRating(){
    var rateHolder = $('.search-result-rate-now');

    if(rateHolder.length){
        rateHolder.each(function(){
            var thisHolder = $(this),
                emptyStars = thisHolder.find('.rating-stars-empty'),
                emptyStar = emptyStars.find('.empty-star'),
                aboveStars = thisHolder.find('.rating-stars-above');

            emptyStar.each(function(){
                emptyStar.on('click', function(){
                    var thisStar = $(this),
                        thisValue = thisStar.data('value'),
                        aboveStarsWidth = thisValue * 20;

                    aboveStars.css("width", aboveStarsWidth + "%");
                })
            })
        })
    }
}