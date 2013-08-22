<?php
$this->breadcrumbs=array(
	'Subcastes',
);

$this->menu=array(
	array('label'=>'Create Subcaste', 'url'=>array('create')),
	array('label'=>'Manage Subcaste', 'url'=>array('admin')),
);
?>

<h1>Subcastes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
