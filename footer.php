</main>

<?php do_action( 'boston_treks_content_end' ); ?>

</div>

<footer id="colophon" class="footer footer-center p-4 bg-base-300 text-base-content" role="contentinfo">
	<?php do_action( 'boston_treks_footer' ); ?>
	<div>
		<p>&copy; <?php echo date_i18n( 'Y' ) . ' ' . get_bloginfo( 'name' ); ?></p>
	</div>
</footer>

<nav class="btm-nav sticky bottom-0 flex md:hidden bg-neutral text-neutral-content">
	<a href="<?php echo home_url(); ?>"
	   class="<?php echo is_front_page() || is_home() ? 'active' : ''; ?>">
		<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
		     stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
			      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
		</svg>
		<span class="btm-nav-label">Dashboard</span>
	</a>
	<a href="/discover"
	   class="<?php echo get_post_field( 'post_name', get_post() ) === 'discover' ? 'active' : ''; ?>">
		<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
		     stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round"
			      d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
		</svg>

		<span class="btm-nav-label">Discover</span>
	</a>
	<a href="/profile"
	   class="<?php echo get_post_field( 'post_name', get_post() ) === 'profile' ? 'active' : ''; ?>">
		<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
		     stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round"
			      d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"/>
		</svg>

		<span class="btm-nav-label">Profile</span>
	</a>
</nav>

<?php do_action( 'boston_treks_content_after' ); ?>

</div>

<?php wp_footer(); ?>

</body>
</html>
