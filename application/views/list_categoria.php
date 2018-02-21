<?php

?>
<h3>Categorías</h3>

<a href="#!/categoria">Nuevo</a>

<ul>
    <?php foreach ($categorias as $item):?>

    <li><?php echo $item;?></li>

<?php endforeach;?>
</ul>