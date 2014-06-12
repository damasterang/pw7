$(document).ready(function(){

	$(".reset").bind('click',reset);

	$("#inputDb").hide();

	$crossStatus = 1;

	$("#cross").click(function(){

		$("#inputDb").slideToggle(200);

		if ($crossStatus == 1) {
			$(this).css('webkit-transform', 'rotate(90deg)');
			$crossStatus = 0;
		} else {
			$(this).css('webkit-transform', 'rotate(45deg)');
			$crossStatus = 1;
		}

		$(".reset").bind('click',reset);

	});

	$(".iconDel > button").click(function(){

		$id = $(this).attr('class');

		$("#yesA").attr('href', 'delete.php?id='+$id);

		$(".backgroundOver").slideDown(100);
		$("#deleteNotif").delay(100).slideDown(200);

		$("#no").bind('click', hideDelNotif);
		$(".backgroundOver").bind('click', hideDelNotif);

	})

});

function hideDelNotif(){

	$(".backgroundOver").slideUp(100);
	$("#deleteNotif").delay(100).slideUp(200);

}

function reset(){

	$("input").val("");

}