<?php
<script type="text/javascript">
function val(){
if(frm.phone.value=="")
{
	alert("Please enter the phone number");
	frm.phone.focus(); 
	return false;
}
if(isNaN(frm.phone.value))
{
	alert("Invalid phone number");
	frm.phone.focus(); 
	return false;
}
if((frm.phone.value).length < 11)
{
	alert("Phone number should be minimum 11 digits");
	frm.phone.focus(); 
	return false;
}

return true;
}
</script> 
?>

