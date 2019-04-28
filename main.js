$(document).ready(function(){
$("#save").click(function(event){
event.preventDefault();
$.ajax({
    url: "register.php",
    method: "POST",
    data:$("form").serialize(),
    success: function(data){
		$("#signup_msg").html(data);
		}
 })
});
$("#login").click(function(event){

event.preventDefault();
var email=$("#e").val();
var pass=$("#p").val();

$.ajax({
url:"login.php",
method:"POST",
data:'',
data:{userLogin:1,userEmail:email,userPassword:pass},
cache: false,
success : function(data){
	//alert(data);
	//alert(data);
	if(data == 1)
		window.location.href="student.php";
	else if(data == 2){
		
		window.location.href="parent.php";
	}
	else if(data == 3){
		
		window.location.href="teacher.php";
	}
	else{
		$("#login_msg").html(data);
	}	
		
}

})

});	


$("#update").click(function(event){

event.preventDefault();
$.ajax({
url:"action.php",
method:"POST",
data:{userupdate:1},
success : function(data){
	//alert(data);
		window.location.href="student.php";	
		
}

})

});	

})

	
	
	
