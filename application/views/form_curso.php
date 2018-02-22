<?php

?>
<h3>Curso</h3>


<form action='javascript:void' class='form curso'>
    <p class='field required full' >
        <input value="<?=$cursos['curso']->id?>" name="id" type="hidden"/>
        <input ng-value="usuario" name="usuario" type="hidden"/>
        <label class='label required ' for='nombre'>Nombre</label>
        <input class='text-input curso' id='curso_nombre' value="<?=$cursos['curso']->nombre?>"
               name='nombre' required  ng-readonly='!login.logged'  type='text'>
    </p>

    <p class='field required full' >
        <label class='label required ' for='categoria'>Categoría</label>
        <select class='text-input curso' id='curso_categoria' name='categoria_id' required  ng-readonly='!login.logged' >
            <?php foreach($cursos['categorias'] as $c): ?>
                <option value="<?=$c->id?>" <?= ($c->id==$cursos['curso']->categoria_id)?'selected':'' ?> ><?=$c->nombre?></option>
            <?php endforeach; ?>
        </select>
    </p>

    <p class='field'>
        <input class='button' ng-if="login.logged"  type="submit" ng-click="guardar('curso')"  value='Guardar'>
        <input class='button'  type="submit" ng-click="guardar('curso', 1)"  value='Cancelar'>

    </p>

    <div class="materias">
        <div ng-include="materias(<?=$cursos['curso']->id?>)"></div>
    </div>

</form>