<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="es">
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
    <!--begin::Vendor Stylesheets(used by this page)-->
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />

    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!-- Incluye Dropzone.js desde un CDN -->

    <style>
       /* Estilo para el encabezado de la tabla */
th {
    background-color: #3498db; /* Color de fondo para el encabezado */
    color: #fff; /* Color de texto para el encabezado */
    padding: 10px; /* Espaciado interior del encabezado */
    text-align: center; /* Alineación del texto en el encabezado */
    border: 1px solid #ccc; /* Borde alrededor del encabezado */
}

/* Estilo para las celdas de la columna 'entidad' */
td:nth-child(2) {
    font-weight: bold; /* Texto en negrita */
}

/* Estilo para las celdas de la columna 'nombres' */
td:nth-child(3) {
    color: #3498db; /* Color de texto azul */
    font-weight: bold; /* Texto en negrita */
}

/* Estilo para las celdas de la columna 'oficina' */
td:nth-child(4) {
    text-align: center; /* Alineación del texto en el centro */
}

/* Estilo para las celdas de la columna 'descripcion_problema' */
td:nth-child(5) {
    text-transform: uppercase; /* Texto en mayúsculas */
}

/* Estilo para las celdas de la columna 'respuesta' */
td:nth-child(6) {
    font-style: italic; /* Texto en cursiva */
    color: #27ae60; /* Color de texto verde */
}

   
    </style>


</head>
<!--end::Head-->
<!--begin::Body-->

