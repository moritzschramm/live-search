$(document).ready(function() {

  $("#suggestions-container").hide();
  $("#loader").hide();

  $("#search-input").on("input", function() {

    var search_term = this.value;

    search(search_term);

  });
  $("#search-input").focusin(function() {
    $(this).addClass("input-focused");
    $("#suggestions-container").slideDown(150);
  });
  $("#search-input").focusout(function() {
    $("#suggestions-container").slideUp(100, function() {
      $("#search-input").removeClass("input-focused");
    });
  });
})

/**
* @param: element caller,
*/
function selectItem(caller) {

  var content = caller.html();

  $("#search-input").val(content);
  search(content);
}

/**
* @param: String search_term
*/
function search(search_term) {

  if(search_term == '') {

    $("#suggestions").html(getListItemElement('class="not-selectable"', 'Type to search'));
    return;
  }

  $("#loader").show();

  $.post("inc/search_process.php",
  {
    search_term: search_term
  },
  function(data, status) {

    data = JSON.parse(data);

    var suggestions = "";
    if(data.length == 0) {

      suggestions = getListItemElement('class="not-selectable"', 'No matches found');

    } else {

      for(var i = 0; i < data.length; i++) {
        suggestions += getListItemElement('onclick="selectItem( $(this) )"', data[i]);
      }
    }
    $("#suggestions").html(suggestions);

    $("#loader").hide();
  });
}

/**
* @param: String attr, the attributes of the element
* @param: String content, content of the element
*/
function getListItemElement(attr, content) {

  return '<li ' + attr + '>' + content + '</li>';
}
