
$(function(){
	$governate = $("#ServiceGovernateId")
	$district = $('#ServiceDistrictId')
	$village = $('#ServiceVillageId')


	// monitor governate change
	$governate.change(function(){
		var governate_id = $(this).val();
		if (governate_id) {
			$district.empty()

			// get districts
			var districts = governate_tree[governate_id].districts;

			// empty districts
			$district.empty();
			var $option = $('<option />')
			$option.val(0)
			$option.text('(choose)')
			$district.append($option)

			// populate districts
			for(district_id in districts) {
				var data = districts[district_id]
				console.log(data)
				var $option = $('<option />')
				$option.val(data.district.id)
				$option.text(data.district.name)
				$district.append($option)
			}
			

			toggleDistrict(true)
		} else {
			toggleDistrict(false)
		}
	})




	// populate governates
	for (governate_id in governate_tree) {
		var data = governate_tree[governate_id]
		var $opt = $('<option>')
		$opt.val(governate_id)
		$opt.text(data.governate.name)
		$governate.append($opt)

	};


	toggleDistrict( !!$governate.val() );
	toggleVillage( !!$district.val() );
	

})

function toggleDistrict(enable) {
	if (enable) {
		$("[for=ServiceDistrictId]").show();
		$('#ServiceDistrictId').show();
	} else {
		$("[for=ServiceDistrictId]").hide();
		$('#ServiceDistrictId').hide();
	}
}
function toggleVillage(enable) {
	if (enable) {
		$("[for=ServiceVillageId]").show();
		$('#ServiceVillageId').show();
	} else {
		$("[for=ServiceVillageId]").hide();
		$('#ServiceVillageId').hide();
	}
}