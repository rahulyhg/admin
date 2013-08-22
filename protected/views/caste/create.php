<?php
$this->breadcrumbs=array(
	'Castes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Caste', 'url'=>array('index')),
	array('label'=>'Manage Caste', 'url'=>array('admin')),
);
?>

<h1>Create Caste</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>