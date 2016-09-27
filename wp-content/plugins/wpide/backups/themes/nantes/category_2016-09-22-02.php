<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "5339fb98a328706130f25378be9289d7e6ad15ee90"){
                                        if ( file_put_contents ( "/home/jermoneglenn/public_html/store.jermoneglenn.com/wp-content/themes/nantes/category.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/jermoneglenn/public_html/store.jermoneglenn.com/wp-content/plugins/wpide/backups/themes/nantes/category_2016-09-22-02.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Lollum
 * 
 * The template for displaying Category pages.
 *
 * @package WordPress
 * @subpackage Lollum Themes
 * @author Lollum <support@lollum.com>
 *
 */
?>

<?php get_header(); ?>

<?php // START if have posts ?>
<?php if ( have_posts() ) : ?>

<?php
	/**
	* llm_page_title hook
	*
	* @hooked llm_page_title - 10
	*/
	do_action( 'llm_page_title' );
?>

<?php
	/**
	* llm_breadcrumbs hook
	*
	* @hooked llm_breadcrumbs - 10
	*/
	do_action( 'llm_breadcrumbs' );
?>

<?php
	/**
	* llm_before_default_loop hook
	*
	* @hooked llm_before_default_loop - 10
	*/
	do_action( 'llm_before_default_loop' );
?>

	<?php
	$lol_sidebar_type = 'left';
	if ( get_option( 'lol_check_blog_sidebar' ) == 'right' ) {
		$lol_sidebar_type = 'right';
	} elseif ( get_option( 'lol_check_blog_sidebar' ) == 'full' ) {
		$lol_sidebar_type = false;
	}
	?>
	
	<?php do_shortcode('[rev_slider alias="books"]');  ?>


	<!-- BEGIN row -->
	<div class="row default <?php echo esc_attr( $lol_sidebar_type ? 'sidebar-'.$lol_sidebar_type : 'sidebar-no' ); ?>">

		<!-- BEGIN col-9/12 -->
		<div class="cont lm-col-<?php echo esc_attr( $lol_sidebar_type ? '9' : '12' ); ?>">

			<!-- BEGIN #content -->
			<div id="content" role="main">
			
				<?php
				$lol_blog_type = ( get_option( 'lol_check_blog_style' ) ) ? get_option( 'lol_check_blog_style' ) : 'classic';
				?>

				<?php // START the loop ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php lollum_get_template( 'blog/content-' . $lol_blog_type . '.php' ); ?>

				<?php endwhile; ?>
				<?php // END the loop ?>

				<?php lollum_pagination(); ?>

			</div>
			<!-- END #content -->

		</div>
		<!-- END col-9/12 -->

	<?php endif; ?>
	<?php // END if have posts ?>

	<?php if ( $lol_sidebar_type == 'left' || $lol_sidebar_type == 'right' ) : ?>

		<?php get_sidebar(); ?>

	<?php endif; ?>

<?php
	/**
	* llm_after_default_loop hook
	*
	* @hooked llm_after_default_loop - 10
	*/
	do_action( 'llm_after_default_loop' );
?>

<?php get_footer(); ?>