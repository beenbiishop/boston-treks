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
	   class="<?php echo is_front_page() ? 'active bg-neutral-focus' : ''; ?>">
		<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
			      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
		</svg>
		<span class="btm-nav-label">Dashboard</span>
	</a>
	<a href="/hello" class="<?php echo basename( get_permalink() ) === 'hello' ? 'active bg-neutral-focus' : ''; ?>">
		<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
			      d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
		</svg>
		<span class="btm-nav-label">Hello</span>
	</a>
	<a href="/about" class="<?php echo basename( get_permalink() ) === 'about' ? 'active bg-neutral-focus' : ''; ?>">
		<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
			      d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
		</svg>
		<span class="btm-nav-label">About</span>
	</a>
</nav>

<?php do_action( 'boston_treks_content_after' ); ?>

</div>

<?php wp_footer(); ?>

</body>
</html>
