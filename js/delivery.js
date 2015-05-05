


function validation(){

var a=document.forms["info"]["Name"].value;
var b=document.forms["info"]["LastName"].value;
var c=document.forms["info"]["Email"].value;
var d=document.forms["info"]["Address"].value;
var e=document.forms["info"]["Phone"].value;
 var atpos=c.indexOf("@");
 var dotpos=c.lastIndexOf("."); 

 if(a==null || a==""){
 document.getElementById("msg1").innerHTML="Please fill out"
 
 }
if(b==null || b==""){
 document.getElementById("msg2").innerHTML="Please fill out"
 
 }
  //Position of @ and .email
 
 if(atpos<1 || dotpos < atpos+2 || dotpos+2>= c.length ){
		  document.getElementById("msg3").innerHTML="Wrong Email";
		  }
 if(d==null || d==""){
 document.getElementById("msg4").innerHTML="Please fill out"
 
 }
 //phone Number 
if(e==null || e=="" || isNaN(e)==true){
document.getElementById("msg5").innerHTML="Please fill out";
return false;
 }	

 else{
		  alert("Thank YOU");
		  }
		  

}