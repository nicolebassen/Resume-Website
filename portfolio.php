<?php
/*
 * Nicole Bassen
 * nbassen.greenrivertech.net
 * This page displays thumbnails that link to
 * jQuery Colorbox carousels of images as portfolio pieces
 */

// include side section, stylesheet, hyperlinks and scripts
include('includes/aside.php');
?>
      
        <!-- wrapper section -->
        <section class="column col-sm-9 wrapper-section">

          <div class="full col-sm-9">
          
          <?php //include('includes/navigation.php'); ?>

            <div class="wrapper-padding">

              <section class="margin-bottom" id="portfolio">

                <h2 class="sectionHeader">Portfolio</h2>
                <h5 class="subheader">Select a thumbnail to view images</h4>

                <div class="row margin-bottom">

                  <!-- Left thumbnails (on medium or larger screens) -->
                  <div class="col-md-6">

                    <!-- Kent Food Bank Website Thumbnail -->
                    <a href="img/kfb/kfb-contribute.png" class="kfbColorbox">
                        <div class="portfolioDiv" id="kfbDiv">
                        </div>
                    </a>
                    <figcaption>Kent Food Bank (Collaboration)<br>
                      <a href="http://teambinary.greenrivertech.net" target="new" title="Kent Food Bank"
                        class="extLink">
                          Visit Website&nbsp;<span class="fa fa-external-link"></span>
                        </a>
                    </figcaption>
                    
                    <div class="cbox">
                      <a href="img/kfb/kfb-contact.png" class="kfbColorbox" />
                      <a href="img/kfb/kfb-home.png" class="kfbColorbox" />
                      <a href="img/kfb/kfb-vform.png" class="kfbColorbox" />
                      <a href="img/kfb/kfb-calendar.png" class="kfbColorbox" />
                      <a href="img/kfb/kfb-footer.png" class="kfbColorbox" /></a>
                    </div> <!-- /kent food bank site -->
                    
                    <!-- Adobe Illustrator Thumbnail -->
                    <a href="img/art/art2.png" class="artColorbox">
                      <div class="portfolioDiv" id="artDiv">
                      </div>
                    </a>
                    <figcaption>Adobe Illustrator Artwork</figcaption> 
                    
                    <div class="cbox">
                      <a href="img/art/art1.png" class="artColorbox" />
                      <a href="img/art/art3.png" class="artColorbox" /></a>
                    </div> <!-- /illustrator -->
                    
                  </div> <!-- /left thumbnails -->
                  
                  <!--Right Thumbnails (on medium or larger screens) -->
                  <div class="col-md-6">
                    
                    <!-- Seahawks Website Thumbnail -->
                    <a href="img/seahawks/hawks-schedule2.png" class="hawksColorbox">
                      <div class="portfolioDiv" id="seahawksDiv">
                      </div>
                    </a>
                    <figcaption>Seattle Seahawks Fan Page<br>
                      <a href="http://nbassen.greenrivertech.net/seahawks/seahawkshome.htm" target="new" title="Seahawks Fan Page"
                        class="extLink">
                          Visit Website&nbsp;<span class="fa fa-external-link"></span>
                        </a>
                    </figcaption>
                    
                    <div class="cbox">
                      <a href="img/seahawks/hawks-home.png" class="hawksColorbox" />
                      <a href="img/seahawks/hawks-roster.png" class="hawksColorbox" />
                      <a href="img/seahawks/hawks-schedule.png" class="hawksColorbox" />
                      <a href="img/seahawks/hawks-gallery.png" class="hawksColorbox" /></a>
                    </div>
                    <!-- / seahawks -->
                    
                    
                    <!-- Kent Serves Thumbnail -->
                    <a href="img/kent-serves-index.png" class="kentServesColorbox" title="Kent Serves Website">
                      <div class="portfolioDiv" id="kentServesDiv">
                      </div>
                    </a>
                    <figcaption>Kent Serves Website<br>
                      <a href="http://kent-serves.greenrivertech.net" target="new" title="Kent Serves"
                        class="extLink">
                          Visit Website&nbsp;<span class="fa fa-external-link"></span>
                        </a>
                    </figcaption>
                    
                    <div class="cbox">
                      <a href="img/kent-serves-registration.png" class="kentServesColorbox" title="Registration Form" />
                      <a href="img/kent-serves-partners.png" class="kentServesColorbox" title="Kent Serves Partners" /></a>
                    </div>
                    <!-- / Kent Serves -->

                  </div>


                </div>
           
            </div><!--/ padding -->
          
          </div><!--/ col-9 -->

        </section><!--/ wrapper section -->    

      </div>

    </div>

  </div>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- Bootstrap JS -->
  <script src="js/bootstrap.min.js"></script>

  <!-- Plugins JS -->
  <script src="js/debouncer.js"></script>

  <!-- Core Theme JS -->
  <script src="js/enterprise.js"></script>
  
  <!-- Colorbox JS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.colorbox-min.js"></script>
  <script>
    jQuery(document).ready(function () {
      jQuery('a.kfbColorbox').colorbox({
        opacity:0.5 ,
        rel:'group1',   
        'maxWidth':'80%' ,
        'maxHeight':'80%' ,
        'scalePhotos' : true });
      jQuery('a.artColorbox').colorbox({
        opacity:0.5 ,
        rel:'group2',   
        'maxWidth':'80%' ,
        'maxHeight':'80%' ,
        'scalePhotos' : true });
      jQuery('a.hawksColorbox').colorbox({
        opacity:0.5 ,
        rel:'group3',   
        'maxWidth':'80%' ,
        'maxHeight':'80%' ,
        'scalePhotos' : true });
      jQuery('a.kentServesColorbox').colorbox({
        opacity:0.5 ,
        rel:'group4',   
        'maxWidth':'80%' ,
        'maxHeight':'80%' ,
        'scalePhotos' : true });
      
    });
  </script>

</body>
</html>