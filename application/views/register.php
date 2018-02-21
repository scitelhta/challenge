<form >
    <div>
        <label for="correo">Correo</label>
    <input name="correo"/>
    </div>
    <div>
        <label for="nombres">Nombre:</label>
        <input name="nombres"/>
    </div>
    <div>
        <label for="apellidos">Apellidos:</label>
        <input name="apellidos"/>
    </div>
    <div>
        <label for="password">Password:</label>
        <input name="password" type="password"/>
    </div>
    <div>
        <label for="password2">Re-password:</label>
        <input name="password2" type="password"/>
    </div>

    <input type="submit" ng-click="registrar()">
    <a class="registered" href="#!/login">Ya registrado</a>
</form>