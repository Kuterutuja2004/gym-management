<?php
    
    include('conn.php');

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  /*border-top-right-radius: 40px;*/
  border-bottom-left-radius: 40px;
  border:3px solid #74b9ff;
  box-shadow: 0px 10px 10px rgba(0,0,0.4,0.4);

}

.about-section {
  padding: 50px;
  text-align: center;
  background-color:#74b9ff;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

/*.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color:#74b9ff;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}*/
.button-container {
      text-align: center;
      margin-top: 20px;
    }

    .button {
      display: inline-block;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      background-color:#3498db;
      color: white;
      border-radius: 5px;
    }

    .button:hover {
      background-color:#74b9ff;
    }

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>Ask us about an order, a product, or what you need to start smashing your fitness goals! Don't be shy - Our team of experts are available seven days a week through email, live chat or over the phone. We're ready to help you find the information you need to start living a fit and healthy lifestyle.</p>

</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="about_usimg.jpg" alt="Tejal" style="width:100%">
      <div class="container">
        <h2>Tejal Nagare</h2>
        <p class="title">owner&Trainer</p>
        <p>Certified personal trainer with 4 years of experience to helping people </p>
        <p>tejalnagare26@gmail.com</p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="about_usimg.jpg" alt="Rutuja" style="width:100%">

      <div class="container">
        <h2>Rutuja Kute</h2>
        <p class="title">Trainer</p>
        <p>Certified personal trainer with 3 years of experience to helping people</p>
        <p>rutujakute12@gmail.com</p>
        
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="about_usimg.jpg" alt="Vaishnavi" style="width:100%">
      <div class="container">
        <h2>Vaishnavi Nerpgar</h2>
        <p class="title">Trainer</p>
        <p>Certified personal trainer with 3 years of experience to helping people</p>
        <p>vaishnavi12@gmail.com</p>
       
      </div>
    </div>
  </div>
</div>
<div class="button-container">
  <a href="home1.php" class="button">Back</a>
</div>

</body>
</html>