<body data-kt-name="metronic" id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
    <!--begin::Theme mode setup on page load-->
    <script>
        if (document.documentElement) {
            const defaultThemeMode = "system";
            const name = document.body.getAttribute("data-kt-name");
            let themeMode = localStorage.getItem("kt_" + (name !== null ? name + "_" : "") + "theme_mode_value");
            if (themeMode === null) {
                if (defaultThemeMode === "system") {
                    themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            document.documentElement.setAttribute("data-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-column flex-column-fluid">
            <!--begin::Header-->
            <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
                data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                <!--begin::Container-->
                <div class="header-top-container container-xxl sabi d-flex flex-grow-1 flex-stack">
                    <!--begin::Header Logo-->
                    <div class="d-flex align-items-center me-5">
                        <!--begin::Heaeder menu toggle-->
                        <div class="d-lg-none btn btn-icon btn-active-color-300 w-30px h-30px me-2"
                            id="kt_header_menu_toggle">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                        fill="currentColor" />
                                    <path opacity="0.3"
                                        d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Heaeder menu toggle-->
                        <!--begin::Logo-->
                        <a href="/NuevaSolicitud">
                            <!--begin::Desktop modes-->
                            <img alt="Logo" src="recursos/logo/mdpyep-horizontal02.png"
                                class="d-none d-lg-inline-block h-100px" />
                            <!--end::Desktop modes-->
                            <!--begin::Table & mobile modes-->
                            <img alt="Logo" src="recursos/logo/logo2.png" class="d-lg-none h-25px" />
                            <!--end::Table & mobile modes-->
                        </a>
                        <!--end::Logo-->
                    </div>
                    <!--end::Header Logo-->
                    <!--begin::Toolbar wrapper-->
                    <div class="topbar d-flex align-items-stretch flex-shrink-0" id="kt_topbar">
                      
                        <!--begin::Quick links-->
                        <div class="d-flex align-items-center ms-2 ms-lg-3">
                            <!--begin::Menu wrapper-->
                            <div class="btn btn-icon btn-custom w-30px h-30px w-md-40px h-md-40px"
                                data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                        <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                            fill="currentColor" />
                                        <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                            fill="currentColor" />
                                        <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px"
                                data-kt-menu="true">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10"
                                    style="background-image:url('assets/media/misc/pattern-1.jpg')">
                                    <!--begin::Title-->
                                    <h3 class="text-white fw-semibold mb-3">Quick Links</h3>
                                    <!--end::Title-->
                                    <!--begin::Status-->
                                    <span class="badge bg-primary py-2 px-3">25 pending tasks</span>
                                    <!--end::Status-->
                                </div>
                                <!--end::Heading-->
                                <!--begin:Nav-->
                                <div class="row g-0">
                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="../../demo19/dist/apps/projects/budget.html"
                                            class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
                                            <!--begin::Svg Icon | path: icons/duotune/finance/fin009.svg-->
                                            <span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M15.8 11.4H6C5.4 11.4 5 11 5 10.4C5 9.80002 5.4 9.40002 6 9.40002H15.8C16.4 9.40002 16.8 9.80002 16.8 10.4C16.8 11 16.3 11.4 15.8 11.4ZM15.7 13.7999C15.7 13.1999 15.3 12.7999 14.7 12.7999H6C5.4 12.7999 5 13.1999 5 13.7999C5 14.3999 5.4 14.7999 6 14.7999H14.8C15.3 14.7999 15.7 14.2999 15.7 13.7999Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M18.8 15.5C18.9 15.7 19 15.9 19.1 16.1C19.2 16.7 18.7 17.2 18.4 17.6C17.9 18.1 17.3 18.4999 16.6 18.7999C15.9 19.0999 15 19.2999 14.1 19.2999C13.4 19.2999 12.7 19.2 12.1 19.1C11.5 19 11 18.7 10.5 18.5C10 18.2 9.60001 17.7999 9.20001 17.2999C8.80001 16.8999 8.49999 16.3999 8.29999 15.7999C8.09999 15.1999 7.80001 14.7 7.70001 14.1C7.60001 13.5 7.5 12.8 7.5 12.2C7.5 11.1 7.7 10.1 8 9.19995C8.3 8.29995 8.79999 7.60002 9.39999 6.90002C9.99999 6.30002 10.7 5.8 11.5 5.5C12.3 5.2 13.2 5 14.1 5C15.2 5 16.2 5.19995 17.1 5.69995C17.8 6.09995 18.7 6.6 18.8 7.5C18.8 7.9 18.6 8.29998 18.3 8.59998C18.2 8.69998 18.1 8.69993 18 8.79993C17.7 8.89993 17.4 8.79995 17.2 8.69995C16.7 8.49995 16.5 7.99995 16 7.69995C15.5 7.39995 14.9 7.19995 14.2 7.19995C13.1 7.19995 12.1 7.6 11.5 8.5C10.9 9.4 10.5 10.6 10.5 12.2C10.5 13.3 10.7 14.2 11 14.9C11.3 15.6 11.7 16.1 12.3 16.5C12.9 16.9 13.5 17 14.2 17C15 17 15.7 16.8 16.2 16.4C16.8 16 17.2 15.2 17.9 15.1C18 15 18.5 15.2 18.8 15.5Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <span class="fs-5 fw-semibold text-gray-800 mb-0">Accounting</span>
                                            <span class="fs-7 text-gray-400">eCommerce</span>
                                        </a>
                                    </div>
                                    <!--end:Item-->
                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="../../demo19/dist/apps/projects/settings.html"
                                            class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                            <span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                        fill="currentColor" />
                                                    <path opacity="0.3"
                                                        d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <span class="fs-5 fw-semibold text-gray-800 mb-0">Administration</span>
                                            <span class="fs-7 text-gray-400">Console</span>
                                        </a>
                                    </div>
                                    <!--end:Item-->
                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="../../demo19/dist/apps/projects/list.html"
                                            class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
                                            <span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z"
                                                        fill="currentColor" />
                                                    <path opacity="0.3"
                                                        d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <span class="fs-5 fw-semibold text-gray-800 mb-0">Projects</span>
                                            <span class="fs-7 text-gray-400">Pending Tasks</span>
                                        </a>
                                    </div>
                                    <!--end:Item-->
                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="../../demo19/dist/apps/projects/users.html"
                                            class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
                                            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                            <span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <span class="fs-5 fw-semibold text-gray-800 mb-0">Customers</span>
                                            <span class="fs-7 text-gray-400">Latest cases</span>
                                        </a>
                                    </div>
                                    <!--end:Item-->
                                </div>
                                <!--end:Nav-->
                                <!--begin::View more-->
                                <div class="py-2 text-center border-top">
                                    <a href="../../demo19/dist/pages/user-profile/activity.html"
                                        class="btn btn-color-gray-600 btn-active-color-primary">View All
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                        <span class="svg-icon svg-icon-5">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                    transform="rotate(-180 18 13)" fill="currentColor" />
                                                <path
                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                </div>
                                <!--end::View more-->
                            </div>
                            <!--end::Menu-->
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Quick links-->
                        <!--begin::Theme mode-->
                        <div class="d-flex align-items-center ms-2 ms-lg-3">
                            <!--begin::Menu toggle-->
                            <a href="#" class="btn btn-icon btn-custom w-30px h-30px w-md-40px h-md-40px"
                                data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
                                <span class="svg-icon theme-light-show svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z"
                                            fill="currentColor" />
                                        <path
                                            d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z"
                                            fill="currentColor" />
                                        <path
                                            d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z"
                                            fill="currentColor" />
                                        <path
                                            d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z"
                                            fill="currentColor" />
                                        <path
                                            d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z"
                                            fill="currentColor" />
                                        <path
                                            d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z"
                                            fill="currentColor" />
                                        <path
                                            d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z"
                                            fill="currentColor" />
                                        <path
                                            d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z"
                                            fill="currentColor" />
                                        <path
                                            d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
                                <span class="svg-icon theme-dark-show svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z"
                                            fill="currentColor" />
                                        <path
                                            d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z"
                                            fill="currentColor" />
                                        <path
                                            d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z"
                                            fill="currentColor" />
                                        <path
                                            d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                            <!--begin::Menu toggle-->
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-muted menu-active-bg menu-state-primary fw-semibold py-4 fs-base w-175px"
                                data-kt-menu="true" data-kt-element="theme-mode-menu">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                        data-kt-value="light">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Light</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Dark</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                        data-kt-value="system">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen062.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M1.34375 3.9463V15.2178C1.34375 16.119 2.08105 16.8563 2.98219 16.8563H8.65093V19.4594H6.15702C5.38853 19.4594 4.75981 19.9617 4.75981 20.5757V21.6921H19.2403V20.5757C19.2403 19.9617 18.6116 19.4594 17.8431 19.4594H15.3492V16.8563H21.0179C21.919 16.8563 22.6562 16.119 22.6562 15.2178V3.9463C22.6562 3.04516 21.9189 2.30786 21.0179 2.30786H2.98219C2.08105 2.30786 1.34375 3.04516 1.34375 3.9463ZM12.9034 9.9016C13.241 9.98792 13.5597 10.1216 13.852 10.2949L15.0393 9.4353L15.9893 10.3853L15.1297 11.5727C15.303 11.865 15.4366 12.1837 15.523 12.5212L16.97 12.7528V13.4089H13.9851C13.9766 12.3198 13.0912 11.4394 12 11.4394C10.9089 11.4394 10.0235 12.3198 10.015 13.4089H7.03006V12.7528L8.47712 12.5211C8.56345 12.1836 8.69703 11.8649 8.87037 11.5727L8.0107 10.3853L8.96078 9.4353L10.148 10.2949C10.4404 10.1215 10.759 9.98788 11.0966 9.9016L11.3282 8.45467H12.6718L12.9034 9.9016ZM16.1353 7.93758C15.6779 7.93758 15.3071 7.56681 15.3071 7.1094C15.3071 6.652 15.6779 6.28122 16.1353 6.28122C16.5926 6.28122 16.9634 6.652 16.9634 7.1094C16.9634 7.56681 16.5926 7.93758 16.1353 7.93758ZM2.71385 14.0964V3.90518C2.71385 3.78023 2.81612 3.67796 2.94107 3.67796H21.0589C21.1839 3.67796 21.2861 3.78023 21.2861 3.90518V14.0964C15.0954 14.0964 8.90462 14.0964 2.71385 14.0964Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">System</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Theme mode-->
                        <!--begin::User-->
                        <div class="d-flex align-items-center ms-2 ms-lg-3" id="kt_header_user_menu_toggle">
                            <!--begin::Menu wrapper-->
                            <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click"
                                data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                <img src="assets/media/avatars/300-1.jpg" alt="user" />
                            </div>
                            <!--begin::User account menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-semibold py-4 fs-6 w-275px"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content d-flex align-items-center px-3">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px me-5">
                                            <img alt="Logo" src="assets/media/avatars/300-1.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Username-->
                                        <div class="d-flex flex-column">
                                            <div class="fw-bold d-flex align-items-center fs-5"><?= session()->get('funcionario') ?>
                                                <span
                                                    class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2"><?= session()->get('type') ?></span>
                                            </div>
                                            <a href="#"
                                                class="fw-semibold text-muted text-hover-primary fs-7"><?= session()->get('usuario') ?></a>
                                        </div>
                                        <!--end::Username-->
                                    </div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="#" class="menu-link px-5">Mi perfil</a>
                                </div>
                                
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="left-start">
                                    <a href="#" class="menu-link px-5">
                                        <span class="menu-title position-relative">Language
                                            <span
                                                class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
                                                <img class="w-15px h-15px rounded-1 ms-2"
                                                    src="assets/media/flags/united-states.svg" alt="" /></span></span>
                                    </a>
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo19/dist/account/settings.html"
                                                class="menu-link d-flex px-5 active">
                                                <span class="symbol symbol-20px me-4">
                                                    <img class="rounded-1" src="assets/media/flags/united-states.svg"
                                                        alt="" />
                                                </span>English</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo19/dist/account/settings.html"
                                                class="menu-link d-flex px-5">
                                                <span class="symbol symbol-20px me-4">
                                                    <img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
                                                </span>Spanish</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo19/dist/account/settings.html"
                                                class="menu-link d-flex px-5">
                                                <span class="symbol symbol-20px me-4">
                                                    <img class="rounded-1" src="assets/media/flags/germany.svg"
                                                        alt="" />
                                                </span>German</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo19/dist/account/settings.html"
                                                class="menu-link d-flex px-5">
                                                <span class="symbol symbol-20px me-4">
                                                    <img class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
                                                </span>Japanese</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo19/dist/account/settings.html"
                                                class="menu-link d-flex px-5">
                                                <span class="symbol symbol-20px me-4">
                                                    <img class="rounded-1" src="assets/media/flags/france.svg" alt="" />
                                                </span>French</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                 <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="<?php echo base_url('/salir') ?>"
                                        class="menu-link px-5">Cerrar Sesion</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::User account menu-->
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::User -->
                        <!--begin::Heaeder menu toggle-->
                        <!--end::Heaeder menu toggle-->
                    </div>
                    <!--end::Toolbar wrapper-->
                </div>
                <!--end::Container-->
                <!--begin::Container-->
                <div class="header-menu-container d-flex align-items-stretch flex-stack w-100" id="kt_header_nav">
                    <!--begin::Menu wrapper-->
                    <div class="header-menu container-xxl flex-column align-items-stretch flex-lg-row"
                        data-kt-drawer="true" data-kt-drawer-name="header-menu"
                        data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                        data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
                        data-kt-drawer-toggle="#kt_header_menu_toggle" data-kt-swapper="true"
                        data-kt-swapper-mode="prepend"
                        data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                        <!--begin::Menu-->
                        <div class="menu menu-column menu-lg-row menu-rounded menu-active-bg menu-title-gray-800 menu-state-primary menu-arrow-gray-500 fw-semibold my-5 my-lg-0 align-items-stretch flex-grow-1 px-2 px-lg-0"
                            id="kt_header_menu" data-kt-menu="true">
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="bottom-start"
                                class="menu-item here show menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                <!--begin:Menu link-->
                                <span class="menu-link py-3">
                                    <span class="menu-title">Soporte</span>
                                    <span class="menu-arrow d-lg-none"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
                                    
                                  
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                        data-kt-menu-placement="right-start" class="menu-item here show menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link py-3">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3"
                                                            d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">Solicitudes</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3"
                                                    href="NuevaSolicitud">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Tickes</span>
                                                    <span class="menu-badge">
                                                        <span class="badge badge-light-success">3</span>
                                                    </span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3"
                                                    href="#">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Compose</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3"
                                                    href="#">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">View &amp; Reply</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                        data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link py-3">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3"
                                                            d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                                            fill="currentColor" />
                                                        <rect x="6" y="12" width="7" height="2" rx="1"
                                                            fill="currentColor" />
                                                        <rect x="6" y="7" width="12" height="2" rx="1"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">Chat</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3"
                                                    href="../../demo19/dist/apps/chat/private.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Private Chat</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3" href="../../demo19/dist/apps/chat/group.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Group Chat</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3"
                                                    href="../../demo19/dist/apps/chat/drawer.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Drawer Chat</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="../../demo19/dist/apps/calendar.html">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3"
                                                            d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">Calendar</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="bottom-start"
                                class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                <!--begin:Menu link-->
                                <span class="menu-link py-3">
                                    <span class="menu-title">Ayuda</span>
                                    <span class="menu-arrow d-lg-none"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3"
                                            href="/AyudaUsuario"
                                            title="En este sector encontraras videos que te pueden ayudar"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                            data-bs-placement="right">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3"
                                                            d="M4.05424 15.1982C8.34524 7.76818 13.5782 3.26318 20.9282 2.01418C21.0729 1.98837 21.2216 1.99789 21.3618 2.04193C21.502 2.08597 21.6294 2.16323 21.7333 2.26712C21.8372 2.37101 21.9144 2.49846 21.9585 2.63863C22.0025 2.7788 22.012 2.92754 21.9862 3.07218C20.7372 10.4222 16.2322 15.6552 8.80224 19.9462L4.05424 15.1982ZM3.81924 17.3372L2.63324 20.4482C2.58427 20.5765 2.5735 20.7163 2.6022 20.8507C2.63091 20.9851 2.69788 21.1082 2.79503 21.2054C2.89218 21.3025 3.01536 21.3695 3.14972 21.3982C3.28408 21.4269 3.42387 21.4161 3.55224 21.3672L6.66524 20.1802L3.81924 17.3372ZM16.5002 5.99818C16.2036 5.99818 15.9136 6.08615 15.6669 6.25097C15.4202 6.41579 15.228 6.65006 15.1144 6.92415C15.0009 7.19824 14.9712 7.49984 15.0291 7.79081C15.0869 8.08178 15.2298 8.34906 15.4396 8.55884C15.6494 8.76862 15.9166 8.91148 16.2076 8.96935C16.4986 9.02723 16.8002 8.99753 17.0743 8.884C17.3484 8.77046 17.5826 8.5782 17.7474 8.33153C17.9123 8.08486 18.0002 7.79485 18.0002 7.49818C18.0002 7.10035 17.8422 6.71882 17.5609 6.43752C17.2796 6.15621 16.8981 5.99818 16.5002 5.99818Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M4.05423 15.1982L2.24723 13.3912C2.15505 13.299 2.08547 13.1867 2.04395 13.0632C2.00243 12.9396 1.9901 12.8081 2.00793 12.679C2.02575 12.5498 2.07325 12.4266 2.14669 12.3189C2.22013 12.2112 2.31752 12.1219 2.43123 12.0582L9.15323 8.28918C7.17353 10.3717 5.4607 12.6926 4.05423 15.1982ZM8.80023 19.9442L10.6072 21.7512C10.6994 21.8434 10.8117 21.9129 10.9352 21.9545C11.0588 21.996 11.1903 22.0083 11.3195 21.9905C11.4486 21.9727 11.5718 21.9252 11.6795 21.8517C11.7872 21.7783 11.8765 21.6809 11.9402 21.5672L15.7092 14.8442C13.6269 16.8245 11.3061 18.5377 8.80023 19.9442ZM7.04023 18.1832L12.5832 12.6402C12.7381 12.4759 12.8228 12.2577 12.8195 12.032C12.8161 11.8063 12.725 11.5907 12.5653 11.4311C12.4057 11.2714 12.1901 11.1803 11.9644 11.1769C11.7387 11.1736 11.5205 11.2583 11.3562 11.4132L5.81323 16.9562L7.04023 18.1832Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">Videos</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3"
                                            href="/AyudaDocumentacion"
                                            title="Check out the complete documentation" data-bs-toggle="tooltip"
                                            data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3"
                                                            d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">Documentos</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3"
                                            href="https://preview.keenthemes.com/metronic8/demo19/layout-builder.html"
                                            title="Build your layout and export HTML for server side integration"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                            data-bs-placement="right">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                            fill="currentColor" />
                                                        <path opacity="0.3"
                                                            d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">Layout Builder</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3"
                                            href="../../demo19/dist/documentation/getting-started/changelog.html">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.95 18.9688C16.75 18.9688 16.55 18.8688 16.35 18.7688C15.85 18.4688 15.75 17.8688 16.05 17.3688L19.65 11.9688L16.05 6.56876C15.75 6.06876 15.85 5.46873 16.35 5.16873C16.85 4.86873 17.45 4.96878 17.75 5.46878L21.75 11.4688C21.95 11.7688 21.95 12.2688 21.75 12.5688L17.75 18.5688C17.55 18.7688 17.25 18.9688 16.95 18.9688ZM7.55001 18.7688C8.05001 18.4688 8.15 17.8688 7.85 17.3688L4.25001 11.9688L7.85 6.56876C8.15 6.06876 8.05001 5.46873 7.55001 5.16873C7.05001 4.86873 6.45 4.96878 6.15 5.46878L2.15 11.4688C1.95 11.7688 1.95 12.2688 2.15 12.5688L6.15 18.5688C6.35 18.8688 6.65 18.9688 6.95 18.9688C7.15 18.9688 7.35001 18.8688 7.55001 18.7688Z"
                                                            fill="currentColor" />
                                                        <path opacity="0.3"
                                                            d="M10.45 18.9687C10.35 18.9687 10.25 18.9687 10.25 18.9687C9.75 18.8687 9.35 18.2688 9.55 17.7688L12.55 5.76878C12.65 5.26878 13.25 4.8687 13.75 5.0687C14.25 5.1687 14.65 5.76878 14.45 6.26878L11.45 18.2688C11.35 18.6688 10.85 18.9687 10.45 18.9687Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">Changelog v8.1.0</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Menu wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid container-xxl" id="kt_wrapper">
                <!--begin::Toolbar-->
                <div class="toolbar d-flex flex-stack flex-wrap py-4 gap-2" id="kt_toolbar">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column align-items-start me-3 gap-1">
                        <!--begin::Title-->
                        <h1 class="d-flex text-dark fw-bold m-0 fs-3">Sistema de soporte</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-gray-600">
                                <a href="../../demo19/dist/index.html" class="text-gray-600 text-hover-primary">Usuarios</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-gray-600">Soporte</li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-gray-600">Solicitades</li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-gray-500">Lista de tickes</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center py-1">
                        <!--begin::Daterange-->

                        <span class="me-2">
                                <span class="text-gray-600 fw-semibold me-1">
                                    Calendario
                                </span>
                            </span>
                        <a  class="btn btn-sm btn-flex btn-light px-5 me-2" id="kt_dashboard_daterangepicker"
                            data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-trigger="hover"
                            title="Select dashboard daterange">
                            
                            <span class="me-2">
                                <span class="text-gray-600 fw-semibold me-1"
                                    id="kt_dashboard_daterangepicker_title">Hoy</span>
                                <span class="text-info fw-bold" id="kt_dashboard_daterangepicker_date"></span>
                            </span>
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-4 m-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                        <!--end::Daterange-->
                        <!--begin::Button-->
                        <a href="#" class="btn btn-sm btn-info" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_create_app">Realizar Solicitud</a>
                        <!--end::Button-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar-->
               
                <!--begin::Main-->
                <div class="d-flex flex-row flex-column-fluid align-items-stretch">
                    
                    <!--begin::Content-->

                    <div class="content flex-row-fluid" id="kt_content">
                    <div class="card">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title" style="text-align: center; background-color: transparent; padding: 10px;">
                                        <h2 style="font-size: 24px; color: brown;">Bienvenido al sistema de soporte</h2>
                                    </div>
                                
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias vitae consequatur neque pariatur modi hic nulla ut nihil, quidem ratione voluptate repudiandae deleniti, sequi reiciendis error similique impedit architecto quas.</p>
                          
                    </div>
                    </div>
                    <br>
                        <h2>Lista de Tickets solicitados</h2>
                        <!--begin::Card-->
                        <div class="card">
                            <!--begin::Card header-->
                            
                            <div class="card-header border-0 pt-6">
                              
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                                    rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                                <path
                                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <input id="search-input" type="text" data-kt-user-table-filter="search"
                                            class="form-control form-control-solid w-250px ps-14"
                                            placeholder="Buscar Solicitud" />
                                    </div>
                                    <!--end::Search-->
                                </div>
                                <!--begin::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                        <!--begin::Filter-->
                                      
                                     
                                        <!--end::Filter-->
                                        <!--begin::Export-->
                                        <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_export_users">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1"
                                                        transform="rotate(90 12.75 4.25)" fill="currentColor" />
                                                    <path
                                                        d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z"
                                                        fill="currentColor" />
                                                    <path opacity="0.3"
                                                        d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->Exportar
                                        </button>
                                        <!--end::Export-->
                                        <!--begin::Add user-->
                                    
                                        <!--end::Add user-->
                                    </div>
                                    <!--end::Toolbar-->
                                    <!--begin::Group actions-->
                                    <div class="d-flex justify-content-end align-items-center d-none"
                                        data-kt-user-table-toolbar="selected">
                                        <div class="fw-bold me-5">
                                            <span class="me-2"
                                                data-kt-user-table-select="selected_count"></span>Selected
                                        </div>
                                        <button type="button" class="btn btn-danger"
                                            data-kt-user-table-select="delete_selected">Delete Selected</button>
                                    </div>
                                    <!--end::Group actions-->
                                    <!--begin::Modal - Adjust Balance-->
                                    <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                                        <!--begin::Modal dialog-->
                                        <div class="modal-dialog modal-dialog-centered mw-650px">
                                            <!--begin::Modal content-->
                                            <div class="modal-content">
                                                <!--begin::Modal header-->
                                                <div class="modal-header">
                                                    <!--begin::Modal title-->
                                                    <h2 class="fw-bold">Export Users</h2>
                                                    <!--end::Modal title-->
                                                    <!--begin::Close-->
                                                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                        data-kt-users-modal-action="close">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                                    height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                                                    fill="currentColor" />
                                                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                    transform="rotate(45 7.41422 6)"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Close-->
                                                </div>
                                                <!--end::Modal header-->
                                                <!--begin::Modal body-->
                                                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                                    <!--begin::Form-->
                                                    <form id="kt_modal_export_users_form" class="form" action="#">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-10">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-semibold form-label mb-2">Select
                                                                Roles:</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <select name="role" data-control="select2"
                                                                data-placeholder="Select a role" data-hide-search="true"
                                                                class="form-select form-select-solid fw-bold">
                                                                <option></option>
                                                                <option value="Administrator">Administrator</option>
                                                                <option value="Analyst">Analyst</option>
                                                                <option value="Developer">Developer</option>
                                                                <option value="Support">Support</option>
                                                                <option value="Trial">Trial</option>
                                                            </select>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-10">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="required fs-6 fw-semibold form-label mb-2">Select
                                                                Export Format:</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <select name="format" data-control="select2"
                                                                data-placeholder="Select a format"
                                                                data-hide-search="true"
                                                                class="form-select form-select-solid fw-bold">
                                                                <option></option>
                                                                <option value="excel">Excel</option>
                                                                <option value="pdf">PDF</option>
                                                                <option value="cvs">CVS</option>
                                                                <option value="zip">ZIP</option>
                                                            </select>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Actions-->
                                                        <div class="text-center">
                                                            <button type="reset" class="btn btn-light me-3"
                                                                data-kt-users-modal-action="cancel">Discard</button>
                                                            <button type="submit" class="btn btn-primary"
                                                                data-kt-users-modal-action="submit">
                                                                <span class="indicator-label">Submit</span>
                                                                <span class="indicator-progress">Please wait...
                                                                    <span
                                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                            </button>
                                                        </div>
                                                        <!--end::Actions-->
                                                    </form>
                                                    <!--end::Form-->
                                                </div>
                                                <!--end::Modal body-->
                                            </div>
                                            <!--end::Modal content-->
                                        </div>
                                        <!--end::Modal dialog-->
                                    </div>
                                    <!--end::Modal - New Card-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body py-4">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_use">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                        <th class="w-10px pe-2">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_datatable_deposito .form-check-input" value="1" />
                                            </div>
                                        </th>
                                            <th class="min-w-125px">Funcioario</th>
                                            <th class="min-w-125px">Entidad</th>
                                            <th class="min-w-125px">Oficina</th>
                                            <th class="min-w-125px">Fecha </th>
                                            <th class="min-w-125px">Descripcion</th>
                                            <th class="min-w-125px">Respuestas</th>
                                            <th class="min-w-125px">Imagenen</th>

                                            <th class="text-end min-w-100px">Actions</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="text-gray-600 fw-semibold">



                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Main-->
                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-column flex-md-row align-items-center justify-content-between"
                    id="kt_footer">
                    <!--begin::Copyright-->
                    <div class="order-2 order-md-1">
                    <p>&copy; 2022 Ministerio de Desarrollo Productivo y Economía Plural (MPDyEP) - Todos los derechos reservados.</p>
                    
                   
</div>

                    <!--end::Copyright-->
                    <!--begin::Menu-->
                    <ul class="menu menu-white menu-hover-primary fw-semibold order-1 opacity-75">
                  
                    <p><a href="https://produccion.gob.bo/" target="_blank" style="text-decoration: none; color: #3498db; font-weight: bold; font-size: 18px;"><i class="fas fa-globe" style="color: black; font-size: 24px;"></i> MPDyEP</a></p>

                    </ul>
                    <!--end::Menu-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::Drawers-->
    
 
    <!--begin::Modal - Create App-->
    <div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Crear Item</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-lg-10 px-lg-10">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                        id="kt_modal_create_app_stepper">
                        <!--begin::Aside-->
                        <div
                            class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                            <!--begin::Nav-->
                            <div class="stepper-nav ps-lg-10">
                                <!--begin::Step 1-->
                                <div class="stepper-item current" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">1</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">Informacion</h3>
                                            <div class="stepper-desc">Ingresar informacion de la persona solicitante
                                            </div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">2</span>
                                        </div>
                                        <!--begin::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">Clasificacion y Categoria</h3>
                                            <div class="stepper-desc">Seleccione la claficacion de problema</div>
                                        </div>
                                        <!--begin::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">3</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">Prioridad y Descripcion</h3>
                                            <div class="stepper-desc">Dar una descripcion corta del problema</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">4</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">Imagenes</h3>
                                            <div class="stepper-desc">Subir imagenes si es necesario</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">5</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">Completado</h3>
                                            <div class="stepper-desc">Se envio la Solicitud</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Step 5-->
                            </div>
                            <!--end::Nav-->
                        </div>
                        <!--begin::Aside-->
                        <!--begin::Content-->
                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                            <!--begin::Form-->
                            <form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
                                <!--begin::Step 1-->
                                <div class="current" data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->

                                            <input type="hidden" class="form-control form-control-lg form-control-solid"
                                                name="id" id="id"
                                                placeholder="Nombre de funcionario" value="<?= session()->get('id') ?>" />

                                                <input type="hidden" class="form-control form-control-lg form-control-solid"
                                                name="id_entidad" id="id_entidad"
                                                placeholder="Nombre de funcionario" value="<?= session()->get('id_entidad') ?>" />

                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Cargo</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Cargo del funcionario"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="codigo" id="codigo" placeholder="Ingrese codigo"  value="<?= session()->get('cargo') ?> "disabled />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Nombre Funcionario</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Ingrese el nombre de funcionario de la solitud"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="funcionario" id="funcionario"
                                                placeholder="Nombre de funcionario" value="<?= session()->get('funcionario') ?>" disabled  />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Entidad </span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Ingrese la entidad que pertenece"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->

                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="entidad" id="entidad"
                                                placeholder="Nombre de funcionario" value="<?= session()->get('entidad') ?>" disabled  />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Oficina</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="dar la informacion de su ofcina para conectarlos"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="oficina" id="oficina" placeholder="Ingresar oficina" value="<?= session()->get('oficina') ?>"  oninput="validarLetrasYNumeros(this)"/>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Dependencia</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Dependencia de donde es su unidad"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="dependencia" id="dependencia"
                                                placeholder="Ingresar dependencia donde pertenece"  value="<?= session()->get('dependencia') ?>" disabled/>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                                <span class="required">Seleccione las opciones</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Seleccione las opciones que son adecuadas para la peticion"></i>
                                            </label>
                                            <!--end::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                                <span class="required">Categorias y Clasificacion</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Dar la clasificacion y categoria"></i>
                                            </label>
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-warning">
                                                            <i class="fas fa-desktop text-primary fs-2x"></i>
                                                        </span>
                                                    </span>
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">HARDWARE Y PERIFERICOS</span>

                                                        <span class="fs-7 text-muted">Equipos fisicos<i
                                                                class="fas fa-exclamation-circle ms-2 fs-7"
                                                                data-bs-toggle="tooltip"
                                                                title="Son todos los equipos que pueden ser persibidos con el sentido del tacto como ej:Monitos,PC,Impresora y etc..."></i></span>
                                                    </span>
                                                </span>
                                                <input type="radio" checked="checked" name="categoria" id="radioHardware" value="1">

                                                    <select id="hardware" class="form-select" name="hardware">
                                                        <option value="" selected>Seleccione</option>
                                                        <?php foreach ($datosCategoria as $dato): ?>
                                                                            <?php if ($dato->idClasificacion == 1): ?>
                                                                                                <option value="<?php echo $dato->idCategoria; ?>">
                                                                                                    <?php echo $dato->nomCat; ?>
                                                                                                </option>
                                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </select>
                                               
                                            </label>
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-warning">
                                                            <i class="fas fa-phone text-primary fs-2x"></i>
                                                        </span>
                                                    </span>
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">TELEFONIA</span>
                                                        <span class="fs-7 text-muted">Sistemas de comunicacion <i
                                                                class="fas fa-exclamation-circle ms-2 fs-7"
                                                                data-bs-toggle="tooltip"
                                                                title="Son todos los sistemas de comunicacion telefonica como ser: Telefonos,Correo y etc..."></i></span>
                                                    </span>
                                                </span>
                                                <input type="radio" name="categoria" id="radioTelefonia" value="2">
                                                <select id="telefonia" class="form-select" name="telefonia">
                                                        <option value="" selected>Seleccione</option>
                                                        <?php foreach ($datosCategoria as $dato): ?>
                                                                            <?php if ($dato->idClasificacion == 2): ?>
                                                                                                <option value="<?php echo $dato->idCategoria; ?>">
                                                                                                    <?php echo $dato->nomCat; ?>
                                                                                                </option>
                                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </select>

                                                
                                            </label>
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-warning">
                                                            <i class="fas fa-network-wired text-primary fs-2x"></i>
                                                        </span>
                                                    </span>
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">SOFTWARE Y RED</span>
                                                        <span class="fs-7 text-muted">Sistemas o internet<i
                                                                class="fas fa-exclamation-circle ms-2 fs-7"
                                                                data-bs-toggle="tooltip"
                                                                title="Son problemas que no son persibidos con el sentido del tacto como ej: Sistemas del funcionamiento de la computadora, sitios web, falta de internet en la computadora y etc..."></i></span>
                                                    </span>
                                                </span>
                                                <input type="radio" name="categoria" id="radioSoftware" value="3">
                                              
                                                <select id="software" class="form-select" name="software">
                                                        <option value="" selected>Seleccione</option>
                                                        <?php foreach ($datosCategoria as $dato): ?>
                                                                            <?php if ($dato->idClasificacion == 3): ?>
                                                                                                <option value="<?php echo $dato->idCategoria; ?>">
                                                                                                    <?php echo $dato->nomCat; ?>
                                                                                                </option>
                                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </select>
                                               
                                            </label>
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-warning">
                                                            <i class="fas fa-bolt text-primary fs-2x"></i>
                                                        </span>
                                                    </span>
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">OTROS</span>
                                                        <span class="fs-7 text-muted">Otras opciones a para elegir <i
                                                                class="fas fa-exclamation-circle ms-2 fs-7"
                                                                data-bs-toggle="tooltip"
                                                                title="Si no encuentra ninguna opcion que se adecue a su situacion puede ver en esta lista "></i></span>
                                                    </span>
                                                </span>
                                                <input type="radio" name="categoria" id="radioOtros" value="4">
                                              
                                                <select id="otros" class="form-select" name="otros">
                                                        <option value="" selected>Seleccione</option>
                                                        <?php foreach ($datosCategoria as $dato): ?>
                                                                            <?php if ($dato->idClasificacion == 4): ?>
                                                                                                <option value="<?php echo $dato->idCategoria; ?>">
                                                                                                    <?php echo $dato->nomCat; ?>
                                                                                                </option>
                                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </select>

                                            </label>


                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                                <span class="required">Seleccione la prioridad</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Seleccione la prioridad de la solictud con prudencia y adecuadamente "></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin::Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin::Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-danger">
                                                            <i
                                                                class="fas fa-exclamation-triangle text-success fs-2x"></i>
                                                        </span>
                                                    </span>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">Alta</span>
                                                        <span class="fs-7 text-muted">Esta es la prioridad alta de la
                                                            solicitud</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </span>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" id="alta"
                                                        name="prioridad" checked="checked" value="alta" />
                                                </span>
                                                <!--end::Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin::Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin::Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-warning">
                                                            <i class="fas fa-star-half-alt text-danger fs-2x"></i>
                                                        </span>
                                                    </span>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">Media</span>
                                                        <span class="fs-7 text-muted">Esta prioridad media de la
                                                            solicitud</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </span>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" id="media"
                                                        name="prioridad" value="media" />
                                                </span>
                                                <!--end::Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer">
                                                <!--begin::Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin::Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-success">
                                                            <i class="far fa-flag text-warning fs-2x"></i>
                                                        </span>
                                                    </span>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">Baja</span>
                                                        <span class="fs-7 text-muted">Esta prioridad baja de la
                                                            solicitud</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </span>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" id="baja"
                                                        name="prioridad" value="baja" />
                                                </span>
                                                <!--end::Input-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                                <span class="required">Descripción</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Ingrese la descripción del problema"></i>
                                            </label>
                                            <!--end::Label-->
                                            <textarea id="descripcion" name="descripcion" class="form-control"
                                                style="resize: vertical; height: 150px;"
                                                placeholder="Ingrese una descripción"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">

                                            <h1>Cargar Imágenes con Dropzone sin Formulario</h1>
                                            <div class="form-group mt-2">
                                                <label>GALERIA DE FOTOS <span class="text-primary">(*)</span></label>
                                                <div class="dropzone mb-1"
                                                    style="background: transparent; border: 5px dashed blue;">
                                                    <div class="dz-message"
                                                        style="background-color: transparent; color: blue;">
                                                        <i class="fas fa-upload fa-2x"></i>
                                                        <label>Arrastre o suelte tus imágenes aquí, Recomendado: 500px *
                                                            500px, tamaño máximo <b>1 MB</b></label>
                                                    </div>
                                                </div>

                                                <!-- Campo oculto para almacenar el JSON generado -->
                                                <input type="hidden" name="gallery-product" value="" />

                                                <!-- Campo oculto para almacenar datos de la galería existente -->
                                                <input type="hidden" name="gallery-product-old"
                                                    value='[{"file":"ruta-imagen-1.jpg","type":"image/jpeg","width":500,"height":500},{"file":"ruta-imagen-2.jpg","type":"image/jpeg","width":500,"height":500}]' />

                                                <!-- Campo oculto para almacenar datos de imágenes eliminadas -->
                                                <input type="hidden" name="delete-gallery-product" value="[]" />



                                            </div>
                                        </div>


                                        <div class="d-flex flex-stack">
                                            <!--begin::Label-->
                                            <div class="me-5">
                                                <label class="fs-6 fw-semibold form-label">La informacion es
                                                    veridica?</label>
                                                <div class="fs-7 fw-semibold text-muted">Por favor tique la opcion para
                                                    realizar el envio de la solicitud con la verificacion de que los
                                                    datos son reales y veridicos</div>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="0" id="verificacion" onchange="validarCampos()" />
                                                        <span class="form-check-label fw-semibold text-muted">Confirme</span>
                                                    </label>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100 text-center">
                                        <!--begin::Heading-->
                                        <h1 class="fw-bold text-primary mb-4">¡Registro de solicitud de soporte exitoso!</h1>
                                            <!--end::Heading-->
                                            <!--begin::Description-->
                                            <div class="text-muted fw-semibold fs-5 mb-5">Hemos recibido tu solicitud de soporte y la estamos procesando. Nuestro equipo de soporte se pondrá en contacto contigo pronto para atender tu solicitud. Gracias por elegir nuestros servicios.</div>
                                            <!--end::Description--> <!--end::Description-->
                                            <!--begin::Illustration-->
                                        <div class="text-center px-4 py-15">
                                            <img src="recursos/imagen/soporte01.png" alt=""
                                                class="mw-100 mh-300px" />
                                        </div>
                                        <!--end::Illustration-->
                                    </div>
                                </div>
                                <!--end::Step 5-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-stack pt-10">
                                    <!--begin::Wrapper-->
                                    <div class="me-2">
                                        <button type="button" id="backBtn"class="btn btn-lg btn-light-primary me-3"
                                            data-kt-stepper-action="previous">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                            <span class="svg-icon svg-icon-3 me-1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->Atras
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="button" class="btn btn-lg btn-primary" id="saveBtn" name="saveBtn"
                                            data-kt-stepper-action="submit" disabled>
                                            <span class="indicator-label">Enviar
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                            transform="rotate(-180 18 13)" fill="currentColor" />
                                                        <path
                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="indicator-progress">Espere un momento...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                        <button type="button" class="btn btn-lg btn-primary" id="btnCont" name="btnCont"
                                            data-kt-stepper-action="next">Continue
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-3 ms-1 me-0">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                        transform="rotate(-180 18 13)" fill="currentColor" />
                                                    <path
                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Stepper-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Create App-->
   
   


    <div class="modal fade" id="editar_venta_modal" tabindex="-1" role="dialog" aria-labelledby="editar_venta_modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editar_venta_modalLabel">Editar Venta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Contenido del formulario de edición -->
                <form id="formulario_edicion">
                    <div class="mb-3">
                        <label for="modal_id" class="form-label">ID:</label>
                        <input type="text" class="form-control" id="modal_id" name="modal_id" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="modal_nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="modal_nombre" name="modal_nombre">
                    </div>
                    <div class="mb-3">
                        <label for="modal_descripcion" class="form-label">Descripción:</label>
                        <textarea class="form-control" id="modal_descripcion" name="modal_descripcion"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="guardar_edicion">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="imagenModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Agregamos la clase modal-lg para hacer la imagen más grande -->
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">VISTA DE LA IMAGEN</h3>
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
          
            </div>
           
            <div class="modal-body text-center"> <!-- Centramos la imagen horizontalmente -->
                <img src="" alt="Imagen" id="imagenModalContent" style="max-width: 90%; max-height: 90vh;"> <!-- Hacemos que la imagen tenga un tamaño máximo y una altura máxima -->
            </div>
        </div>
    </div>
</div>




    <!--end::Modal - Invite Friend-->
    <!--end::Modals-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used by this page)-->
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used by this page)-->
    <script src="assets/js/custom/apps/user-management/users/list/table.js"></script>
    <script src="assets/js/custom/apps/user-management/users/list/export-users.js"></script>
  
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>

    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>



    <!--end::Custom Javascript-->
    <!--end::Javascript-->
    <script>
         document.getElementById('saveBtn').addEventListener('click', function () {
        // Deshabilitar el botón "Atras"
        document.getElementById('backBtn').disabled = true;
    });
/********************************************************************************
 * realiza la recespcion del ajax y procede a mostrar en el datatables
********************************************************************************* */
        "use strict";
        var table;
        var dt;

        $(document).ready(function () {

            dt = $('#kt_table_use').DataTable({


                searchDelay: 500,
                processing: true,
                serverSide: true,
                order: [[0, 'asc']],
                stateSave: true,
                select: {
                    style: 'multi',
                    selector: 'td:first-child input[type="checkbox"]',
                    className: 'row-selected'
                },
                ajax: {

                    url: "SolicitudesRealizadas"
                },
                columns: [

                   {
                data: 'id',
                orderable: false,
                render: function(data) {
                    return `
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="${data}" />
                        </div>`;
                }
            },

                    { data: 'funcionario' },
                    { data: 'entidad' },
                    { data: 'oficina' },
                    { data: 'fecha' },
                    { data: 'descripcion_problema' },
                    { data: 'respuesta' },
                    { data: "imagen01", "render": function (data, type, row) {
                        return '<img src="' + data + '" alt="Imagen" width="50">';
                    } },
                    
             
                ],
                
            columnDefs: [
              
            {
                        targets: 8,
                        orderable: false,
                        render: function (data) {
                            return ` <div class="text-end">
                    <div class="btn-group">
                        <button type="button" class="btn btn-light btn-active-light-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Acciones
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" data-bs-toggle="modal" href="#editar_venta_modal" data-id="" data-nombre="" data-url="acevm" id="editar">Editar</a>
                            <a class="dropdown-item" href="javascript:;" id="eliminar" data-kt-users-table-filter="delete_row" data-id="" data-nombre="">Eliminar</a>
                        </div>
                    </div>
                </div>`;
                        }
                    }
        ],


            });

            $('#kt_table_use tbody').on('click', 'img', function () {
            var imageUrl = $(this).attr('src');
            $('#imagenModalContent').attr('src', imageUrl);
            $('#imagenModal').modal('show');
        });

            handleSearchDatatable();
            recargarTabla();
        });

/********************************************************************************
 * son los botones que controlan las acciones de editar en la lista y el modal
********************************************************************************* */
        $(document).ready(function () {
    // Evento de clic para el botón "Editar" en la fila de la tabla
    $(document).on('click', '#editar', function () {
        // Captura los datos de la fila
        var id = $(this).closest('tr').data('id');
        var entidad = $(this).closest('tr').data('entidad');
        var respuesta = $(this).closest('tr').data('respuesta');

        // Llena el modal de edición con los datos capturados
        $('#modal_id').val(id);
        $('#modal_nombre').val(entidad);
        $('#modal_descripcion').val(respuesta);

        // Abre el modal de edición
        $('#editar_venta_modal').modal('show');
    });

    // Evento de clic para guardar los cambios en el formulario de edición
    $(document).on('click', '#guardar_edicion', function () {
        // Aquí puedes implementar la lógica para guardar los cambios en el elemento editado
        // Por ejemplo, puedes hacer una solicitud AJAX para enviar los datos al servidor.

        // Cierra el modal después de guardar los cambios
        $('#editar_venta_modal').modal('hide');
    });
}); 
/********************************************************************************
 *Proceso de busqueda
********************************************************************************* */
        var handleSearchDatatable = function () {
            const filterSearch = document.querySelector("#search-input");
            filterSearch.addEventListener('keyup', function (e) {
                dt.search(e.target.value).draw();
            });
        }
/********************************************************************************
 *funcion recargar datatables
********************************************************************************* */
        function recargarTabla() {
            dt.ajax.reload();
        }
/********************************************************************************
 *manejo de dropzone para el proceso de las iamgen en el formulario l
********************************************************************************* */
        Dropzone.autoDiscover = false;
        var arrayFiles = [];
        var countArrayFiles = 0;

        $(".dropzone").dropzone({
            url: "/crear", // Reemplaza con la URL correcta
            addRemoveLinks: true,
            acceptedFiles: "image/jpeg, image/png",
            maxFilesize: 1, // Tamaño máximo en MB
            maxFiles: 1,
            dictDefaultMessage: "Arrastre o suelte tus imágenes aquí, Recomendado: 500px * 500px, tamaño máximo 1 MB",
            init: function () {
                var myDropzone = this;

                this.on("addedfile", function (file) {
                    countArrayFiles++;
                    setTimeout(function () {
                        arrayFiles.push({
                            "file": file.dataURL,
                            "type": file.type,
                            "width": file.width,
                            "height": file.height
                        });
                    }, 100 * countArrayFiles);
                });

                this.on("removedfile", function (file) {
                    var index = arrayFiles.findIndex(function (item) {
                        return item.file === file.dataURL;
                    });

                    if (index !== -1) {
                        arrayFiles.splice(index, 1);
                    }
                });

            }
        });
/********************************************************************************
 * manejo de llenado de los campos del formulario y armado del ajax que se mandara 
********************************************************************************* */
        // Manejar el envío de datos sin el uso de un formulario
        $('#saveBtn').click(function () {
            // Obtener los valores de los campos de texto, botones de radio, área de texto y el combo
            var otherData = {
                id: document.getElementById("id").value,
                codigo: document.getElementById("codigo").value,
                funcionario: document.getElementById("funcionario").value,
                id_entidad: document.getElementById("id_entidad").value,
                entidad: document.getElementById("entidad").value,
                oficina: document.getElementById("oficina").value,
                dependencia: document.getElementById("dependencia").value,
                categoria: document.querySelector("input[name='categoria']:checked").value,
                hardware: document.getElementById("hardware").value,
                telefonia: document.getElementById("telefonia").value,
                software: document.getElementById("software").value,
                otros: document.getElementById("otros").value,
                prioridad: document.querySelector("input[name='prioridad']:checked").value,
                descripcion: document.getElementById("descripcion").value,

            };

            // Combinar los datos en un objeto único
            var formData = {
                files: arrayFiles,
                otherData: otherData
            };

            // Convertir el objeto en una cadena JSON
            var jsonData = JSON.stringify(formData);

            console.log("JSON enviado al servidor:", jsonData);

            // Enviar los datos mediante una solicitud AJAX
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "/crear", true);
            xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Manejar la respuesta del servidor si es necesario
                    console.log(xhr.responseText);
                }

            };
            xhr.send(jsonData);
        });

