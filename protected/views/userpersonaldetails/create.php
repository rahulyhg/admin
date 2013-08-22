<?php
$this->breadcrumbs=array(
	'Userpersonaldetails'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Userpersonaldetails', 'url'=>array('index')),
	array('label'=>'Manage Userpersonaldetails', 'url'=>array('admin')),
);
?>

<h1>Create Userpersonaldetails</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>