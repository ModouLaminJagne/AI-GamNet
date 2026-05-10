<?php get_header(); ?>

<style>
.speaker-img {
  flex: 1;
  width: 100%;
  height: auto;
  object-fit: cover;
  border-radius: 10px 10px 0 0;
}

.card {
  height: auto;
  border: 1px solid #ddd;
  border-radius: 10px;
}

.row-spk {
  display: flex;
  flex-wrap: wrap;
  margin: -20px; /* Adjust margin as needed */
}

.col-lg-3 {
  flex: 0 0 25%; /* Each card occupies 25% of the row width */
  max-width: 25%; /* Each card occupies 25% of the row width */
  padding: 25px; /* Adjust padding as needed */

}

.member-desc {
  height: max-content;
}

.row.pt-md {
  display: flex;
  flex-wrap: wrap;
  margin: -15px; /* Add negative margin to counteract column padding */
}



.organizer-card {
  height: 100%;
  border: 1px solid #ddd;
  border-radius: 10px;
  padding: 0px 20px;
  box-sizing: border-box; /* Include padding in width calculation */
  flex: 0 0 calc(25% - 30px); /* Set flex properties to allow four cards in each row */
  max-width: calc(25% - 30px); /* Set max-width to limit card width */
  margin: 15px; /* Add margin for spacing between cards */
}

@media (max-width: 768px) {
  .speaker-card {
    flex: 0 0 calc(50% - 30px); /* Set flex properties for two cards in each row on tablet view */
    max-width: calc(50% - 30px); /* Set max-width for two cards in each row on tablet view */
  }
}

@media (max-width: 576px) {
  .speaker-card {
    flex: 0 0 calc(100% - 30px); /* Set flex properties for single card in each row on mobile view */
    max-width: calc(100% - 30px); /* Set max-width for single card in each row on mobile view */
  }
}

.img-box {
  flex: 1;
}

.img-box img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 10px 10px 0 0;
}

.img-responsive {
  width: 100%;
  height: auto;
  object-fit: cover;
  border-radius: 10px 10px 0 0;
}

