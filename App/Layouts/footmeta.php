</div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

  <script>
    (function(){
      var url = window.location.pathname;
      var current = url.replace('/', '');
      var previous = document.referrer;
      var prev = previous.replace(window.origin + '/', '');

      if (current === '' && prev === '') {
        $('.index').addClass('active');
      } else if (prev !== '' && current !== '') {
        $('.' + current).addClass('active');
        $('.' + prev).removeClass('active');
      } else if (prev === '' && current !== '') {
        $('.' + current).addClass('active');
      }
      
    })();
  </script>

  </body>
</html>