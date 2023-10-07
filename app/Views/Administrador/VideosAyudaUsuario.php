<!DOCTYPE html>

<html lang="es">
	<!--begin::Head-->
	<head><base href="">
	<title>MDPyEP &amp; Sistema de Soporte</title>
	<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="recursos/logo/logo2.png" />
		
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used by this page)-->
		<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<style>
			/************************************
			estilos para el contenedor y previsualizacion de los videos de ayuda
			************************************/
			.container {
			width: 80%; /* Ancho del contenedor */
			margin: 0 auto; /* Centrar horizontalmente */
			padding: 20px; /* Espaciado interior */
			border: 2px solid #ccc; /* Borde */
			border-radius: 8px; /* Esquinas redondeadas */
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Sombra */
			text-align: center; /* Alinear contenido al centro */
		}

		/* Estilos para el título */
		.container h2 {
			font-size: 24px; /* Tamaño del texto del título */
			margin-bottom: 20px; /* Espaciado inferior */
		}

		/* Estilos para el iframe (ajusta el selector y propiedades según tus necesidades) */
		.container iframe {
			width: 100%; /* Ajusta el ancho del iframe según tus necesidades */
			height: 400px; /* Ajusta la altura del iframe según tus necesidades */
		}
			.video-container {
				display: grid;
				grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
				gap: 10px;
				justify-items: center;
			}
		</style>
		
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body data-kt-name="metronic" id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
		<!--begin::Theme mode setup on page load-->
		<script>if ( document.documentElement ) { const defaultThemeMode = "system"; const name = document.body.getAttribute("data-kt-name"); let themeMode = localStorage.getItem("kt_" + ( name !== null ? name + "_" : "" ) + "theme_mode_value"); if ( themeMode === null ) { if ( defaultThemeMode === "system" ) { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } else { themeMode = defaultThemeMode; } } document.documentElement.setAttribute("data-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-column flex-column-fluid">
				<!--begin::Header-->
				<div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
					<!--begin::Container-->
					<div class="header-top-container container-xxl sabi d-flex flex-grow-1 flex-stack">
						<!--begin::Header Logo-->
						<div class="d-flex align-items-center me-5">
							<!--begin::Heaeder menu toggle-->
							<div class="d-lg-none btn btn-icon btn-active-color-300 w-30px h-30px me-2" id="kt_header_menu_toggle">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
								<span class="svg-icon svg-icon-2">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
										<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Heaeder menu toggle-->
							<!--begin::Logo-->
							<a href="../../demo19/dist/index.html">
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
							
							<!--begin::Notifications-->
							<div class="d-flex align-items-center ms-2 ms-lg-3">
								<!--begin::Menu- wrapper-->
								<div class="btn btn-icon btn-custom w-30px h-30px w-md-40px h-md-40px position-relative" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
									<span class="svg-icon svg-icon-1">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z" fill="currentColor" />
											<path d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z" fill="currentColor" />
											<path opacity="0.3" d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z" fill="currentColor" />
											<path opacity="0.3" d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
									<!--begin::Heading-->
									<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/pattern-1.jpg')">
										<!--begin::Title-->
										<h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notificaciones
										<span class="fs-8 opacity-75 ps-3">notificaciones por dia de solictudes nuevas</span></h3>
										<!--end::Title-->
										<!--begin::Tabs-->
										<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
											<li class="nav-item">
												<a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
											</li>
											
										</ul>
										<!--end::Tabs-->
									</div>
									<!--end::Heading-->
									<!--begin::Tab content-->
									<div class="tab-content">
										<!--begin::Tab panel-->
										<div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">
											<!--begin::Items-->
											<div class="scroll-y mh-325px my-5 px-8">
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-primary">
																<!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3" d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z" fill="currentColor" />
																		<path d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Alice</a>
															<div class="text-gray-400 fs-7">Phase 1 development</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">1 hr</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-danger">
																<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-danger">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																		<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
																		<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR Confidential</a>
															<div class="text-gray-400 fs-7">Confidential staff documents</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">2 hrs</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-warning">
																<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-warning">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
																		<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Company HR</a>
															<div class="text-gray-400 fs-7">Corporeate staff profiles</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">5 hrs</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-success">
																<!--begin::Svg Icon | path: icons/duotune/files/fil023.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-success">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3" d="M5 15C3.3 15 2 13.7 2 12C2 10.3 3.3 9 5 9H5.10001C5.00001 8.7 5 8.3 5 8C5 5.2 7.2 3 10 3C11.9 3 13.5 4 14.3 5.5C14.8 5.2 15.4 5 16 5C17.7 5 19 6.3 19 8C19 8.4 18.9 8.7 18.8 9C18.9 9 18.9 9 19 9C20.7 9 22 10.3 22 12C22 13.7 20.7 15 19 15H5ZM5 12.6H13L9.7 9.29999C9.3 8.89999 8.7 8.89999 8.3 9.29999L5 12.6Z" fill="currentColor" />
																		<path d="M17 17.4V12C17 11.4 16.6 11 16 11C15.4 11 15 11.4 15 12V17.4H17Z" fill="currentColor" />
																		<path opacity="0.3" d="M12 17.4H20L16.7 20.7C16.3 21.1 15.7 21.1 15.3 20.7L12 17.4Z" fill="currentColor" />
																		<path d="M8 12.6V18C8 18.6 8.4 19 9 19C9.6 19 10 18.6 10 18V12.6H8Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Redux</a>
															<div class="text-gray-400 fs-7">New frontend admin theme</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">2 days</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-primary">
																<!--begin::Svg Icon | path: icons/duotune/maps/map001.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3" d="M6 22H4V3C4 2.4 4.4 2 5 2C5.6 2 6 2.4 6 3V22Z" fill="currentColor" />
																		<path d="M18 14H4V4H18C18.8 4 19.2 4.9 18.7 5.5L16 9L18.8 12.5C19.3 13.1 18.8 14 18 14Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Breafing</a>
															<div class="text-gray-400 fs-7">Product launch status update</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">21 Jan</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-info">
																<!--begin::Svg Icon | path: icons/duotune/general/gen006.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-info">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3" d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z" fill="currentColor" />
																		<path d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner Assets</a>
															<div class="text-gray-400 fs-7">Collection of banner images</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">21 Jan</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-warning">
																<!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-warning">
																	<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3" d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z" fill="currentColor" />
																		<path d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon Assets</a>
															<div class="text-gray-400 fs-7">Collection of SVG icons</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">20 March</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Items-->
											
										</div>
										<!--end::Tab panel-->
										
										
									</div>
									<!--end::Tab content-->
								</div>
								<!--end::Menu-->
								<!--end::Menu wrapper-->
							</div>
							<!--end::Notifications-->
						
							<!--begin::Theme mode-->
							<div class="d-flex align-items-center ms-2 ms-lg-3">
								<!--begin::Menu toggle-->
								<a href="#" class="btn btn-icon btn-custom w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
									<span class="svg-icon theme-light-show svg-icon-2">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z" fill="currentColor" />
											<path d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z" fill="currentColor" />
											<path d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z" fill="currentColor" />
											<path d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z" fill="currentColor" />
											<path d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z" fill="currentColor" />
											<path d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z" fill="currentColor" />
											<path d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z" fill="currentColor" />
											<path d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z" fill="currentColor" />
											<path d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
									<span class="svg-icon theme-dark-show svg-icon-2">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor" />
											<path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor" />
											<path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor" />
											<path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</a>
								<!--begin::Menu toggle-->
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-muted menu-active-bg menu-state-primary fw-semibold py-4 fs-base w-175px" data-kt-menu="true" data-kt-element="theme-mode-menu">
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-0">
										<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
											<span class="menu-icon" data-kt-element="icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
												<span class="svg-icon svg-icon-3">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z" fill="currentColor" />
														<path d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z" fill="currentColor" />
														<path d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z" fill="currentColor" />
														<path d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z" fill="currentColor" />
														<path d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z" fill="currentColor" />
														<path d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z" fill="currentColor" />
														<path d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z" fill="currentColor" />
														<path d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z" fill="currentColor" />
														<path d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Claro</span>
										</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-0">
										<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
											<span class="menu-icon" data-kt-element="icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
												<span class="svg-icon svg-icon-3">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor" />
														<path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor" />
														<path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor" />
														<path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Oscuro</span>
										</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-0">
										<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
											<span class="menu-icon" data-kt-element="icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen062.svg-->
												<span class="svg-icon svg-icon-3">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" clip-rule="evenodd" d="M1.34375 3.9463V15.2178C1.34375 16.119 2.08105 16.8563 2.98219 16.8563H8.65093V19.4594H6.15702C5.38853 19.4594 4.75981 19.9617 4.75981 20.5757V21.6921H19.2403V20.5757C19.2403 19.9617 18.6116 19.4594 17.8431 19.4594H15.3492V16.8563H21.0179C21.919 16.8563 22.6562 16.119 22.6562 15.2178V3.9463C22.6562 3.04516 21.9189 2.30786 21.0179 2.30786H2.98219C2.08105 2.30786 1.34375 3.04516 1.34375 3.9463ZM12.9034 9.9016C13.241 9.98792 13.5597 10.1216 13.852 10.2949L15.0393 9.4353L15.9893 10.3853L15.1297 11.5727C15.303 11.865 15.4366 12.1837 15.523 12.5212L16.97 12.7528V13.4089H13.9851C13.9766 12.3198 13.0912 11.4394 12 11.4394C10.9089 11.4394 10.0235 12.3198 10.015 13.4089H7.03006V12.7528L8.47712 12.5211C8.56345 12.1836 8.69703 11.8649 8.87037 11.5727L8.0107 10.3853L8.96078 9.4353L10.148 10.2949C10.4404 10.1215 10.759 9.98788 11.0966 9.9016L11.3282 8.45467H12.6718L12.9034 9.9016ZM16.1353 7.93758C15.6779 7.93758 15.3071 7.56681 15.3071 7.1094C15.3071 6.652 15.6779 6.28122 16.1353 6.28122C16.5926 6.28122 16.9634 6.652 16.9634 7.1094C16.9634 7.56681 16.5926 7.93758 16.1353 7.93758ZM2.71385 14.0964V3.90518C2.71385 3.78023 2.81612 3.67796 2.94107 3.67796H21.0589C21.1839 3.67796 21.2861 3.78023 21.2861 3.90518V14.0964C15.0954 14.0964 8.90462 14.0964 2.71385 14.0964Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Sistema</span>
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
								<div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
									<img src="assets/media/avatars/300-1.jpg" alt="user" />
								</div>
								<!--begin::User account menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
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
												<div class="fw-bold d-flex align-items-center fs-5">Max Smith
												<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
												<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
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
										<a href="../../demo19/dist/account/overview.html" class="menu-link px-5">My Profile</a>
									</div>
									<!--end::Menu item-->
								
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start">
										<a href="#" class="menu-link px-5">
											<span class="menu-title position-relative">Language
											<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
											<img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg" alt="" /></span></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo19/dist/account/settings.html" class="menu-link d-flex px-5 active">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
												</span>English</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo19/dist/account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
												</span>Spanish</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo19/dist/account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
												</span>German</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo19/dist/account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
												</span>Japanese</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo19/dist/account/settings.html" class="menu-link d-flex px-5">
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
										<a href="../../demo19/dist/authentication/flows/basic/sign-in.html" class="menu-link px-5">Cerrar Sesion</a>
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
						<div class="header-menu container-xxl flex-column align-items-stretch flex-lg-row" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
							<!--begin::Menu-->
							<div class="menu menu-column menu-lg-row menu-rounded menu-active-bg menu-title-gray-800 menu-state-primary menu-arrow-gray-500 fw-semibold my-5 my-lg-0 align-items-stretch flex-grow-1 px-2 px-lg-0" id="kt_header_menu" data-kt-menu="true">
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show menu-lg-down-accordion menu-here-bg me-0 me-lg-2">
									<!--begin:Menu link-->
									<span class="menu-link py-3">
										<span class="menu-title">Dashboards</span>
										<span class="menu-arrow d-lg-none"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
										<!--begin:Dashboards menu-->
										<div class="menu-state-bg menu-extended" data-kt-menu-dismiss="true">
											<!--begin:Row-->
											<div class="row">
												<!--begin:Col-->
												<div class="mb-3 mb-lg-0 py-3 px-3 py-lg-6 px-lg-6">
													<!--begin:Row-->
													<div class="row">
														<!--begin:Col-->
														<div class="col-lg-6 mb-3">
															<!--begin:Menu item-->
															<div class="menu-item p-0 m-0">
																<!--begin:Menu link-->
																<a href="/administrador" class="menu-link active">
																	<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																		<span class="svg-icon svg-icon-primary svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
																				<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
																				<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
																				<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</span>
																	<span class="d-flex flex-column">
																		<span class="fs-6 fw-bold text-gray-800">Graficas</span>
																		<span class="fs-7 fw-semibold text-muted">Graficas y Datos</span>
																	</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Col-->
													
														<!--begin:Col-->
														<div class="col-lg-6 mb-3">
															<!--begin:Menu item-->
															<div class="menu-item p-0 m-0">
																<!--begin:Menu link-->
																<a href="../../demo19/dist/dashboards/call-center.html" class="menu-link">
																	<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																		<!--begin::Svg Icon | path: icons/duotune/communication/com004.svg-->
																		<span class="svg-icon svg-icon-primary svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path opacity="0.3" d="M14 3V20H2V3C2 2.4 2.4 2 3 2H13C13.6 2 14 2.4 14 3ZM11 13V11C11 9.7 10.2 8.59995 9 8.19995V7C9 6.4 8.6 6 8 6C7.4 6 7 6.4 7 7V8.19995C5.8 8.59995 5 9.7 5 11V13C5 13.6 4.6 14 4 14V15C4 15.6 4.4 16 5 16H11C11.6 16 12 15.6 12 15V14C11.4 14 11 13.6 11 13Z" fill="currentColor" />
																				<path d="M2 20H14V21C14 21.6 13.6 22 13 22H3C2.4 22 2 21.6 2 21V20ZM9 3V2H7V3C7 3.6 7.4 4 8 4C8.6 4 9 3.6 9 3ZM6.5 16C6.5 16.8 7.2 17.5 8 17.5C8.8 17.5 9.5 16.8 9.5 16H6.5ZM21.7 12C21.7 11.4 21.3 11 20.7 11H17.6C17 11 16.6 11.4 16.6 12C16.6 12.6 17 13 17.6 13H20.7C21.2 13 21.7 12.6 21.7 12ZM17 8C16.6 8 16.2 7.80002 16.1 7.40002C15.9 6.90002 16.1 6.29998 16.6 6.09998L19.1 5C19.6 4.8 20.2 5 20.4 5.5C20.6 6 20.4 6.60005 19.9 6.80005L17.4 7.90002C17.3 8.00002 17.1 8 17 8ZM19.5 19.1C19.4 19.1 19.2 19.1 19.1 19L16.6 17.9C16.1 17.7 15.9 17.1 16.1 16.6C16.3 16.1 16.9 15.9 17.4 16.1L19.9 17.2C20.4 17.4 20.6 18 20.4 18.5C20.2 18.9 19.9 19.1 19.5 19.1Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</span>
																	<span class="d-flex flex-column">
																		<span class="fs-6 fw-bold text-gray-800">Call Center</span>
																		<span class="fs-7 fw-semibold text-muted">Campaings &amp; conversions</span>
																	</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Col-->
														<div class="col-lg-6 mb-3">
														<!--begin:Menu item-->
														<div class="menu-item p-0 m-0">
															<!--begin:Menu link-->
															<a href="../../demo19/dist/dashboards/bidding.html"
																class="menu-link">
																<span
																	class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
																	<span class="svg-icon svg-icon-warning svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24"
																			fill="none"
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
																<span class="d-flex flex-column">
																	<span
																		class="fs-6 fw-bold text-gray-800">Area de planificacion</span>
																	<span class="fs-7 fw-semibold text-muted">Sector donde se realiza la agenda de actividades y otros </span>
																</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<div class="col-lg-6 mb-3">
													<!--begin:Menu item-->
													<div class="menu-item p-0 m-0">
														<!--begin:Menu link-->
														<a href="../../demo19/dist/dashboards/geospatial.html"
															class="menu-link">
															<span
																class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
																<span class="svg-icon svg-icon-primary svg-icon-1">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M19 5.79702C19 5.45241 18.7893 5.14052 18.4763 5.03467L12.2063 3.20153C12.0213 3.14561 11.8085 3.15269 11.6235 3.22115C11.4386 3.28961 11.2969 3.40782 11.2171 3.55313L2.21712 20.0531C2.08179 20.2893 2 20.5608 2 20.839V21.5C2 21.7761 2.22386 22 2.5 22H4C4.27614 22 4.5 21.7761 4.5 21.5C4.5 21.2239 4.72386 21 5 21H9C9.27614 21 9.5 20.7761 9.5 20.5C9.5 20.2239 9.72386 20 10 20H11.2839C11.5554 20 11.7986 19.886 11.9645 19.6868L19.9645 7.18678C20.2715 6.85359 20.2798 6.34608 19.9798 6.00613C19.6798 5.66618 19.1552 5.60322 18.8452 5.90318L11.8452 12.4032C11.6183 12.6307 11.2665 12.6307 11.0396 12.4032L9.00002 10.3636V5.00002H13C13.2761 5.00002 13.5 4.77616 13.5 4.50002C13.5 4.22387 13.2761 4.00002 13 4.00002H4.99995L19 5.79702Z"
																			fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
															<span class="d-flex flex-column">
																<span class="fs-6 fw-bold text-gray-800">Datos Geográficos</span>
																<span class="fs-7 fw-semibold text-muted">Información Geoespacial</span>
															</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>

													</div>
													<!--end:Row-->
												</div>
												<!--end:Col-->
											</div>
											<!--end:Row-->
										</div>
										<!--end:Dashboards menu-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
									<!--begin:Menu link-->
									<span class="menu-link py-3">
										<span class="menu-title">Solicitudes</span>
										<span class="menu-arrow d-lg-none"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
										
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
											<!--begin:Menu link-->
											<span class="menu-link py-3">
												<span class="menu-icon">
												<span class="svg-icon svg-icon-3">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z" fill="currentColor" />
															<path opacity="0.3" d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z" fill="currentColor" />
														</svg>
													</span>
												</span>
												<span class="menu-title">Tickes Solicitados</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
													<!--begin:Menu link-->
													<span class="menu-link py-3">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Entidades</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<!-- Inicio del bucle foreach -->
															<?php foreach ($datos1 as $dato): ?>
																		<form action="/listaSolicitud?nombre=<?php echo $dato->id ?>" method="get" style="display: inline;">
																			<input type="hidden" name="nombre" value="<?php echo $dato->id ?>">
																			<button type="submit" class="menu-link py-3" style="border: none; background: none;">
																				<span class="menu-bullet">
																					<span class="bullet bullet-dot"></span>
																				</span>
																				<span class="menu-title"><?php echo $dato->nombre ?></span>
																			</button>
																		</form>
															<?php endforeach; ?>
																	<!-- Fin del bucle foreach -->
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
									
									</div>
									<!--end:Menu sub-->
								</div>
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
									<!--begin:Menu link-->
									<span class="menu-link py-3">
										<span class="menu-title">Galeria de Soporte</span>
										<span class="menu-arrow d-lg-none"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link py-3" href="../../demo19/dist/documentation/base/utilities.html" title="Check out over 200 in-house components, plugins and ready for use solutions" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
												<span class="menu-icon">
													<!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
													<span class="svg-icon svg-icon-3">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M4.05424 15.1982C8.34524 7.76818 13.5782 3.26318 20.9282 2.01418C21.0729 1.98837 21.2216 1.99789 21.3618 2.04193C21.502 2.08597 21.6294 2.16323 21.7333 2.26712C21.8372 2.37101 21.9144 2.49846 21.9585 2.63863C22.0025 2.7788 22.012 2.92754 21.9862 3.07218C20.7372 10.4222 16.2322 15.6552 8.80224 19.9462L4.05424 15.1982ZM3.81924 17.3372L2.63324 20.4482C2.58427 20.5765 2.5735 20.7163 2.6022 20.8507C2.63091 20.9851 2.69788 21.1082 2.79503 21.2054C2.89218 21.3025 3.01536 21.3695 3.14972 21.3982C3.28408 21.4269 3.42387 21.4161 3.55224 21.3672L6.66524 20.1802L3.81924 17.3372ZM16.5002 5.99818C16.2036 5.99818 15.9136 6.08615 15.6669 6.25097C15.4202 6.41579 15.228 6.65006 15.1144 6.92415C15.0009 7.19824 14.9712 7.49984 15.0291 7.79081C15.0869 8.08178 15.2298 8.34906 15.4396 8.55884C15.6494 8.76862 15.9166 8.91148 16.2076 8.96935C16.4986 9.02723 16.8002 8.99753 17.0743 8.884C17.3484 8.77046 17.5826 8.5782 17.7474 8.33153C17.9123 8.08486 18.0002 7.79485 18.0002 7.49818C18.0002 7.10035 17.8422 6.71882 17.5609 6.43752C17.2796 6.15621 16.8981 5.99818 16.5002 5.99818Z" fill="currentColor" />
															<path d="M4.05423 15.1982L2.24723 13.3912C2.15505 13.299 2.08547 13.1867 2.04395 13.0632C2.00243 12.9396 1.9901 12.8081 2.00793 12.679C2.02575 12.5498 2.07325 12.4266 2.14669 12.3189C2.22013 12.2112 2.31752 12.1219 2.43123 12.0582L9.15323 8.28918C7.17353 10.3717 5.4607 12.6926 4.05423 15.1982ZM8.80023 19.9442L10.6072 21.7512C10.6994 21.8434 10.8117 21.9129 10.9352 21.9545C11.0588 21.996 11.1903 22.0083 11.3195 21.9905C11.4486 21.9727 11.5718 21.9252 11.6795 21.8517C11.7872 21.7783 11.8765 21.6809 11.9402 21.5672L15.7092 14.8442C13.6269 16.8245 11.3061 18.5377 8.80023 19.9442ZM7.04023 18.1832L12.5832 12.6402C12.7381 12.4759 12.8228 12.2577 12.8195 12.032C12.8161 11.8063 12.725 11.5907 12.5653 11.4311C12.4057 11.2714 12.1901 11.1803 11.9644 11.1769C11.7387 11.1736 11.5205 11.2583 11.3562 11.4132L5.81323 16.9562L7.04023 18.1832Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
												<span class="menu-title">Drivers</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link py-3" href="../../demo19/dist/documentation/getting-started.html" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
												<span class="menu-icon">
													<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
													<span class="svg-icon svg-icon-3">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
															<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
												<span class="menu-title">Documentacion</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link py-3" href="https://preview.keenthemes.com/metronic8/demo19/layout-builder.html" title="Build your layout and export HTML for server side integration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
												<span class="menu-icon">
													<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
													<span class="svg-icon svg-icon-3">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
															<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
												<span class="menu-title">Videos Tutoriales</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link py-3" href="../../demo19/dist/documentation/getting-started/changelog.html">
												<span class="menu-icon">
													<!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
													<span class="svg-icon svg-icon-3">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M16.95 18.9688C16.75 18.9688 16.55 18.8688 16.35 18.7688C15.85 18.4688 15.75 17.8688 16.05 17.3688L19.65 11.9688L16.05 6.56876C15.75 6.06876 15.85 5.46873 16.35 5.16873C16.85 4.86873 17.45 4.96878 17.75 5.46878L21.75 11.4688C21.95 11.7688 21.95 12.2688 21.75 12.5688L17.75 18.5688C17.55 18.7688 17.25 18.9688 16.95 18.9688ZM7.55001 18.7688C8.05001 18.4688 8.15 17.8688 7.85 17.3688L4.25001 11.9688L7.85 6.56876C8.15 6.06876 8.05001 5.46873 7.55001 5.16873C7.05001 4.86873 6.45 4.96878 6.15 5.46878L2.15 11.4688C1.95 11.7688 1.95 12.2688 2.15 12.5688L6.15 18.5688C6.35 18.8688 6.65 18.9688 6.95 18.9688C7.15 18.9688 7.35001 18.8688 7.55001 18.7688Z" fill="currentColor" />
															<path opacity="0.3" d="M10.45 18.9687C10.35 18.9687 10.25 18.9687 10.25 18.9687C9.75 18.8687 9.35 18.2688 9.55 17.7688L12.55 5.76878C12.65 5.26878 13.25 4.8687 13.75 5.0687C14.25 5.1687 14.65 5.76878 14.45 6.26878L11.45 18.2688C11.35 18.6688 10.85 18.9687 10.45 18.9687Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
												<span class="menu-title">Organizacion</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
									<!--begin:Menu link-->
									<span class="menu-link py-3">
										<span class="menu-title">Ayuda al usuario</span>
										<span class="menu-arrow d-lg-none"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
									<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link py-3" href="../../demo19/dist/documentation/base/utilities.html" title="Explora nuestra colección de videos tutoriales" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
												<span class="menu-icon">
													<!-- Nuevo icono para videos tutoriales -->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
															<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
															<path d="M12 8v8l-4-4-4 4"></path>
														</svg>
													</span>
													<!--end::Nuevo icono-->
												</span>
												<span class="menu-title">Videos Tutoriales</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->

										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link py-3" href="../../demo19/dist/documentation/getting-started.html" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
												<span class="menu-icon">
													<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
													<span class="svg-icon svg-icon-3">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
															<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
												<span class="menu-title">Documentacion</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link py-3" href="https://preview.keenthemes.com/metronic8/demo19/layout-builder.html" title="Build your layout and export HTML for server side integration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
												<span class="menu-icon">
													<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
													<span class="svg-icon svg-icon-3">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
															<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
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
											<a class="menu-link py-3" href="../../demo19/dist/documentation/getting-started/changelog.html">
												<span class="menu-icon">
													<!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
													<span class="svg-icon svg-icon-3">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M16.95 18.9688C16.75 18.9688 16.55 18.8688 16.35 18.7688C15.85 18.4688 15.75 17.8688 16.05 17.3688L19.65 11.9688L16.05 6.56876C15.75 6.06876 15.85 5.46873 16.35 5.16873C16.85 4.86873 17.45 4.96878 17.75 5.46878L21.75 11.4688C21.95 11.7688 21.95 12.2688 21.75 12.5688L17.75 18.5688C17.55 18.7688 17.25 18.9688 16.95 18.9688ZM7.55001 18.7688C8.05001 18.4688 8.15 17.8688 7.85 17.3688L4.25001 11.9688L7.85 6.56876C8.15 6.06876 8.05001 5.46873 7.55001 5.16873C7.05001 4.86873 6.45 4.96878 6.15 5.46878L2.15 11.4688C1.95 11.7688 1.95 12.2688 2.15 12.5688L6.15 18.5688C6.35 18.8688 6.65 18.9688 6.95 18.9688C7.15 18.9688 7.35001 18.8688 7.55001 18.7688Z" fill="currentColor" />
															<path opacity="0.3" d="M10.45 18.9687C10.35 18.9687 10.25 18.9687 10.25 18.9687C9.75 18.8687 9.35 18.2688 9.55 17.7688L12.55 5.76878C12.65 5.26878 13.25 4.8687 13.75 5.0687C14.25 5.1687 14.65 5.76878 14.45 6.26878L11.45 18.2688C11.35 18.6688 10.85 18.9687 10.45 18.9687Z" fill="currentColor" />
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
							<h1 class="d-flex text-dark fw-bold m-0 fs-3">Dashboard
							<!--begin::Separator-->
							<span class="h-20px border-gray-400 border-start mx-3"></span>
							<!--end::Separator-->
							<!--begin::Description-->
							<small class="text-gray-500 fs-7 fw-semibold my-1">Panel Principal</small>
							<!--end::Description--></h1>
							<!--end::Title-->
						</div>
						<!--end::Page title-->
						<!--begin::Actions-->
						<div class="d-flex align-items-center py-1">
							<!--begin::Daterange-->
							<a href="#" class="btn btn-sm btn-flex btn-light px-5 me-2" id="kt_dashboard_daterangepicker" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-trigger="hover" title="Select dashboard daterange">
								<span class="me-2">
									<span class="text-gray-600 fw-semibold me-1" id="kt_dashboard_daterangepicker_title">Today</span>
									<span class="text-info fw-bold" id="kt_dashboard_daterangepicker_date"></span>
								</span>
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-4 m-0">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
							<!--end::Daterange-->
						
						</div>
						<!--end::Actions-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Main-->
					<div class="d-flex flex-row flex-column-fluid align-items-stretch">
						<!--begin::Content-->
						<div class="content flex-row-fluid" id="kt_content">
							<!--begin::Row-->
							<div class="row g-5 g-xl-8">
								<!--begin::Col-->
								<!--begin::Row-->
								<!--begin::Content-->
					<div class="content flex-row-fluid" id="kt_content">
						<div class="card">
							<div class="card-header border-0 pt-6">
								<div class="card-title"
									style="text-align: center; background-color: transparent; padding: 10px;">
									<h2 style="font-size: 24px; color: brown;">Bienvenido a la seccion de ayuda</h2>
								</div>
								<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias vitae consequatur
									neque pariatur modi hic nulla ut nihil, quidem ratione voluptate repudiandae
									deleniti, sequi reiciendis error similique impedit architecto quas.</p>
							</div>
						</div>
						<br>
						<h2>Lista de Videos tutoriales recomendados</h2>
			<form>
			  <div class="form-group">
			<input type="hidden" class="form-control form-control-lg form-control-solid"name="id" id="id"placeholder="Id del funcionario campo oculto" value="<?= session()->get('id') ?>" />
			<input class="form-control url" id="url" name="url" placeholder="Paste YouTube Video URL" />
			  </div>
			  <div style="  border-top: 0px solid #ccc; /* Línea superior de 1 píxel sólido y color gris */ margin: 5px 0; "></div>
			  <div class="form-group">
				<button class="btn btn-success">Visualizar Video</button>
				<button class="btn btn-success" id="guardarVideo" name="guardarVideo">Visualizar Video</button>
				<button  href="/verUrl" class="btn btn-success" id="guardarVideo" name="guardarVideo">Recargar Video</button>
			   </div>
			   </form>
			<div style="  border-top: 0px solid #ccc; /* Línea superior de 0 píxel sólido y color gris */ margin: 8px 0; "></div>
			 
			  <div class="container">
					<h2>Prueba de URL</h2>
					<div class="embed-container">
						<iframe src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
				<div style="  border-top: 4px solid #ccc; /* Línea superior de 1 píxel sólido y color gris */ margin: 20px 0; "></div>
				<h3 style="    font-size: 20px; /* Tamaño del texto del título h3 */ margin-top: 0; /* Eliminar el margen superior */ text-align: center; /* Alinear al centro */
			 ">Lista de Videos tutoriales agregados</h3>
			
					<div class="video-container">
				
						<input type="hidden" class="form-control form-control-lg form-control-solid" class="form-control url" id="url"  name="url" placeholder="Paste YouTube Video URL" />
			  </div>
						<iframe  class="embed-responsive-item" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="flex: 0 0 auto; margin-right: 10px; width: 320px;"></iframe>
   					
				

					</div>
					
				
				<!--end::Content-->
		  




							<div class="row g-5 g-xl-10">
								<!--begin::Col-->
								<div class="col-xl-15">
									<!--begin::Lists Widget 19-->
									<div class="card card-flush h-xl-100">
										<!--begin::Heading-->
										<div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px" style="background-image:url('assets/media/svg/shapes/top-green.png" data-theme="light">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column text-white pt-15">
												<span class="fw-bold fs-2x mb-3">Hello, Tyler</span>
												<div class="fs-4 text-white">
													<span class="opacity-75">You have</span>
													<span class="position-relative d-inline-block">
														<a href="../../demo19/dist/pages/user-profile/projects.html" class="link-white opacity-75-hover fw-bold d-block mb-1">4 tasks</a>
														<!--begin::Separator-->
														<span class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
														<!--end::Separator-->
													</span>
													<span class="opacity-75">to comlete</span>
												</div>
											</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar pt-5">
												<!--begin::Menu-->
												<button class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
													<!--begin::Svg Icon | path: icons/duotune/general/gen052.svg-->
													<span class="svg-icon svg-icon-4">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect x="10" y="10" width="4" height="4" rx="2" fill="currentColor" />
															<rect x="17" y="10" width="4" height="4" rx="2" fill="currentColor" />
															<rect x="3" y="10" width="4" height="4" rx="2" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Ticket</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Customer</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
														<!--begin::Menu item-->
														<a href="#" class="menu-link px-3">
															<span class="menu-title">New Group</span>
															<span class="menu-arrow"></span>
														</a>
														<!--end::Menu item-->
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Admin Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Staff Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Member Group</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Contact</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3 py-3">
															<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 2-->
												<!--end::Menu-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="card-body mt-n20">
											<!--begin::Stats-->
											<div class="mt-n20 position-relative">
												<!--begin::Row-->
												<div class="row g-3 g-lg-6">
													<!--begin::Col-->
													<div class="col-6">
														<!--begin::Items-->
														<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-30px me-5 mb-8">
																<span class="symbol-label">
																	<!--begin::Svg Icon | path: icons/duotune/medicine/med005.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-primary">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M17.9061 13H11.2061C11.2061 12.4 10.8061 12 10.2061 12C9.60605 12 9.20605 12.4 9.20605 13H6.50606L9.20605 8.40002V4C8.60605 4 8.20605 3.6 8.20605 3C8.20605 2.4 8.60605 2 9.20605 2H15.2061C15.8061 2 16.2061 2.4 16.2061 3C16.2061 3.6 15.8061 4 15.2061 4V8.40002L17.9061 13ZM13.2061 9C12.6061 9 12.2061 9.4 12.2061 10C12.2061 10.6 12.6061 11 13.2061 11C13.8061 11 14.2061 10.6 14.2061 10C14.2061 9.4 13.8061 9 13.2061 9Z" fill="currentColor" />
																			<path d="M18.9061 22H5.40605C3.60605 22 2.40606 20 3.30606 18.4L6.40605 13H9.10605C9.10605 13.6 9.50605 14 10.106 14C10.706 14 11.106 13.6 11.106 13H17.8061L20.9061 18.4C21.9061 20 20.8061 22 18.9061 22ZM14.2061 15C13.1061 15 12.2061 15.9 12.2061 17C12.2061 18.1 13.1061 19 14.2061 19C15.3061 19 16.2061 18.1 16.2061 17C16.2061 15.9 15.3061 15 14.2061 15Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Stats-->
															<div class="m-0">
																<!--begin::Number-->
																<span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">37</span>
																<!--end::Number-->
																<!--begin::Desc-->
																<span class="text-gray-500 fw-semibold fs-6">Courses</span>
																<!--end::Desc-->
															</div>
															<!--end::Stats-->
														</div>
														<!--end::Items-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-6">
														<!--begin::Items-->
														<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-30px me-5 mb-8">
																<span class="symbol-label">
																	<!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-primary">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="currentColor" />
																			<path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Stats-->
															<div class="m-0">
																<!--begin::Number-->
																<span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">6</span>
																<!--end::Number-->
																<!--begin::Desc-->
																<span class="text-gray-500 fw-semibold fs-6">Certificates</span>
																<!--end::Desc-->
															</div>
															<!--end::Stats-->
														</div>
														<!--end::Items-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-6">
														<!--begin::Items-->
														<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-30px me-5 mb-8">
																<span class="symbol-label">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen020.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-primary">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M14 18V16H10V18L9 20H15L14 18Z" fill="currentColor" />
																			<path opacity="0.3" d="M20 4H17V3C17 2.4 16.6 2 16 2H8C7.4 2 7 2.4 7 3V4H4C3.4 4 3 4.4 3 5V9C3 11.2 4.8 13 7 13C8.2 14.2 8.8 14.8 10 16H14C15.2 14.8 15.8 14.2 17 13C19.2 13 21 11.2 21 9V5C21 4.4 20.6 4 20 4ZM5 9V6H7V11C5.9 11 5 10.1 5 9ZM19 9C19 10.1 18.1 11 17 11V6H19V9ZM17 21V22H7V21C7 20.4 7.4 20 8 20H16C16.6 20 17 20.4 17 21ZM10 9C9.4 9 9 8.6 9 8V5C9 4.4 9.4 4 10 4C10.6 4 11 4.4 11 5V8C11 8.6 10.6 9 10 9ZM10 13C9.4 13 9 12.6 9 12V11C9 10.4 9.4 10 10 10C10.6 10 11 10.4 11 11V12C11 12.6 10.6 13 10 13Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Stats-->
															<div class="m-0">
																<!--begin::Number-->
																<span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">4,7</span>
																<!--end::Number-->
																<!--begin::Desc-->
																<span class="text-gray-500 fw-semibold fs-6">Avg. Score</span>
																<!--end::Desc-->
															</div>
															<!--end::Stats-->
														</div>
														<!--end::Items-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-6">
														<!--begin::Items-->
														<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-30px me-5 mb-8">
																<span class="symbol-label">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-primary">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z" fill="currentColor" />
																			<path d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Stats-->
															<div class="m-0">
																<!--begin::Number-->
																<span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">822</span>
																<!--end::Number-->
																<!--begin::Desc-->
																<span class="text-gray-500 fw-semibold fs-6">Hours Learned</span>
																<!--end::Desc-->
															</div>
															<!--end::Stats-->
														</div>
														<!--end::Items-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Stats-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Lists Widget 19-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
							
								<!--end::Col-->
							</div>
							<!--end::Row-->
						
								

							</div>
							<!--end::Row-->
							
						
							<!--end::Modals-->
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
		
	
		<!--end::Drawers-->
		<!--end::Main-->
		<!--begin::Engage drawers-->
		<!--begin::Help drawer-->
		<div id="kt_help" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="help" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'md': '525px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_help_toggle" data-kt-drawer-close="#kt_help_close">
			<!--begin::Card-->
			<div class="card shadow-none rounded-0 w-100">
				<!--begin::Header-->
				<div class="card-header" id="kt_help_header">
					<h5 class="card-title fw-semibold text-gray-600">Notificacion para los usuarios</h5>
					<div class="card-toolbar">
						<button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_help_close">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-2">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body" id="kt_help_body">
					<!--begin::Content-->
					<div id="kt_help_scroll" class="hover-scroll-overlay-y" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_help_body" data-kt-scroll-dependencies="#kt_help_header" data-kt-scroll-offset="5px">
						<!--begin::Support-->
						<div class="rounded border border-dashed border-gray-300 p-6 p-lg-8 mb-10">
							
							<!--begin::Description-->
							<div class="fs-5 fw-semibold mb-5">
								<span class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur fugit ratione quaerat, recusandae quos officiis esse, nemo commodi debitis eaque veniam suscipit excepturi consequuntur deleniti exercitationem autem distinctio voluptatibus necessitatibus?</span>
								
							</div>
							
						</div>
						<!--end::Support-->
						
						<!--begin::Card toolbar-->
								<div class="card-toolbar">
									<!--begin::Toolbar-->
									<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
										<!--begin::Filter-->
										<button type="button" class="btn btn-light-primary me-3"
											data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
											<span class="svg-icon svg-icon-2">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
														rx="1" transform="rotate(-90 11.364 20.364)"
														fill="currentColor" />
													<rect x="4.36396" y="11.364" width="16" height="2" rx="1"
														fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->Crear Notificacion
										</button>
										<!--begin::Menu 1-->
										<div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px"
											data-kt-menu="true">
											<!--begin::Header-->
											<div class="px-7 py-5">
												<div class="fs-5 text-dark fw-bold">Nueva Notificacion</div>
											</div>
											<!--end::Header-->
											<!--begin::Separator-->
											<div class="separator border-gray-200"></div>
											<!--end::Separator-->
											<!--begin::Content-->
											<div class="px-7 py-5" data-kt-user-table-filter="form">
												<!--begin::Input group-->
												<div class="mb-10">
												<input type="hidden" class="form-control form-control-lg form-control-solid"
												name="id" id="id"
												placeholder="Id del funcionario campo oculto" value="<?= session()->get('id') ?>" />
													<label class="form-label fs-6 fw-semibold"><i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
													title="Indicar que entidades podran ver la notificacion"></i>Destinatario:</label>
													<select id="destino" name="destino" class="form-select form-select-solid fw-bold"
														data-kt-select2="true" data-placeholder="Select option"
														data-allow-clear="true" data-kt-user-table-filter="role"
														data-hide-search="true">
														  <?php foreach ($datos1 as $opcion): ?>
																   <option value="<?php echo $opcion->id ?>"><?php echo $opcion->nombre ?></option>
														  <?php endforeach; ?>
													</select>
													<label class="form-label fs-6 fw-semibold">
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
													title="Dar un titulo corto para la notificacion"></i>Titulo:
														</label>
													<input type="text" class="form-control form-control-lg form-control-solid"
													name="titulo" id="titulo" placeholder="Ingresar un titulo a la notificacion" />
											
													<label class="form-label fs-6 fw-semibold"><i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
													title="Dar la descripcion de la notificacion lo mas corto posible "></i>Descripcion:</label>   
													<textarea id="descripcion" name="descripcion" class="form-control"
													  style="resize: vertical; height: 150px;"
													  placeholder="Ingrese una descripción de la notificacion"></textarea>                                          
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-10">
													<label class="form-label fs-6 fw-semibold"><i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
													title="Indicar la prioridad de la notificacion"></i>Prioridad</label>
													<select id="prioridad" name="prioridad" class="form-select form-select-solid fw-bold"
														data-kt-select2="true" data-placeholder="Select option"
														data-allow-clear="true" data-kt-user-table-filter="two-step"
														data-hide-search="true">
														<option value="alta">Alta</option>
														<option value="media">Media</option>
														<option value="baja">Baja</option>
													</select>
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex justify-content-end">
													<button type="reset"
														class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6"
														data-kt-menu-dismiss="true"
														data-kt-user-table-filter="reset">Cerrar</button>
													<button type="submit" name="enviar" id="enviar" class="btn btn-primary fw-semibold px-6"
														data-kt-menu-dismiss="true"
														data-kt-user-table-filter="filter">Enviar</button>
												</div>
												<!--end::Actions-->
											</div>
											<!--end::Content-->
										</div>
										<!--end::Menu 1-->
										<!--end::Filter-->
							   
									</div>
								</div>
								<!--end::Card toolbar-->
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
											<th class="min-w-125px">Titulo</th>
											<th class="min-w-125px">Descripcion</th>
											<th class="min-w-125px">Destinatario</th>
											<th class="min-w-125px">Fecha</th>
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
				<!--end::Body-->
			</div>
			<!--end::Card-->
		</div>
		<!--end::Help drawer-->
		<!--end::Engage drawers-->
		<!--begin::Engage toolbar-->
		<div class="engage-toolbar d-flex position-fixed px-5 fw-bold zindex-2 top-50 end-0 transform-90 mt-5 mt-lg-20 gap-2">
			
			<!--begin::Help drawer toggle-->
			<button id="kt_help_toggle" class="engage-help-toggle btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 shadow-sm px-5 rounded-top-0" title="Sector para notificaciones a los usuarios " data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">Notificaciones</button>
			<!--end::Help drawer toggle-->
		</div>
		<!--end::Engage toolbar-->
		
		<!--end::Modals-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>

		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used by this page)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
	
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used by this page)-->
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		
		


		<script>
		var datoAFiltrar = '<?php echo $notificaciones; ?>';
		console.log("Valor de mensaje:", datoAFiltrar);
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
					// Aquí puedes proporcionar la URL del controlador que maneja la solicitud AJAX
					url: "/listadoNotificaciones",
					data: function (d) {
						// Envía el dato que deseas filtrar como un parámetro GET
						d.dato_a_filtrar = datoAFiltrar;
					}
				},
				columns: [

					{ data: 'id' },
					{ data: 'funcionario' },
					{ data: 'titulo' },
					{ data: 'descripcion' },
					{ data: 'destinatario' },
					{ data: 'created_at' },
				],
			
				columnDefs: [
					{
						targets: 6,
						orderable: false,
						render: function (data) {
							return ` <div class="text-end">
					<div class="btn-group">
						<button type="button" class="btn btn-light btn-active-light-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Acción
						</button>
						<div class="dropdown-menu dropdown-menu-end">
							<a class="dropdown-item" data-bs-toggle="modal" href="#editar_venta_modal" data-id="" data-nombre="" data-url="acevm" id="editar">Editar</a>
							<a class="dropdown-item" href="javascript:;" id="eliminar" data-kt-users-table-filter="delete_row" data-id="" data-nombre="">Eliminar</a>
						</div>
					</div>
				</div>`;
						}
					},
				],


			});

			handleSearchDatatable();
			recargarTabla();
		});



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
* funcion para armar el json y mandar al controlador y posterior al modelo y BD
********************************************************************************* */

		$('#enviar').click(function () {
			// Obtener los valores de los campos de texto, botones de radio, área de texto y el combo
			var otherData = {
				id_usuario: document.getElementById("id").value,
				titulo: document.getElementById("titulo").value,
				descripcion: document.getElementById("descripcion").value,
				prioridad: document.getElementById("prioridad").value,
				destinatario: document.getElementById("destino").value,
			};


			// Combinar los datos en un objeto único
			var formData = {
			   
				otherData: otherData
			};

			// Convertir el objeto en una cadena JSON
			var jsonData = JSON.stringify(formData);

			console.log("JSON enviado al servidor:", jsonData);

			// Enviar los datos mediante una solicitud AJAX
			var xhr = new XMLHttpRequest();
			xhr.open("POST", "/crearnotificacion", true);
			xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
			xhr.onreadystatechange = function () {
				if (xhr.readyState === 4 && xhr.status === 200) {
					// Manejar la respuesta del servidor si es necesario
					console.log(xhr.responseText);
				}

			};
			xhr.send(jsonData);
		});

		$('iframe').hide();
