function disp_confirm()
{

var ob=document.forms["myform"]["answer"].value;
var check=0;
if (ob==null || ob=="")
  {
  alert("Blank field");
  return false;
  }
	
  else if (ob== "1")
      ;
  
  else if ((ob== "2"))
     ;
  
  else if ((ob== "3"))
     ;
  
  else if ((ob == "4"))
     ;
  
  else
    {alert("You enterd wrng option");
	return false;}
    
	var r=confirm("Do you want us to submit this answer ?\n After submitting this answer you cannot change the solution.")
if (r==true)
  {
  return true;
		
  }
else
  {
  return false;
  }
 
}



function show(a)
{
document.getElementById("information").style.visibility='visible';
document.getElementById("element").style.visibility='visible';
if(a==1)
{
document.getElementById("element").innerHTML='<font size="5"><br><br><center>Breaking things is always easy. But breaking things in best possible way is the art you need to pass through these ciphers. Things are garnished and presented in the best possible way. Lick the cream off the dish and tell us the ingredients.<br><br><br><br>Prize Money : Rs. 12000</center></font>';


}
if(a==2)
{document.getElementById("element").innerHTML='<center>Event will be conducted in 2 Rounds.<u>FIRST ROUND</u><br><li>20 aptitude 10 reverse and cryptography</li><li>There is -ve marking in aptitude question. Scheme is +2 -1.</li><li>No -ve marking in crypto-reverse questions  Scheme is +3 0.</li><li>Crypto-reverse will be prefered over aptitude.</li><li>Time limit is 1 hour</li><li>Register as team for futher eligibility</li><br><u>SECOND ROUND</u><li>Questions will be based on<br>1. Reverse Engineering<br>2. Cryptography<center>'
}
if(a==3)
{document.getElementById("element").innerHTML='<br><font size="5"><center>PRACTICE PAPERS ARE AVAILABLE TRY SOLVING TO HAVE A TASTE OF CRYPTON<br><br>BEST OF LUCK!</center></font>';
}

if(a==4)
{document.getElementById("element").innerHTML='<br><font size="5"><center><a href="crypton.pdf">CRYPTON DETAILS</a></center></font>';
}
}

function hide()
{
document.getElementById("information").style.visibility='hidden';
document.getElementById("element").style.visibility='hidden';
}