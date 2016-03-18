<?php
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
                  
                  <!--Right Thumbnails -->
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
                    
                    
                    <div class="portfolioDiv">
                      
                    </div>

                  </div>


                </div>
                
                <!-- contact information 

                <div class="row">

                  <div class="col-md-4 col-lg-4">

                    <article class="media">

                      <div class="pull-left">
                        <span class="fa fa-phone bg-primary text-primary animated rotateIn"></span>
                      </div>
                      <div class="media-body animated fadeInRight">(253) 326-2562</div>

                    </article>

                  </div>

                  <div class="col-md-5 col-lg-5">

                    <article class="media">

                      <div class="pull-left">
                        <span class="fa fa-envelope bg-primary text-primary animated rotateIn"></span>
                      </div>
                      <div class="media-body animated fadeInRight">nicolerbassen@gmail.com</div>

                    </article>

                  </div>

                  <div class="col-md-3 col-lg-3">

                    <article class="media">

                      <div class="pull-left">
                        <span class="fa fa-map-marker bg-primary text-primary animated rotateIn"></span>
                      </div>
                      <div class="media-body animated fadeInRight">Pacific, WA</div>

                    </article>

                  </div>

                </div>

              </section><!--/ about me -->
           
            </div><!--/ padding -->

            <!--
            <footer class="visible-xs">
              <p class="text-center"><small>Tim Foreman&copy;2015 <span class="text-secondary">Web Developer</span></small></p>
            </footer>
            -->
          
          </div><!--/ col-9 -->

        </section><!--/ wrapper section -->    

      </div>

    </div>

  </div>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  
  <!-- Nicole's jQuery -->


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
      //jQuery('a.kfbColorbox').find('#kfbLink').colorbox({
        //'html': '<h2>Kent Food Bank Website</h2>', 
        //href: 'portfolio.php p#kfbText'
      //});
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
      
      
    });
  </script>

</body>
</html>