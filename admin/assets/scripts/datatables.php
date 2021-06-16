	<!-- Data Tables -->
    <script type="text/javascript" src="../assets/datatables/datatables.min.js"></script>
	<script>
		$('#myTable').dataTable({
			"order"			: [[ 1, "desc" ]],
			"scrollY"		: "200px",
			"scrollX"		: true,
			"scrollCollapse": true,
			<?php include "../assets/datatables/setting.php";?>
		});
	</script>