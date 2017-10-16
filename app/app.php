<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";

    $app = new Silex\Application();

    // this is the base path making it the homepage
    $app->get("/", function() {
        return "<!DOCTYPE html>
<html>
<head>
	<title>Greetings !</title>
</head>
<body>
<h1>Greatings from Afar</h1>
<p>Dear <?php echo $friend_name; ?>, </p>
<p>How are you? I hope that you having a nice weekend. I'm vacationing in the mountains of Tibet while I learn programming.</p>
<p><?php echo $friend_name;?>, you would not believe how cold it is here. I should have gone to Hawaii instead. But I love programming a lot, so I got that going for me. </p>
<p>Looking forward to seeing you soon. I'll back a souvenir.</p>
<p>Cheers, </p>
<p>Diane</p>
<a href='/goodbye'>Goodbye</a>
</body>
</html>"
		;

    });

    // this is a path 
    $app->get("/goodbye", function() {
        return "Goodbye friend!";
    });

    return $app;
?>
