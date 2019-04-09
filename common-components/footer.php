<footer class="site-footer">

    <section class="pre-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Contact Details</h2>
                    <div class="border-bottom"></div>
                    <ul class="list-unstyled">
                        <li><a href="#">support@edna.life</a></li>
                        <li><a href="#">715-602-9200</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <p>Today, more than ever, we can align our DNA and unlock the answers to life by tuning into the Om frequency. When you are ready join our community and find your inner power.</p>
                    <div class="border-left"></div>
                    <div class="border-bottom-two"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="post-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="#"><svg class="icon icon-paperplane"><use xlink:href="#icon-paperplane"></use></svg></a>
                    <a href="#"><svg class="icon icon-facebook"><use xlink:href="#icon-facebook"></use></svg></a>
                    <a href="#"><svg class="icon icon-twitter"><use xlink:href="#icon-twitter"></use></svg></a>
                    <a href="#"><svg class="icon icon-linkedin"><use xlink:href="#icon-linkedin"></use></svg></a>
                </div>
                <div class="col-md-6">
                    <p>&copy; Copyrights 2019 EDNA. ALL RIGHTS RESERVED.</p>    
                </div>
            </div>
        </div>
    </section>
</footer>

<script async src="assets/js/scripts.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script> 
<script>
$num = $('.my-card').length;
$even = $num / 2;
$odd = ($num + 1) / 2;

if ($num % 2 == 0) {
  $('.my-card:nth-child(' + $even + ')').addClass('active');
  $('.my-card:nth-child(' + $even + ')').prev().addClass('prev');
  $('.my-card:nth-child(' + $even + ')').next().addClass('next');
} else {
  $('.my-card:nth-child(' + $odd + ')').addClass('active');
  $('.my-card:nth-child(' + $odd + ')').prev().addClass('prev');
  $('.my-card:nth-child(' + $odd + ')').next().addClass('next');
}

$('.my-card').click(function() {
  $slide = $('.active').width();
  console.log($('.active').position().left);
  
  if ($(this).hasClass('next')) {
    $('.card-carousel').stop(false, true).animate({left: '-=' + $slide});
  } else if ($(this).hasClass('prev')) {
    $('.card-carousel').stop(false, true).animate({left: '+=' + $slide});
  }
  
  $(this).removeClass('prev next');
  $(this).siblings().removeClass('prev active next');
  
  $(this).addClass('active');
  $(this).prev().addClass('prev');
  $(this).next().addClass('next');
});


// Keyboard nav
$('html body').keydown(function(e) {
  if (e.keyCode == 37) { // left
    $('.active').prev().trigger('click');
  }
  else if (e.keyCode == 39) { // right
    $('.active').next().trigger('click');
  }
});
</script>


</body>
</html>



