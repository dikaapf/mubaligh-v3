<?php if(!empty($tutor_courses)) {
 echo form_open(URL_TUTOR_MY_BATCHES, 'id="filter_form" class="form-multi-select"');?>

	<div class="input-group col-sm-12">
		<label><?php echo get_languageword('course'); ?></label>
		<div class="dark-picker dark-picker-bright">
			<?php

				$select = set_value('course_id', (!empty($course_id)) ? $course_id : '');

				echo form_dropdown('course_id', $tutor_courses, $select, 'id="course_id" class="select-picker" onchange="submit_form();" ')?>
		</div>
	</div>

</form>

<script>

function submit_form()
{
	$('#filter_form').submit();
}

</script>

<?php } ?>

