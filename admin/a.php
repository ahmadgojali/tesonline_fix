<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Cara Membuat Show Password Menggunakan Javascript</title>
  
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
  <p>Cara Membuat Show Password Menggunakan Javascript</p>
  <input class="active" type="text" placeholder="username">

  <div class="satu">
   <input type="password" class="active" id="pswd" placeholder="Masukan Password">
     <div class="group1">
       <input type="checkbox" id="chk">
       <label id="showhide" class="label">Show Password</label>
     </div>
  </div>
    <div class="dua">
     <input class="active" type="password" id="pswd2" placeholder="Ulangi Password">
     <div class="group">
      <i id="icon" class="fa fa-eye-slash"></i>
     </div>
    </div>
</div>
    <script src="show.js"></script>
</body>
</html>