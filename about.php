<?php
session_start();
include('head_meenu.php');
?>
<style>
.img{
	margin-left:20px;
	padding:5px;
	height:277px;
	width:217px;
	margin-top:10px;
}
</style>

<!-- start slider -->
<div class="slider">
  <div id="about-slider">
    <div id="carousel-slider" class="carousel slide" data-ride="carousel"> 
      <!-- Indicators -->
      <div class="carousel-inner">
          <div class="item active"> <img src="slider/1.jpg"class="img-responsive" alt=""> </div>
        <div class="item"> <img  src="slider/2.jpg" class="img-responsive" alt=""> </div>
      </div>
      <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev"> <i class="fa fa-angle-left"></i> </a> <a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next"> <i class="fa fa-angle-right"></i> </a> </div>
    <!--/#carousel-slider--> 
  </div>
</div>
<!--end slider--> 
<!--welcome section-->
<div class="container-fluid">
<div class="row" style="margin-bottom:50px;">
  <div class="container">
  <h2>About Online Book Shop</h2><hr>
    <p>An online book is a resource in book-like form that is only available to read on the Internet. It differs from the common idea of an e-book, which is usually available for users to download and read locally on a computer, smartphone or on an e-reader. "Book-like" means: information is presented in a page format; pages are normally available to read sequentially (though "flipping" to another page is possible using a mouse, keyboard or other controllers); and pages are read passively, with little or no interaction or multimedia. This contrasts with a text which a user is reading on an interactive Web 2.0 website, which usually enables the user to click on online links, look up words or keywords online, etc. "Online" means the content may only be read while the reader is connected to the Internet. Thus the reader's experience with an online book is similar to reading a printed book, except that the book is read at a computer and is only accessible while the reader is online.

Online books are a common resource in virtual learning environments (VLEs). For example, the Moodle VLE defines an online book in this way. Over the last few years, there has been an increase of online books that are being used for notable events or to commemorate the memory of someone. The fundraising industry often uses online books as a way to fundraise, as online books are also a way to collect donations and engage with their audience.</p>
  
   </div>
  </div>
</div>

</div>
<!-- container -->
<?php
include('comman_footer.php');
?>
