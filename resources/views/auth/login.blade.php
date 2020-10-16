@extends("layouts.auth")


@section("content")
    <div class="login-signin">
        <div class="mb-20">
            <h3>Inicio de Administrador</h3>
            <div class="text-muted font-weight-bold">Introduce tus credenciales para Iniciar sesión:</div>
        </div>
        <form class="form" id="kt_login_signin_form" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group mb-5">
                <input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Email" name="email" autocomplete="off" />
                @error('email')
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>
            <div class="form-group mb-5">
                <input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Contraseña" name="password" />
                @error('password')
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>
            <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                <div class="checkbox-inline">
                    <label class="checkbox m-0 text-muted">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}/>
                        <span></span>Recordarme</label>
                </div>
                <a href="javascript:;" id="kt_login_forgot" class="text-muted text-hover-primary">Olvide mi contraseña</a>
            </div>
            <button id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Iniciar sesion</button>
        </form>
        <div class="mt-10">
            <span class="opacity-70 mr-4">Aún no estas registrado?</span>
            <a href="javascript:;" id="kt_login_signup" class="text-muted text-hover-primary font-weight-bold">Registrarme</a>
        </div>
    </div>
    <!--end::Login Sign in form-->
    <!--begin::Login Sign up form-->
    <div class="login-signup">
        <div class="mb-20">
            <h3>Registro</h3>
            <div class="text-muted font-weight-bold">Ingresa tus datos para registrarte</div>
        </div>
        <form class="form" id="kt_login_signup_form" action="{{ route('register') }}" method="POST">
            <div class="form-group mb-5">
                <input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Nombre completo" name="fullname" />
            </div>
            <div class="form-group mb-5">
                <input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Email" name="email" autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Contraseña" name="password" />
            </div>
            <div class="form-group mb-5">
                <input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Confirma la contraseña" name="cpassword" />
            </div>
            <div class="form-group mb-5 text-left">
                <div class="checkbox-inline">
                    <label class="checkbox m-0">
                        <input type="checkbox" name="agree" />
                        <span></span>Acepto los
                        <a href="#" class="font-weight-bold ml-1">Terminos y condiciones</a>.</label>
                </div>
                <div class="form-text text-muted text-center"></div>
            </div>
            <div class="form-group d-flex flex-wrap flex-center mt-10">
                <button id="kt_login_signup_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Registrarme</button>
                <button id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancelar</button>
            </div>
        </form>
    </div>
    <!--end::Login Sign up form-->
    <!--begin::Login forgot password form-->
    <div class="login-forgot">
        <div class="mb-20">
            <h3>Olvidaste la contraseña?</h3>
            <div class="text-muted font-weight-bold">Ingresa tu email para restablecer la contraseña</div>
        </div>
        <form class="form" id="kt_login_forgot_form">
            <div class="form-group mb-10">
                <input class="form-control form-control-solid h-auto py-4 px-8" type="text" placeholder="Email" name="email" autocomplete="off" />
            </div>
            <div class="form-group d-flex flex-wrap flex-center mt-10">
                <button id="kt_login_forgot_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Restablecer</button>
                <button id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancelar</button>
            </div>
        </form>
    </div>
@endsection
