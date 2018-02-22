<?php

?>
<h3>Categoría</h3>


<form action='javascript:void' class='form categoria'>
    <p class='field required full' >
        <input value="<?=$categorias["categoria"]->id?>" name="id" type="hidden"/>
        <input ng-value="usuario" name="usuario" type="hidden"/>
        <label class='label required ' for='nombre'>Nombre</label>
        <input class='text-input categoria' id='categoria_nombre' value="<?=$categorias["categoria"]->nombre?>"
               name='nombre' required  ng-readonly='!login.logged'  type='text'>
    </p>


    <p class='field'>
        <input class='button' ng-if="login.logged"  type="submit" ng-click="guardar('categoria')"  value='Guardar'>
        <input class='button'  type="submit" ng-click="guardar('categoria', 1)"  value='Cancelar'>

    </p>

</form>