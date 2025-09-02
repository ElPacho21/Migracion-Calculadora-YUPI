// JavaScript Document
function doSubOption(oBj){
	switch(paso){
	case "paso2":
		switch(subpage){
		case 'transporte_p1':
			switch($(oBj).val()){
			case "taxi":
			case "auto":
			case "auto_gnc":
				$("#suboption1").stop().slideDown();
			break;
			default:
				$("#suboption1").slideUp("fast");
			}
		break;
		}
	break;
	case 'datos':
		if($('#op1').val() != "-1" && $('#op2').val() != "-1" && $('#op3').val() != "-1"){
			$("#terminar").stop().css("display", "block").animate({opacity: 1},"slow");
			$("#datosuser").stop().animate({marginLeft: "0px"},"slow");
		}else{
			$("#terminar").stop().css("display", "none").css("opacity", 0);
		}
	break;
	}
}
function loadNextStep(){
	cargando(true);
	$.get("procesar.php",$("#form_contenido").serialize(),function(data){
		if(data.success){
			if(data.loadSubPage){
				loadSubPage(data.goto);
			}else{
				loadPage(data.goto);
			}
		}else{
			alert("Ocurrió un eror, intenta de nuevo!");
		}
		cargando(false);
	});
}
function cargando(val){
	$("#loading").stop();
	if(val){
		$("#loading").css({display:"block"});
		$("#loading").animate({opacity: 1},"slow");
	}else{
		$("#loading").animate({opacity: 0},"slow",function(){
			$("#loading").css({display:"none"});
		});
	}
}
var	paso = "paso1";
var subpage = "hogar_p1";
var paso_anterior = '';
function goBack(){
	if(paso_atras.indexOf("_") != -1){
		loadSubPage(paso_atras);
	}else{
		loadPage(paso_atras);
	}
}
function loadSubPage(qlpge){
	cargando(true);
	$("#inside span").animate({opacity: 0},"100");
	switch(qlpge){
	case "hogar_p1":
				qlpge=-1;
	
		$("#paso2 div.colizq img").each(function(){
			$(this).css("opacity",0.5);
		});
	
		$("#paso2 div.colizq img.hogar").animate({opacity: 1},"slow");		
		$.get("paso2_hogar_p1.php",function(data){
			$("#inside span").html(data);
			subpage_anterior = subpage;
			subpage = "hogar_p1";
			$("#inside span").animate({opacity: 1},"100",function(){
				cargando(false);
			});
		});
	break;
	case "hogar_p2":
				qlpge=-1;
	
		$("#paso2 div.colizq img").each(function(){
			$(this).css("opacity",0.5);
		});
	
		$("#paso2 div.colizq img.hogar").animate({opacity: 1},"slow");		
		$.get("paso2_hogar_p2.php",function(data){
			$("#inside span").html(data);
			subpage_anterior = subpage;
			subpage = "hogar_p2";
			$("#inside span").animate({opacity: 1},"100",function(){
				cargando(false);
			});
		});
	break;
	case "hogar_p3":
				qlpge=-1;
	
		$("#paso2 div.colizq img").each(function(){
			$(this).css("opacity",0.5);
		});
	
		$("#paso2 div.colizq img.hogar").animate({opacity: 1},"slow");		
		$.get("paso2_hogar_p3.php",function(data){
			$("#inside span").html(data);
			subpage_anterior = subpage;
			subpage = "hogar_p3";
			$("#inside span").animate({opacity: 1},"100",function(){
				cargando(false);
			});
		});
	break;
	case "alimentos_p1":
				qlpge=-1;
		$("#paso2 div.colizq img").each(function(){
			$(this).css("opacity",0.5);
		});
		$("#paso2 div.colizq img.alimento").animate({opacity: 1},"slow");		
		$.get("paso2_alimentos_p1.php",function(data){
			$("#inside span").html(data);
			subpage_anterior = subpage;
			subpage = "alimentos_p1";
			$("#inside span").animate({opacity: 1},"100",function(){
				cargando(false);
			});
		});
	break;
	case "alimentos_p2":
				qlpge=-1;
		
		$("#paso2 div.colizq img").each(function(){
			$(this).css("opacity",0.5);
		});
		
		$("#paso2 div.colizq img.alimento").animate({opacity: 1},"slow");		
		$.get("paso2_alimentos_p2.php",function(data){
			$("#inside span").html(data);
			subpage_anterior = subpage;
			subpage = "alimentos_p2";
			$("#inside span").animate({opacity: 1},"100",function(){
				cargando(false);
			});
		});
	break;
	case "alimentos_p3":
				qlpge=-1;
		
		$("#paso2 div.colizq img").each(function(){
			$(this).css("opacity",0.5);
		});
		
		$("#paso2 div.colizq img.alimento").animate({opacity: 1},"slow");		
		$.get("paso2_alimentos_p3.php",function(data){
			$("#inside span").html(data);
			subpage_anterior = subpage;
			subpage = "alimentos_p3";
			$("#inside span").animate({opacity: 1},"100",function(){
				cargando(false);
			});
		});
	break;
	case "alimentos_p4":
				qlpge=-1;
		
		$("#paso2 div.colizq img").each(function(){
			$(this).css("opacity",0.5);
		});
		
		$("#paso2 div.colizq img.alimento").animate({opacity: 1},"slow");		
		$.get("paso2_alimentos_p4.php",function(data){
			$("#inside span").html(data);
			subpage_anterior = subpage;
			subpage = "alimentos_p4";
			$("#inside span").animate({opacity: 1},"100",function(){
				cargando(false);
			});
		});
	break;
	case "transporte_p1":
				qlpge=-1;
		$("#paso2 div.colizq img").each(function(){
			$(this).css("opacity",0.5);
		});
		$("#paso2 div.colizq img.transporte").animate({opacity: 1},"slow");		
		$.get("paso2_transporte_p1.php",function(data){
			$("#inside span").html(data);
			subpage_anterior = subpage;
			subpage = "transporte_p1";
			$("#inside span").animate({opacity: 1},"100",function(){
				cargando(false);
			});
		});
	break;
	case "transporte_p2":
				qlpge=-1;
		
		$("#paso2 div.colizq img").each(function(){
			$(this).css("opacity",0.5);
		});
		
		$("#paso2 div.colizq img.transporte").animate({opacity: 1},"slow");		
		$.get("paso2_transporte_p2.php",function(data){
			$("#inside span").html(data);
			subpage_anterior = subpage;
			subpage = "transporte_p2";
			$("#inside span").animate({opacity: 1},"100",function(){
				cargando(false);
			});
		});
	break;
	default:
		loadSubPage(subpage);
	}
}
function loadPage(qlpge){
	cargando(true);
	$("#contenido span").animate({opacity: 0},"100",function(){
		
		switch(qlpge){
		case -1:
		break;
		case "terminar":
				qlpge=-1;
			$.get("terminar.php",function(data){
				$("#contenido span").html(data);
				cargando(false);
				paso_anterior = paso;
				paso = "terminar";
				$("#contenido span").animate({opacity: 1},"fast");
				
				
				/* animamos el obj */
				$("#terminar_img1").animate({opacity: 1},"100",function(){
					$("#terminar_img2").animate({opacity: 1},"200",function(){
						$("#terminar_img3").animate({opacity: 1},"10",function(){
							/* brillo para comenzar /
							$("#paso1_img3").find(".large_thumb_shine").animate({backgroundPosition: '321'},700);
							setInterval(function() {
								$("#paso1_img3").find(".large_thumb_shine").css("background-position","-99px 0"); 
								$("#paso1_img3").find(".large_thumb_shine").stop();
								$("#paso1_img3").find(".large_thumb_shine").animate({backgroundPosition: '321'},700);
							}, 5000);
							/* fin brillo */
						});
					});
				});
				
				
			});
		break;
		case "home":
				qlpge=-1;
			$.get("home.php",function(data){
				$("#contenido span").html(data);
				cargando(false);
				paso_anterior = paso;
				paso = "home";
				$("#contenido span").animate({opacity: 1},"fast");
				
				
				/* animamos el obj */
				$("#paso1_img1").animate({opacity: 1},"100",function(){
					$("#paso1_img2").animate({opacity: 1},"200",function(){
						$("#paso1_img3").animate({opacity: 1},"10",function(){
							/* brillo para comenzar /
							$("#paso1_img3").find(".large_thumb_shine").animate({backgroundPosition: '321'},700);
							setInterval(function() {
								$("#paso1_img3").find(".large_thumb_shine").css("background-position","-99px 0"); 
								$("#paso1_img3").find(".large_thumb_shine").stop();
								$("#paso1_img3").find(".large_thumb_shine").animate({backgroundPosition: '321'},700);
							}, 5000);
							/* fin brillo */
						});
					});
				});
				
				
			});
		break;
		case "paso1":
				qlpge=-1;
			$.get("paso1.php",function(data){
				$("#contenido span").html(data);
				cargando(false);
				paso_anterior = paso;
				paso = "paso1";
				$("#contenido span").animate({opacity: 1},"fast");
				
				
				/* animamos el obj */
				$("#paso1_img1").animate({opacity: 1},"100",function(){
					$("#paso1_img2").animate({opacity: 1},"200",function(){
						$("#paso1_img3").animate({opacity: 1},"10",function(){
							/* brillo para comenzar /
							$("#paso1_img3").find(".large_thumb_shine").animate({backgroundPosition: '321'},700);
							setInterval(function() {
								$("#paso1_img3").find(".large_thumb_shine").css("background-position","-99px 0"); 
								$("#paso1_img3").find(".large_thumb_shine").stop();
								$("#paso1_img3").find(".large_thumb_shine").animate({backgroundPosition: '321'},700);
							}, 5000);
							/* fin brillo */
						});
					});
				});
				
				
			});
		break;
		case "paso2":
				qlpge=-1;
			$.get("paso2.php",function(data){
				$("#contenido span").html(data);
				cargando(false);
				paso_anterior = paso;
				paso = "paso2";
				$("#contenido span").animate({opacity: 1},"slow",function(){
					$("#inside span").css("opacity", 0);
					loadSubPage(subpage);
				});
				
			});
		break;
		case "como_reducir":
				qlpge=-1;
			$.get("como_reducir.php",function(data){
				$("#contenido span").html(data);
				cargando(false);
				paso_anterior = paso;
				paso = "como_reducir";
				$("#contenido span").animate({opacity: 1},"slow");
			});
		break;
		case "resultados":
				qlpge=-1;
			$.get("resultados.php",function(data){
				$("#contenido span").html(data);
				cargando(false);
				paso_anterior = paso;
				paso = "resultados";
				$("#contenido span").animate({opacity: 1},"slow",function(){
				
					/* animamos el obj */
					$("#resultados div.ecologica").animate({opacity: 1},"slow",function(){
						$("#resultados div.carbono").animate({opacity: 1},"slow",function(){
							$("#resultados div.hidrica").animate({opacity: 1},"slow",function(){
								$("#resultados img.info_nuve_reducir").animate({opacity: 1},"slow");
							});
						});
					});
					
				
				});
			});
		break;
		case "datos":
				qlpge=-1;
			$.get("datos.php",function(data){
				$("#contenido span").html(data);
				cargando(false);
				paso_anterior = paso;
				paso = "datos";
				$("#contenido span").animate({opacity: 1},"slow",function(){
				
					/* animamos el obj */
					$("img.info_nuve").animate({opacity: 1},"200",function(){
						$("img.info_volver").animate({opacity: 1},"200");
					});
					
				
				});
			});
		break;
		case "info":
				qlpge=-1;
			$.get("info.php",function(data){
				$("#contenido span").html(data);
				cargando(false);
				paso_anterior = paso;
				paso = "info";
				$("#contenido span").animate({opacity: 1},"slow",function(){
				
				
					/* animamos el obj */
					$("img.info_nuve").animate({opacity: 1},"200",function(){
						$("img.info_volver").animate({opacity: 1},"200");
					});
					
					
				
				});
			});
		break;
		default:
			loadPage(paso_anterior);
		}
	});
}
var i =0;
$(function(){
});

function verificate(quien){
		errores = 0;
		$("#"+$(quien).attr("id")+" .required").each(function(i) {
			if($(this).val() == "" || $(this).val() == "-1"){
				errores = 1;
				$(this).toggleClass("inputError",true);
			}else{
				$(this).toggleClass("inputError",false);
			}
		});
		
		if(errores){
			return false;
		}else{
			cargando(true);
			// send the data
			$.post($(quien).attr("action"),$(quien).serialize(),function(data) {
				if(data.success){
					$(quien).slideUp("slow");
					$(quien).next().slideDown("slow");
				}else{
					alert(data.mensaje);
				}
				cargando(false);
			});
			return false;
		}
}