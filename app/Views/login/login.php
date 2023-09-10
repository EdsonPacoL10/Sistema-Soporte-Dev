
<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../">
    <title>MDPyEP &amp; Sistema de Soporte</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="recursos/logo/logo2.png" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <style>
        /************************************************* 
            estilos de label de los datos de password y correo
             **************************************************/
        .label-custom {
            display: inline-block;
            font-weight: bold;
            /* Negrita */
            font-size: 18px;
            /* Tamaño de fuente más grande */
            color: #000;
            /* Color negro */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            /* Sombras */
            margin-right: 10px;
            /* Espacio a la derecha para separar el label del input */
        }

    </style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body data-kt-name="metronic" id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
    <!--begin::Theme mode setup on page load-->
    <script>if (document.documentElement) { const defaultThemeMode = "system"; const name = document.body.getAttribute("data-kt-name"); let themeMode = localStorage.getItem("kt_" + (name !== null ? name + "_" : "") + "theme_mode_value"); if (themeMode === null) { if (defaultThemeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } else { themeMode = defaultThemeMode; } } document.documentElement.setAttribute("data-theme", themeMode); }</script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url('assets/media/auth/bg4.jpg');
            }

            [data-theme="dark"] body {
                background-image: url('assets/media/auth/bg4-dark.jpg');
            }
        </style>
        <!--end::Page bg image-->
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-column-fluid flex-lg-row">
            <!--begin::Aside-->
            <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
                <!--begin::Aside-->
                <div class="d-flex flex-column">
                    <!--begin::Logo-->
                    <a href="/" class="mb-7" style="display: inline-block; text-align: center;">
                        <img alt="Logo" src="recursos/logo/mdpyep-horizontal.png" height="200" width="700"
                            style="border: 5px solid #ccc; padding: 10px; box-shadow: 3px 3px 5px #888888; border-radius: 10px;" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Title-->
                    <h2 class="text-white fw-bold text-center mt-5"
                        style="font-size: 24px; background-color: transparent; padding: 10px; border-radius: 10px; box-shadow: 0px 0px 10px 5px rgba(0, 123, 255, 0.7);">
                        ¡Bienvenida al Sistema de Soporte!</h2>
                    <!--end::Title-->
                </div>
                <!--begin::Aside-->
            </div>
            <!--begin::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-center w-lg-50 p-10">
                <!--begin::Card-->
                <div class="card rounded-3 w-md-550px">
                    <!--begin::Card body-->
                    <div class="card-body p-10 p-lg-20">
                        <!--begin::Form-->
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form"
                             action="/datoLogin" method="POST">
                            <!--begin::Heading-->
                            <div class="text-center mb-11">
                                <!--begin::Title-->
                                <h1 class="text-dark fw-bolder mb-3">Bienvenida</h1>
                                <!--end::Title-->
                                <!--begin::Subtitle-->
                                <div class="text-gray-500 fw-semibold fs-6">Sistema de soporte </div>
                                <!--end::Subtitle=-->
                            </div>
                            <!--begin::Heading-->
                            <!--begin::Login options-->
                            <div class="row g-3 mb-9">
                                <!--begin::Col-->
                                <div class="col-md-6">
                                    <!--begin::Google link=-->
                                    <a href="/"
                                        class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                        <img class="h-15px me-3" />Invitado</a>
                                    <!--end::Google link=-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6">
                                    <!--begin::Google link=-->
                                    <a href="#"
                                        class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                        <img class="theme-dark-show h-15px me-3" />Ingreso por Codice</a>
                                    <!--end::Google link=-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Login options-->
                            <!--begin::Separator-->
                            <div class="separator separator-content my-14">
                                <span class="w-125px text-gray-500 fw-semibold fs-7">Ingrese credenciales </span>
                            </div>
                            <!--end::Separator-->
                            <!--begin::Input group=-->
                            <div class="fv-row mb-8">
                                <!--begin::Email-->
                                <label class="label-custom">
                                    Correo Electronico
                                </label>
                                <input type="text" placeholder="Correo Electronico" name="usuario" autocomplete="off"
                                    class="form-control bg-transparent" />
                                <!--end::Email-->
                            </div>
                            <!--end::Input group=-->
                            <div class="fv-row mb-3">
                                <label class="label-custom">
                                    Password
                                </label>
                                <!--begin::Password-->
                               <div class="input-group">
        <input type="password" placeholder="Password" name="password" id="password" autocomplete="off"
            class="form-control bg-transparent" />
       
            <span class="input-group-text" id="toggle-password">
                <i class="fa fa-eye-slash" aria-hidden="true"></i>
            </span>
    
    </div>
                                  
                                <!--end::Password-->
                            </div>
                            <!--end::Input group=-->

                            <!--begin::Submit button-->
                            <div class="d-grid mb-10">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                    <!--begin::Indicator label-->
                                    <span class="indicator-label">Ingresar</span>
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->
                                    <span class="indicator-progress">Procesando.....
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    <!--end::Indicator progress-->
                                </button>
                            </div>
                            <!--end::Submit button-->
                            <!--begin::Sign up-->
                            <div class="text-gray-500 text-center fw-semibold fs-6">Tienes Problemas ?
                                <a href="#" class="link-primary">Te ayudamos ?</a>
                            </div>
                            <!--end::Sign up-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <script>var hostUrl = "assets/";</script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>

    <script type="text/javascript">
    /*********************************************************
     * Mensaje dependiendo de las credenciales son correctas
     *********************************************************/
    
    let mensaje = '<?php echo $mensaje ?>';

    if (mensaje == '0') {
        Swal.fire(':(', 'Verifique sus datos Por favor', 'error');
    } 
    /*********************************************************
     * validacion de los campos y manejo de erros
     *********************************************************/
    

    document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        const usuarioInput = form.querySelector('input[name="usuario"]');
        const passwordInput = form.querySelector('input[name="password"]');
        
        if (!usuarioInput.value || !passwordInput.value) {
            event.preventDefault(); // Evitar el envío del formulario

            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Debe llenar todos los campos. Por favor, llénelos correctamente.',
            });
        } else if (!isValidEmail(usuarioInput.value)) {
            event.preventDefault(); // Evitar el envío del formulario

            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'El correo electrónico no es válido. Por favor, ingrese un correo electrónico válido Ej: ejemplo@gmail.com . ',
            });
        }
    });

    // Función para validar un correo electrónico
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
});

/********************************************************
 *  funcion de ver la contrasela con el ojito
 *********************************************************/


document.addEventListener('DOMContentLoaded', function () {
    const passwordField = document.getElementById('password');
    const togglePassword = document.getElementById('toggle-password');

    togglePassword.addEventListener('click', function () {
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            togglePassword.innerHTML = '<i class="fa fa-eye" aria-hidden="true"></i>';
            
            // Después de 2 segundos, volver a ocultar la contraseña
            setTimeout(function () {
                passwordField.type = 'password';
                togglePassword.innerHTML = '<i class="fa fa-eye-slash" aria-hidden="true"></i>';
            }, 1000); // 2000 milisegundos = 2 segundos
        } else {
            passwordField.type = 'password';
            togglePassword.innerHTML = '<i class="fa fa-eye-slash" aria-hidden="true"></i>';
        }
    });
});


</script>

    <!--end::Global Javascript Bundle-->
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>