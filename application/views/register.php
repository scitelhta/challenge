<form action='javascript:void()' class='form register'>
    <p class='field required'>
        <label class='label required' for='correo'>Correo</label>
        <input class='text-input register' id='register_correo' name='correo' required  type='email'>
    </p>
    <p class='field required half'>
        <label class='label' for='nombres'>Nombres</label>
        <input class='text-input register' id='register_nombres' name='nombres' required type='text'>
    </p>
    <p class='field required half'>
        <label class='label' for='apellidos'>Apellidos</label>
        <input class='text-input register' id='register_apellidos' name='apellidos' required type='text'>
    </p>
    <p class='field required half'>
        <label class='label' for='password'>Password</label>
        <input class='text-input register' id='register_password' name='password' required type='password'>
    </p>
    <p class='field required half'>
        <label class='label' for='repassword'>Re-Password</label>
        <input class='text-input register' id='register_repassword' name='repassword' required type='password'>
    </p>
    <p class='field'>
        <input class='button'  type="submit" ng-click="registrar()"  value='Registrar'>
        <a class="registered" href="#!/login">Ya registrado</a>


    </p>
</form>
