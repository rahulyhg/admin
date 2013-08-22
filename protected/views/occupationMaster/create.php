<?php
$this->breadcrumbs=array(
	'Occupation Masters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OccupationMaster', 'url'=>array('index')),
	array('label'=>'Manage OccupationMaster', 'url'=>array('admin')),
);
?>

<h1>Create OccupationMaster</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>