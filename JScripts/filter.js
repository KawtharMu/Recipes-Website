$(document).ready(function () {


let select = document.getElementById('select');
select.onchange = sortingValue; 

function sortingValue(){
    if(this.value === 'Ascending'){
        var divList = jQuery(".col-lg-3");
        divList.sort(function(a, b){
            return String.prototype.localeCompare.call($(a).data('name').toLowerCase(), $(b).data('name').toLowerCase());
            });
            $("#list-of-divs").html(divList);
    }
    else if(this.value === 'Descending') {
        var divList = jQuery(".col-lg-3");
         divList.sort(function(a, b){
        return String.prototype.localeCompare.call($(b).data('name').toLowerCase(),$(a).data('name').toLowerCase());
      });
      $("#list-of-divs").html(divList);
    }

}

});

