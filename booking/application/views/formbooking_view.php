<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
	<head data-fold="true">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			Booking - CYL | Scalp Lab Solutions
		</title> 

		<!--/* Web Meta Tag */-->
		<meta name="description" content="คำอธิบายเว็บ">
		<meta name="keywords" content="คำสำคัญ1, คำสำคัญ2,">
		<meta name="author" content="ชื่อผู้พัฒนาเว็บ/หน่วยงานเจ้าของเว็บไซต์">
		<meta name="robots" content="all">
		<meta name="Copyright" content="ข้อความสัญญาอนุญาต">

		<!--/* Dublin Core Metadata */-->
		<meta name="DC.title" content="ชื่อเรื่อง" />
		<meta name="DC.creator" content="ผู้แต่ง หรือ เจ้าของงาน Cinta Salon | Pipsqueak Productions, LLC." />
		<meta name="DC.description" content="ลักษณะ" />
		<meta name="DC.publisher" content="สำนักพิมพ์" />
		<meta name="DC.date" content="ปี" />
		<meta name="DC.identifier" content="รหัส" />
		<meta name="DC.type" content="ประเภท" />
		<meta name="DC.rights" content="สิทธิ" />
		<meta name="DC.language" content="ภาษา" />
		<meta name="DC.subject" content="หัวเรื่อง หรือ คำสำคัญ" />
		<meta name="DC.relation" content="เรื่องที่เกี่ยวข้อง" />

		<!--/* stylesheet */-->
		<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
		<link href="http://cyl.sg/assets/css/main-modify.css" rel="stylesheet" type="text/css">

		<!--/* favicons */-->
		<link rel="apple-touch-icon" sizes="180x180" href="http://cyl.sg/assets/images/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="http://cyl.sg/assets/images/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="http://cyl.sg/assets/images/favicons/favicon-16x16.png">
		<link rel="manifest" href="http://cyl.sg/assets/images/favicons/manifest.json">
		<link rel="mask-icon" href="http://cyl.sg/assets/images/favicons/safari-pinned-tab.svg" color="#ce9d2a">
		<meta name="theme-color" content="#ffffff">
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109694136-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-109694136-1');
		</script>


	</head>
<body>
		<div id="page">
			<header id="pagetop" data-fold="true">
				<nav>
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="logo page-scroll">
									<a href="/">
										<img src="http://cyl.sg/assets/images/Logo_CYL_Black&Gold&White-100x60.png" alt="logo">
									</a>
								</div>
							</div>
<!-- /.col-xs-12 -->
						</div>
<!-- /.row -->
						<div class="clearfix"></div>
					</div>
