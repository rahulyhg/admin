<?php
$this->breadcrumbs=array(
	'Castes',
);

$this->menu=array(
	array('label'=>'Create Caste', 'url'=>array('create')),
	array('label'=>'Manage Caste', 'url'=>array('admin')),
);
?>

<h1>Castes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
