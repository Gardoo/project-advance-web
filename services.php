<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Clubs</title>
<link rel="icon" href="_img/gofit_logo.png" type="image/icon type">

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
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 1);
  margin: 8px;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #668cff;
  text-align: center;
  cursor: pointer;
  width: 50%;
  border-radius: 10px;
}

.button:hover {
  background-color: #3366ff;
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
<br>
<h1 style="text-align:center">GoFit Gym Clubs</h1>
<br>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="_img/pic101.png" alt="Jane" style="width:100%" height="250px">
      <div class="container">
        <h2>Sample Club</h2>
        <p>Club Description</p>
      <center>
        <p><button class="button">Join Club</button></p>
      </center>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="_img/pic101.png" alt="Jane" style="width:100%" height="250px">
      <div class="container">
        <h2>Sample Club</h2>
        <p>Club Description</p>      
      <center>
        <p><button class="button">Join Club</button></p>
      </center>
      </div>
    </div>
  </div>

    <div class="column">
    <div class="card">
      <img src="_img/pic101.png" alt="Jane" style="width:100%" height="250px">
      <div class="container">
        <h2>Sample Club</h2>
        <p>Club Description</p>
      <center>
        <p><button class="button">Join Club</button></p>
      </center>
      </div>
    </div>
  </div>
</div>

<br>
<br>

  <div class="row">
    <div class="column">
    <div class="card">
      <img src="_img/pic101.png" alt="Jane" style="width:100%" height="250px">
      <div class="container">
        <h2>Sample Club</h2>
        <p>Club Description</p>
      <center>
        <p><button class="button">Join Club</button></p>
      </center>
      </div>
    </div>
  </div>

    <div class="column">
    <div class="card">
      <img src="_img/pic101.png" alt="Jane" style="width:100%" height="250px">
      <div class="container">
        <h2>Sample Club</h2>
        <p>Club Description</p>
      <center>
        <p><button class="button">Join Club</button></p>
      </center>
      </div>
    </div>
  </div>

    <div class="column">
    <div class="card">
      <img src="_img/pic101.png" alt="Jane" style="width:100%" height="250px">
      <div class="container">
        <h2>Sample Club</h2>
        <p>Club Description</p>
      <center>
        <p><button class="button">Join Club</button></p>
      </center>
      </div>
    </div>
  </div>
</div>
</body>
</html>
