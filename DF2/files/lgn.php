<!DOCTYPE html>
<html>
<head>
  <title>Deshi Fusion</title>
      <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="1091300531846-h7418n869fh6efk9gc0i98t5f9jn9sdi.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>

  <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
-<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>  
<script type="text/javascript">
  $(document).ready(function(){
    $("#loginModal").modal({
    backdrop: 'static',
    keyboard: false
});
  });
  function fun1(){
  var ee = document.getElementById("txt_email").value;
  var pp = document.getElementById("txt_pass").value;
  var ii = document.getElementById("uid").value;
 window.location.href="redirect.php?log=21&ee="+ee+"&pp="+pp+"&iiiii="+ii;

}
</script>
<script type="text/javascript" src="common.js"></script>
<style type="text/css">
  body{
    background-image: url(https://desifusion11.000webhostapp.com/images/r4.jpg);
    background-repeat: no-repeat;
    background-size: cover;
  }
  #login-wrapper{
    width: 50%;
    height: 70vh;
    background-color: white;
    margin: auto;
    margin-top: 5%
  }
  .col-lg-6{
    height: 70vh;
    border:1px solid black;
  }
  .row{
    background-color: green;
    opacity: 0.7
  }
</style>
</head>
<body>
  <div id="login-wrapper">
    <div class="row">
      <div class="col-lg-6"></div>
      <div class="col-lg-6"></div>
    </div>
  </div>
</body>
</html>
