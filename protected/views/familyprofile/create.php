<?php
$this->breadcrumbs=array(
	'Familyprofiles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Familyprofile', 'url'=>array('index')),
	array('label'=>'Manage Familyprofile', 'url'=>array('admin')),
);
?>

<h1>Create Familyprofile</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>