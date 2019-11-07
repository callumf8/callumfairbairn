<head>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-101212821-3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-101212821-3');
    </script>

    <!--Set Base Url for links to work-->
    <!--Find base-->
    <?php   $BASE_URL = $_SERVER['DOCUMENT_ROOT']; 
            $BASE_URL .= "/?"; ?>
        
    <!--Set base manually-->
    <?php $BASE_URL = "http://callumfairbairn.com" ?>
<!--    <?php $BASE_URL = "/" ?>-->
    <base href="<?php echo $BASE_URL ?>"/>
    
    <!--Responsive bootstrap loading -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> 
    <!-- Include Font Awesome Stylesheet in Header -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="js/bootstrap-dropdownhover.min.js"></script>    
    
    <!--Perosnal style sheet -->
    <link href="includes/footerstyle.css" type="text/css" rel="stylesheet" >
    <link href="includes/style.css" type="text/css" rel="stylesheet" >

    <!--Meta tags -->
    <title>Callum Fairbairn</title>
    <meta name="author" content="Callum Fairbairn">
    <meta name="keywords" content="Callum Fairbairn, Cambridge, DAMTP, PhD">
    <meta name="description" content="Personal webpage of Callum Fairbairn containing professional information and travels">
    
</head>