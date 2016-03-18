<?php
// include side section, stylesheet, hyperlinks and scripts
include('includes/aside.php');
?>
      
        <!-- wrapper section -->
        <section class="column col-sm-9 wrapper-section">
          <!-- navigation bar-->
          <?php //include('includes/navigation.php'); ?>
          
          <div class="full col-sm-9">
          
          

            <div class="wrapper-padding">

              <!-- about me: add media buttons to this section and replace in side bar; add location -->
              <section class="margin-bottom" id="about-me">

                <h2 class="sectionHeader">About me</h2>
                <!--<p><small>Excepteur sint occaecat cupidatat</small></p>-->

                <div class="row margin-bottom">

                  <div class="col-md-9">

                    <p>
                      <!--<span class="subheader">I am:</span><br>-->
                      As an ambitious software development undergraduate, I have the ability to transform complex
                      business requirements into software. I strive to ensure applications are delivered on time,
                      to specification, are scalable, performance optimized and maintainable.<br><br>
                      My passion for learning keeps me highly motivated, allowing me to meet tight deadlines and
                      discover new ways of solving problems.
                      I encourage the sharing of ideas through the use of effective
                      communication with technical peers and business users.
                    </p><br>

                  </div>

                  <div class="connect col-md-3 text-center">
                    
                    <h4 class="connectHeader text-center">Connect</h2>

                    <a href="contact.php" title="Contact" class="connectLink col-xs-4 col-md-12">
                        <span class="fa fa-envelope fa-2x connectIcon"></span>
                        <span class="hidden-xs">&nbsp;Contact</span>
                    </a>

                      <a href="https://github.com/nicolebassen" target="new" title="GitHub" class="connectLink col-xs-4 col-md-12">
                        <span class="fa fa-github fa-2x connectIcon"></span>
                        <span class="hidden-xs">&nbsp;GitHub</span>
                      </a>
              
                      <a href="https://www.linkedin.com/in/nicolebassen" target="new" title="LinkedIn" class="connectLink col-xs-4 col-md-12">
                        <span class="fa fa-linkedin fa-2x connectIcon"></span>
                        <span class="hidden-xs">&nbsp;LinkedIn</span>
                      </a>
                    
                    

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

              <!-- skill -->
              <section class="margin-bottom" id="skills">

                <h2 class="sectionHeader">Technical Skills</h2>
                <!--<p class="margin-bottom"><small>Curabitur pretium tincidunt lacus</small></p>-->

                  <!--skills block-->
                  <div class="margin-bottom">

                    <div class="progress">
                      <div class="progress-bar" style="width: 45%">Java</div>
                    </div>

                    <div class="progress">
                      <div class="progress-bar" style="width: 30%">MySQL</div>
                    </div>

                    <div class="progress">
                      <div class="progress-bar" style="width: 25%">PHP</div>
                    </div>

                    <div class="progress">
                      <div class="progress-bar" style="width: 55%">HTML5</div>
                    </div>

                    <div class="progress">
                      <div class="progress-bar" style="width: 50%">Microsoft Office</div>
                    </div>

                    <div class="progress">
                      <div class="progress-bar" style="width: 30%">Bootstrap</div>
                    </div>

                    <div class="progress">
                      <div class="progress-bar" style="width: 35%">Illustrator</div>
                    </div>
                    
                    <div class="progress">
                      <div class="progress-bar" style="width: 20%">jQuery</div>
                    </div>

                    <div class="progress level">

                      <div class="progress-bar" style="width:25%">
                        Beginner
                      </div>
                      <div class="progress-bar" style="width:25%">
                        Intermediate
                      </div>
                      <div class="progress-bar" style="width:25%">
                        Advanced
                      </div>
                      <div class="progress-bar" style="width:25%">
                        Expert
                      </div>

                    </div>                   

                  </div><!--/ skills block-->

              </section><!--/ skill -->

              <!-- experiences -->
              <section class="panel-group resume margin-bottom" id="experience">

                <h2 class="sectionHeader">Work Experience</h2>
                <!--<p class="margin-bottom"><small>Ut enim ad minim veniam</small></p>-->

                <!-- ex1 -->
                <article class="resume-item">

                  <div class="resume-year"><small>2011 - 2013</small></div>

                  <div class="resume-btn">
                    <a href="#ex1" data-toggle="collapse" data-parent="#experience"></a>
                  </div>
                  
                  <div class="panel">

                    <div class="panel-heading">
                      <div class="panel-title">
                        <h4 class="resume-title">North Hill Fitness&nbsp;&nbsp;</h4>
                        <p class="text-secondary">Receptionist</p>
                      </div>
                    </div>

                    <div id="ex1" class="panel-collapse collapse in">
                      <div class="panel-body text-grey">
                        <p>
                          <span class="subheader">Responsibilities:</span>
                          <ul>
                            <li>Acted as the 'go to' person for technical system hardware and software queries,
                            skillfully managed a computer system to track gym activity</li>
                            <li>Greeted customers and visitors, responded to and resolved queries - face to face
                            and over the telephone - to the satisfaction of all parties</li>
                            <li>Meticulously and professionally answered all incoming calls, operated computer systems,
                            received mail and delivered it to the appropriate person</li>
                            <li>Completed administrative duties including data entry on internal systems, and maintained
                            electronic filing systems</li>
                            <li>Ensured that the reception area was tidy and clean, additionally monitored stationary
                            stock; re-ordered when required</li>
                          </ul>
                        </p>
                      </div>

                    </div>

                  </div>

                </article><!--/ ex1 -->

                <!-- ex2 -->
                <article class="resume-item">

                  <div class="resume-year"><small>2011 - 2013</small></div>

                  <div class="resume-btn">
                    <a href="#ex2" data-toggle="collapse" data-parent="#experience"></a>
                  </div>

                  <div class="panel">

                    <div class="panel-heading">
                      <div class="panel-title">
                        <h4 class="resume-title">West Tapps Maintenance Co.&nbsp;&nbsp;</h4>
                        <p class="text-secondary">Park Attendant</p>
                      </div>
                    </div>

                    <div id="ex2" class="panel-collapse collapse in">
                      <div class="panel-body text-grey">
                        <p>
                          <span class="subheader">Responsibilities:</span>
                          <ul>
                            <li>Directed visitors to carefully and efficiently park vehicles in allocated
                            spaces, utilized outstanding data entry skills to record parking
                            activity and client information</li>
                            <li>Handled user queries and complaints efficiently and professionally, additionally
                            maintained the sanitation of assigned work areas</li>
                          </ul>    
                        </p>
                      </div>

                    </div>

                  </div>

                </article><!--/ ex2 -->

                <!-- ex3 -->
                <article class="resume-item">
                  <div class="resume-year"><small>2008-2009</small></div>

                  <div class="resume-btn">
                    <a href="#ex3" data-toggle="collapse" data-parent="#experience"></a>
                  </div>

                  <div class="panel">

                    <div class="panel-heading">
                      <div class="panel-title">
                        <h4 class="resume-title">Roach Gymnastics&nbsp;&nbsp;</h4>
                        <p class="text-secondary">Gymnastics Instructor</p>
                      </div>
                    </div>

                    <div id="ex3" class="panel-collapse collapse in">
                      <div class="panel-body text-grey">
                        <p>
                          <span class="subheader">Responsibilities:</span>
                          <ul>
                            <li>Retained and imparted a thorough knowledge of policies, rules and regulations
                            to instruct and facilitate gymnastic classes for children aged 2 to 12 years</li>
                            <li>Created and delivered effective lesson plans; planned, implemented and evaluated
                            gymnastic techniques; prepared and maintained electronic records and reports</li>
                            <li>Made expert use of the equipment and supplies associated with gymnastic instruction,
                            handled queries and concerns from students and parents</li>
                            <li>Balanced a tenacious approach with outstanding levels of service to attract new
                            business for private birthday parties</li>
                          </ul>
                        </p>
                      </div>

                    </div>

                  </div>

                </article><!--/ ex3 -->

                <!-- ex4 
                <article class="resume-item">
                  <div class="resume-year"><small>1998 - 2000</small></div>

                  <div class="resume-btn">
                    <a href="#ex4" data-toggle="collapse" data-parent="#experience"></a>
                  </div>

                  <div class="panel">

                    <div class="panel-heading">
                      <div class="panel-title">
                        <h4 class="resume-title">Microsoft Corporation</h4>
                        <p class="text-secondary"> / Help Desk Analyst</p>
                      </div>
                    </div>

                    <div id="ex4" class="panel-collapse collapse in">
                      <div class="panel-body text-grey">
                        <p>
                          Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque.    
                        </p>
                      </div>

                    </div>

                  </div>

                </article> ex4 -->

              </section><!--/ experience --> 

              <!-- education -->
              <section class="panel-group resume margin-bottom" id="education">

                <h2 class="sectionHeader">Education</h2>
                <!--<p class="margin-bottom"><small>Fusce convallis mauris</small></p>-->

                <!-- ed1 -->
                <article class="resume-item">
                  <div class="resume-year"><small>2014 - Present</small></div>
                  

                  <div class="resume-btn">
                    <a href="#ed1" data-toggle="collapse" data-parent="#education"></a>
                  </div>

                  <div class="panel">

                    <div class="panel-heading">
                      <div class="panel-title">
                        <h4 class="resume-title">Green River College&nbsp;&nbsp;</h4>
                        <p class="text-secondary">BAS in Software Development</p>
                      </div>
                    </div>

                    <div id="ed1" class="panel-collapse collapse in">
                      <div class="panel-body text-grey">
                        <p>
                          <span class="subheader">In Progress // </span>
                          The Bachelor of Applied Science in Information Technology-Software Development is designed to
                          prepare students for employment in a variety of software development positions, such as software
                          developer, software test developer, systems analyst, quality assurance analyst, mobile application
                          developer, and web developer.
                        </p>
                        <ul>
                          <li>Associate in Development Degree - achieved December 2015</li>
                          <li>3.4 GPA</li>
                        </ul>
                      </div>

                    </div>

                  </div>

                </article><!-- ed1 -->

                <!-- ed2 -->
                <article class="resume-item">
                  <div class="resume-year"><small>2006 - 2011</small></div>

                  <div class="resume-btn">
                    <a href="#ed2" data-toggle="collapse" data-parent="#education"></a>
                  </div>

                  <div class="panel">

                    <div class="panel-heading">
                      <div class="panel-title">
                        <h4 class="resume-title">Sumner High School&nbsp;&nbsp;</h4>
                        <p class="text-secondary">Honors and IB Graduate</p>
                      </div>
                    </div>

                    <div id="ed2" class="panel-collapse collapse in">
                      <div class="panel-body text-grey">
                        <ul>
                          <li>Recipient of Robert Dalton's Scholarship for Journalism</li>
                          <li>3.3 GPA</li>
                        </ul>
                      </div>

                    </div>

                  </div>

                </article><!--/ ed2 -->

                <!-- ed3 
                <article class="resume-item">
                  <div class="resume-year"><small>2004 - 2008</small></div>

                  <div class="resume-btn">
                    <a href="#ed3" data-toggle="collapse" data-parent="#education"></a>
                  </div>

                  <div class="panel">

                    <div class="panel-heading">
                      <div class="panel-title">
                        <h4 class="resume-title">Nullam Arcu</h4>
                        <p class="text-secondary"> / Web Developer</p>
                      </div>
                    </div>

                    <div id="ed3" class="panel-collapse collapse in">
                      <div class="panel-body text-grey">
                        <p>
                          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula.    
                        </p>
                      </div>

                    </div>

                  </div>

                </article> ed3 -->

              </section><!--/ education -->
              
              <!-- portfolio 
              <section class="panel-group resume margin-bottom" id="portfolio">
                <h2 class="sectionHeader">Portfolio</h2>
                
              </section>-->
              
              <!--
              <section class="panel-group resume margin-bottom" id="contact">
                <h2 class="sectionHeader">Contact Me</h2>
                
              </section>-->

              
              <!-- milestones 
              <section class="margin-bottom" id="milestones">

                <h2>Milestones Achieved</h2>
                <p class="margin-bottom"><small>Donec lobortis risus a elit</small></p>

                <div class="row">

                  <div class="col-sm-6 col-lg-3 margin-bottom">

                    <article class="text-center">

                      <div class="thumbnail"><i class="fa fa-clock-o"></i></div>
                      <h2 class="lead">1,580</h2>
                      <h5>Hours of Works</h5>

                    </article>

                  </div>

                  <div class="col-sm-6 col-lg-3 margin-bottom">

                    <article class="text-center">

                      <div class="thumbnail"><i class="fa fa-code"></i></div>
                      <h2 class="lead">80</h2>
                      <h5>Projects Finished</h5>

                    </article>

                  </div>

                  <div class="col-sm-6 col-lg-3 margin-bottom">

                    <article class="text-center">

                      <div class="thumbnail"><i class="fa fa-smile-o"></i></div>
                      <h2 class="lead">160</h2>
                      <h5>Happy Clients</h5>

                    </article>

                  </div>

                  <div class="col-sm-6 col-lg-3 margin-bottom">

                    <article class="text-center">

                      <div class="thumbnail"><i class="fa fa-trophy"></i></div>
                      <h2 class="lead">36</h2>
                      <h5>Awards Won</h5>

                    </article>

                  </div>

                </div>
                
              </section> milestones -->  

              
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


</body>
</html>