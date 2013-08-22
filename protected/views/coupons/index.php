<?php
$this->breadcrumbs=array(
	'Coupon',
);?>


<div id="main-content">
<?php 
if(isset($error))
{
	echo "Somethig went wrong!";
}
?>
<form name="coupons" id="coupons"  method="post" action="/coupons/generate">
<table width="450px">
<tr>
 <td valign="top">
  <label for="count">Number of coupons (Enter multiples of 10)*</label>
 </td>
 <td valign="top">
  <input  type="text" name="count" maxlength="50" class="validate[required]" size="30">
 </td>
</tr>
 
<tr>
 <td valign="top"">
  <label for="startDate">Start Date*</label>
 </td>
 <td valign="top">
  <input  type="text" id="datepicker" name="startDate" class="validate[required]" readonly="true" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="endDate">End Date*</label>
 </td>
 <td valign="top">
  <input  type="text" id="datepicker1"  name="endDate" readonly="true" class="validate[required]" size="30">
 </td>
 
</tr>
<tr>
 <td valign="top">
  <input type="radio" class="validate[required]" name="type" value="promotion" /> <label for="count">Promotional</label>
 </td>
 <td valign="top">
  <input type="radio" name="type" value="normal" class="validate[required]" /> <label for="count">Normal</label>
 </td>
</tr>

<tr>
 <td valign="top">
  <label for="telephone">Validty in days</label>
 </td>
 <td valign="top">
  <input  type="text" name="validity" maxlength="30" class="validate[required]" size="30">
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">
 </td>
</tr>
</table>
</form>

</div>

<script>
$(document).ready(function(){
	$("#coupons").validationEngine('attach');
	});
	
$(function() {
	$( "#datepicker" ).datepicker(
			{
				inline: true,
				dateFormat: 'yy-mm-dd'
			});
	
	$( "#datepicker1" ).datepicker(
			{
				inline: true,
				dateFormat: 'yy-mm-dd'
			});
	//hover states on the static widgets
	$('#dialog_link, ul#icons li').hover(
		function() { $(this).addClass('ui-state-hover'); },
		function() { $(this).removeClass('ui-state-hover'); }
	);
});
</script>

