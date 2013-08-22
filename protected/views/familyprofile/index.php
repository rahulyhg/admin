<?php
$this->breadcrumbs=array(
	'Familyprofiles',
);

$this->menu=array(
	array('label'=>'Create Familyprofile', 'url'=>array('create')),
	array('label'=>'Manage Familyprofile', 'url'=>array('admin')),
);
?>

<h1>Familyprofiles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
