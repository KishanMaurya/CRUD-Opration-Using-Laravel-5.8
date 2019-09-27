<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Student View Page</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
		<style>
			.p{
				height: 3px;
				background: #ccc;
			}
		</style>
	</head>
	<body>
		<script>
		$(document).ready( function () {
		$('#myTable').DataTable();
		} );
		</script>
		<div class="container-fixed">
			<div class="row bg-info sticky-top">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h2 class="pl-5 text-white display-4">Close Friends</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-10 col-sm-10 col text-right">
					<div class="line pt-3 ">
						<a href="add_button" class="text-white mr-4 font-weight-bold">
							<button type="button" class="btn btn-info">Add Student</button>
						</a>
						<hr class="border bg-secondary shadow-lg p">
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-10 col-sm-10 col">
					<div class="card shadow-lg">
						<div class="card-body">
							@if(Session::has('success'))
							<div class="alert alert-success" role= "alert">
								<strong>Successfull:</strong>
								{{ Session::get('success') }}
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
					 			</button>
							</div>
							@endif
							<form action="">
								<table id="myTable" class="table table-hover table-borderless display table-responsive-lg">
									<thead class="">
										<tr class="font-weight-bold">
											<th>#</th>
											<th>Name</th>
											<th>Email</th>
											<th>PassWord</th>
											<th>Phone</th>
											<th>Course</th>
											<th>View</th>
											<th>Delete</th>
										</tr>
									</thead>
									<tbody>
										@foreach($student as $row)
										<tr>
											<td>{{$row->id}}</td>
											<td>{{$row->name}}</td>
											<td>{{$row->email}}</td>
											<td>{{$row->pass}}</td>
											<td>{{$row->phone}}</td>
											<td>{{$row->course}}</td>
											<td>
												<a href="clickedit/{{$row->id}}" class="btn btn-info btn-sm">
													View
												</a>
											</td>
											<td>
												<a href="clickdelete/{{$row->id}}" class="btn btn-danger btn-sm">Delete</a>
											</td>
										</tr>
										@endforeach
									</tbody>
									<tfoot class="font-weight-bold">
									<tr>
										<th>#</th>
										<th>Name</th>
										<th>Email</th>
										<th>PassWord</th>
										<th>Phone</th>
										<th>Course</th>
										<th>View</th>
										<th>Delete</th>
									</tr>
									</tfoot>
								</table>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>