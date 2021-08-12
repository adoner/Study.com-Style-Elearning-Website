// JavaScript Document

$(document).on("click", "#studentLogin", function(){
	
	document.getElementById("loginForm").submit();
	
	}); 
	
$(document).on("click", "#adminLogin", function(){

document.getElementById("adminLoginForm").submit();

}); 
	
$(document).on("click", "#cartLogin", function(e){
	
	var formID = $(this).closest("form").attr("id");
	
	document.getElementById(formID).submit();
	
	});