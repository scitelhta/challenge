<?php

?>
<div class="principal">
<h3>Categorías</h3>

<a ng-if="login.logged" class="button nuevo" href="#!/categoria">Nuevo</a>

<table class="tabla">
    <?php $i = 0; foreach ($categorias as $item): ?>

    <?php if (!$i): ?>
    <thead>
    <?php foreach ($item as $k=>$v):?>
        <th><?php print $k;?></th>
    <?php endforeach; ?>
    </thead>
    <tbody>
    <?php endif;?>


    <tr  ng-click="abrir('categoria', '<?=$item->id?>')">
        <?php foreach ($item as $k=>$v):?>
            <td><?php print $v;?></td>
        <?php endforeach;?>
    </tr>

    <?php $i++; endforeach;?>
    </tbody>
</table>
</div>