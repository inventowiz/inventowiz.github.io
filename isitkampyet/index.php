<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>is it Kamp yet?</title>

    <!-- Core JavaScript Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

    <script src="date.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    
    <!-- Countdown Timer -->
    <link rel="stylesheet" type="text/css" href="css/jquery.countdown.css"> 
    <script type="text/javascript" src="js/jquery.plugin.js"></script> 
    <script type="text/javascript" src="js/jquery.countdown.js"></script>

    <!-- Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <section class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">

                        <h1 class="brand-heading">
                            <?php
                            	require_once('dates.php');
			    ?>
                        </h1>

                        <div class="intro-text" id="defaultCountdown"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
