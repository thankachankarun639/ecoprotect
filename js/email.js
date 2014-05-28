function validateForm()
{
var x=document.forms["myForm"]["emailid"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<2 || dotpos<atpos+3 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}