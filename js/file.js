$(document).ready(function() {
	
	var container = $('<div id="fileinputs" class="span3"><div class="input-append fakefile"><input type="text" style="width:68%;"/><span class="btn" type="button" style="min-width: 18%;">Go!</span></div></div>');
	container.insertBefore($('#myfile'));
	$('#fileinputs').prepend($('#myfile'));
	
    $('#myfile').change(function(evt) {
        alert($(this).val());
    });
});
