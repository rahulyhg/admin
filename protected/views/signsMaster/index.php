<?php
$this->breadcrumbs=array(
	'Signs Masters',
);

$this->menu=array(
	array('label'=>'Create SignsMaster', 'url'=>array('create')),
	array('label'=>'Manage SignsMaster', 'url'=>array('admin')),
);
?>

<h1>Signs Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
