<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
This is my header
<div>
	<span>분류1</span>
	<input type="checkbox" id="ca_elct" onchange="foo();">전자제품
	<input type="checkbox" id="ca_furn" onchange="foo();">가구
</div>

<div>
	<span>분류2</span>
	<input type="checkbox" id="ca_lapt" onchange="foo();">노트북
	<input type="checkbox" id="ca_refr" onchange="foo();">냉장고
	<input type="checkbox" id="ca_desk" onchange="foo();">책상
	<input type="checkbox" id="ca_chir" onchange="foo();">의자
</div>

<script>

foo();

function foo(param) {
	// console.log("click " + param.id);
	// console.log($('#ca_elct').prop("checked"));

	<?php
	if (!isset($page)) {
		$page = 1;
	}
	if (!isset($per_page)) {
		$per_page = 5;
	}
	?>
	var page = <?php echo $page; ?>;
	var per_page = <?php echo $per_page; ?>;
	if (param != null) {
		page = param;
	} else {
		page = <?php echo $page; ?>;
	}

	$.ajax({
		url : "/index.php/test/list?page=" + page + "&per_page=" + per_page + "&ca_elct=" + $('#ca_elct').prop("checked") + "&ca_furn=" + $('#ca_furn').prop("checked") + "&ca_lapt=" + $('#ca_lapt').prop("checked") + "&ca_refr=" + $('#ca_refr').prop("checked") + "&ca_desk=" + $('#ca_desk').prop("checked") + "&ca_chir=" + $('#ca_chir').prop("checked"),
		dataType: "html",
		success : function (data) {
			$("#mycontent").html(data);
		}
	});
};
</script>