<?php
$this->breadcrumbs=array(
	'Feedbacks'=>array('index'),
	$model->name=>array('view','id'=>$model->feedId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Feedback', 'url'=>array('index')),
	array('label'=>'Create Feedback', 'url'=>array('create')),
	array('label'=>'View Feedback', 'url'=>array('view', 'id'=>$model->feedId)),
	array('label'=>'Manage Feedback', 'url'=>array('admin')),
);
?>

<h1>Update Feedback <?php echo $model->feedId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>