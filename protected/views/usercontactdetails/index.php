<?php
$this->breadcrumbs=array(
	'Usercontactdetails',
);

$this->menu=array(
	array('label'=>'Create Usercontactdetails', 'url'=>array('create')),
	array('label'=>'Manage Usercontactdetails', 'url'=>array('admin')),
);
?>

<h1>Usercontactdetails</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
