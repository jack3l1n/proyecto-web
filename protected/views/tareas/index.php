<h1>Listado de Tareas</h1>

<?php
    echo 'La vista de tareas';
?>

<tabble>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th></th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    <?php foreach($tareas as $t){ ?>
    <tr>
        <td><?php echo $t->id; ?></td>
        <td><?php echo $t->nombre; ?></td>
        <td><?php echo $t->descripcion; ?></td>
        <td><?php echo CHtml::link('ver', array('view','id'=>$t->id)) ?></td>
        <td><?php echo CHtml::link('Editar', array('edit','id'=>$t->id)) ?></td>
        <td><?php echo CHtml::link('Borrar', array('delete','id'=>$t->id),  
                array('confirmar'=>'Seguros de Eliminar?')); ?></td>
      <?php echo  'La vista de Tareas';?>
        <?php echo CHtml::link('Crear Registro',array('add'))?>
       
        
    </tr>
    <?php
    } 
    ?>
</table>