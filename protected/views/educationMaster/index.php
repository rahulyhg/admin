<?php
$this->breadcrumbs=array(
	'Education Masters',
);

$this->menu=array(
	array('label'=>'Create EducationMaster', 'url'=>array('create')),
	array('label'=>'Manage EducationMaster', 'url'=>array('admin')),
);
?>

<h1>Education Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
