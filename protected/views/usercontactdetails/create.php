<?php
$this->breadcrumbs=array(
	'Usercontactdetails'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Usercontactdetails', 'url'=>array('index')),
	array('label'=>'Manage Usercontactdetails', 'url'=>array('admin')),
);
?>

<h1>Create Usercontactdetails</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>