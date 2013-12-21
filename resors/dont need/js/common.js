//UI styles
$(document).ready(function(){

//Button Ul
$( "input:submit,.mybutton ").button();
	
});





function clearText(field)
	{
		if (field.defaultValue == field.value) field.value = '';
		else if (field.value == '') field.value = field.defaultValue;
	}

	
$(document).ready(function(){
$(".stable tbody tr").mouseover(function(){$(this).addClass("over");}).mouseout(function(){$(this).removeClass("over");});
$(".stable tbody tr:even").addClass("alt");

});

//$(function() {
//        $("table tbody tr:nth-child(even)").addClass("alt");
//      });


//$("a.myButton").live("click", function(){  
//  alert("#text#"); // text variable is passed in the ajax request
//   return false;
//});

function ajaxPagination(a){
	$.ajax({
      type: "GET",
      url: $(a).attr('href'),
      success: function(html){
        $("#selectlist_content").html(html);
      }
    }); 
	$(a).attr('href','#');              
   	return false;	
}