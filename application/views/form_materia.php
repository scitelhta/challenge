<?php

?>
<h3>Materia</h3>


<form action='javascript:void' class='form materia'>
    <p class='field required full' >
        <input value="<?=$materias['materia']->id?>" name="id" type="hidden"/>
        <input ng-value="usuario" name="usuario" type="hidden"/>
        <label class='label required ' for='nombre'>Nombre</label>
        <input class='text-input materia' id='materia_nombre' value="<?=$materias['materia']->nombre?>"
               name='nombre' required  ng-readonly='!login.logged'  type='text'>
    </p>

    <p class='field required full' >
        <label class='label required ' for='curso_id'>Curso</label>

        <select class='text-input materia' id='materia_curso' name='curso_id' required  ng-readonly='!login.logged' >
            <?php foreach($materias['cursos'] as $c): ?>
                <option value="<?=$c->id?>" <?= ($c->id==$materias['materia']->curso_id)?'selected':'' ?> ><?=$c->nombre?></option>
            <?php endforeach; ?>
        </select>



    </p>
    <p class='field required half' >
        <label class='label required ' for='horas'>N Horas</label>
        <input class='text-input materia' id='materia_horas' value="<?=$materias['materia']->horas?>"
               name='horas' required  ng-readonly='!login.logged'  type='text'>
    </p>

    <p class='field required half' >
        <label class='label required ' for='ordinal'>Ordinal</label>
        <input class='text-input materia' id='materia_ordinal' value="<?=$materias['materia']->ordinal?>"
               name='ordinal' required  ng-readonly='!login.logged'  type='text'>
    </p>


    <p class='field'>
        <input class='button' ng-if="login.logged"  type="submit" ng-click="guardar('materia')"  value='Guardar'>
        <input class='button'  type="submit" ng-click="guardar('materia', 1)"  value='Cancelar'>

    </p>

</form>