<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="120">
	</meta>
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php echo isset($title) ? $title . ' | Midway Minkay Restobar and Catering Services' :  'Midway Minkay Restobar and Catering Services'; ?></title>


	<link href="<?php echo WEB_ROOT; ?>admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo WEB_ROOT; ?>admin/css/bootstrap-theme.css" rel="stylesheet">
	<link href="<?php echo WEB_ROOT; ?>admin/css/dataTables.bootstrap.css" rel="stylesheet" media="screen">
	<link rel="icon" href="<?php echo WEB_ROOT; ?>../admin/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT; ?>admin/css/jquery.dataTables.css">
	<link href="<?php echo WEB_ROOT; ?>admin/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,100;1,300&display=swap" rel="stylesheet">

	<script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>admin/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>admin/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>admin/js/bootstrap.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>admin/js/bootstrap-modal.js"></script>
	<script type="text/javascript" src="<?php echo WEB_ROOT; ?>admin/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	<script type="text/javascript" src="<?php echo WEB_ROOT; ?>admin/js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
</head>
<script type="text/javascript">
	//execute if all html elemen has been completely loaded
	$(document).ready(function() {

		//specify class name of a specific element. click event listener--
		$('.cls_btn').click(function() {
			//access the id of the specific element that has been click	
			var id = $(this).attr('id');
			//to debug every value of element,variable, object ect...
			console.log($(this).attr('id'));

			//execute a php file without reloading the page and manipulate the php responce data
			$.ajax({

				type: "POST",
				//the php file that contain a mysql query
				url: "some.php",
				//submit parameter
				data: {
					id: id,
					name: 'dred'
				}
			})
		});

	});
</script>
<script type="text/javascript" charset="utf-8">
	$(document).on("click", ".get-id", function() {
		var p_id = $(this).data('id');
		$(".modal-body #infoid").val(p_id);

	});
</script>


<script type="text/javascript">
	$(document).ready(function() {
		$('.toggle-modal').click(function() {
			$('#logout').modal('toggle');
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.toggle-modal-reserve').click(function() {
			$('#reservation').modal('toggle');
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.roomImg').click(function() {
			var id = $(this).data('id');
			// alert(id)

			$.ajax({ //create an ajax request to load_page.php
				type: "POST",
				url: "editpic.php",
				dataType: "text", //expect html to be returned  
				data: {
					ROOMID: id
				},
				success: function(data) {
					$('#myModal').modal('toggle').html(data);
					// alert(data);

				}
			});
		});
	});
</script>

<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
		var t = $('#example').DataTable({
			"columnDefs": [{
				"searchable": false,
				"orderable": false,
				"targets": 1
			}],
			"order": [
				[1, 'desc']
			]
		});

		t.on('order.dt search.dt', function() {
			t.column(0, {
				search: 'applied',
				order: 'applied'
			}).nodes().each(function(cell, i) {
				cell.innerHTML = i + 1;
			});
		}).draw();
	});


	$(document).ready(function() {
		var t = $('#table').DataTable({
			"columnDefs": [{
				"searchable": false,
				"orderable": false,
				"targets": 0
			}],
			"order": [
				[7, 'desc']
			]
		});

		t.on('order.dt search.dt', function() {
			t.column(0, {
				search: 'applied',
				order: 'applied'
			}).nodes().each(function(cell, i) {
				cell.innerHTML = i + 1;
			});
		}).draw();
	});
</script>
<link href="<?php echo WEB_ROOT; ?>admin/css/offcanvas.css" rel="stylesheet">
<?php


admin_logged_in();
?>
<style type="text/css">
	body {
		font-family: 'Poppins', sans-serif;
	}

	h1,
	h2,
	h3,
	h4,
	h5,
	h6 {
		font-family: 'Poppins', sans-serif;
	}

	p,
	a,
	span {
		font-family: 'Poppins', sans-serif;
	}
</style>

<body>
	<!--Header-->

	<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo WEB_ROOT; ?>index.php">Midway Minkay Restobar and Catering Services</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="<?php echo (currentpage() == 'index.php') ? "active" : false; ?>"><a href="<?php echo WEB_ROOT; ?>admin/index.php">Home</a></li>
					<li class="<?php echo (currentpage() == 'mod_rooms') ? "active" : false; ?>"><a href="<?php echo WEB_ROOT; ?>admin/mod_rooms/index.php">Rooms</a></li>
					<li class="<?php echo (currentpage() == 'mod_accomodation') ? "active" : false; ?>"><a href="<?php echo WEB_ROOT; ?>admin/mod_accomodation/index.php">Accomodation</a></li>

					<li class="<?php echo (currentpage() == 'mod_reservation') ? "active" : false; ?>">
						<?php
						$query = "SELECT count(*) as 'Total' FROM `payment` WHERE `status`='Pending'";
						$mydb->setQuery($query);
						$cur = $mydb->loadResultList();
						foreach ($cur as $result) {
						?>
							<a href="<?php echo WEB_ROOT; ?>admin/mod_reservation/index.php">Reservation <?php echo  isset($result->Total) ? '<span style="color:lightgray">(' . $result->Total . ')</span>' : ''; ?> </a>
						<?php
						}
						?>
					</li>

					<li class="<?php echo (currentpage() == 'mod_reports') ? "active" : false; ?>"><a href="<?php echo WEB_ROOT; ?>admin/mod_reports/index.php">Reports</a></li>
					<?php if ($_SESSION['admin_role'] == "Administrator") { ?>
						<li class="<?php echo (currentpage() == 'mod_users') ? "active" : false; ?>"><a href="<?php echo WEB_ROOT; ?>admin/mod_users/index.php">Users</a></li>
					<?php } ?>
					<li class="<?php echo (currentpage() == 'logout.php') ? "active" : false; ?>"><a class="toggle-modal" href="#logout">Logout</a></li>
				</ul>

			</div><!-- /.nav-collapse -->
		</div><!-- /.container -->
	</div><!-- /.navbar -->

	</div>

	<!--End of Header-->

	<div class="container">

		<?php //check_message(); 
		?>
		<?php require_once $content; ?>
		<!--/row-->

		<hr>
		<footer>
			<p>&copy; Midway Minkay Restobar and Catering Services </p>

			<script>
				function checkall(selector) {
					if (document.getElementById('chkall').checked == true) {
						var chkelement = document.getElementsByName(selector);
						for (var i = 0; i < chkelement.length; i++) {
							chkelement.item(i).checked = true;
						}
					} else {
						var chkelement = document.getElementsByName(selector);
						for (var i = 0; i < chkelement.length; i++) {
							chkelement.item(i).checked = false;
						}
					}
				}

				function checkNumber(textBox) {
					while (textBox.value.length > 0 && isNaN(textBox.value)) {
						textBox.value = textBox.value.substring(0, textBox.value.length - 1)
					}
					textBox.value = trim(textBox.value);
				}
				//
				function checkText(textBox) {
					var alphaExp = /^[a-zA-Z]+$/;
					while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
						textBox.value = textBox.value.substring(0, textBox.value.length - 1)
					}
					textBox.value = trim(textBox.value);
				}
			</script>
		</footer>
	</div>
	<!--/.container-->
</body>

</html>
<script type="text/javascript">
	$('.start').datetimepicker({
		language: 'en',
		weekStart: 1,
		todayBtn: 1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
	});
	$('.end').datetimepicker({
		language: 'en',
		weekStart: 1,
		todayBtn: 1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
	});
</script>