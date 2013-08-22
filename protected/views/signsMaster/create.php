<?php
$this->breadcrumbs=array(
	'Signs Masters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SignsMaster', 'url'=>array('index')),
	array('label'=>'Manage SignsMaster', 'url'=>array('admin')),
);
?>

<h1>Create SignsMaster</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>