/********************************************************************************
 * animacion y juego de los botones de seleccion del formulario 
********************************************************************************* */
       // Obtener referencias a los elementos select y radios
const hardwareSelect = document.getElementById('hardware');
const telefoniaSelect = document.getElementById('telefonia');
const softwareSelect = document.getElementById('software');
const otrosSelect = document.getElementById('otros');
const radioHardware = document.getElementById('radioHardware');
const radioTelefonia = document.getElementById('radioTelefonia');
const radioSoftware = document.getElementById('radioSoftware');
const radioOtros = document.getElementById('radioOtros');

// Agregar un evento 'change' a cada select
hardwareSelect.addEventListener('change', handleSelectChange);
telefoniaSelect.addEventListener('change', handleSelectChange);
softwareSelect.addEventListener('change', handleSelectChange);
otrosSelect.addEventListener('change', handleSelectChange);

// Función para manejar el cambio en los selects
function handleSelectChange(event) {
  // Verificar si algún select tiene un valor diferente de nulo
  const anySelectWithValue = [hardwareSelect, telefoniaSelect, softwareSelect, otrosSelect]
    .some(select => select.value !== '');

  // Habilitar o deshabilitar todos los selects, excepto el actual con valor diferente de nulo
  [hardwareSelect, telefoniaSelect, softwareSelect, otrosSelect].forEach(select => {
    if (select !== event.target) {
      select.disabled = anySelectWithValue && select.value === '';
    }
  });

  // Verificar si el select actual tiene valor diferente de nulo
  if (event.target.value !== '') {
    // Deshabilitar los radios excepto el correspondiente al select actual
    [radioHardware, radioTelefonia, radioSoftware, radioOtros].forEach(radio => {
      radio.disabled = radio !== getRadioForSelect(event.target);
    });
  } else {
    // Habilitar todos los radios
    [radioHardware, radioTelefonia, radioSoftware, radioOtros].forEach(radio => {
      radio.disabled = false;
    });
  }
}

