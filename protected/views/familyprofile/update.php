<?php
$this->breadcrumbs=array(
	'Familyprofiles'=>array('index'),
	$model->familyProfileID=>array('view','id'=>$model->familyProfileID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Familyprofile', 'url'=>array('index')),
	array('label'=>'Create Familyprofile', 'url'=>array('create')),
	array('label'=>'View Familyprofile', 'url'=>array('view', 'id'=>$model->familyProfileID)),
	array('label'=>'Manage Familyprofile', 'url'=>array('admin')),
);
?>

<h1>Update Familyprofile <?php echo $model->familyProfileID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>