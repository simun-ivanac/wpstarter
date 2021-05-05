<?php
/**
 * The template for displaying the footer
 *
 * Contains <footer> and the closing of the #site-wrapper
 *
 * @package wpstarter
 * @since 1.0.0
 */

?>
    <!-- SITE-FOOTER -->
	<footer id="site-footer" class="site-footer">
        <div class="container">
            <div class="row content-holder">
                <div class="site-info">
                    <p><?php esc_html_e( 'Copyright ' . date("Y") . '&copy; All rights reserved.', 'wpstarter' ); ?></p>
                </div>
            </div>
        </div>
	</footer>
    <!-- !SITE-FOOTER -->

</div>
<!-- !SITE-WRAPPER -->

<?php wp_footer(); ?>

</body>
</html>