// Función para obtener el radio correspondiente a un select
function getRadioForSelect(select) {
  switch (select.id) {
    case 'hardware':
      return radioHardware;
    case 'telefonia':
      return radioTelefonia;
    case 'software':
      return radioSoftware;
    case 'otros':
      return radioOtros;
    default:
      return null;
  }
}
/********************************************************************************
 * validacion de campos
********************************************************************************* */

function validarSoloLetras(input) {
        // Expresión regular para verificar si solo contiene letras
        var regex = /^[A-Za-z]+$/;

        // Valor del campo de entrada
        var valor = input.value;

        // Verificar si el valor coincide con la expresión regular
        if (!regex.test(valor)) {
            // Si no coincide, eliminar caracteres no válidos
            input.value = valor.replace(/[^A-Za-z]/g, '');

            // Mostrar una alerta con SweetAlert2
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'El campo debe contener solo letras (mayúsculas o minúsculas).'
            });
        }
    }

    function validarLetrasYNumeros(input) {
        // Expresión regular para verificar si contiene solo letras y números
        var regex = /^[A-Za-z0-9]+$/;

        // Valor del campo de entrada
        var valor = input.value;

        // Verificar si el valor coincide con la expresión regular
        if (!regex.test(valor)) {
            // Si no coincide, eliminar caracteres no válidos
            input.value = valor.replace(/[^A-Za-z0-9]/g, '');

            // Mostrar una alerta con SweetAlert2
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'El campo debe contener solo letras y números.'
            });
        }
    }
   
    var validacionRealizada = false; // Variable global para controlar si la validación ya se hizo

