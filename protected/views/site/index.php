<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?php 
$user = Yii::app()->session->get('user');

if(isset($user))
{
?>
<a href="<?php echo Utilities::createAbsoluteUrl('coupons','index'); ?>" >Coupon Generation</a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('coupons','print'); ?>" >Coupon Print</a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('coupon','index'); ?>" >Coupon Details</a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('country','index'); ?>" >Country</a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('states','index'); ?>" >States</a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('places','index'); ?>" >Places</a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('signsmaster','index'); ?>" >Sign</a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('languages','index'); ?>" >Languages</a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('occupationmaster','index'); ?>" >Occupation</a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('educationmaster','index'); ?>" >Education</a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('caste','index'); ?>" >Caste</a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('religion','index'); ?>" >Religion</a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('subcaste','index'); ?>" >Subcaste</a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('usercontact','index'); ?>" >User Contact</a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('user','index'); ?>" >User </a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('userpersonal','index'); ?>" >User Personal</a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('payment','index'); ?>" >Payment </a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('familyprofile','index'); ?>" >Family Profile </a> </br>
<a href="<?php echo Utilities::createAbsoluteUrl('feedback','index'); ?>" >Feedback</a> </br>

<?php 	
}
else
{
?>	
	 Please login using your credentials. <a href="/site/login">Login</a>
<?php 	
}
?>

