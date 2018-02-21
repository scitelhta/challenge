<?php

?>
<h3>Materias</h3>

<a href="#!/materia">Nuevo</a>

<ul>
        <?php foreach ($materias as $item):?>

    <li><?php echo $item;?></li>

<?php endforeach;?>
</ul>