.organizer-details {
  height: max-content;
  width: 100%;
  padding: 5px 10px;
}
</style>
<section class="countdown-timer section bgimg2">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.2s">
        <div class="text">
          <h2>DEEP LEARNING <br>INDABA<strong>X</strong> <br />THE GAMBIA</h2>
          <span class="theme">Theme: The Application of Deep Learning in Agriculture </span>
          <h4>University of The Gambia, Peace Building, Kanifing <br> July 25 - 27, 2023 </h4>
          <a href="https://docs.google.com/forms/d/e/1FAIpQLScMO0feFXXiCUNxzRPUWJ6Yh4aVuKIV8JTMZE6PCXEuJxAMHg/viewform"
            target="_blank" class="btn btn-lg btn-common  animated bounceIn">
            <blink><i class="fa fa-address-card-o 2x" aria-hidden="true"></i> </u></blink>

            <small>Apply Now</small>
          </a>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.2s">
        <div class="time-countdown">
          <div id="clock" class="time-count">

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="event" class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="tab-block wow fadeInDown" data-wow-delay="0s">
          <div class="icon">
            <i class="icon-location-pin"></i>
          </div>
          <div class="desc">
            <h4>Location</h4>
            <p>University of The Gambia,Peace Building, Kanifing </p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="tab-block wow fadeInDown" data-wow-delay="0.2s">
          <div class="icon">
            <i class="icon-calendar"></i>
          </div>
          <div class="desc">
            <h4>Date & Time</h4>
            <p>08h30 - 17h00, July 25 - 27, 2023</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="tab-block wow fadeInDown" data-wow-delay="0.4s">
          <div class="icon">
            <i class="icon-microphone"></i>
          </div>
          <div class="desc">
            <h4>Speakers</h4>
            <p>12 Tech Icons and Professionals</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="tab-block last-block wow fadeInDown" data-wow-delay="0.6s">
          <div class="icon">
            <i class="icon-book-open"></i>
          </div>
          <div class="desc left">
            <h4>Participants</h4>
            <p> 70 People</p>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="content-text">
          <h3 class="wow fadeInUp" data-wow-delay="0.8s">MACHINE LEARNING AND ARTIFICIAL INTELLIGENCE CONFERENCE</h3>
          <p class="wow fadeInUp" data-wow-delay="1s">We introduce the IndabaX: a way to experiment with the ways in
            which we can strengthen our Machine Learning community, and to allow more people to contribute to the
            conversation. A Deep Learning IndabaX is a locally-organised,typically a three-day Indaba that helps spread
            knowledge and builds capacity in machine learning.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="featured" class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="section-title wow fadeInUp" data-wow-delay="0s">Why Join</h2>
        <p class="section-subcontent wow fadeInUp" data-wow-delay="0.2s">IndabaX aims to build a sustainable pan-African
          community of AI expertise, <br>create local leadership in AI in every country across the continent,<br> and
          recognise excellence in research and application of AI technologies.</p>
        <div class="col-md-4 col-sm-6">
          <div class="featured-box wow fadeInLeft" data-wow-delay="0.1s">
            <div class="icon">
              <i class="icon-energy"></i>
            </div>
            <div class="featured-content">
              <h4>Get Inspired</h4>
              <p>A three-day workshop that brings people together to discuss latest development with short talks and a
                panel discussion, across your institution, in Datascience/AI </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="featured-box wow fadeInLeft" data-wow-delay="0.2s">
            <div class="icon">
              <i class="icon-people"></i>
            </div>
            <div class="featured-content">
              <h4>Training</h4>
              <p>A structured series of lectures and tutorials by invited speakers from the country, continent, and
                abroad on specialized topics </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="featured-box wow fadeInLeft" data-wow-delay="0.3s">
            <div class="icon">
              <i class="icon-graph"></i>
            </div>
            <div class="featured-content">
              <h4>Fresh Tech Insights</h4>
              <p>Participants range from undergraduate students, research students, lecturers and academic, industry
                professionals and startups.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="speakers" class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="section-title wow fadeInUp" data-wow-delay="0s">Meet Our Speakers</h2>
        <p class="section-subcontent wow fadeInUp" data-wow-delay="0.2s">Speakers whose focus are on data science, with
          plans to develop a vibrant research group on data science in The Gambia.</p>
      </div>
      <div class="row-spk">
        <div class="speaker-card col-lg-3 col-md-4 col-sm-6">
          <div class="card speakers-member wow fadeIn" data-wow-delay="0.1s">

            <img src="/wp-content/uploads/2023/05/dina-1.jpg" alt="" class="speaker-img">

            <div class="member-desc">
              <h3>Dr. Dina Machuve</h3>
              <h5> DevData Analytics </h5>
              <p>Cofounder & CTO, DevData Analytics, Tanzania</p>
            </div>
          </div>
        </div>
        <div class="speaker-card col-lg-3 col-md-4 col-sm-6">
          <div class="card speakers-member wow fadeIn" data-wow-delay="0.3s">

            <img src="wp-content/uploads/2023/05/Mbemba-Hydara.jpg" alt="" class="speaker-img">

            <div class="member-desc">
              <h3>Dr. Mbemba Hydara </h3>
              <h5>Univerisity of The Gambia</h5>
              <p>Dean, Faculty of I.C.T</p>
           
            </div>
          </div>
        </div>

        <div class="speaker-card col-lg-3 col-md-4 col-sm-6">
          <div class="card speakers-member wow fadeIn" data-wow-delay="0.3s">

            <img src="/wp-content/uploads/2023/05/ernest.jpeg" alt="" class="speaker-img">

            <div class="member-desc">
              <h3>Dr. Ernest Mwebaze</h3>
              <h5>Sunbird AI</h5>
              <p>Strategy Lead, Sunbird AI, Uganda;</p>
           
            </div>
          </div>
        </div>

        <div class="speaker-card col-lg-3 col-md-4 col-sm-6">
          <div class="card speakers-member wow fadeIn" data-wow-delay="0.1s">

            <img src="wp-content/uploads/2023/05/Moustapha.jpg" alt="" class="speaker-img">

            <div class="member-desc">
              <h3>Prof. Moustapha Cisse</h3>
              <h5>Google AI Center </h5>
              <p> Research Scientist in AI</p>
           
            </div>
          </div>
        </div>
      </div>

    <div class="row-spk">
      <div class="speaker-card col-lg-3 col-md-4 col-sm-6">
        <div class="card speakers-member wow fadeIn" data-wow-delay="0.1s">

          <img src="/wp-content/uploads/2023/07/ezgif.com-webp-to-jpg.jpg" alt="" class="speaker-img">

          <div class="member-desc">
            <h3>Honourable Ousman Bah</h3>
            <h5>Ministry of Communications and Digital Economy </h5>
            <p> Minister</p>
         
          </div>
        </div>
      </div>

      <div class="speaker-card col-lg-3 col-md-4 col-sm-6">
        <div class="card speakers-member wow fadeIn" data-wow-delay="0.3s">

          <img src="wp-content/uploads/2023/05/sheriffo.png" alt="" class="speaker-img">

          <div class="member-desc">
            <h3>Dr. Sheriffo Ceesay</h3>
            <h5>Huawei Technologies Research</h5>
            <p>Senior Research Engineer</p>
            
          </div>
        </div>
      </div>

      <div class="speaker-card col-lg-3 col-md-4 col-sm-6">
        <div class="card speakers-member wow fadeIn" data-wow-delay="0.3s">

          <img src="/wp-content/uploads/2023/05/fred.jpg" alt="" class="speaker-img">

          <div class="member-desc">
            <h3>Mr. Fred Sangol Uche</h3>
            <h5> Medical Research Council Gambia at LSHTM</h5>
            <p>Researcher and Developer</p>
  
          </div>
        </div>
      </div>

      <div class="speaker-card col-lg-3 col-md-4 col-sm-6">
        <div class="card speakers-member wow fadeIn" data-wow-delay="0.3s">

          <img src="/wp-content/uploads/2023/07/ismael.jpeg" alt="" class="speaker-img">

          <div class="member-desc">
            <h3>Dr. Ismaël KONÉ</h3>
            <h5> Medical Research Council Gambia at LSHTM</h5>
            <p>Data Science Postdoctoral Researcher in Epidemics</p>
         
          </div>
        </div>
      </div>
      <div class="speaker-card col-lg-3 col-md-4 col-sm-6">
        <div class="card speakers-member wow fadeIn" data-wow-delay="0.3s">

          <img src="wp-content/uploads/2023/07/WhatsApp-Image-2023-07-11-at-1.37.31-PM.jpeg" alt="" class="speaker-img">

          <div class="member-desc">
            <h3>Mr. Jeremiah Ayock Ishaya</h3>
            <h5> African institute for Mathematical Science</h5>
            <p>PhD Students in Data Science</p>
         
          </div>
        </div>
      </div>
        <div class="speaker-card col-lg-3 col-md-4 col-sm-6">
            <div class="card speakers-member wow fadeIn" data-wow-delay="0.3s">

                <img src="/wp-content/uploads/2023/05/drbah-1.jpg" alt="" class="speaker-img">

                <div class="member-desc">
                    <h3>Dr. Bubacarr Bah </h3>
                    <h5>Medical Research Council Unit Gambia at LSHTM</h5>
                    <p>Head of Data Science</p>
                </div>
            </div>
        </div>
    </div>
  </div>
  </div>
