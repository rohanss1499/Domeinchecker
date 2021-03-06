<?php
require_once('Transip/DomainService.php');
require_once('domeincheck.php');

if(isset($_GET['domain']) && strlen($_GET['domain']) > 0){
	$domain = $_GET['domain'];
    //Request the availability of a domain by using the Transip_DomainService API;
    //we can get the following different statusses back with different meanings.
    function checkAvailability($url) {
        $availability = Transip_DomainService::checkAvailability($url);
        switch($availability){
            case Transip_DomainService::AVAILABILITY_FREE:
                $result = ' beschikbaar';
                break;
            case Transip_DomainService::AVAILABILITY_NOTFREE:
                $result = ' in bezit';
                break;
            case Transip_DomainService::AVAILABILITY_UNAVAILABLE:
                $result = ' niet beschikbaar';
                break;
        }
        return $result;
    }
			try
			{
			$result_tld = [];
			if(isset($_GET['domain']) && strlen($_GET['domain']) > 0){
			$pieces = explode(".", $domain);
			foreach($tldList as $value) {
                $result_tld[] = [
                    "url"   => $pieces[0] . '.' . $value,
                    "available"=> checkAvailability($pieces[0] . '.' . $value),
                ];
				}
            };
		}
		catch(SoapFault $e)
			{
			//It is possible that an error occurs when connecting to the TransIP Soap API,
			//those errors will be thrown as a SoapFault exception.
			$result = 'An error occurred: '. htmlspecialchars($e->getMessage());
		}
	};
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Compleet IT</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <!--Favicon-->
    <link href="https://compleet.it/favicon.ico" rel="icon" type="image/x-icon"/>
    <!--CSS-->
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-sm bg-white navbar-dark fixed-top">
        <div onclick="parent.location.href='http://www.compleet.it/'" id="logo1"></div>
        <div onclick="parent.location.href='http://www.compleet.it/'" id="logo2"></div>
        <div onclick="parent.location.href='http://www.compleet.it/'" id="logo3"></div>
        <div onclick="parent.location.href='http://www.compleet.it/'" id="titel">Compleet IT</div>
    </nav>
</header>

		<div id="support">
			<form method="get">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h1>Domeinnaam Beschikbaar?</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-8">
							<input type="text" name="domain" placeholder="Voer de domeinnaam in" value="" class="lower" id="search" autofocus="">
						</div>
						<div><br></div>
						<div class="col-sm-4">
							<input type="submit" value="Check">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
                            <?php
                            if(isset($_GET['domain']) && strlen($_GET['domain']) > 0) {
                                echo "<table class=\"table table-hover\" id=\"dev-table\" >";
                                echo "<thead>";
                                echo "<tr>";
                                    echo "<th>"."Domain"."</th>";
                                    echo "<th>"."Status"."</th>";
                                    echo "<th>"."Actie"."</th>";
                                    echo "<tr>";
                                    echo "</thead>";
                                    echo "</tbody>";

                                        foreach ($result_tld as $value) {
                                            echo "<tr>";
                                            echo "<td>" . $value['url'] . "</td>";
                                            echo "<td>" . $value['available'] . "</td>";
                                            if($value['available'] === ' beschikbaar'){
                                                $button = "<a href='registratie.php' class='result_button' style='color:#ffffff'>" .'Bestellen' . "</a>";

                                            } else {
                                                $button = "<a href='#' class='result_button' style='color:#ffffff'>" .'Verhuizen' . "</a>";
                                            };
                                            echo "<td>" . "<button class='btn btn-primary result_button'>$button</button>" ."</td>";
                                            echo "</tr>";
                                        }
                                    }else {
                                        $value = '';
                                    };
                                    echo "</tbody>";
                                    echo "</table>";
                                    ?>
						</div>
					</div>
				</div>
			</form>
		</div>
    <footer class="footer-background">
    <section class="container">
    <a id="adres" href="http://www.compleetit.nl" target="_parent">Voorstraat 55A , Voorschoten</a>
    <a id="phone" href="tel:0717107402">071 -&shy; 710 74 02</a>
    <a id="email" href="http://www.compleetit.nl" target="_parent">info@compleetit.nl</a>
    </section>
    </footer>
    </body>
</html>