<header id="masthead" class="site-header">
		<div class="site-branding">
		<?php
			the_custom_logo();
		?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars"></i></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'Main Menu',
				'menu_id'        => 'primary-menu'
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->