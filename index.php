<!DOCTYPE html>
<html lang="en">
<head>
  <title>Offline Portal | Forum Hidden</title>
  <link rel="shortcut icon" href="images/iconmonstr-android-os-1-240.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="min/css/bootstrap.min.css">
  <link rel="stylesheet" href="fa/css/font-awesome.min.css">
  <link rel="stylesheet" href="bs/dist/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/font.css">
  <script src="min/js/jquery.min.js"></script>
  <script src="min/js/bootstrap.min.js"></script>
  <script src="bs/dist/js/bootstrap-select.min.js"></script>
  <script src="bs/dist/js/defaults-*.min.js"></script>
  <script src="min/js/jqueruy.js"></script>
  <script type="text/javascript" src="min/js/jquery-1.12.1.min.js"></script>
  		<script>
			$("document").ready(function(){
				setInterval("slidetop()",1000);
			});
			function slidetop(){
				var width=$(".slide-box ul li").outerWidth()+0;
				var left=parseInt($(".slide-box ul").css("left"))-width;
				$(".slide-box ul:not(:animated)").animate({"left":left},3000,function(){
					$(".slide-box li:last").after($(".slide-box ul li:first"));
					$(".slide-box ul").css("left","-1150px");
				});
			}
		</script>
		<script type="text/javascript">
			var on = true;
        var myVar = setInterval(function(){ if(on) {slides()}on=true;},5000);

        function slides(i) {
          document.getElementsByClassName("ns")[1].style.width="0px";
          document.getElementsByClassName("ns")[2].style.width="700px";
          var slide = document.getElementsByClassName("ns")[0];
          document.getElementById("ns").appendChild(slide);
          if(i) {
           on = false; 
          }
        }
        function back_slide(i) {
          document.getElementsByClassName("ns")[1].style.width="0px";
          document.getElementsByClassName("ns")[0].style.width="700px";
          var slide = document.getElementsByClassName("ns")[4];
          var slide2 = document.getElementsByClassName("ns")[0];
          document.getElementById("ns").insertBefore(slide,slide2);
          if(i) {
           on = false; 
          }
        }
  </script>	
</head>
<body>
	<header>
			<nav class="navbar navbar-custom navbar-default">
				<div class="container">
				  <div class="container-fluid">
				    <div class="navbar-header">
				      <a class="navbar-brand" href="?m=content-index"> <span class="fa fa-users"></span>&nbsp;Forum Smekansa</a>
				    </div>
				    <ul class="nav navbar-nav header-list">
				      <li><a href="?m=content-index"><span class="fa fa-home"></span>&nbsp; Home</a></li>
				      <li><a href="?m=news"><span class="fa fa-hand-peace-o"></span>&nbsp; News</a></li>
				      <li><a href="?m=profile"><span class="fa fa-user"></span>&nbsp; My Profile</a></li>
				      <li><a href="#"><span class="fa fa-sign-out"></span>&nbsp; Logout</a></li>
				    </ul>
				  </div>
				</div>
			</nav>
		
	</header>

	<content>
		<div class="slide-box" style="border: 1px solid #000; margin-bottom: 20px;">
				<ul>
				<li><a href=""><img src="images/material-black-poly.png"></a></li>
				<li><a href=""><img src="images/material-black-poly.png"></a></li>
				<li><a href=""><img src="images/material-black-poly.png"></a></li>
				<li><a href=""><img src="images/material-black-poly.png"></a></li>
				</ul>
		</div>
	<!-- Helper -->
		<div class="container" style="border-top:1px solid #F7E5E5; background: #fff; border-radius: 5px;">
			<div class="col-md-4" style=" padding-top: 22px;padding-bottom: 20px; color: #D0C1C1;
				vertical-align: baseline; font-size: 13px;">
				<a href="index.php" class="story-page"><span class="fa fa-home" style="font-size: 17px;"></span>&nbsp;<b> index</b></a>
			</div>

			<!-- Form Search -->
			<div class="col-md-5 col-search">
				<form class="form-search">
					  <input class="input-search calibri" type="text" placeholder="Search ....">
						<select class="selectpicker select-search">
						  <option data-icon="glyphicon glyphicon-th-list">&nbsp;All Class</option>
						  <option data-icon="glyphicon glyphicon-usd">&nbsp;Akuntansi</option>
						  <option data-icon="glyphicon glyphicon-calendar">&nbsp;Administrasi Perkantoran</option>
						  <option data-icon="glyphicon glyphicon-shopping-cart">&nbsp;Tata Niaga</option>
						  <option data-icon="glyphicon glyphicon-facetime-video">&nbsp;Multimedia</option>
						  <option data-icon="fa fa-android">&nbsp;Software Engineering</option>
						</select>
					  <button class="btn-search" style="border-left:0px;"> <i class="fa fa-search fa-fw"></i></button>
				</form>
			</div>
			<!-- .............. -->
		</div>
	<!-- ............................ -->


	<!-- Main Content -->
		<div class="container" style="margin-top: 30px; min-height: 500px;">
				<?php
					$main=isset($_GET['m'])?$_GET['m']:"";
					if($main){
								require_once "include/".$main.".php";
					}
					else{
								include "include/content-index.php";
					}
				?>
		</div>

	<!-- ....................... -->

	<!-- Modals Create Threads -->

		<div id="CreateThreads" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							
							<h4 class="modal-title"><span class="glyphicon glyphicon-pencil fa-fw" style="font-size: 14px;"></span>&nbsp;Create Threads</h4>
						</div>
						<div class="modal-body">
							<span class="glyphicon glyphicon-pushpin fa-fw" style="margin-top: 10px;"></span><label>&nbsp;Title</label>
							<input type="text" class="form-control">
							<span class="glyphicon glyphicon-paperclip fa-fw" style="margin-top: 10px;"></span><label>&nbsp;Topics</label>
							<textarea class="form-control" style="min-width: 100%;max-width: 100%;"></textarea>
							<input type="submit" class="btn elegant-red" value="+ Add News" style="margin-top: 20px; margin-bottom: 20px;color: #fff; padding: 10px 20px; border-radius: 3px;">
						</div>
					</div>
				</div>
			</div>

	<!-- ....................... -->
	</content>


	<!-- Footer -->
		<footer style="margin-top: 50px;">
			<div class="col-md-12 footer navbar-custom" style="text-align: center;">
				<h5 style="color: #fff; padding-top: 10px; padding-bottom: 10px;">Copyright © Testing Portal | Smekansa's Forum</h5>
			</div>
		</footer>
	<!-- .......................... -->
</body>
</html>
