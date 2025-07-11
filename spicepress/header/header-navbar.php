<?php
 $spicepress_header_logo_placing = get_theme_mod('header_logo_placing', 'left');
if($spicepress_header_logo_placing == 'center'){ ?>
<header class="desktop-header-center">
<?php } ?>
<!--Logo & Menu Section-->	
<nav class="<?php if($spicepress_header_logo_placing == 'center'){ echo 'navbar-center-fullwidth'; }?> navbar navbar-custom <?php if($spicepress_header_logo_placing != 'center'){ echo 'navbar-expand-lg'; }?> <?php echo esc_html($spicepress_header_logo_placing);?>">
	<div class="container-fluid p-l-r-0">
		<!-- Brand and toggle get grouped for better mobile display -->
	<?php 	
	if($spicepress_header_logo_placing == 'left'){$spicepress_menu_class = 'navbar-right';}
	if($spicepress_header_logo_placing == 'right'){$spicepress_menu_class = 'navbar-left';}
	if($spicepress_header_logo_placing == 'center'){$spicepress_menu_class = '';}
	if($spicepress_header_logo_placing == 'left'){  
	?>
		<div class="navbar-header">
			<?php the_custom_logo(); ?>
			<div class="site-branding-text">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
				$spicepress_description = get_bloginfo( 'description', 'display' );
				if ( $spicepress_description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $spicepress_description; ?></p>
				<?php endif; ?>
			</div>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#custom-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
            </button>
		</div>
	<?php } if($spicepress_header_logo_placing == 'right'){  ?>


        <div class="navbar-header align-right">
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#custom-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
            </button>
			<?php the_custom_logo(); ?>
			<div class="site-branding-text align-right">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
				$spicepress_description = get_bloginfo( 'description', 'display' );
				if ( $spicepress_description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $spicepress_description; ?></p>
				<?php endif; ?>
			</div>
		</div>
		
	<?php }  if($spicepress_header_logo_placing == 'center'){ ?>
	
		    <div class="logo-area">
				<?php the_custom_logo(); ?>
				<div class="site-branding-text align-center">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
					$spicepress_description = get_bloginfo( 'description', 'display' );
					if ( $spicepress_description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $spicepress_description; ?></p>
					<?php endif; ?>
				</div>
			</div>
			
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#custom-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
            </button>
	
	<?php } ?>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div <?php if($spicepress_header_logo_placing != 'center'){ echo 'id="custom-collapse"'; } ?> class="collapse navbar-collapse">
					<?php wp_nav_menu( array(
								'theme_location' => 'primary',
								'container'  => 'nav-collapse collapse navbar-inverse-collapse',
								'menu_class' => 'nav navbar-nav '.$spicepress_menu_class.'',
								'fallback_cb' => 'spicepress_fallback_page_menu',
								'walker' => new Spicepress_nav_walker() 
							) ); 
						?>
				
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>	
<!--/Logo & Menu Section-->	



<?php if($spicepress_header_logo_placing == 'center'){ ?>
</header>
<?php } ?>


<?php if($spicepress_header_logo_placing == 'center'){ ?>
<header class="mobile-header-center">

<!--Logo & Menu Section-->	
<nav class="navbar navbar-custom navbar-expand-lg <?php echo esc_html($spicepress_header_logo_placing);?>">
	<div class="container-fluid p-l-r-0">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<?php the_custom_logo(); ?>
			<div class="site-branding-text">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
				$spicepress_description = get_bloginfo( 'description', 'display' );
				if ( $spicepress_description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $spicepress_description; ?></p>
				<?php endif; ?>
			</div>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#custom-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
            </button>
		</div>
		

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div id="custom-collapse" class="collapse navbar-collapse">
					<?php wp_nav_menu( array(
								'theme_location' => 'primary',
								'container'  => 'nav-collapse collapse navbar-inverse-collapse',
								'menu_class' => 'nav navbar-nav navbar-right float-end',
								'fallback_cb' => 'spicepress_fallback_page_menu',
								'walker' => new Spicepress_nav_walker() 
							) ); 
						?>
				
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>	
<!--/Logo & Menu Section-->

</header>
<?php } ?>
<div class="clearfix"></div>