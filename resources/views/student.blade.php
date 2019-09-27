<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>ABC Login Here...</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="../sass/style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<style>
			html,body{
		}
		input[type=text]{border-left: none;}
		.input-group-prepend,.input-group-text{
			background: white;
			border-right: none;
		}
		i{color: skyblue;}
		</style>
	</head>
	<body>
		<!--MOdal form-->
		<div class="modal fade" id="login">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<div class="card">
							<div class="card-body">
								<form action="#" method="post">
									<div class="form-group input-group">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<i class="fas fa-user"></i>
											</div>
										</div>
										<input type="text" class="form-control" name="user" placeholder="UserName..."   title="This field Mandatory">
									</div>
									<div class="form-group input-group">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<i class="fas fa-lock"></i>
											</div>
										</div>
										<input type="text" class="form-control" name="pass" placeholder="Password..." >
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-block btn-info">Login</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--modal form login end-->
		<div class="container-fixed">
			<div class="row bg-info shadow-lg sticky-top">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h1 class="text-white pl-5 font-weight-bold display-4">ABC Restaurant Registration Here...</h1>
				</div>
			</div>
			<div class="row justify-content-center sticky-top">
				<div class="col-lg-10 col-md-10 col-sm-10 col text-right">
					<div class="line pt-3 ">
						<a href="" class="text-white mr-4 font-weight-bold">
							<button type="button" data-toggle="modal" data-target="#login" class="btn btn-info">
							<i class="fa fas-user text-info"></i>
							Login Here
							</button>
						</a>
						<hr class="border bg-secondary shadow-lg p">
					</div>
				</div>
			</div>
			<div class="row justify-content-center mb-5">
				<div class="col-lg-8">
					<div class="card bg-white shadow-lg mt-5 mb-5">
						<div class="card-header bg-white border-0">
							<div class="card-title">
								<h4 class="text-dark text-left">ABC Register Here..</h5>
							</div>
						</div>
						<div class="card-body bg-white">
							@if(Session::has('success'))
							<div class="alert alert-success" role= "alert">
								<strong>Successful:</strong>
								{{ Session::get('success') }}
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							@endif
							<form action="add_data" method="post">
								{{csrf_field()}}
								<div class="form-group input-group">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fas fa-user"></i>
										</div>
									</div>
									<input type="text" class="form-control" name="user" placeholder="UserName..."   title="This field Mandatory">
								</div>
								<div class="form-group input-group">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fas fa-envelope"></i>
										</div>
									</div>
									<input type="text" class="form-control" name="email" placeholder="Email..."   title="This field Mandatory">
								</div>
								<div class="form-group input-group">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fas fa-lock"></i>
										</div>
									</div>
									<input type="text" class="form-control" name="pass" placeholder="Password..." >
								</div>
								<div class="form-group input-group">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fas fa-phone"></i>
										</div>
									</div>
									<input type="text" class="form-control" name="phone" placeholder="Phone..."   title="This field Mandatory">
								</div>
								<div class="form-group input-group">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fas fa-book-open"></i>
										</div>
									</div>
									<input type="text" class="form-control" name="course" placeholder="course..." required="required"  title="This field Mandatory">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-block text-white font-weight-bold shadow-lg bg-info">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>