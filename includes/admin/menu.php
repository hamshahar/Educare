<?php

/** =====================( Functions Details )======================
	
	# Add menu in admin dashboard

	* @since 1.0.0
	* @last-update 1.2.0

	* Valited menu are:
		1. View Results
		2. Add Results
		3. Import Results
		4. Update Results					
		5. Grading Systems (@since 1.2.0)
		6. Settings
		7. About Us
		
	* @return void
	
===================( function for create menu )=================== */

function educare_menu() {
	
	// make educare main menu and sub menu global for Enqueue style & script (educare_enqueue_styles)
	global $educare_main_menu, $view_results, $add_results, $import_results, $update_results, $grading_systems, $settings, $about_educare;
	
	// main menu
	// $educare_main_menu = add_menu_page('View Results', 'Educare', 'manage_options','educare-view-results','view_results',plugins_url('/Educare/assets/img/icon.svg'), 2 /*56*/);
	
	// Register and render admin bar menu items.
	$educare_main_menu = add_menu_page('View Results', 'Educare', 'manage_options','educare-view-results','educare_view_results','data:image/svg+xml;base64,' . base64_encode( '<svg width="12px" height="16px" viewBox="82 400 435 170" xmlns="http://www.w3.org/2000/svg"><g style="fill:rgb(3,62,68);"><path d="M418.44467,317.9751L418.44467,317.9761C418.31454,317.9751,418.18362,318.0045,418.0635,318.06296L417.35266,318.40884L417.3526,318.40985C365.32846,343.71997,313.3797,368.98102,271.30032,386.8293C229.04695,404.75143,196.74103,415.20093,164.41444,425.65497L164.41443,425.65598C164.00667,425.78683,163.75537,426.19574,163.82216,426.61923L163.82985,426.657L163.82898,426.65802C163.83763,426.69968,163.84933,426.74106,163.86386,426.78107L163.86223,426.78207L256.37198,770.7242C256.436,770.9622,256.59756,771.1617,256.81705,771.2737L256.81738,771.2738C256.86386,771.2975,256.90964,771.31586,256.95883,771.33093L256.95966,771.33124C256.99786,771.34283,257.03592,771.3516,257.07462,771.3578L257.07205,771.35876C261.78156,772.4554,266.05475,773.34814,269.48087,773.84705L269.4881,773.848L269.49045,773.849C269.49478,773.84875,269.49915,773.8495,269.50354,773.8501L269.50256,773.8511C272.11896,774.23016,274.238,774.38074,276.05063,774.38074C279.33698,774.38074,281.5517,773.8826,283.70468,773.399L283.72815,773.393L283.77438,773.3799L283.79715,773.37274L283.8,773.37177L283.81528,773.3662L283.84576,773.35443L283.86096,773.3482L512.7343,674.84485L512.7344,674.8458C513.05396,674.7073,513.2609,674.39294,513.2609,674.0449L513.2609,674.04395L513.2573,673.9877L513.2428,673.87616L513.2319,673.8209L489.66898,584.8936L489.6687,584.8914L489.6684,584.8924L489.66827,584.8909L489.66858,584.8919C489.66064,584.86084,489.6511,584.83136,489.64047,584.80347C489.5751,584.63165,489.4556,584.4819,489.29623,584.37976L489.2961,584.37964C489.1703,584.2991,489.0291,584.25385,488.88504,584.2441L488.88556,584.24506C488.8635,584.24255,488.84665,584.24207,488.82632,584.24207C488.75214,584.24207,488.67755,584.2516,488.6053,584.27057L488.60474,584.27075C488.5572,584.28326,488.50848,584.30066,488.4626,584.3217L488.46228,584.32184L333.14273,655.8152L323.7754,620.2788L479.2356,546.93634C479.54037,546.79254,479.73492,546.4859,479.73492,546.14874L479.73492,546.14777L479.73114,546.0906L479.71613,545.97723L479.7049,545.9211L455.08875,454.59793L455.08902,454.59894C455.0848,454.58215,455.07983,454.5656,455.07465,454.5499L455.07452,454.54953C455.01218,454.36163,454.8867,454.19757,454.71448,454.0883L454.71448,454.08826C454.57263,453.99826,454.41046,453.9527,454.24783,453.9527C454.12143,453.9527,453.9947,453.98022,453.87695,454.03564L299.03003,526.92786L289.7757,492.42322L444.17123,419.1143L444.18542,419.10428L444.17133,419.11423C444.54745,418.93564,444.74448,418.516,444.6416,418.11252L444.64163,418.11353L419.28854,318.63092L419.28854,318.63098C419.22498,318.38138,419.05417,318.17297,418.82257,318.0614L418.82236,318.0624L418.80905,318.05502L418.80685,318.05402L418.80624,318.05374C418.69168,318.00146,418.56778,317.9751,418.44467,317.9751L418.44467,317.9761 Z M299.15012,202.52373C299.12158,202.52373,299.09457,202.53683,299.0769,202.5593L153.61266,387.56842C153.59062,387.59647,153.58652,387.6346,153.6021,387.6667C153.61768,387.69876,153.6502,387.71912,153.68587,387.71912L153.74205,387.70026L335.4563,250.25354C335.47604,250.2386,335.489,250.21642,335.49237,250.19188C335.49573,250.16734,335.4892,250.14249,335.47418,250.1228L299.22418,202.5604C299.20673,202.53748,299.17963,202.52394,299.15082,202.52373 Z M175.00084,399.93527L175.00162,399.93567L175.00133,399.9361L175.00084,399.93527 Z M386.5605,242.71208C386.54074,242.71208,386.52118,242.71835,386.50488,242.73047L174.99736,399.92923C174.97356,399.94693,174.96011,399.97443,174.9598,400.00293L174.95804,400.00394L174.95639,400.0055L174.95639,400.0065C174.95639,400.04172,174.97626,400.0739,175.00772,400.08972C175.02094,400.09637,175.03525,400.09964,175.0495,400.09964C175.06464,400.09964,175.0797,400.09595,175.09329,400.08868L175.09155,400.0897L397.36996,300.8017L397.42352,300.69965L386.65198,242.78818C386.6461,242.75658,386.62436,242.73024,386.59445,242.7185C386.58347,242.71419,386.57193,242.71208,386.5605,242.71208 Z M195.48666,195.87526C195.48425,195.87526,195.48181,195.87535,195.47937,195.87555C195.44275,195.87842,195.41124,195.90256,195.39893,195.93716L130.84758,377.26355C130.83235,377.30634,130.8502,377.35385,130.88985,377.37604C130.90416,377.38403,130.9198,377.3879,130.93529,377.3879C130.96269,377.3879,130.98961,377.37582,131.00783,377.3532L228.45763,256.4289L228.47824,256.37045L228.47824,256.36945L228.4669,256.3249L195.56845,195.92386C195.55206,195.89375,195.52057,195.87526,195.48666,195.87526 Z"/><path d="M241.50781,414.64383L241.50781,414.64383C218.82147,421.0603,194.89359,427.8817,172.95348,427.8817L172.95348,427.8817C167.60866,427.8817,162.32112,427.48068,157.1406,426.55792L157.14058,426.55792C130.74681,421.8565,108.51447,403.81027,100.10656,385.8829L100.10656,385.8829C91.31412,367.13565,98.15517,349.59073,103.47302,335.28223L115.339874,342.00574C107.51638,351.77734,101.0783,360.02,98.9522,369.55496L98.9522,369.55496C96.78854,379.2584,98.90639,390.98636,101.51134,404.662L101.40205,404.18198L177.40723,690.4541L176.9405,689.2008L176.97914,689.2801L176.97849,689.27875C186.47623,708.7587,195.19281,726.33435,208.5177,737.27637L208.51772,737.27637C221.82913,748.20734,240.30814,752.9766,260.82526,758.12885C264.52524,759.058,266.77145,762.81067,265.84232,766.5106C264.91318,770.2106,261.16055,772.4568,257.46057,771.52765L257.46057,771.52765C237.70453,766.5665,215.90948,761.22217,199.7505,747.9529L199.75052,747.9529C183.64603,734.72833,173.70474,714.08716,164.56094,695.33307L164.56029,695.3317L164.52165,695.25244C164.32626,694.8517,164.16972,694.4315,164.05493,693.99915L164.05493,693.99915L88.04977,407.72702C88.007645,407.56836,87.97119,407.40826,87.940475,407.247L87.940475,407.247C85.4929,394.39755,82.55814,379.6004,85.46847,366.54837L85.46847,366.54837C88.41636,353.32785,97.17857,342.58545,104.55562,333.37146C106.67499,330.72437,110.402435,330.00714,113.3528,331.67874C116.30316,333.35034,117.603806,336.91638,116.42247,340.09497L116.42247,340.09497C110.76952,355.30505,106.639915,367.2786,112.61416,380.01688L112.61416,380.01688C118.973015,393.57523,137.24487,408.9817,159.56322,412.95715L159.5632,412.95715C163.82861,413.71692,168.29494,414.06683,172.95348,414.06683L172.95348,414.06683C192.59685,414.06683,214.55179,407.9111,237.74799,401.35043C241.41885,400.3122,245.23636,402.44635,246.2746,406.11722C247.31284,409.7881,245.17868,413.6056,241.50781,414.64383 Z"/></g></svg>' ), 4 );
	
	  
	// Assign View Results admin bar main menu
	$view_results = add_submenu_page(
		'educare-view-results',           // parent slug
		'View Results',             			// page title
		'View Results',             			// menu title
		'manage_options',         				// capability
		'educare-view-results',   			 	// slug
		'educare_view_results'            // callback
	);
	
	// Assign Add Results admin bar sub menu items
	$add_results = add_submenu_page(
		'educare-view-results',       		// parent slug
		'Add Results',              			// page title
		'Add Results',              			// menu title
		'manage_options',      						// capability
		'educare-add-results',      			// slug
		'educare_add_results'             // callback
	); 
	
	// Assign Import Results admin bar sub menu items
	$import_results = add_submenu_page(
		'educare-view-results',           // parent slug
		'Import Results',             		// page title
		'Import Results',             		// menu title
		'manage_options',         				// capability
		'educare-import-results',    			// slug
		'educare_import_results'          // callback
	);
	
	// Assign Update Results admin bar sub menu items
	$update_results = add_submenu_page(
		'educare-view-results',           // parent slug
		'Update Results',             		// page title
		'Update Results',             		// menu title
		'manage_options',          				// capability
		'educare-update-results',    			// slug
		'educare_update_results'          // callback
	);

	// Assign Grading Systems admin bar sub menu items
	$grading_systems = add_submenu_page(
		'educare-view-results',           	// parent slug
		'Grading Systems',             			// page title
		'Grading Systems',             			// menu title
		'manage_options',          					// capability
		'educare-grading-systems',    			// slug
		'educare_grading_systems'         	// callback
	);
	
	// Assign Educare Settings admin bar sub menu items
	$settings = add_submenu_page(
		'educare-view-results',       		// parent slug
		'Educare Settings',         			// page title
		'Settings',                   		// menu title
		'manage_options',    							// capability
		'educare-settings',         			// slug
		'educare_settings_menu'      			// callback
	); 
	 
	// Assign About Educare admin bar sub menu items
	$about_educare = add_submenu_page(
		'educare-view-results',       		// parent slug
		'About Educare',             			// page title
		'About Us',                  			// menu title
		'manage_options',    							// capability
		'about-educare',             			// slug
		'about_educare'            				// callback
	);  

}

