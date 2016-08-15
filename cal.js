$(document).ready(function () {
	$("#my-calendar").zabuto_calendar( { action: function() { myDateFunction(this.id); } } );
	$('textarea').on('keydown',function(e){
	  var t = $(this);
	  switch(e.which){
	  case 13:
		t.val(t.val()+'\n•');
		return false;
	  }  
	});
});
function myDateFunction(id) {
	var date = $("#" + id).data("date");
	var hasEvent = $("#" + id).data("hasEvent");
	var dialog = document.querySelector('dialog');
	$.ajax({
		type:"GET",
		url:"cal_get.php",
		dataType:"json",
		data:{
			date: date
		},
		success:function(data){
			if(data!=null){
				successDialog(data,date);
			}
			else{
				editDialog(date);
			}
		}
	});  
}
function editDialog(date){
	if (! dialog.showModal) {
	  dialogPolyfill.registerDialog(dialog);
	}
	$('#buttons').empty();
	$('#buttons').append('<button type="button" class="mdl-button close">Close</button>');
	$('#buttons').append('<button type="button" class="mdl-button" id="btngo">Go</button>');
	$('#h6').empty();
	$('#h6').append(date);
	$('#content').empty();
	$('#content').append('<textarea style="width:300px;height:120px" id="textarea">•</textarea>');
	dialog.showModal();
	$('#btngo').click(function(){
		$.ajax({
			type:"GET",
			url:"cal_fill.php",
			dataType:"json",
			data:{
				date: date,
				obj: $('#textarea').val()
			},
			success:function(data){
			}
		}); 
		dialog.close();
	});
	dialog.querySelector('.close').addEventListener('click', function() {
	  dialog.close();
	});
}
function successDialog(data,date){
	if (! dialog.showModal) {
	  dialogPolyfill.registerDialog(dialog);
	}
	$('#buttons').empty();
	$('#buttons').append('<button type="button" class="mdl-button close">Close</button>');
	$('#buttons').append('<button type="button" class="mdl-button" id="btnedit">Edit</button>');
	$('#h6').empty();
	$('#h6').append(date);
	$('#content').empty();
	$('#content').append('<p>'+data.AD_Objective+'</p>');
	dialog.showModal();
	$('#btnedit').click(function(){
		dialog.close();
		editDialog(date);
	});
	dialog.querySelector('.close').addEventListener('click', function() {
	  dialog.close();
	});
}