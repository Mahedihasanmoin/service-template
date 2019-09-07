
<div class="bgded overlay row4" style="background-image:url('images/demo/backgrounds/01.png');">
  <footer id="footer" class="hoc clear"> 
    <div class="one_quarter first">
      
    </div>
  </footer>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="text-center">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<script src="/layout/scripts/jquery.min.js"></script>
<script src="/layout/scripts/jquery.backtotop.js"></script>
<script src="/layout/scripts/jquery.mobilemenu.js"></script>

<script>
    var slideIndex = 0;
    carousel();
    
    function carousel() {
      var i;
      var x = document.getElementsByClassName("slider");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
      }
      slideIndex++;
      if (slideIndex > x.length) {slideIndex = 1} 
      x[slideIndex-1].style.display = "block"; 
      setTimeout(carousel, 3000); 
    }
    </script>
</body>
</html>