</section>

<section id="schedule" class="section">
  <div class="container">
  <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#day1">Day 1 - 25/07/2023</a></li>
  <li><a data-toggle="tab" href="#day2">Day 2 - 26/07/2023</a></li>
  <li><a data-toggle="tab" href="#day3">Day 3 - 27/07/2023</a></li>
</ul>
    <div class="tab-content">
      <div id="day1" class="tab-pane fade in active">
        <h2>Schedule - Day 1</h2>
        <hr>
        <div class="schedule-table">
          <table class="table table-bordered">
            <h5>Opening ceremony and plenary talks</h5>
            <thead>
              <tr>
                <th>Time</th>
                <th>Speaker</th>
                <th>Activity</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>10:30 am - 10:40 am</td>
                <td>Dean of ICT</td>
                <td>Welcome Remark from Dean of ICT</td>
              </tr>
              <tr>
                <td>10:40 am - 11:10am</td>
                <td>Dr. Dina Machuve</td>
                <td>Cofounder & CTO, DevData Analytics, Tanzania</td>
              </tr>
              <tr>
                <td>11:10 am - 11:30am</td>
                <td>-</td>
                <td>Coffee & Snacks Break </td>
              </tr>
              <tr>
                <td>11:30 am - 12:00 am </td>
                <td>Dr. Ernest Mwebaze</td>
                <td>Dr. Ernest Mwebaze, Strategy Lead, Sunbird AI, Uganda</td>
              </tr>
              <tr>
                <td>12:00 pm - 12:30 pm </td>
                <td> </td>- </td>
                <td>Poster session presentation</td>
              </tr>
              <tr>
                <td>12:30 pm - 1:00 pm</td>
                <td>Prof. Moustapha Cisse</td>
                <td>Research Scientist in AI</td>
              </tr>
              <tr>
                <td>1:00pm - 1:30pm</td>
                <td>Mr. Ousman Bah</td>
                <td>Minister, Ministry of Communications and Digital Economy</td>
              </tr>
              <tr>
                <td>1:30 pm - 2:00 pm</td>
                <td>-</td>
                <td>Lunch Break</td>
              </tr>
              <tr>
                <td>2:00 pm - 2:30 pm</td>
                <td>-</td>
                <td>Launch Gambia AI Network (GAIN)</td>
              </tr>
              <tr>
                  <td>2:30 pm - 4:00 pm</td>
                  <td>Dr. Bubacarr Bah</td>
                  <td>Introduction to Deep Learning and Data Science</td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
      <div id="day2" class="tab-pane fade">
        <h2>Schedule - Day 2</h2>
        <hr>

        <div class="schedule-table">
          <table class="table table-bordered">
            <h5>Practical/Lab sessions for IndabaX alumni and senior university students</h5>
            <thead>
              <tr>
                <th>Time</th>
                <th>Speaker</th>
                <th>Topic</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>9:00am - 11:00am</td>
                <td>Fred Sangol Uche / Jeremiah Ayock Ishaya</td>
                <td>Building Computer vision models</td>
              </tr>
              <tr>
                <td>11:00am - 11:20am</td>
                <td>-</td>
                <td>Coffee & Snacks Break</td>
              </tr>
              <tr>
                <td>11:20am - 1:20pm</td>
                <td>Ismael Kone</td>
                <td>Natural Language Processing (NLP) / LLMs</td>
              </tr>
              <tr>
                <td>1:20am - 1:40pm</td>
                <td>-</td>
                <td>Lunch Break</td>
              </tr>
              <tr>
                <td>1:40pm - 3:40pm</td>
                <td>Sherrifo Ceesay</td>
                <td>Distributed Data Processing</td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
      <div id="day3" class="tab-pane fade">
        <h2>Schedule - Day 3</h2>
        <div class="schedule-table">
          <table class="table table-bordered">
            <h5>Demos</h5>
            <thead>
              <tr>
                <th>Time</th>
                <th>Invited Schools</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>10am - 12pm</td>
                <td>First session of demos</td>
              </tr>

              <tr>
                <td>12pm - 12:20pm</td>
                <td>Coffee & Snacks Break</td>
              </tr>

              <tr>
                <td>12:20pm - 2:00pm</td>
                <td>Second session of demos</td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>

