<?php

/**
 * Fired during plugin activation
 *
 * @link       youtube.com
 * @since      1.0.0
 *
 * @package    Review_Carousel
 * @subpackage Review_Carousel/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Review_Carousel
 * @subpackage Review_Carousel/includes
 * @author     Hafed benchellali <hafed.benchellali@gmail.com>
 */
class Review_Carousel_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
        global $wpdb;
		$table_name = $wpdb->prefix . "hb_review_carousel"; 

		$charset_collate = $wpdb->get_charset_collate();

		$sql = "CREATE TABLE $table_name ( `id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(100) NOT NULL , `content` TEXT NOT NULL , `author` VARCHAR(40) NOT NULL , `rate` INT NOT NULL , PRIMARY KEY (`id`)) $charset_collate";

		require_once(ABSPATH.'wp-admin/includes/upgrade.php');
		dbDelta( $sql );

	}

}
