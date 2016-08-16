$(document).ready(function () {
	$("#my-calendar").zabuto_calendar( { action: function() { myDateFunction(this.id); } } );
});
function myDateFunction(id) {
	var date = $("#" + id).data("date");
	var hasEvent = $("#" + id).data("hasEvent");
	var dialog = document.querySelector('dialog');
	$.ajax({
		type:"GET",
		url:"s_cal_get.php",
		dataType:"json",
		data:{
			date: date
		},
		success:function(data){
			successDialog(data,date);
		}
	});  
}
function successDialog(data,date){
	if (! dialog.showModal) {
	  dialogPolyfill.registerDialog(dialog);
	}
	$('#buttons').empty();
	$('#buttons').append('<button type="button" class="mdl-button close">Close</button>');
	$('#h6').empty();
	$('#h6').append(date);
	$('#content').empty();
	if(data!=null)
		$('#content').append('<p id="p1">'+data.AD_Objective+'</p>');
	else
		$('#content').append('<p id="p1">No objectives set yet.</p>');
	dialog.showModal();
	dialog.querySelector('.close').addEventListener('click', function() {
	  dialog.close();
	});
	$('#textarea').on('keydown',function(e){
	  var t = $(this);
	  switch(e.which){
	  case 13:
		t.val(t.val()+'\n•');
		return false;
	  }  
	});
}