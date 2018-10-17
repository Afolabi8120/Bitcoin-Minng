<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Awaiting Interest </title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta property="og:url" content="http://demo.madebytilde.com/elephant">
    <meta property="og:type" content="website">
    <meta property="og:title" content="The fastest way to build Modern Admin APPS for any platform, browser, or device.">
    <meta property="og:description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta property="og:image" content="../../elephant.html">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@madebytilde">
    <meta name="twitter:creator" content="@madebytilde">
    <meta name="twitter:title" content="The fastest way to build Modern Admin APPS for any platform, browser, or device.">
    <meta name="twitter:description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta name="twitter:image" content="../../elephant.html">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() . "assets/"; ?>apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php echo base_url() . "assets/"; ?>favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo base_url() . "assets/"; ?>favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php echo base_url() . "assets/"; ?>manifest.json">
    <link rel="mask-icon" href="<?php echo base_url() . "assets/"; ?>safari-pinned-tab.svg" color="#d9230f">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>css/vendor.min.css">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>css/elephant.min.css">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>css/application.min.css">
</head>
 
<body class="layout layout-header-fixed">
    <div class="layout-header">
      <div class="navbar navbar-default">
        <div class="navbar-header">
          <a class="navbar-brand navbar-brand-center" href="<?php echo base_url() . "index.php/dashboard"; ?>">
            <img class="navbar-brand-logo" src="<?php echo base_url() . "assets/"; ?>img/logo-inverse.svg" alt="Bitcoin Incom">
          </a>
          <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#sidenav">
            <span class="sr-only">Toggle navigation</span>
            <span class="bars">
              <span class="bar-line bar-line-1 out"></span>
              <span class="bar-line bar-line-2 out"></span>
              <span class="bar-line bar-line-3 out"></span>
            </span>
            <span class="bars bars-x">
              <span class="bar-line bar-line-4"></span>
              <span class="bar-line bar-line-5"></span>
            </span>
          </button>
          <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="arrow-up"></span>
            <span class="ellipsis ellipsis-vertical">
              <img class="ellipsis-object" width="32" height="32" src="https://cdn2.iconfinder.com/data/icons/rcons-user/32/male-shadow-circle-512.png" >
            </span>
          </button>
        </div>
        <div class="navbar-toggleable">
          <nav id="navbar" class="navbar-collapse collapse">
            <button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="bars">
                <span class="bar-line bar-line-1 out"></span>
                <span class="bar-line bar-line-2 out"></span>
                <span class="bar-line bar-line-3 out"></span>
                <span class="bar-line bar-line-4 in"></span>
                <span class="bar-line bar-line-5 in"></span>
                <span class="bar-line bar-line-6 in"></span>
              </span>
            </button>
            <ul class="nav navbar-nav navbar-right">
            	<li class="">
            		<h4 style="padding:5px;color: gold">1 BTC</h4>
            	</li>
            	<li class="">
            		<h4 id="btc_rate_box" style="padding:5px;color: green"></h4>
            	</li>
              <li class="visible-xs-block">
                <h4 class="navbar-text text-center">Hi, <?= $_SESSION['name'] ?></h4>
              </li>
              <!-- <li class="hidden-xs hidden-sm">
                <form class="navbar-search navbar-search-collapsed">
                  <div class="navbar-search-group">
                    <input class="navbar-search-input" type="text" placeholder="Search for people, companies, and more&hellip;">
                    <button class="navbar-search-toggler" title="Expand search form ( S )" aria-expanded="false" type="submit">
                      <span class="icon icon-search icon-lg"></span>
                    </button>
                    <button class="navbar-search-adv-btn" type="button">Advanced</button>
                  </div>
                </form>
              </li> -->
              
               
              <li class="dropdown hidden-xs">
                <button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">
                  <img class="rounded" width="36" height="36" src="https://cdn2.iconfinder.com/data/icons/rcons-user/32/male-shadow-circle-512.png" alt=""> <?= $_SESSION['name'] ?>
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                
                  <li><a href="<?php echo base_url(); ?>index.php/logout">Sign out</a></li>
                </ul>
              </li>
             
              <li class="visible-xs-block">
                <a href="<?php echo base_url() . "assets/"; ?>login-1.html">
                  <span class="icon icon-power-off icon-lg icon-fw"></span>
                  Sign out
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>



    <div class="layout-main">
      <div class="layout-sidebar">
        <div class="layout-sidebar-backdrop"></div>
        <div class="layout-sidebar-body  ">
          <div class="custom-scrollbar">
            <nav id="sidenav" class="sidenav-collapse collapse">
              <ul class="sidenav">
                
                <li class="sidenav-heading"></li>
                <li class="sidenav-item">
                  <a href="<?php echo base_url()?>index.php/dashboard">
                    <span class="sidenav-icon icon icon-home"></span>
                    <span class="sidenav-label">Dashboard</span>
                  </a>
                </li>

                <li class="sidenav-heading">Investment</li>
                <li class="sidenav-item">
                  <a href="<?php echo base_url()?>index.php/deposit">
                    <span class="sidenav-icon icon icon-dollar"></span>
                    <span class="sidenav-label">Make a deposit</span>
                  </a>
                </li>
                <!-- <li class="sidenav-item">
                  <a href="<?php echo base_url()?>/dashboard">
                    <span class="sidenav-icon icon icon-briefcase"></span>
                    <span class="sidenav-label">Switch to Plans</span>
                  </a>
                </li> -->

                <li class="sidenav-heading">Interests (%)</li>
                <li class="sidenav-item active">
                  <a href="<?php echo base_url() . "index.php/"; ?>awaitingInterest">
                    <span class="sidenav-icon icon icon-money"></span>
                    <span class="sidenav-label">Check Awaiting Income</span>
                  </a>
                </li>
               
               <!--  <li class="sidenav-heading">Settings</li>
                <li class="sidenav-item">
                  <a href="<?php echo base_url() . "assets/"; ?>widgets.html">
                    <span class="sidenav-icon icon icon-gears"></span>
                    <span class="sidenav-label">Profile Setup</span>
                  </a>
                </li> -->

                <li class="sidenav-heading"></li>
                <li class="sidenav-item">
                  <a href="<?php echo base_url() . "index.php/logout"; ?>">
                    <span class="sidenav-icon icon icon-power-off"></span>
                    <span class="sidenav-label">Log-out</span>
                  </a>
                </li>
               
               
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">Awaiting Income Checker</span>
            </h1>
          </div>
 
          
        <div class="row gutter-xs">
             
          <div class="row gutter-xs">
            <div class="row">
              <div class="col-xs-12">
              <div class="card">
                <div class="card-header">
                  <strong>Awaiting Interest Table</strong>
                </div>
                <div class="card-body">
                  <div class="alert alert-warning">Dear <b><?=$_SESSION['name'] ?></b>, please make sure your have already made your deposit to the displayed bitcoin-address. Clicking the request payout button without payment will lead to the cancellation of the investment process. <br/>Thank you!</div>
                  
                  <?php if(isset($_SESSION['success']) ) { ?>
                    <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
                  <?php }   ?>

                  <table id="demo-datatables-responsive-2" class="table table-bordered table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>BTC Address</th>
                        <th>Deposit</th>
                        <th>Inv.Rate(%)</th>
                        <th>Total Payout Amount(USD)</th>
                        <th>Payouts</th>
                        <th>Status</th>
                        <th>Initiated Date</th>
                        <th>Completion Date</th>
                        <th>Request Payout</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        foreach ($result as $key => $value) {
                          $closing = ($value['ending_date'] > date('Y-m-d') ) ? '<a href="'. base_url().'index.php/requestPayout?process='.$value['id'].'" class="btn btn-success">Request for payout</a></th>' : 'Process Closed';
                          echo '
                            <tr>
                              <th>'.$value['bitcoin_address'].'</th>
                              <th style="color:gold">'.$value['amountDeposited'].'</th>
                              <th>140</th>
                              <th style="color:green">'.$value['expectation'].'</th>
                              <th>'.$value['payout'].'</th>
                              <th style="color: blue">'.$value['flag'].'</th>
                              <th>'.$value['Invoke_date'].'</th>
                              <th>'.$value['ending_date'].'</th>
                              <th>'. $closing.'
                            </tr>

                          ';
                        }

                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
               
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="layout-footer">
        <div class="layout-footer-body">
          <small class="version"></small>
          <small class="copyright"><?= date('Y') ?> &copy; BitcoinIncom </small>
        </div>
      </div> -->
    </div>
     
    <script src="<?php echo base_url() . "assets/"; ?>js/vendor.min.js"></script>
    <script src="<?php echo base_url() . "assets/"; ?>js/elephant.min.js"></script>
    <script src="<?php echo base_url() . "assets/"; ?>js/application.min.js"></script>
    <!-- <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-83990101-1', 'auto');
      ga('send', 'pageview');
    </script> -->

    <script type="text/javascript">
    	function loadDoc() {
		    var xhttp = new XMLHttpRequest();
		    xhttp.onreadystatechange = function() {
		        if (this.readyState == 4 && this.status == 200) {
		        	var rJSON = JSON.parse(this.responseText);
		           document.getElementById('btc_rate_box').innerHTML = rJSON.bpi.USD.rate_float + ' USD';
		       	console.log(this.responseText);
		       }
		    };
		    xhttp.open("GET", "https://api.coindesk.com/v1/bpi/currentprice/USD.json", true);
		    xhttp.send(); 
		}

    	loadDoc();
    </script>

    <script>
  (function(b,i,t,C,O,I,N) {
    window.addEventListener('load',function() {
      if(b.getElementById(C))return;
      I=b.createElement(i),N=b.getElementsByTagName(i)[0];
      I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
    },false)
  })(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt');
</script>
  </body>

</html>