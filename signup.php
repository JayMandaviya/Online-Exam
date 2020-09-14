<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>New user signup </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<script language="javascript">
function check()
{

  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }

  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}

    if(document.form1.phone.value=="")
  {
    alert("Plese Enter Your Contact Info");
	document.form1.phone.focus();
	return false;
  }

  let no=document.form1.phone.value;
  let no1=n.length();
  
    if(no1!=10){
      alert("Plese Enter Valid Contact Info");
	document.form1.phone.focus();
	return false;
    }
  

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  
  return true;

  }
  
</script>
</head>

<body class="bg-success">
<img class="wave" src="img/wave.png">
<div class="container">
  <div class="img">
    <img src="img/personal2.svg">
  </div>
  <div class="login-content">
    <form name="form1" method="post" action="signupuser.php" onSubmit="return check();">
      <img src="img/prfilem.svg">
      <h2 class="title">Sign Up</h2>
             <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Full Name</h5>
                    <input class="form-control input" type="text" name="name" id="name" class="input">
                </div>
      </div>

      <div class="input-div one">
        <div class="i">
            <i class="fa fa-envelope"></i>
        </div>
        <div class="div">
            <h5>E Mail</h5>
            <input class="form-control input" type="email" name="email" id="email">
        </div>
       </div>

       <div class="input-div one">
        <div class="i">
            <i class="fa fa-phone"></i>
        </div>
        <div class="div">
            <h5>Phone No.</h5>
            <input class="form-control input" type="number" name="phone" id="phone">
        </div>
       </div>

       <div class="input-div one">
        <div class="i">
            <i class="fa fa-id-card"></i>
        </div>
        <div class="div">
            <h5>Username</h5>
            <input class="form-control input" type="text" name="lid" id="lid">
        </div>
       </div>
       
             <div class="input-div pass">
                <div class="i"> 
                   <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                   <h5>Password</h5>
                   <input class="form-control input" type="password" name="pass" id="pass">
               </div>
      </div>
      
            <a class="link" href="login.php">Already have a account? Log In</a>
            <input type="submit" class="btn" value="Sign Up">
          </form>
      </div>
  </div>
  <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
