$(document).ready(function(){
    initMainSearchAvailability();
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