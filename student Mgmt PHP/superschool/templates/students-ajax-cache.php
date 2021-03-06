<script>
	$j(function(){
		var tn = 'students';

		/* data for selected record, or defaults if none is selected */
		var data = {
			course: { id: '<?php echo $rdata['course']; ?>', value: '<?php echo $rdata['course']; ?>', text: '<?php echo $jdata['course']; ?>' },
			academicyear: { id: '<?php echo $rdata['academicyear']; ?>', value: '<?php echo $rdata['academicyear']; ?>', text: '<?php echo $jdata['academicyear']; ?>' }
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for course */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'course' && d.id == data.course.id)
				return { results: [ data.course ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for academicyear */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'academicyear' && d.id == data.academicyear.id)
				return { results: [ data.academicyear ], more: false, elapsed: 0.01 };
			return false;
		});

		cache.start();
	});
</script>

