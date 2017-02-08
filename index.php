<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <title>Malcolm Assignment 1</title>
  <link rel="stylesheet" type="text/css" href="index.css"/>
</head>
<body>
  <h1>Malcolm Littlefield</h1>
  <img alt="MalcolmLittlefield" src="MalcolmLittlefield.jpg">
  <h2>About Me</h2>
  <p>I'm an aspiring developer currently working full time at SunBug Solar in Arlington Massachusetts. I'm the administrator for the monitoring systems SunBug deploys with all solar installations. I introduce customers to data acquisition systems, provide technical support, and travel across the state troubleshooting dataloggers and smart meters! I'm a passionate environmentalist, so I love working for a company that installs solar on the roofs of Massachusetts' buildings.</p>
  <p>In 2012 and 2013, when I was a senior at Middlebury College, I took introductory computer science in python, and data structures in Java. If I had discovered computer science earlier, I would have majored in it. Since then I have taken an intro ruby course at The Startup Institute in Boston, and CSCI E-12 at Harvard Extension School. DWA is the perfect continuation of my studies!</p>
  <p>In my spare time I enjoy playing American, Canadian, and Irish fiddle music! I also love hiking in the white mountains, canoeing in Maine, and traveling. In march I will visit Israel and Palestine!</p>
  <h2>Random Quote</h2>
  <?php
  $quote1 = "The internet is just the world passing around notes in a classroom. -Jon Stewart";
  $quote2 = "Change will not come if we wait for some other person or some other time. We are the ones we've been waiting for. We are the change that we seek. -Barack Obama";
  $quote3 = "Go confidently in the direction of your dreams. Live the life you have imagined. -Henry David Thoreau";
  $quotes = [$quote1, $quote2, $quote3];
  $myquote = $quotes[rand(0,2)];
  echo "<p>$myquote</p>";
  ?>
</body>
</html>
