<!DOCTYPE html>
<html>
<head>
	<title></title>
		<script type="text/javascript" src="min/js/jquery.js"></script>
		<script>
			$("document").ready(function(){
				setInterval("sliding()",1000);
			});
			function sliding(){
				var width=$(".slideshow-2 ul li").outerWidth()+0;
				var left=parseInt($(".slideshow-2 ul").css("left"))-width;
				$(".slideshow-2 ul:not(:animated)").animate({"left":left},3000,function(){
					$(".slideshow-2 li:last").after($(".slideshow-2 ul li:first"));
					$(".slideshow-2 ul").css("left","-728px");
				});
			}
		</script>

		<style type="text/css">

.slideshow-2{
	width:688px;
	height:92px;
	margin:12px auto;
	overflow:hidden;
}
.slideshow-2 ul{
	left:-728px;
	width:9999px;
	list-style:none;
	position:relative;
}
.slideshow-2 ul li{
	position:relative;
	float:left;
	height:90px;
	width:688px;
}
.slideshow-2 ul li img{
	width:728px;
	height:90px;
}

			.slide-box{
				width: 768px;
				height: 100px;
				border: 1px solid #000;
			}
		</style>
</head>
<body>
		<div class="slideshow-2">
			<ul>
					<li><a href=""><img src="images/material-black-poly.png"></a></li>
					<li><a href=""><img src="images/material-black-poly.png"></a></li>
					<li><a href=""><img src="images/material-black-poly.png"></a></li>
				</ul>
		</div>
		<div class="slide-box">
			
		</div>
</body>
</html>