<?php

?>
<div class="principal">
<h3>Cursos</h3>

<a ng-if="login.logged"  class="button nuevo    " href="#!/curso">Nuevo</a>

<table class="tabla">
        <?php $i = 0; foreach ($cursos as $item): ?>

            <?php if (!$i): ?>
                <thead>
                <?php foreach ($item as $k=>$v):?>
                <th><?php print $k;?></th>
                <?php endforeach; ?>
                </thead>
                <tbody>
                <?php endif;?>


    <tr  ng-click="abrir('curso', '<?=$item->id?>')">
            <?php foreach ($item as $k=>$v):?>
                <td><?php print $v;?></td>
        <?php endforeach;?>
    </tr>

<?php $i++; endforeach;?>
                </tbody>
</table>
</div>