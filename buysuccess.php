<?php
	error_reporting(1);
	
	include("dbconnect.php");
	
	if($_REQUEST['log']=='out')
	{
		session_destroy();
		header("location:index.php");
	}
	
?>
<?php 
error_reporting(1);
include("vivi/head.php"); ?>
			<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Buy Success</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>                            
                            <li class="breadcrumb-item text-white active" aria-current="page">Buy Success</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Buy Start -->
         <div class="container-xxl py-5">
            <div class="container">
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                    	<h2 class="section-title ff-secondary text-center text-primary fw-normal"><span>Thank you for shopping with us</span></h2>
          				<p><font color="blue"><i>Your order is sent successfully!</i></font></p>
		  				<p>Your order no. is <?php echo "<font size='4' color='blue'>".$_REQUEST['order_no']."</font>";?></p>
		  				<p>Thank you. Please come again.</p>
		  				<p><a href="?log=out">Log out</a></p>
		

                    </div>
                </div>
            </div>
        </div>



<?php 
error_reporting(1);
include("vivi/footerr.php"); ?>