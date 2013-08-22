<?php
$this->breadcrumbs=array(
	'Usercontactdetails'=>array('index'),
	$model->contactDetailsId=>array('view','id'=>$model->contactDetailsId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Usercontactdetails', 'url'=>array('index')),
	array('label'=>'Create Usercontactdetails', 'url'=>array('create')),
	array('label'=>'View Usercontactdetails', 'url'=>array('view', 'id'=>$model->contactDetailsId)),
	array('label'=>'Manage Usercontactdetails', 'url'=>array('admin')),
);
?>

<h1>Update Usercontactdetails <?php echo $model->contactDetailsId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>