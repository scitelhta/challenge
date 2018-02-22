<form action='javascript:void()' class='form login'>
    <p class='field required'>
        <label class='label login' for='correo'>Correo</label>
        <input class='text-input register' id='register_correo' name='correo' required  type='email'>
    </p>
    <p class='field required'>
        <label class='label' for='password'>Password</label>
        <input class='text-input login' id='register_password' name='password' required type='password'>
    </p>
    <p class='field'>
        <input class='button'  type="submit" ng-click="ingresar()"  value='Ingresar'>
        <a class="unregistered" href="#!/register">Registrar Usuario Nuevo</a>


    </p>
</form>