</section>


<section id="sponsors" class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="section-title wow fadeInUp" data-wow-delay="0s">Our Sponsors</h2>
        <p class="section-subcontent wow fadeInUp" data-wow-delay="0.2s">Proud to be involved with the following institutions,
          we thank them for helping to be part of this initiative.</p>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="spnsors-logo wow fadeInUp" data-wow-delay="0.4s">
          <a href="#"><img style="width:170px; height:125px;" src="/wp-content/uploads/2023/05/indabax.jpeg"
              alt=""></a>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="spnsors-logo wow fadeInUp" data-wow-delay="0.3s">
          <a href="#"><img style="width:170px; height:125px;" src="wp-content/uploads/2023/05/logoutg.gif" alt=""></a>
        </div>
      </div>


      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="spnsors-logo wow fadeInUp" data-wow-delay="0.1s">
          <a href="#"><img style="width:170px; height:125px;" src="/wp-content/uploads/2023/05/logo-lasting.png"
              alt=""></a>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="spnsors-logo wow fadeInUp" data-wow-delay="0.1s">
          <a href="#"><img style="width:170px; height:125px;"
              src="/wp-content/uploads/2023/05/WhatsApp-Image-2023-05-20-at-11.22.31-AM.jpeg" alt=""></a>
        </div>
      </div>



    </div>
  </div>
