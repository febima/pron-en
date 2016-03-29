<section id="slide">
  <button onclick="back_slide(true)" class="prev">&#171;</button>
  <button onclick="slides(true)" class="next">&#187;</button>
  <div>
    <img src="images/Lighthouse.jpg">
  </div>
  <div>
  </div>
  <div>
    <img src="images/action-bg.jpg">
  </div>
  <div>
    <img src="images/action-bg.jpg">
  </div>
  <div>
    <img src="images/action-bg.jpg">
  </div>
</section>
<!-- Work of Juston Cheney -->

<head>
  <style type="text/css">
    *{
  margin:0;
  padding:0;
}
body{
  background:#303030;
}
#slide{
  width: 960px;
  height: 350px;
  overflow:hidden;
  margin: 30px auto;
  box-shadow: 0 8px 6px -6px rgba(0,0,0,1);
}
#slide div{
  display:block;
  width:0;
  float: left;
  -webkit-transition: all 0.75s;
  -moz-transition: all 0.75s;
  -o-transition:all 0.75s;
  transition: all 0.75s;
}
img {
  width:960px;
}
button.prev, button.next {
  position: absolute;
  z-index: 999;
  display: block;
  padding:0 10px;
  width: auto;
  height:350px;
  background: rgba(0,0,0,0);
  color: #ffffff;
  font-size:26px;
  cursor: pointer;
  border:none;
  outline:none;
}
button.prev:hover, button.next:hover {
  background: rgba(0,0,0,0.8);
}
button.next {
  margin-left:926px;
}
  </style>

  <script type="text/javascript">
      var on = true;
        var myVar = setInterval(function(){ if(on) {slides()}on=true;},3000);

        function slides(i) {
          document.getElementsByTagName("div")[1].style.width="0px";
          document.getElementsByTagName("div")[2].style.width="100%";
          var sl = document.getElementsByTagName("div")[0];
          document.getElementById("slide").appendChild(sl);
          if(i) {
           on = false; 
          }
        }
        function back_slide(i) {
          document.getElementsByTagName("div")[1].style.width="0px";
          document.getElementsByTagName("div")[0].style.width="100%";
          var slide = document.getElementsByTagName("div")[4];
          var slide2 = document.getElementsByTagName("div")[0];
          document.getElementById("slide").insertBefore(slide,slide2);
          if(i) {
           on = false; 
          }
        }
  </script>
</head>