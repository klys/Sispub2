// Java
$(document).ready(function(){

$('div.list_m').click(function(){
	$(this).parent().find('ul').slideToggle(500);
	$(this).parent().nextAll().find('ul').slideUp(500);
	$(this).parent().prevAll().find('ul').slideUp(500);


});
});