$(document).ready(function(){
  $('form').submit(function(e){
	e.preventDefault();
	let getURL = $('.url').val();
	let newURL = getURL.replace("watch?v=", "embed/");
	$('iframe').attr( "src", newURL ).show();
  });
});
/********************************************************************************
*Proceso de envio del dato url a la base de datos
********************************************************************************* */
		$('#guardarVideo').click(function () {
			// Obtener los valores de los campos de texto, botones de radio, área de texto y el combo
			var otherData = {
				id_usuario: document.getElementById("id").value,
				url: document.getElementById("url").value,
			};
			// Combinar los datos en un objeto único
			var formData = {
				otherData: otherData
			};

			// Convertir el objeto en una cadena JSON
			var jsonData = JSON.stringify(formData);

			console.log("JSON enviado al servidor:", jsonData);

			// Enviar los datos mediante una solicitud AJAX
			var xhr = new XMLHttpRequest();
			xhr.open("POST", "/ingresarUrl", true);
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
*recepcion de json para ver los videos
********************************************************************************* */

$('iframe').hide();
$(document).ready(function(){
  $('form').submit(function(e){
    e.preventDefault();
    let getURL = $('.url').val();
    let newURL = getURL.replace("watch?v=", "embed/");
    $('iframe').attr( "src", newURL ).show();
  });
});

	

		</script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>