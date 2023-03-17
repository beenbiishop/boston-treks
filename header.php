<!DOCTYPE html>
<html <?php language_attributes(); ?> data-theme="">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="apple-touch-icon" sizes="180x180"
	      href="<?php echo get_template_directory_uri() . '/assets/images/favicons/apple-touch-icon.png'; ?>">
	<link rel="icon" type="image/svg+xml"
	      href="<?php echo get_template_directory_uri() . '/assets/images/favicons/favicon.svg'; ?>">
	<link rel="icon" type="image/png"
	      href="<?php echo get_template_directory_uri() . '/assets/images/favicons/favicon.png'; ?>">
	<link rel="manifest"
	      href="<?php echo get_template_directory_uri() . '/assets/images/favicons/manifest.json'; ?>">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri() . '/assets/images/favicons/safari-pinned-tab.svg'; ?>"
	      color="#1e293b">
	<meta name="theme-color" media="(prefers-color-scheme: dark)" content="#1e293b">
	<meta name="theme-color" media="(prefers-color-scheme: light)" content="#021431">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'h-full bg-base-100 text-base-content overflow-x-clip transition-all duration-100 antialiased' ); ?>>

<?php do_action( 'boston_treks_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col relative">

	<?php do_action( 'boston_treks_header' ); ?>

	<header
		class="primary-header sticky top-0 z-30 flex h-20 w-full justify-center bg-neutral text-neutral-content">
		<nav class="navbar container mx-auto">
			<div class="navbar-start">
				<div title="Change Theme" class="dropdown inline-block md:hidden">
					<div tabindex="0" class="btn btn-ghost gap-1.5 normal-case">
						<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
						     class="light-parent hidden h-6 w-6"
						     viewBox="0 0 16 16">
							<path
								d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
						     class="dark-parent hidden h-5 w-5"
						     viewBox="0 0 16 16">
							<path
								d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
							<path
								d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
						     class="auto-parent hidden h-5 w-5"
						     viewBox="0 0 16 16">
							<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
						</svg>
					</div>
					<ul class="menu dropdown-content mt-1.5 p-2 bg-base-200 text-base-content rounded-box overflow-y-auto"
					    tabindex="0">
						<li>
							<button class="light-button" data-set-theme="winter" data-act-class="active">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-6 w-6"
								     viewBox="0 0 16 16">
									<path
										d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
								</svg>
								Light
							</button>
						</li>
						<li>
							<button class="dark-button" data-set-theme="night" data-act-class="active">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5"
								     viewBox="0 0 16 16">
									<path
										d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
									<path
										d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
								</svg>
								Dark
							</button>
						</li>
						<li>
							<button class="auto-button" data-set-theme="" data-act-class="active">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5"
								     viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
								</svg>
								Auto
							</button>
						</li>
					</ul>
				</div>
				<div class="dropdown hidden md:block">
					<span class="tooltip tooltip-bottom before:text-xs before:content-[attr(data-tip)]" data-tip="Menu">
						<label tabindex="0" class="btn btn-ghost btn-square">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
						     stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							      d="M4 6h16M4 12h16M4 18h7"/>
						</svg>
						</label>
					</span>
					<?php
					if ( is_user_logged_in() ) {
						wp_nav_menu( array(
							'menu_class'     => 'menu dropdown-content w-40 mt-1.5 p-2 bg-base-200 text-base-content rounded-box',
							'submenu_class'  => 'rounded-box p-2 bg-base-200 text-base-content',
							'theme_location' => 'main',
							'container'      => 'false',
							'fallback_cb'    => false,
							'depth'          => 1,
						) );
					} else {
						wp_nav_menu( array(
							'menu_class'     => 'menu dropdown-content w-40 mt-1.5 p-2 bg-base-200 text-base-content rounded-box',
							'submenu_class'  => 'rounded-box p-2 bg-base-200 text-base-content',
							'theme_location' => 'logged-out',
							'container'      => 'false',
							'fallback_cb'    => false,
							'depth'          => 1,
						) );
					}
					?>
				</div>
			</div>
			<div class="navbar-center">
				<a class="btn btn-ghost" href="<?php echo home_url(); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
					     class="logo-text h-5 lg:h-6 fill-text-base-content"
					     viewBox="0 0 919.14 88.93">
						<path
							d="m138.01,26.4c.94-.54,1.98.51,1.44,1.44l-11.89,20.79c-.42.73-1.02,1.33-1.74,1.74l-20.83,11.91c-.92.53-1.95-.5-1.43-1.42l11.9-20.82c.42-.74,1.03-1.35,1.77-1.77l20.78-11.88Z"/>
						<path
							d="m386.04,26.4c.94-.54,1.98.51,1.44,1.44l-11.89,20.79c-.42.73-1.02,1.33-1.74,1.74l-20.83,11.91c-.92.53-1.95-.5-1.43-1.42l11.9-20.82c.42-.74,1.03-1.35,1.77-1.77l20.78-11.88Z"/>
						<path
							d="m0,1.9h36.03c8.92,0,15.7,2.38,20.45,7.37,3.45,3.57,5.47,8.44,5.47,14.51,0,9.39-5.23,15.22-13.67,17.83v.36c9.63,2.26,17.12,9.15,17.12,20.57,0,6.54-2.26,12.13-6.18,16.29-4.76,5.11-12.13,8.08-21.28,8.08H0V1.9Zm34.72,36.38c10.34,0,16.53-5.11,16.53-13.91,0-8.2-5.59-13.2-15.1-13.2H10.7v27.11h24.02Zm2.74,39c6.06,0,10.46-1.55,13.32-4.28,2.38-2.5,3.8-5.83,3.8-9.87,0-10.58-7.49-15.81-17.83-15.81H10.7v29.96h26.75Z"/>
						<path
							d="m79.9,44.35C79.9,18.9,95.83,0,121.52,0s41.61,18.9,41.61,44.35-15.93,44.35-41.61,44.35-41.61-18.9-41.61-44.35Zm72.29,0c0-19.97-10.7-35.07-30.67-35.07s-30.68,15.1-30.68,35.07,10.7,34.96,30.68,34.96,30.67-14.98,30.67-34.96Z"/>
						<path
							d="m176.45,58.14h10.46c1.43,14.39,10.23,21.88,26.28,21.88,11.77,0,20.21-5.35,20.21-15.93,0-11.65-10.23-14.39-25.44-17.72-14.98-3.33-27.82-7.61-27.82-23.66,0-14.03,11.65-22.47,28.89-22.47,21.28,0,30.08,10.82,32.22,26.51h-10.11c-1.55-12.13-9.39-18.19-21.88-18.19-11.53,0-19.14,4.88-19.14,13.67,0,9.63,9.51,12.48,22.23,14.98,16.53,3.33,31.63,7.37,31.63,26.51,0,15.93-12.96,24.85-31.27,24.85-23.9,0-35.31-13.32-36.26-30.44Z"/>
						<path d="m252.67,1.9h67.3v9.39h-28.3v75.62h-10.7V11.29h-28.3V1.9Z"/>
						<path
							d="m327.93,44.35c0-25.44,15.93-44.35,41.61-44.35s41.61,18.9,41.61,44.35-15.93,44.35-41.61,44.35-41.61-18.9-41.61-44.35Zm72.29,0c0-19.97-10.7-35.07-30.67-35.07s-30.68,15.1-30.68,35.07,10.7,34.96,30.68,34.96,30.67-14.98,30.67-34.96Z"/>
						<path
							d="m429.83,1.9h11.29l38.76,59.09c2.85,4.4,6.18,10.94,6.18,10.94h.24V1.9h9.99v85.01h-10.94l-39-59.21c-2.74-4.16-6.3-10.58-6.3-10.58h-.24v69.79h-9.99V1.9Z"/>
						<path
							d="m555.99,19.5h-23.9l3.33-17.6h68.72l-3.33,17.6h-24.14l-13.08,67.41h-20.69l13.08-67.41Z"/>
						<path
							d="m617.58,1.9h35.19c16.65,0,27.94,8.2,27.94,22.71,0,12.48-6.66,19.38-17.95,22.71v.36c6.54,2.38,10.11,7.49,10.11,16.05,0,4.28-.59,10.94-.59,16.41,0,2.97.59,4.99,1.66,5.71v1.07h-20.57c-.83-1.07-1.07-3.45-1.07-5.94,0-4.28.48-9.99.48-14.74,0-7.25-3.33-11.29-11.65-11.29h-13.08l-6.06,31.98h-20.81L617.58,1.9Zm13.55,37.69h15.34c7.25,0,13.44-3.45,13.44-11.77,0-5.94-3.45-9.39-10.34-9.39h-14.39l-4.04,21.16Z"/>
						<path
							d="m701.88,1.9h61.71l-3.33,17.12h-40.9l-2.97,15.58h35.19l-3.09,16.17h-35.31l-3.57,18.43h42.33l-3.45,17.72h-63.01L701.88,1.9Z"/>
						<path
							d="m799.38,49.58l-9.27,8.44-5.59,28.89h-20.81L780.12,1.9h20.81l-6.06,31.39,33.29-31.39h24.61l-37.33,34.12,23.66,50.89h-22.71l-17-37.33Z"/>
						<path
							d="m845.04,60.16h20.81c-.24,8.8,6.54,12.25,15.93,12.25,7.01,0,13.67-2.26,13.67-9.16,0-4.99-5.11-7.25-16.76-11.41-15.22-5.35-24.85-10.82-24.85-24.61,0-17.6,13.67-26.87,32.58-26.87,16.53,0,33.53,6.42,32.7,26.16h-20.21c.12-6.66-4.76-10.34-13.2-10.34-5.35,0-11.77,2.14-11.89,8.08,0,5.11,4.64,6.3,18.19,10.94,14.39,4.99,24.61,11.06,24.61,25.09,0,19.26-16.17,28.65-35.43,28.65s-36.86-7.37-36.14-28.77Z"/>
					</svg>
				</a>
			</div>
			<div class="navbar-end">
				<div title="Change Theme"
				     class="dropdown dropdown-end hidden md:inline-block tooltip tooltip-bottom before:text-xs before:content-[attr(data-tip)]"
				     data-tip="Theme">
					<div tabindex="0" class="btn btn-ghost gap-1.5 normal-case">
						<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
						     class="light-parent hidden h-6 w-6"
						     viewBox="0 0 16 16">
							<path
								d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
						     class="dark-parent hidden h-5 w-5"
						     viewBox="0 0 16 16">
							<path
								d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
							<path
								d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
						     class="auto-parent hidden h-5 w-5"
						     viewBox="0 0 16 16">
							<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
						</svg>
						<svg width="12px" height="12px"
						     class="ml-1 inline-block h-3 w-3 fill-current opacity-60"
						     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2048 2048">
							<path d="M1799 349l242 241-1017 1017L7 590l242-241 775 775 775-775z"></path>
						</svg>
					</div>
					<ul class="menu dropdown-content mt-1.5 p-2 bg-base-200 text-base-content rounded-box overflow-y-auto"
					    tabindex="0">
						<li>
							<button class="light-button" data-set-theme="winter" data-act-class="active">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-6 w-6"
								     viewBox="0 0 16 16">
									<path
										d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
								</svg>
								Light
							</button>
						</li>
						<li>
							<button class="dark-button" data-set-theme="night" data-act-class="active">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5"
								     viewBox="0 0 16 16">
									<path
										d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
									<path
										d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
								</svg>
								Dark
							</button>
						</li>
						<li>
							<button class="auto-button" data-set-theme="" data-act-class="active">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5"
								     viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
								</svg>
								Auto
							</button>
						</li>
					</ul>
				</div>
				<?php
				if ( ! is_user_logged_in() ) { ?>
					<a tabindex="0" class="btn btn-ghost btn-square" href="<?php echo wp_login_url(); ?>">
						<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-6 w-6"
						     viewBox="0 0 16 16">
							<path fill-rule="evenodd"
							      d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
							<path fill-rule="evenodd"
							      d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
						</svg>
					</a>
				<?php } else { ?>
					<div class="dropdown dropdown-end ml-1 lg:ml-2">
						<label tabindex="0" class="btn btn-ghost btn-circle avatar">
							<div class="w-10 rounded-full">
								<img src="<?php
								echo get_avatar_url( wp_get_current_user()->ID );
								?>"/>
							</div>
						</label>
						<ul class="menu dropdown-content mt-1.5 p-2 w-40 bg-base-200 text-base-content rounded-box">
							<li><a href="/profile">Profile</a></li>
							<li><a href="<?php echo wp_logout_url( home_url() ); ?>">Log Out</a></li>
						</ul>
					</div>
					<?php
				} ?>
			</div>
		</nav>
	</header>


	<div id="content" class="site-content flex flex-col flex-grow min-h-full">

		<?php do_action( 'boston_treks_content_start' ); ?>

		<main class="flex flex-col flex-grow min-h-full">