<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Student Edit form</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
		<link rel="stylesheet" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
		<script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"></script>
		<script src="https://cdn.datatables.net/1.10.19/css/dataTables.jqueryui.min.css"></script>
		<script>
			$(document).ready(function() {
		$('#example').DataTable();
		} );
		</script>
	</head>
	<body>
		<div class="container-fixed">
			<div class="row bg-info sticky-top shadow-lg">
				<div class="col-lg-12">
					<h1 class="text-white display-4 pl-5 font-weight-bold">Student Edit form</h1>
				</div>
			</div>
			<div class="row justify-content-center mt-5">
				<div class="col-lg-8">
					<div class="card shadow-lg font-weight-bold">
						<div class="card-body">
							{{csrf_field()}}
							<form action="update/{{$student[0]->id}}" method="post">
								<label for="">Name:</label>
								<div class="form-group">
									<input type="text" name="name" class="form-control" value="{{ $student[0] ->name}}" placeholder="Enter the user name..">
								</div>
								<label for="">Email:</label>
								<div class="form-group">
									<input type="text" name="email" class="form-control" value="{{ $student[0] ->email}}" placeholder="Enter Email ..">
								</div>
								<label for="">Password:</label>
								<div class="form-group">
									<input type="text" name="pass" class="form-control" value="{{ $student[0] ->pass}}" placeholder="Enter Password..">
								</div>
								<label for="">Phone:</label>
								<div class="form-group">
									<input type="text" name="phone" class="form-control" value="{{ $student[0] ->phone}}" placeholder="Enter phone..">
								</div>
								<label for="">Course:</label>
								<div class="form-group">
									<input type="text" name="course" class="form-control" value="{{ $student[0] ->course}}" placeholder="Enter Course..">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-info shadow-lg btn btn-block font-weight-bold">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>