</section>


<section id="orgs" class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <h6 class="description">ORGANISERS</h6>
      </div>
      <div class="row-spk">
        <div class="speaker-card col-lg-3 col-md-4 col-sm-6">
          <div class="card speakers-member wow fadeIn" data-wow-delay="0.1s">

            <img src="wp-content/uploads/2023/05/speakermrjallow.png" alt="" class="speaker-img">

            <div class="member-desc">
              <h3>Mr. Lamarana Jallow</h3>
              <h5> Univerisity of The Gambia </h5>
              <p> Lecturer </p>
             
            </div>
          </div>
        </div>
        <div class="speaker-card col-lg-3 col-md-4 col-sm-6">
          <div class="card speakers-member wow fadeIn" data-wow-delay="0.3s">

            <img src="/wp-content/uploads/2023/05/drbah-1.jpg" alt="" class="speaker-img">

            <div class="member-desc">
              <h3>Dr. Bubacarr Bah </h3>
              <h5>Medical Research Council Unit Gambia at LSHTM</h5>
              <p>Head of Data Science</p>

             
            </div>
          </div>
        </div>

        <div class="speaker-card col-lg-3 col-md-4 col-sm-6">
          <div class="card speakers-member wow fadeIn" data-wow-delay="0.3s">

            <img src="/wp-content/uploads/2023/05/fred.png" alt="" class="speaker-img">

            <div class="member-desc">
              <h3>Mr. Fred Sangol Uche</h3>
              <h5>Medical Research Council Unit Gambia at LSTHM </h5>
              <p>Researcher & Developer</p>

            </div>
          </div>
        </div>

        <div class="speaker-card col-lg-3 col-md-4 col-sm-6">
          <div class="card speakers-member wow fadeIn" data-wow-delay="0.1s">

            <img src="wp-content/uploads/2023/05/sheriffo.png" alt="" class="speaker-img">

            <div class="member-desc">
              <h3>Dr. Sheriffo Ceesay</h3>
              <h5> Huawei Technologies Research</h5>
              <p>Senior Research Engineer</p>

            
            </div>
          </div>
        </div>
          <div class="speaker-card col-lg-3 col-md-4 col-sm-6">
              <div class="card speakers-member wow fadeIn" data-wow-delay="0.1s">

                  <img src="wp-content/uploads/2023/05/beran.jpg" alt="" class="speaker-img">

                  <div class="member-desc">
                      <h3>Mrs. Beran Dondeh-Gillen</h3>
                      <h5>The Hub Ltd</h5>
                      <p>CEO and Co-Founder</p>

                    
                  </div>
              </div>
          </div>

          <div class="speaker-card col-lg-3 col-md-4 col-sm-6">
              <div class="card speakers-member wow fadeIn" data-wow-delay="0.3s">

                  <img src="wp-content/uploads/2023/05/dibba.png" alt="" class="speaker-img">

                  <div class="member-desc">
                      <h3>Mr. Lamin Dibba</h3>
                      <h5>Gambia Bureau of Statistics (GBoS)</h5>
                      <p>Principal Statistician</p>
                   
                  </div>
              </div>
          </div>
          <div class="speaker-card col-lg-3 col-md-4 col-sm-6">
              <div class="card speakers-member wow fadeIn" data-wow-delay="0.3s">

                  <img src="wp-content/uploads/2023/05/sowe.png" alt="" class="speaker-img">

                  <div class="member-desc">
                      <h3>Mr. Abdoulie Sowe</h3>
                      <h5>Lasting Solutions Ltd, the Gambia </h5>
                      <p>Director and Co-founder</p>

                  </div>
              </div>
          </div>
          <div class="speaker-card col-lg-3 col-md-4 col-sm-6">
              <div class="card speakers-member wow fadeIn" data-wow-delay="0.3s">

                  <img src="wp-content/uploads/2023/07/WhatsApp-Image-2023-04-03-at-2.05.21-PM.jpeg" alt="" class="speaker-img">

                  <div class="member-desc">
                      <h3>Mr. Abdou Darboe</h3>
                      <h5> University Of The Gambia</h5>
                      <p>Director of IT</p>

                  </div>
              </div>
          </div>
          <div class="speaker-card col-lg-3 col-md-4 col-sm-6">
              <div class="card speakers-member wow fadeIn" data-wow-delay="0.3s">

                  <img src="/wp-content/uploads/2023/07/WhatsApp-Image-2023-07-05-at-4.41.01-PM.jpeg" alt="" class="speaker-img">

                  <div class="member-desc">
                      <h3>Mr. Olawale Adefisayo Fabiyi</h3>
                      <h5> American International Univerisity, The Gambia</h5>
                      <p>Head, Computer Science & Technology</p>

                  </div>
              </div>
          </div>
          <div class="speaker-card col-lg-3 col-md-4 col-sm-6">
              <div class="card speakers-member wow fadeIn" data-wow-delay="0.3s">

                  <img src="wp-content/uploads/2023/05/drjallow-1.png" alt="" class="speaker-img">

                  <div class="member-desc">
                      <h3>Dr. Abdou Karim Jallow</h3>
                      <h5> Slippery Rock University</h5>
                      <p>Assoc. Prof. of Information Systems</p>

                  </div>
              </div>
          </div>
      </div>

      </div>
    </div>
  </div>
  </div>
