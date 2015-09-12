<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <h1>Ingresar Datos</h1>
    </head>
    <body>
         <div>
        <?php
    $form=$this->beginWiget('CActiveForm');
   
     echo $form->labelEX($model,'nombre');?>
      <?php echo $form->textField($model,'nombre');?>
        <?php echo $form->error($model,'nombre');?>
    </div>
    <div>
        <?php echo $form->labelEX($model,'descripcion');?>
      <?php echo $form->textArea($model,'descripcion');?>
        <?php echo $form->error($model,'descripcion');?>
    </div>
     <?php echo CHtml::submitButton('Guardar');?>
        <?php
        $this->endWidget();
        ?>
    </body>
</html>