// Función para validar campos
function validarCampos() {
    const hardwareSelect = document.getElementById('hardware').value;
    const telefoniaSelect = document.getElementById('telefonia').value;
    const softwareSelect = document.getElementById('software').value;
    const otrosSelect = document.getElementById('otros').value;

    const radioHardware = document.getElementById('radioHardware').checked;
    const radioTelefonia = document.getElementById('radioTelefonia').checked;
    const radioSoftware = document.getElementById('radioSoftware').checked;
    const radioOtros = document.getElementById('radioOtros').checked;

    // Verificar al menos un valor seleccionado en los campos select
    if (
        (hardwareSelect !== "" || telefoniaSelect !== "" || softwareSelect !== "" || otrosSelect !== "") &&
        (radioHardware || radioTelefonia || radioSoftware || radioOtros)
    ) {
        // Activar el checkbox de verificación
        
        validacionRealizada = true; // Marcar que la validación se ha realizado
        habilitarGuardar(); // Llamar a la función para habilitar el botón "Save"
    } else {
        // Mostrar una alerta usando SweetAlert2 si no se cumple la condición
        Swal.fire({
            icon: 'error',
            title: 'Error Verificar Datos ',
            text: 'Por favor, Seleccione las opciones que correspondan correctamente ',
        }).then(function() {
            // Desactivar el checkbox cuando se muestra la alerta
            document.getElementById("verificacion").checked = false;
            saveBtn.disabled = true;
        });
    }
}

