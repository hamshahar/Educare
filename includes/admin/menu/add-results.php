<div class="educare_post update">
	<h1>Add Result</h1>
	<blockquote>Notes: Please carefully fill out all the details of the form. If you miss one, you may have problems to see the result. So, verify the student's admission form well and then give all details here. All (Class, Exam, Roll No, Regi No, Year) fields are required.</blockquote>
	
	<?php
	// save forms data
	educare_save_results();
	// get results forms for add results
	educare_get_results_forms('', 'Add');
	?>

</div> <!-- .educare_result -->
	
	
	