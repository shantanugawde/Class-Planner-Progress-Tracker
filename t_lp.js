var classid=0;
var subid=0;
var modid=0;
var sd;
var ed;

$(document).ready(function () {
	$('#date-end').bootstrapMaterialDatePicker
				({
					time: false, weekStart: 0, format: 'DD/MM/YYYY'
				}).on('change', function(e, date)
				{
					if(date.day()==0||date.day()==6){
						$("#submitMe").attr("disabled", true);
					}
					else{
						$("#submitMe").attr("disabled", false);
					}
				});
				$('#date-start').bootstrapMaterialDatePicker
				({
					time: false, weekStart: 0, format: 'DD/MM/YYYY', shortTime : true,okButton: false
				}).on('change', function(e, date)
				{
					$('#date-end').bootstrapMaterialDatePicker('setMinDate', date.add(1,'d'));
					if(date.day()==0||date.day()==6){
						$("#submitMe").attr("disabled", true);
					}
					else{
						$("#submitMe").attr("disabled", false);
					}
				});
				

				$.material.init();
	$.ajax({
		type:"GET",
		url:"t_lp_get_class.php",
		dataType: "json",
		success:function(response){
			var json_obj = response;
			
			$("#classlist").empty();
			for(var i in json_obj){
				$("#classlist").append('<li class="mdl-menu__item">'+json_obj[i].CC_Name+'</li>');
			}
			getmdlSelect.init("#classselect");
			
			$("#cclass").change(function(){				
				for(var i in json_obj){
					if($(this).val()==json_obj[i].CC_Name){
						classid=json_obj[i].CC_ID;
					}
				}
				populateSubjects();
			});
		}
		
	});
});

function populateSubjects(){
	$("#sublist").empty();
	$.ajax({
		type:"GET",
		url:"t_lp_get_subjects.php",
		dataType:"json",
		data:{
			ccid: classid
		},
		success:function(response){
			var json_obj = response;
			
			for(var i in json_obj){
				$("#sublist").append('<li class="mdl-menu__item" value='+json_obj[i].S_ID+'>'+json_obj[i].S_Name+'</li>');
			}
			getmdlSelect.init("#subselect");
			
			$("#subject").change(function(){				
				for(var i in json_obj){
					if($(this).val()==json_obj[i].S_Name){
						subid=json_obj[i].S_ID;
					
	}
				}
				populateModules();
			});
		}
	});  
}

function populateModules(){
	$("#modlist").empty();
	$.ajax({
		type:"GET",
		url:"t_lp_get_modules.php",
		dataType:"json",
		data:{
			msub: subid
		},
		success:function(response){
			var json_obj = response;
			
			for(var i in json_obj){
				$("#modlist").append('<li class="mdl-menu__item">'+json_obj[i].M_Name+'</li>');
			}
			getmdlSelect.init("#modselect");
			
			$("#module").change(function(){				
				for(var i in json_obj){
					if($(this).val()==json_obj[i].M_Name){
						modid=json_obj[i].M_ID;
					}
				}
			});
		}
	});  
}

$(document).on('click','#submitMe',function(){
	var m = moment($("#date-start").val(),"DD/MM/YYYY");
	sd = m.year()+"-"+(m.month()+1)+"-"+m.date();
	var m2 = moment($("#date-end").val(),"DD/MM/YYYY");
	ed = m2.year()+"-"+(m2.month()+1)+"-"+m2.date();
	
	
	$.ajax({
		type:"GET",
		url:"t_lp_insert.php",
		dataType:"json",
		data:{
			sdate:sd,
			edate:ed,
			lpm:modid
		},
		success:function(response){
		}
	});
});