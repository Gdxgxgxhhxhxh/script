<!DOCTYPE html>
<html>
<head>
<meta name ="viewport" content="width=device-width">
  <meta name="author" content="Techy Scripter">
   <meta name="theme-color" content="#FF2EE7"> 
   <title>Javascript • Script</title>
<style>
 *{
    margin: 0px;
    padding: 0px;
 }
 body{
   display: grid;
   place-items: center;
   background: #15B8FF;
   align-items: center;
   justify-content: center;
   padding-top: 30px;
}
 form{
    height: 300px;
    width: 400px;
    background: RED;
    text-align: ;
    border: none;
    border-radius: none; 
    text-align: center;
    justify-content: center;
    align-items: center;   
  }
  marquee{
     border-left: none;
     border-right: none;
     border-top: 1px solid red;
     border-bottom: 1px solid blue; 
     padding: 10px;
     color: #E824FF;
     margin: 4px 10px;    
  }
  input[type="number"],input[type="text"]{
     width: 300px;  
     height: 50px;
     padding: 5px 15px; 
     background: #50FCFF;
     border: none;
     border-radius: 5px;
     outline: none;
     font-weight: none;     
     margin: 5px 10px; 
     box-shadow: 0.5px 1px px grey;
  }
  button{
    padding: 5px 15px; 
    margin-top: 30px;
    background: black;
    color: white;
    width: 150px;
    height: 45px;
    border: none;
    outline: none;
    }
    h4{
       color: grey;
       padding: 8px 5px;
    }
    p{
       color: red;
       margin-top: 80px;       
    }
    #otp{
       display: none;
    }
    #sendOtp{
       display: inline-block;
    }
    #verifyOtp{
       display: none;
    }
</style>
</head>
<body>

<form id="form" autocomplete="off" method="POST">
<marquee>Enter Your Name</marquee>
<h4>Javascript Coin Adder Script</h4>
<input type="number" name="mobile" id="mobile" placeholder="Enter mobile number." required/>
<input type="text" name="ref" id="ref" placeholder="Enter refer code." required/>
<input type="text" name="otp" id="otp" placeholder="Enter verification code." />

<button id ="sendOtp" name="submit">SEND OTP</button>
<button id ="verifyOtp" name="submit">VERIFY OTP</button>

<p id="credit">© techyscripter</p>
</form>

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
 $(document).ready(function(){  
var credit =  $("#credit").text();

/*$("#form").on("submit", function(e){ 
e.preventDefault();*/


$("#sendOtp").click(function(e){

var mobile = $("#mobile").val();
var ref = $("#ref").val();
   e.preventDefault();
   
    const URL = "";
       
    $.ajax({
			url : URL,
			type : 'POST',
			data : "", 
			contentType: 'application/x-www-form-urlencoded',
			dataType : 'json',		
			beforeSend : '',
			afterSend : '',
			success: function(data){
			    data1 = JSON.stringify(data);
			    respCode = JSON.stringify(data.code);
			    msg = JSON.stringify(data.msg);;	

			if(msg == '"success"'){
			   alert("Otp sent successfully.")
			$("#otp").css("display","inline-block");
				$("#mobile").css("display","none");
				$("#ref").css("display","none");	
				$("#verifyOtp").css("display","inline-block");				
								$("#sendOtp").css("display","none");				
			}else 
	if(msg == '"request so quickly"'){
			alert("Please wait 1 minut for otp. "+msg)
		  }else{
		 alert(msg)
			  }
			},
			error: function(data){
			   alert("Error in script");
			}
		});	
		
		if(credit !== "© techyscripter"){
   alert("Dont remove credit otherwise script not work and get copyright strike from techyscripter.")
}
 
});



$("#verifyOtp").click(function(e){
var otp = $("#otp").val();
var mobile = $("#mobile").val();
var ref = $("#ref").val();
var pass = Math.floor((Math.random()*1000000)+1);
   e.preventDefault();
   
    const URL = "";
       
    $.ajax({
			url : URL,
			type : 'POST',
			data : "", 
			contentType: 'application/x-www-form-urlencoded',
			dataType : 'json',		
			beforeSend : '',
			afterSend : '',
			success: function(data){
			    data1 = JSON.stringify(data);
			    respCode = JSON.stringify(data.code);
			    msg = JSON.stringify(data.msg);
			    alert(msg)			    
       setTimeout(function(){ window.location = "Telegram Link"; }, 2000);  
    			    
	 },
	 error: function(data){
	    alert("Error in javascript.")
	    
	    }		
		});	
});

    	
// }); 
});
 </script>
</body>
</html>