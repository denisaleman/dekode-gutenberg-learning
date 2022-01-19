<?php
/**
 * Dekode Gutenberg Blocks
 *
 * @package   dekode-gutenberg-blocks
 * @author    Denis Fedorov <barmaglot7@gmail.com>
 * @copyright 2022
 * @license   MIT
 * @link      https://www.upwork.com/freelancers/~01ad0e773956a34ffd
 */
?>
<p>
    <?php
    /**
     * @see \DekodeGutenbergBlocks\App\Frontend\Templates
     * @var $args
     */
    echo __( 'This is being loaded inside "wp_footer" from the templates class', 'dekode-gutenberg-blocks' ) . ' ' . $args[ 'data' ][ 'text' ];
    ?>
</p>
