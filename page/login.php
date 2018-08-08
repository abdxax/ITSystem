<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<header>
	<div class="container">
		<div class="col-md-6 img">
			<img src="psu.png">
		</div>
	</div>
</header>
<section>
	<div class="container">
		<div class="row">
			
			<div class="col-md-6 logfor">
				<img src="user2.png" width="150px" height="150px" class="img-responsive imo">
				<div class="panel panel-default">
					<div class="panel-heading">
						<form>
							<div class="form-group">
								<label for="user">username</label>

							       <!--<input type="text" name="user" class="form-control " id="user" ><div>
							       	<i class="glyphicon glyphicon-user"></i>
							       </div>-->

							       <div class="input-group">
                                      <div class="input-group-addon">
                                         <i class="glyphicon glyphicon-user"></i>
                                      </div>
                                      <input type="text" name="user" class="form-control " id="user" >
                                     </div>
								
							</div>

							<div class="form-group">
								<label for="pass">password</label>
							
								
									<!--<input type="password" name="pass" class="form-control" id="pass"><i class="fa fa-lock"></i>-->

									  <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-lock"></i>
                                      </div>
                                     <input type="password" name="pass" class="form-control" id="pass">
                                     </div>
								
							</div>

							<div class="form-group">
							
							
								<input type="submit" name="sub" class="btn btn-info" value="Login" >

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<footer></footer>
</body>
</html>