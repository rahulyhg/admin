<?php
$this->breadcrumbs=array(
	'Payments'=>array('index'),
	$model->paymentId=>array('view','id'=>$model->paymentId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Payment', 'url'=>array('index')),
	array('label'=>'Create Payment', 'url'=>array('create')),
	array('label'=>'View Payment', 'url'=>array('view', 'id'=>$model->paymentId)),
	array('label'=>'Manage Payment', 'url'=>array('admin')),
);
?>

<h1>Update Payment <?php echo $model->paymentId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>