</section>

<section id="speakers" class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <h6 class="description">Volunteer Organisers</h6>
      </div>
      <div class="row-spk">
        <div class="speaker-card col-lg-3 col-md-4 col-sm-6">
          <div class="card speakers-member wow fadeIn" data-wow-delay="0.1s">

            <img src="wp-content/uploads/2023/05/malik.jpeg" alt="" class="speaker-img">

            <div class="member-desc">
              <h3>Mr. Malik Kolawole Lanlokun</h3>
              <h5> University of The Gambia </h5>
              <p>Software Engineer & Intelligent Systems Teaching Assistant </p>

            </div>
          </div>
        </div>
        <div class="speaker-card col-lg-3 col-md-4 col-sm-6">
          <div class="card speakers-member wow fadeIn" data-wow-delay="0.3s">

            <img src="wp-content/uploads/2023/05/Ousainou.jpeg" alt="" class="speaker-img">

            <div class="member-desc">
              <h3>Mr. Ousainou Jaiteh </h3>
              <h5>University of The Gambia</h5>
              <p>Graduate Assistant</p>

            </div>
          </div>
        </div>

        <div class="speaker-card col-lg-3 col-md-4 col-sm-6">
          <div class="card speakers-member wow fadeIn" data-wow-delay="0.3s">

            <img src="wp-content/uploads/2023/05/1630507121151-removebg-preview-1.png" alt="" class="speaker-img">

            <div class="member-desc">
              <h3>Mr. Muhammed Baldeh</h3>
              <h5>Locumator </h5>
              <p>Product Engineer</p>

            </div>
          </div>
        </div>

        <div class="speaker-card col-lg-3 col-md-4 col-sm-6">
          <div class="card speakers-member wow fadeIn" data-wow-delay="0.1s">

            <img src="wp-content/uploads/2023/05/Ajifama.jpeg" alt="" class="speaker-img">

            <div class="member-desc">
              <h3>Miss. Aji Fama Jobe</h3>
              <h5> World Bank Group</h5>
              <p>IT Assistant</p>

            </div>
          </div>
        </div>
        <div class="speaker-card col-lg-3 col-md-4 col-sm-6">
          <div class="card speakers-member wow fadeIn" data-wow-delay="0.3s">

            <img src="wp-content/uploads/2023/07/WhatsApp-Image-2023-07-06-at-8.28.39-PM.jpeg" alt="" class="speaker-img">

            <div class="member-desc">
              <h3>Mr. Sulayman A. Jallow</h3>
              <h5>Cerenade </h5>
              <p>Software Engineer</p>

            </div>
          </div>
        </div>

      </div>