add_action("admin_menu", "educare_menu");

// callback all (page files)
function educare_add_results() {
	// if files in same directly -
	// include "settings.php";

	// Check if educare database old and corruptet or not
	if (educare_database_check('educare_settings')) {
		educare_database_error_notice();
	} else {
		include (EDUCARE_ADMIN."menu/add-results.php");
	}
}

function educare_view_results() {
	// Check if educare database old and corruptet or not
	if (educare_database_check('educare_settings')) {
		educare_database_error_notice();
	} else {
		include (EDUCARE_ADMIN."menu/view-results.php");
	}
}

function educare_import_results() {
	// Check if educare database old and corruptet or not
	if (educare_database_check('educare_settings')) {
		educare_database_error_notice();
	} else {
		include (EDUCARE_ADMIN."menu/import-results.php");
	}
}

function educare_update_results() {
	// Check if educare database old and corruptet or not
	if (educare_database_check('educare_settings')) {
		educare_database_error_notice();
	} else {
		include (EDUCARE_ADMIN."menu/update-results.php");
	}
}

function educare_grading_systems() {
	// Check if educare database old and corruptet or not
	if (educare_database_check('educare_settings')) {
		educare_database_error_notice();
	} else {
		include (EDUCARE_ADMIN."menu/grading-systems.php");
	}
}

