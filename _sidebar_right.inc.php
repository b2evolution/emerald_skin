<?php
/**
 * This is the SIDEBAR include template.
 *
 * This is meant to be included in a page template.
 *
 * @package evoskins
 * @subpackage emerald
 */
if( !defined('EVO_MAIN_INIT') ) die( 'Please, do not access this page directly.' );

// By default, this does nothing.  It's just here to simplify the includes of different sidebars, minimizing edits.

?>

<?php /*
<div id="sidebar"> 
*/ ?>
	<?php
	// ------------------------- SIDEBAR INCLUDED HERE --------------------------
	skin_include( '_sidebar-w-1.inc.php' );
	// Note: You can customize the default BODY footer by copying the
	// _body_footer.inc.php file into the current skin folder.
	// ----------------------------- END OF SIDEBAR -----------------------------

	// ------------------------- SIDEBAR INCLUDED HERE --------------------------
	skin_include( '_sidebar-1.inc.php' );
	// Note: You can customize the default BODY footer by copying the
	// _body_footer.inc.php file into the current skin folder.
	// ----------------------------- END OF SIDEBAR -----------------------------

	// ------------------------- SIDEBAR INCLUDED HERE --------------------------
	skin_include( '_sidebar-2.inc.php' );
	// Note: You can customize the default BODY footer by copying the
	// _body_footer.inc.php file into the current skin folder.
	// ----------------------------- END OF SIDEBAR -----------------------------
	?>

	<div class="clear"></div>
<?php /*
</div> <!-- end of id="sidebar" -->
<div class="clear"></div>
*/ ?>