</section>

<section id="map">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h2 class="section-title wow fadeInUp" data-wow-delay="0s">Get In Touch</h2>
        <p class="section-subcontent wow fadeInUp" data-wow-delay="0.2s">For any inquiries dont hesitate to contact us
          with the following number
        <p>
      </div>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3880.2178314541634!2d-16.67921483580672!3d13.460665590536346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec29a3537808581%3A0x1eb89bc2965717ee!2sUniversity+of+the+Gambia+-+Admin+Building%2C+Serrekunda!5e0!3m2!1sen!2sgm!4v1550284760187"
        width="100%" height="720px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</section>


<div class="main-content bgimg">

  <section id="contact">
    <div class="container">
      <div class="row wow fadeInDown" data-wow-delay="0.3s">
        <div class="col-md-8 col-sm-7 contact-form">
          <form method="POST" action="https://formspree.io/f/xyyaaypk">
            <div class="title-header">
              <h3 class="title-medium pull-left">Send us a message</h3>
              <div class="icon pull-right"><i class="icon-envelope"></i></div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="label-line">
                  <span class="span"></span>
                  <label class="label transition">Name</label>
                  <input type="text" class="input" id="name" required data-error="Please enter your name">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="label-line">
                  <span class="span"></span>
                  <label class="label transition">Email</label>
                  <input type="email" class="input" id="email" name="email" required
                    data-error="Please enter your email">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="label-line textarea">
                  <span class="span"></span>
                  <label class="label transition">Message</label>
                  <textarea id="message" name="message" class="input" required
                    data-error="Write your message"></textarea>
                  <div class="help-block with-errors"></div>
                </div>
                <button type="submit" id="form-submit" target="_blank" class="btn btn-common">Send <i
                    class="icon-paper-plane" aria-hidden="true"></i></button>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
              </div>
            </div>
          </form>
        </div>



        <div class="col-md-4 col-sm-5 information">
          <div class="title-header">
            <h3 class="title-medium">Contact Information</h3>
          </div>
          <div class="contact-datails">
            <div class="icon">
              <i class="fa fa-map-marker"></i>
            </div>
            <div class="info">
              <span class="detail">University of The Gambia, Kanifing<br> The Gambia</span>
            </div>
          </div>
          <div class="contact-datails">
            <div class="icon">
              <i class="fa fa-phone"></i>
            </div>
            <div class="info">
              <span class="detail">+220 377 5908</span>
            </div>
          </div>
          <div class="contact-datails">
            <div class="icon">
              <i class="fa fa-envelope"></i>
            </div>
            <div class="info">
              <span class="detail">info@indabax-gambia.org</span>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</section>

<?php get_footer(); ?>