<!-- /.container -->
				</nav>
			</header>
			<div id="mainContent">
				<section id="sectionbookform" class="col-pad-0" data-fold="true">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div id="parallax-4" class="bg parallax" data-depth="0.20" style="background-position: 50% 0px;">
									<div class="wrapper">
										<h2 class="form-header">
											Appointment
										</h2>
			              <div class="row">
			                  <div class="col-sm-12">
			                      <?php echo $this->session->flashdata('msg'); ?>
			                  </div>
			              </div>
										<div class="textBlock col-md-offset-2 col-md-7 col-pad5">
											<form id="formbooking" class="appfrmright" action="<?php echo base_url(); ?>index.php/forms/registration" method="post" enctype="multipart/form-data">
												<div class="form-group">
													<label class="control-label col-sm-3" for="fname"><span class="text-danger">*</span>First Name</label>
													<div class="col-sm-9">
														<input type="text" name="fname" id="fname" class="form-control" placeholder="Enter First Name" >
														<span class="text-danger"><?php echo form_error('fname'); ?></span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="lname"><span class="text-danger">*</span>Last Name</label>
													<div class="col-sm-9">
														<input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Last Name" >
														<span class="text-danger"><?php echo form_error('lname'); ?></span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="phone"><span class="text-danger">*</span>Phone</label>
													<div class="col-sm-9">
														<input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone Number" >
														<span class="text-danger"><?php echo form_error('phone'); ?></span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="email"><span class="text-danger">*</span>Email</label>
													<div class="col-sm-9">
														<input type="text" name="email" id="email" class="form-control" placeholder="Enter Email"  >
														<span class="text-danger"><?php echo form_error('email'); ?></span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="Date-time"><span class="text-danger">*</span>Date & Time</label>
													<div class="col-sm-9">
														<div class="row">
															<div class="col-sm-7">
																<input type="date" name="dates" id="dates" class="form-control" placeholder="Enter Date" >
																<span class="text-danger"><?php echo form_error('dates'); ?></span>
															</div>
															<div class="col-sm-5">
																<input type="text" name="times" id="times" class="form-control timepicker" placeholder="Enter Time" >
																<span class="text-danger"><?php echo form_error('times'); ?></span>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="menu"><span class="text-danger">*</span>Menu</label>
													<div class="col-sm-9">
													  <div class="panel-group" id="accordion">
													    <div class="panel panel-default">
													      <div class="panel-heading">
													        <h4 class="panel-title">
													          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="vjs-tt-cue">SCALP TREATMENT</a>
													        </h4>
													      </div>
													      <div id="collapse1" class="panel-collapse collapse">
													        <div class="panel-body">
													        	<h5>Detox</h5>
													        	<h6>
													        		- Greasy Scalp<br>
													        		- Clogged Pores<br>
													        		- Flakes Surround Pores<br>
													        		- Kenogen (Empty Pores)<br>
													        	</h6>
														        	<label class="radio-inline"><input type="radio" name="detox"  value="Detox - Spa">Detox - Spa</label>
														        	<label class="radio-inline"><input type="radio" name="detox"  value="Detox - Salon">Detox - Salon</label>
													        	<hr>
													        	<h5>Restoring</h5>
													        	<h6>
													        		- Hair Loss<br>
													        		- Patchy Hair Loss<br>
													        		- Unhealthy Hair<br>
													        		- Vellus Hair<br>
													        		- Short Life-Span<br>
													        	</h6>
														        	<label class="radio-inline"><input type="radio" name="restoring"  value="Restoring - Spa">Restoring - Spa</label>
														        	<label class="radio-inline"><input type="radio" name="restoring"  value="Restoring - Salon">Restoring - Salon</label>
													        	<hr>
													        	<h5>Regrowth</h5>
													        	<h6>
													        		- Male/Female pattern Baldness<br>
													        		- Kenogen Loss<br>
													        		- Aging Thinning<br>
													        	</h6>
														        	<label class="radio-inline"><input type="radio" name="regrowth"  value="Regrowth - Spa">Regrowth - Spa</label>
														        	<label class="radio-inline"><input type="radio" name="regrowth"  value="Regrowth - Salon">Regrowth - Salon</label>
													        	<hr>
													        	<h5>Boosting</h5>
													        	<h6>
													        		- Hair Matrix thickness < 0.25mm<br>
													        		- Flakes Surrounding Pores<br>
													        		- Lack of Malanin<br>
													        		- Aging Thining<br>
													        	</h6>
														        	<label class="radio-inline"><input type="radio" name="boosting"  value="Boosting - Spa">Boosting - Spa</label>
														        	<label class="radio-inline"><input type="radio" name="boosting"  value="Boosting - Salon">Boosting - Salon</label>
													        </div>
													      </div>
													    </div>
													    <div class="panel panel-default" style="display: none;">
													      <div class="panel-heading">
													        <h4 class="panel-title">
													          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="vjs-tt-cue">HAIR TREATMENT</a>
													        </h4>
													      </div>
													      <div id="collapse2" class="panel-collapse collapse">
													        <div class="panel-body">
													        	<h5>CYL Signature 4 Steps Hair Treat</h5>
													        	<h6>
													        		- Lipid layer is destroyed<br>
													        		- Highly compromised or lost cuticle<br>
													        		- Damaged internal structure<br>
													        	</h6>
														        	<label class="radio-inline"><input type="radio" name="signature"  value="CYL Signature 4 Steps Hair Treat - Spa">Spa</label>
														        	<label class="radio-inline"><input type="radio" name="signature"  value="CYL Signature 4 Steps Hair Treat - Salon">Salon</label>
														        	<label class="radio-inline"><input type="radio" name="signature"  value="CYL Signature 4 Steps Hair Treat - Add On">Add On</label>
													        	<hr>
													        	<h5>Intensive Repair 2 Step Hair Treat</h5>
													        	<h6>
													        		- Lipid layer is weakened<br>
													        		- Swollen cuticle layers<br>
													        		- Weakened internal structur<br>
													        	</h6>
														        	<label class="radio-inline"><input type="radio" name="intensive"  value="Intensive Repair 2 Step Hair Treat - Spa">Spa</label>
														        	<label class="radio-inline"><input type="radio" name="intensive"  value="Intensive Repair 2 Step Hair Treat - Salon">Salon</label>
														        	<label class="radio-inline"><input type="radio" name="intensive"  value="Intensive Repair 2 Step Hair Treat - Add On">Add On</label>
													        	<hr>
													        	<h5>Deep Recovery Hair Treat</h5>
													        	<h6>
													        		- Balanced lipid layer<br>
													        		- Sealed cuticle<br>
													        		- Natural strength<br>
													        	</h6>
														        	<label class="radio-inline"><input type="radio" name="deep"  value="Deep Recovery Hair Treat - Spa">Spa</label>
														        	<label class="radio-inline"><input type="radio" name="deep"  value="Deep Recovery Hair Treat - Salon">Salon</label>
														        	<label class="radio-inline"><input type="radio" name="deep"  value="Deep Recovery Hair Treat - Add On">Add On</label>
													        </div>
													      </div>
													    </div>
													    <div class="panel panel-default">
													      <div class="panel-heading">
													        <h4 class="panel-title">
													          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="vjs-tt-cue">HAIR SERVICE</a>
													        </h4>
													      </div>
													      <div id="collapse3" class="panel-collapse collapse">
													        <div class="panel-body">
													        	<div class="checkbox"><label><input type="checkbox" name="h_service[]"  value="Wash & Blow">Wash & Blow</label></div>
													        	<div class="checkbox"><label><input type="checkbox" name="h_service[]"  value="Styling">Styling</label></div>
													        	<div class="checkbox"><label><input type="checkbox" name="h_service[]"  value="Fringe">Fringe</label></div>
													        	<hr>
													        	<div class="checkbox"><label><input type="checkbox" name="h_service[]"  value="Woman Hair Cut">Woman Hair Cut</label></div>
													        	<div class="checkbox"><label><input type="checkbox" name="h_service[]"  value="Man Hair Cut">Man Hair Cut</label></div>
													        	<div class="checkbox"><label><input type="checkbox" name="h_service[]"  value="Student Hair Cut">Student Hair Cut</label></div>
													        	<div class="checkbox"><label><input type="checkbox" name="h_service[]"  value="Kid Hair Cut (Below Age 6)">Kid Hair Cut (Below Age 6)</label></div>
													        	<hr>
													        	<div class="checkbox"><label><input type="checkbox" name="h_service[]"   value="Colour Root Touch Up">Colour Root Touch Up</label></div>
													        	<div class="checkbox"><label><input type="checkbox" name="h_service[]"   value="Colour Full Head">Colour Full Head</label></div>
													        	<div class="checkbox"><label><input type="checkbox" name="h_service[]"   value="Bleach">Bleach</label></div>
													        	<div class="checkbox"><label><input type="checkbox" name="h_service[]"   value="Pre-colour">Pre-colour</label></div>
													        	<div class="checkbox"><label><input type="checkbox" name="h_service[]"   value="Post-colour">Post-colour</label></div>
													        	<hr>
													        	<div class="checkbox"><label><input type="checkbox" name="h_service[]"   value="Highlight-Per Pack">Highlight-Per Pack</label></div>
													        	<div class="checkbox"><label><input type="checkbox" name="h_service[]"   value="Natural Highlights">Natural Highlights</label></div>
													        	<hr>
													        	<div class="checkbox"><label><input type="checkbox" name="h_service[]"   value="Rebonding (Below 3 cm)">Rebonding (Below 3 cm)</label></div>
													        	<div class="checkbox"><label><input type="checkbox" name="h_service[]"   value="Rebonding (Full)">Rebonding (Full)</label></div>
													        	<div class="checkbox"><label><input type="checkbox" name="h_service[]"   value="Keratin">Keratin</label></div>
													        	<hr>
													        	<div class="checkbox"><label><input type="checkbox" name="h_service[]"   value="Wave Perm">Wave Perm</label></div>
													        	<div class="checkbox"><label><input type="checkbox" name="h_service[]"   value="Texture Perm">Texture Perm</label></div>
													        	<div class="checkbox"><label><input type="checkbox" name="h_service[]"   value="Digital Perm">Digital Perm</label></div>
													        </div>
													      </div>
													    </div>
													    <div class="panel panel-default">
													      <div class="panel-heading">
													        <h4 class="panel-title">
													          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="vjs-tt-cue">OTHER</a>
													        </h4>
													      </div>
													      <div id="collapse4" class="panel-collapse collapse">
													        <div class="panel-body">
													        	<div class="checkbox"><label><input type="checkbox" name="other_c" id="other_c"  value="Other Please specify" >Other Please specify</label></div>
													        	<textarea class="form-control" rows="3" name="other" id="other" placeholder="Enter Other"></textarea>
													        </div>
													      </div>
													    </div>
													  </div>
