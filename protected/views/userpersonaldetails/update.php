<?php
$this->breadcrumbs=array(
	'Userpersonaldetails'=>array('index'),
	$model->personalDetailsId=>array('view','id'=>$model->personalDetailsId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Userpersonaldetails', 'url'=>array('index')),
	array('label'=>'Create Userpersonaldetails', 'url'=>array('create')),
	array('label'=>'View Userpersonaldetails', 'url'=>array('view', 'id'=>$model->personalDetailsId)),
	array('label'=>'Manage Userpersonaldetails', 'url'=>array('admin')),
);
?>

<h1>Update Userpersonaldetails <?php echo $model->personalDetailsId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>