<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'boston_treks_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'boston_treks_header' ); ?>

	<header class="bg-base-100 text-base-content">
		<div class="navbar container mx-auto">
			<div class="navbar-start">
				<div class="dropdown">
					<label tabindex="0" class="btn btn-ghost lg:hidden">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
						     stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							      d="M4 6h16M4 12h8m-8 6h16"/>
						</svg>
					</label>
					<ul tabindex="0"
					    class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
						<li><a>Item 1</a></li>
						<li tabindex="0">
							<a class="justify-between">
								Parent
								<svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
								     viewBox="0 0 24 24">
									<path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z"/>
								</svg>
							</a>
							<ul class="p-2 bg-base-200">
								<li><a>Submenu 1</a></li>
								<li><a>Submenu 2</a></li>
							</ul>
						</li>
						<li><a>Item 3</a></li>
					</ul>
				</div>
				<a class="btn btn-ghost normal-case text-xl"><?php echo get_bloginfo( 'name' ); ?></a>
			</div>
			<div class="navbar-center hidden lg:flex">
				<ul class="menu menu-horizontal px-1">
					<li><a>Item 1</a></li>
					<li tabindex="0">
						<a>
							Parent
							<svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
							     viewBox="0 0 24 24">
								<path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/>
							</svg>
						</a>
						<ul class="p-2 bg-base-100">
							<li><a>Submenu 1</a></li>
							<li><a>Submenu 2</a></li>
						</ul>
					</li>
					<li><a>Item 3</a></li>
				</ul>
			</div>
			<div class="navbar-end">
				<div class="dropdown dropdown-end">
					<label tabindex="0" class="btn btn-ghost btn-circle avatar">
						<div class="w-10 rounded-full">
							<img src="<?php echo get_avatar_url( get_current_user_id(), array( 'size' => 96 ) ); ?>>"/>
						</div>
					</label>
					<ul tabindex="0"
					    class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
						<li>
							<a class="justify-between">
								Profile
								<span class="badge">New</span>
							</a>
						</li>
						<li><a>Settings</a></li>
						<li><a>Logout</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>

	<div id="content" class="site-content flex-grow">

		<?php do_action( 'boston_treks_content_start' ); ?>

		<main>
