<?php
/*
*
* $Id$
--------------------------------------------------------------------------------------------------------------------------
* Information contained in this file is the intellectual property of Ladbrokes Plc
* Copyright © 2012 MarryDorr. All Rights Reserved.
* ---------------------------------------------------------------------------------------------------------------------------
*
* @author  Ageesh K Gopinath
* @title printCoupon.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
?>
<?php
$this->breadcrumbs=array(
	'Coupon',
);?>

<div id="main-content">
<?php if(isset($file)) {?>
 File generated as <?php echo $file;?> 
<?php } else { ?>
<form name="coupons" id="coupons" method="post" action="/coupons/export">
<table width="450px">

 
<tr>
 <td valign="top"">
  <label for="startDate">Start Date*</label>
 </td>
 <td valign="top">
  <input  type="text" id="datepicker" class="validate[required]"   name="startDate" readonly="true"  size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="endDate">End Date*</label>
 </td>
 <td valign="top">
  <input  type="text" id="datepicker1" class="validate[required]"  name="endDate" readonly="true" maxlength="80" size="30">
 </td>
 
</tr>

<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Generate CSV">
 </td>
</tr>
</table>
</form>
<?php }?>

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
