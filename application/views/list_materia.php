<?php

?>
<div class="principal">
<h3>Materias</h3>

<a ng-if="login.logged"  class="button nuevo nuevo1" href="#!/materia">Nuevo</a>

    <a ng-if="login.logged"  class="button nuevo nuevo2" ng-click="nueva_materia()">Nuevo</a>


    <table class="tabla">
    <?php $i = 0; foreach ($materias as $item): ?>

    <?php if (!$i): ?>
    <thead>
    <?php foreach ($item as $k=>$v):?>
        <th><?php print $k;?></th>
    <?php endforeach; ?>
    </thead>
    <tbody>
    <?php endif;?>


    <tr ng-click="abrir('materia', '<?=$item->id?>')">
        <?php foreach ($item as $k=>$v):?>
            <td><?php print $v;?></td>
        <?php endforeach;?>
    </tr>

    <?php $i++; endforeach;?>
    </tbody>
</table>
</div>