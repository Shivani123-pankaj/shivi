<!DOCTYPE html>
<html>
<head>
<title>Women Registration</title>
<meta charset="utf-8">
<meta name="view port" content="width=device-width, intial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/bootstrap.css" rel="stylesheet" type="text/css" media="all" >
</head>
<style>
  #container{
	  background-image: url(images/registerbg.jpg);
	  background-size: cover;
  }
  .register{
	  background: #d1d698;
	  padding: 10px 10px 10px 109px;
	  font-family:Bahnschrift;
	  border: solid 1px teal;
	  border-radius: 15px;
	  box-shadow: 10px 10px 5px 2px;
  }
  #heading{
	  font-family: Arial Rounded MT Bold;
	  text-align:center;	  
  }
  #head{
	  font-size:18px;
  }
</style>
<body>
  <div id="container">
  <?php
  include(header.php);
  ?>
      <div class="container">
	      <h1 id="heading">Registration for Enterprenuer</h1>
		  <br><br>
		  <div class="col-sm-5">
		  <h2>Start managing you expenses Digitally</h2>
		  <p id="head">No charges required free service Available</p>
		  <br>
		  <hr>
		  <br>
		  <h3>Trust Worthy</h3>
		  <p id="head">security is our first priority</p>
          <br>
		  <h3>Runs smoothly</h3>
          <p id="head">fast and efficient work model</p>
          <br>
          <br>
          <hr>	
          <h2>You spend. We calculate</h2>	
          <br><br><br><br><br>	  
		  </div>
		  <div class="col-sm-1" id="head"><br>
		  </div>
		  <div class="col-sm-6" id="head">
		  <for method="post" action="regcode.php">
		  <br>
		     <div class="form-group">
			    <label>first name:</label>
				<input type="text" class="form-control" name="fname">
			 </div>
			 <div class="form-group">
			    <label>Last name:</label>
				<input type="text" class="form-control" name="lname">
			 </div>
			 <div class="form-group">
			    <label>Email(You'll use this to sign-in)</label>
				<input type="email" class="form-control" name="email">
			 </div>
			 <div class="form-group">
			    <label>Confirm Email</label>
				<input type="email" class="form-control" name="email">
			 </div>
			 <div>
			    <label>Business name</label>
				<input type="text" class="form-control" name="bname">
			 </div>
			 <div class="form-group">
			    <label>Business type</label>
				<select class="form-control" name="btype">
				  <option>Private Limited Company</option>
				  <option>Limited liability Partnership</option>
				  <option>Registered Partnership</option>
				  <option>One Person Company</option>
				  <option>Public limited Company</option>
				</select>  
			 </div>
			 <div class="form-group">
			    <label>Business Label</label>
				<select class="form-control" name="blevel">
				  <option>Universal</option>
				  <option>National</option>
				  <option>Local</option>
				</select>  
			 </div>
			 <div class="check box">
			    <label>
				<input type="check box">Join our mailing list(get offers and updates)
				</label>
			 </div>
			 <button type="Submit" class="btn btn-success btn-lg btn-block">Submit</button><br>
			 <center><button type="reset" class="btn btn.default btn-lg">Reset
			 </button></center><br>
			 <center><p id="head">By clicking the above button you agree to our<a>term of services</a>and <a>Privacy Policy.</a></p>
			 </center>
			 </form>
			 </div>
		  </div>
	  </div>
	     <?php
		 include(footer.php)
		 ?>
    </body>
</html>