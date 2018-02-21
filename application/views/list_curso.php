<?php

?>
<h3>Cursos</h3>

<a href="#!/curso">Nuevo</a>

<ul>
        <?php foreach ($cursos as $item):?>

    <li><?php echo $item;?></li>

<?php endforeach;?>
</ul>