<!--/*class="panel-group" id="accordion"*/-->
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-sm-3" for="message">Message</label>
													<div class="col-sm-9">
														<textarea class="form-control" rows="3" name="message" id="message" placeholder="Enter Message"></textarea>
													</div>
												</div>
												<div class="form-group col-padtop">
													<div class="col-sm-offset-3 col-sm-9">
														<button type="submit" name="submit" id="submit" class="btn btn-default">Submit</button>
													</div>
												</div>
											</form>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
<!-- /#parallax-4 -->
							</div>
						</div>
					</div>
				</section>
			</div>
<!-- /#mainContent -->
			<section id="sectionFooter" data-fold="true">
				<div class="copyright">
					<p>
						<span class="cintasalon">
							Copyright © <i id="copyrightyear"></i> CYL.SG All right reserved
						</span> 
						<span class="pipsqueak">
							<span class="claim">
							</span> 
						</span>
					</p>
				</div>
<!-- /.copyright -->
			</section>
<!-- /section#sectionFooter -->
		</div>
<!-- /#page -->
		<div id="pageBottom" data-fold="true">
			<p id="back-top">
				<a href="#top"><span></span></a>
			</p>
			<p id="viewform"></p>
			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
			<script type="text/javascript" src="http://cyl.sg/assets/js/common.js"></script>
			<script type="text/javascript" src="http://cyl.sg/assets/js/common-004.js"></script>
			<script type="text/javascript" src="http://cyl.sg/assets/js/photoswipe.v3.0.5/klass.min.js"></script>
			<script type="text/javascript" src="http://cyl.sg/assets/js/photoswipe.v3.0.5/photoswipe-jquery.min.js"></script>
		</div>
<!-- /#pageBottom -->
	</body>
</html>