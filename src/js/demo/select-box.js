$(document).ready(function(){
	$("#westernYear").focusout(function(){
		date 			= $(this).val();
		if(date == ""){
			return;
		}

		url 			= '/ajax/demo/select-box.php';
		$request 		= {date: date};
		$.ajax({
			url: url,
			type: 'GET',
			dataType: 'json',
			data: $request,
		})
		.done(function($response) {
			console.log("success");
			console.log($response);

			$eraYear = $('#eraYear');
			eraYearLabel = $response.nengo + $response.custom.year + "年" + $response.custom.month + "月" + $response.custom.day + "日"
			$eraYear.val(eraYearLabel);
		})
		.fail(function($response) {
			console.log("error");
			// console.log($response);
			console.log($response.responseText);
		})
		// .always(function($response) {
		// 	console.log("complete");
		// })
		;
		
	});
});
