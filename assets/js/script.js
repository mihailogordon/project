$(document).ready(function(){
    initMainSearch();
});

function initMainSearch(){
    var searchForm = $(".main-search-holder");

    if(searchForm.length){
        searchForm.each(function() {
            var thisForm = $(this),
                thisFormInput = thisForm.find(".main-search-input"),
                thisFormSubmit = thisForm.find(".button-search-main");

            if(thisFormSubmit.length){
                thisFormSubmit.on("click", function(){
                    thisValue = thisFormInput.val();
                    console.log(thisValue);
                })
            }
        })
    }
}