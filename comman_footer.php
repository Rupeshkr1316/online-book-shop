<style>
  .head {
    color: #FFF;
  }
</style>

<section id="bottom" style="background:#000; padding-bottom:50px;">
  <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="widget">
          <h3 class="head">Company</h3>
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">We are hiring</a></li>
            <li><a href="#">Meet the team</a></li>
            <li><a href="#">Copyright</a></li>
            <li><a href="#">Terms of use</a></li>
            <li><a href="#">Privacy policy</a></li>
            <li><a href="#">Contact us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="widget">
          <h3>Support</h3>
          <ul>
            <li><a href="#">Faq</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Forum</a></li>
            <li><a href="#">Documentation</a></li>
            <li><a href="#">Refund policy</a></li>
            <li><a href="#">Ticket system</a></li>
            <li><a href="#">Billing system</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="widget">
          <h3>Developers</h3>
          <ul>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">SEO Marketing</a></li>
            <li><a href="#">Theme</a></li>
            <li><a href="#">Development</a></li>
            <li><a href="#">Email Marketing</a></li>
            <li><a href="#">Plugin Development</a></li>
            <li><a href="#">Article Writing</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="widget">
          <h3>Our Partners</h3>
          <ul>
            <li><a href="#">Adipisicing Elit</a></li>
            <li><a href="#">Eiusmod</a></li>
            <li><a href="#">Tempor</a></li>
            <li><a href="#">Veniam</a></li>
            <li><a href="#">Exercitation</a></li>
            <li><a href="#">Ullamco</a></li>
            <li><a href="#">Laboris</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<footer id="footer" class="midnight-blue">
  <div class="container">
    <div class="row">
      <div class="col-sm-6"> &copy; <?php echo date('Y'); ?> <a href="#">Online book Shop</a>. All Rights Reserved. </div>
      <div class="col-sm-6">
        <ul class="pull-right">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="feedback.php">Feedback</a></li>
          <li><a href="contact1.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>
<script>
  $(document).ready(function() {
    $('.quantity-input').on('change', function() {
      var quantity = $(this).val();
      var price = $(this).closest('tr').find('.price').text();
      var total = parseFloat(price) * parseInt(quantity);
      $(this).closest('tr').find('.total').text(total.toFixed(2));

      updateGrandTotal();
    });

    function updateGrandTotal() {
      var grandTotal = 0;
      $('.total').each(function() {
        grandTotal += parseFloat($(this).text());
      });
      $('.grand-total').text(grandTotal.toFixed(2));
      $('#gtotala').val(grandTotal.toFixed(2));
    }
  });
</script>
</body>

</html>