function educare_settings_menu() {
	// modify function.php: 105
	// Check if educare database old and corruptet or not
	if (educare_database_check('educare_settings')) {
		educare_database_error_notice(true);
	} else {
		include (EDUCARE_ADMIN."menu/settings.php");
	}
}

function about_educare() {
	include (EDUCARE_ADMIN."menu/about-educare.php");
}



/** =====================( Functions Details )======================
	
	# Educare enqueue style & javascript 
	* Load CSS, JS to specific pages from created menu and submenu ( only for Educare pages )

	* @since 1.0.0
	* @last-update 1.2.0
	
	* @param mixed $hook
	
	* @return void
	
===================( function for load CSS and JS )=================== */

function educare_enqueue_styles( $hook) {
	
	// globalize educare main menu and sub menu
	global $educare_main_menu, $view_results, $add_results, $import_results, $update_results, $grading_systems, $settings, $about_educare;
	$allowed = array( $educare_main_menu, $view_results, $add_results, $import_results, $update_results, $grading_systems, $settings, $about_educare );
	
	if( !in_array( $hook, $allowed)  ) {
			return;
	}
	
	// Educare stylesheet
	wp_enqueue_style('educare', EDUCARE_URL.'assets/css/educare.css');
	wp_enqueue_style('clone-field', EDUCARE_URL.'assets/css/clone-field.css');
	
	// JavaScript link
	wp_enqueue_script('jquery'); // That's men script now place at the bottom
	wp_enqueue_script('jquery-min', EDUCARE_URL.'assets/js/jquery-2.1.3.min.js');
	wp_enqueue_script('e-pagination', EDUCARE_URL.'assets/js/paginate.js');
	wp_enqueue_script('cloneField', EDUCARE_URL.'assets/js/clone-field-1.0.js');
	
}

add_action( 'admin_enqueue_scripts', 'educare_enqueue_styles');



?>