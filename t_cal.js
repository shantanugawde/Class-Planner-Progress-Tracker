$(document).ready(function () {
	$("#my-calendar").zabuto_calendar( { action: function() { myDateFunction(this.id); } } );
});
function myDateFunction(id) {
	var date = $("#" + id).data("date");
	var hasEvent = $("#" + id).data("hasEvent");
	var dialog = document.querySelector('dialog');
	$.ajax({
		type:"GET",
		url:"t_cal_get.php",
		dataType:"json",
		data:{
			date: date,
			class1: $('#cclass').val()
		},
		success:function(data){
			if(data!=null){
				successDialog(data,date);
			}
			else{
				editDialog(date,null);
			}
		}
	});  
}
function editDialog(date,p){
	if (! dialog.showModal) {
	  dialogPolyfill.registerDialog(dialog);
	}
	$('#buttons').empty();
	$('#buttons').append('<button type="button" class="mdl-button close">Close</button>');
	$('#buttons').append('<button type="button" class="mdl-button" id="btngo">Go</button>');
	$('#h6').empty();
	$('#h6').append(date);
	$('#content').empty();
	if(p==null){
		$('#content').append('<textarea style="width:300px;height:120px" id="textarea">•</textarea>');
	}
	else{
		$('#content').append('<textarea style="width:300px;height:120px" id="textarea"></textarea>');
		$("#textarea").append(p);
	}
	dialog.showModal();
	$('#btngo').click(function(){
		$.ajax({
			type:"GET",
			url:"cal_fill.php",
			dataType:"json",
			data:{
				date: date,
				obj: $('#textarea').val(),
				class1: $('#cclass').val()
			},
			success:function(data){
			}
		}); 
		dialog.close();
	});
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
	$('#content').append('<p id="p1">'+data.AD_Objective+'</p>');
	dialog.showModal();
	$('#btnedit').click(function(){
		dialog.close();
		editDialog(date,data.AD_Objective);
	});
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