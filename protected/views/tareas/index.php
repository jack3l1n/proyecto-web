<h1>Listado de Tareas</h1>

<?php
    echo 'La vista de tareas';
?>

<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th></th>
        <th>Editar</th>
    </tr>
    <?php foreach($tareas as $t){ ?>
    <tr>
        <td><?php echo $t->id; ?></td>
        <td><?php echo $t->nombre; ?></td>
        <td><?php echo $t->descripcion; ?></td>
        <td><?php echo CHtml::link('ver', array('view','id'=>$t->id)) ?></td>
        <td><?php echo CHtml::link('Editar', array('edit','id'=>$t->id)) ?></td>
    </tr>
    <?php } ?>
</table>