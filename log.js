$(function(){
	$('#cclass').change(function(){
		$('#sub').empty();
		$.ajax({
			type:"GET",
			url:"loads.php",
			dataType:"json",
			data:{
				class1: $('#cclass').val()
			},
			success:function(data){
				var i=0,j=0;
				for(i=0;i<data.length;i++){
					$('#sub').append('<li class="mdl-menu__item" value="'+j+'">'+data[i].S_Name+'</li>');
					j++;
				}
			}
		});  
	});
	$('#subject').change(function(){
		$('#mod').empty();
		$.ajax({
			type:"GET",
			url:"loadm.php",
			dataType:"json",
			data:{
				subj: $('#subject').val()
			},
			success:function(data){
				var i=0;
				for(i=0;i<data.length;i++){
					$('#mod').append('<li class="mdl-menu__item">'+data[i].M_Name+'</li>');
				}
			}
		});  
	});
});