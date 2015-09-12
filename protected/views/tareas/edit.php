<h1>Editar Datos</h1>


<?php
$form=$this->beginWidget('CActiveForm');
?>
<div>
    <?php echo $form->labelEX($model, 'nombre'); ?>
    <?php echo $form->textField($model, 'nombre'); ?>
    <?php echo $form->error($model, 'nombre'); ?>
</div>
<div>
    <?php echo $form->labelEX($model, 'descripcion'); ?>
    <?php echo $form->textField($model, 'descripcion'); ?>
    <?php echo $form->error($model, 'descripcion'); ?>    
</div>

<?php
$this->endWidget();
?>

<?php echo CHtml::submitButton('Editar'); ?>