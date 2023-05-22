<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 3</title>
    <link	href="style.css"	media="screen"	rel="stylesheet"	type="text/css"/>
    <script src="klocka.js" type="text/javascript"></script>
    <script src="theme.js" type="text/javascript"></script>
  </head>
  <body onload="displayTime">
    <div id="container">
      <div id="header">
        Klockan är: <span id="time">00:00:00</span>
        <div id="menu">
          <ul class="menu">
            <li><a class="menuItem" href="index.php">Om mig</a></li>
            <li><a class="menuItem" href="spel.php">Favorit spel</a></li>
            <li><a class="menuItem" onclick="redTheme()">Röd tema</a></li>
            <li><a class="menuItem" onclick="blueTheme()">Blå tema</a></li>
            <li><a class="menuItem" href="bloggsida.php">Blogg</a></li>
            <li><a class="menuItem" href="inloggning.php">Skriv inlägg</a></li>
          </ul>
        </div>

        <div id="subheader">
          <h1>Min hemsida</h1>
        </div>
      </div>
      <div id="content">
