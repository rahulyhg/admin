<?php
$this->breadcrumbs=array(
	'Education Masters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EducationMaster', 'url'=>array('index')),
	array('label'=>'Manage EducationMaster', 'url'=>array('admin')),
);
?>

<h1>Create EducationMaster</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>