// Función para habilitar el botón "Save" si la validación se realizó
function habilitarGuardar() {
    var checkbox = document.getElementById('verificacion');
    var saveBtn = document.getElementById('saveBtn');

    if (validacionRealizada || checkbox.checked) {
        // La validación se ha realizado y el checkbox está marcado (valor 1)
        if (validacionRealizada==true) {
            Swal.fire('Gracias por Seleccionar las opciones correctamente ', '', 'success');
        }else{
            saveBtn.disabled = true;
        }
        if (checkbox.checked==true) {
            saveBtn.disabled = false; // Habilitar el botón "Save"
        Swal.fire('Gracias por realizar la confirmacion ', '', 'success');
        }else{
            saveBtn.disabled = true;
        }
       
    } else {
        // La validación no se ha realizado o el checkbox no está marcado (valor 0)
        Swal.fire({
            title: '¡Debe confirmar!',
            text: 'Por favor, marque la casilla de confirmación antes de continuar.',
            icon: 'warning',
            confirmButtonText: 'OK',
            customClass: {
                confirmButton: 'btn btn-light'
            }
        }).then(function() {
            // Desactivar el checkbox cuando se muestra la alerta
            checkbox.checked = false;
        });
        saveBtn.disabled = true; // Deshabilitar el botón "Save"
    }
}

// Llamar a la función de validación cuando se hagan cambios en los campos select o radio button
document.getElementById('hardware').addEventListener('change', validarCampos);
document.getElementById('telefonia').addEventListener('change', validarCampos);
document.getElementById('software').addEventListener('change', validarCampos);
document.getElementById('otros').addEventListener('change', validarCampos);
document.getElementById('radioHardware').addEventListener('change', validarCampos);
document.getElementById('radioTelefonia').addEventListener('change', validarCampos);
document.getElementById('radioSoftware').addEventListener('change', validarCampos);
document.getElementById('radioOtros').addEventListener('change', validarCampos);


    </script>
</body>
<!--end::Body-->

</html>