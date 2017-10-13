<div class="block block-pd-sm block-bg-primary">
      <div class="container">
        <div class="row">
          <h7>
          <center>
            Copyright © AmaliaSafira
            <!-- ============== By AmaliaSafira ============== -->
          </center>
          </h7>
          
        </div>
      </div>
    </div>
    
    <!-- ======== @Region: #footer ======== -->
    
    
    <!-- Required JavaScript Libraries -->
    <script src="<?=base_url()?>lib/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?=base_url()?>lib/stellar/stellar.min.js"></script>
    <script src="<?=base_url()?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?=base_url()?>lib/counterup/counterup.min.js"></script>
    <script src="<?=base_url()?>contactform/contactform.js"></script>
    
    <!-- Template Specisifc Custom Javascript File -->
    <script src="<?=base_url()?>js/custom.js"></script>
    
    <!--Custom scripts demo background & colour switcher - OPTIONAL -->
    <script src="<?=base_url()?>js/color-switcher.js"></script>
    
    <!--Contactform script -->
    <script src="<?=base_url()?>contactform/contactform.js"></script>

    <!-- Galery Thumbnail Zoom Picture -->
    <script src="<?=base_url()?>dist/simpleLightbox.js"></script>

    <!-- Data Table -->
    <script>
      $('.gallery a').simpleLightbox();
    </script>
    <script>
      // Get the modal
      var modal = document.getElementById('myModal');

      // Get the image and insert it inside the modal - use its "alt" text as a caption
      var img = document.getElementById('myImg');
      var modalImg = document.getElementById("img01");
      var captionText = document.getElementById("caption");
      img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
      }

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() { 
          modal.style.display = "none";
      }
    </script>
    <script>
      $('.layer').resizeInPixel(200, 200);
    </script>

    
  </body>
</html>