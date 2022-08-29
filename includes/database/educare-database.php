<?php

// Educare default settings
require_once(EDUCARE_INC.'database/default-settings.php');


/** =====================( Functions Details )======================
	
	### Check educare database version

	* @since 1.2.0
	* @last-update 1.2.0

	* @return void
	
===================( function for check database version )=================== **/

function educare_database_check($db) {
	global $wpdb;
	$table = $wpdb->prefix.__($db);

	// if database not exists
	if ($wpdb->get_var("SHOW TABLES LIKE '$table'") != $table) {
		// database not exists
	 return true;
	} else {
		// if database exists, and check (educare) database version
		$info = educare_check_status('educare_info');
		// if database version exists, that's mean our database version 1.2.0+ otherwise our database is old. (educare) old databse not support educare_info key.

		if ($info) {

			if ($db == 'educare_settings') {
				$current_db = EDUCARE_SETTINGS_VERSION;
			} else {
				$current_db = EDUCARE_RESULTS_VERSION;
			}

			$istaled_db = $info->$db;
			// if database db_version exists. check if our current (educare) database version 1.0+ or not. if is less then 1.0 then return TRUE. and create/insert our latest database

			if (!($current_db <= $istaled_db)) {
				return true;
			}
			
		} else {
			// old (educare) databas
			return true;
		}
		
	}
}



/** =====================( Functions Details )======================
	
	# Create educare database for store result and settings data

	* @since 1.0.0
	* @last-update 1.2.0

	* @return void
	
===================( function for educare database )=================== **/

// Create table for results system
function educare_database_table() {

  global $wpdb;
  $charset_collate = $wpdb->get_charset_collate();

  $Educare_results = $wpdb->prefix."Educare_results";
   
	$table1 = "CREATE TABLE $Educare_results (
		id mediumint(11) NOT NULL AUTO_INCREMENT,
		Name varchar(80) NOT NULL,
		Roll_No varchar(80) NOT NULL,
		Regi_No varchar(80) NOT NULL,
		Class varchar(80) NOT NULL,
		Exam varchar(80) NOT NULL,
		Year varchar(80) NOT NULL,
		Details longtext NOT NULL,
		Subject longtext NOT NULL,
		Result varchar(80),
		GPA varchar(80),
		PRIMARY KEY (id)
  ) $charset_collate;";
   
  
  // Create table for educare (plugins) settings
  $Educare_settings = $wpdb->prefix."Educare_settings";

  $table2 = "CREATE TABLE $Educare_settings (
		id int(11) NOT NULL AUTO_INCREMENT,
		list varchar(255) NOT NULL,
		data text NOT NULL,
		PRIMARY KEY (id),
		UNIQUE KEY list (list)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	
	if (educare_database_check('educare_settings')) {
		dbDelta( $table2 );
		dbDelta( $table1 );
	}

	// Set educare default settings
	educare_default_settings();

}


?>