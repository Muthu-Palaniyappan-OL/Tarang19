<!DOCTYPE HTML>
<html>
   <head>
      <title>Tarang 2k19</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
      <link rel="stylesheet" href="assets/css/main.css" />
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/style1.css">
      <noscript>
         <link rel="stylesheet" href="assets/css/noscript.css" />
      </noscript>
      <style>
/* width */
::-webkit-scrollbar {
  width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: -webkit-linear-gradient(#252A61,#502b80, #9e3377,#b01075,#cb3160,#fb6a4b); 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: white; 
}
.glow {
text-transform: uppercase;
  background: linear-gradient(#252A61,#502b80, #9e3377,#b01075,#cb3160,#fb6a4b);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: linear-gradient(#252A61,#502b80, #9e3377,#b01075,#cb3160,#fb6a4b);
  }
  
  to {
    text-shadow: 0 0 80px #fff;
  }
}
.unmute {
  background-image: url(http://franriavilla.in/images/unmute.png);
  background-size: cover;
  width: 35px;
  height: 30px;
  cursor: pointer;
  z-index: 5;
  margin-right: auto;
  border: none;
}

.mute {
  background-image: url(http://franriavilla.in/images/mute.png);
  background-size: cover;
  width: 35px;
  height: 30px;
  z-index: 5;
  margin-right: auto;
  cursor: pointer;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
         <embed src="music/bensound-evolution.mp3" autostart="true" loop="true" hidden="true" class="myAudio">
            <div id="newAudio"></div>
            <script type="text/javascript">
               function audiofunc(){
                     var thingToRemove = document.querySelectorAll(".myAudio")[0];
                     thingToRemove.parentNode.removeChild(thingToRemove);
                     $("#btns").hide();//To Show
                     $("#btnh").show();
               }

               function audiofunct(){
                  var para = document.createElement("embed");
                  para.setAttribute("src", "music/bensound-evolution.mp3");
                  para.setAttribute("autostart", "true");
                  para.setAttribute("loop", "true");
                  para.setAttribute("hidden", "true");
                  para.setAttribute("class", "myAudio");
                  var element = document.getElementById("newAudio");
                  element.appendChild(para);
                  $("#btnh").hide();
                  $("#btns").show();
               }
     
            </script>
            <style type="text/css">
  .mobileHide { display: inline; } 

  /* Smartphone Portrait and Landscape */ 
  @media only screen 
    and (min-device-width : 320px) 
    and (max-device-width : 750px){ 
     .mobileHide { display: none;}
  }
</style>
   </head>
   <body class="is-preload" style="background-color:#010312;">
      <div id="wrapper" style="background-color:#010312;">
                     <div class="unmute" onclick="audiofunc()" id="btns"></div>
                     <div class="mute" onclick="audiofunct()" id="btnh" style="display: none;"></div>
         <!-- Header -->
         <section id="startingintro" style="background-color:#010312;">
            <div id ="fi" class="center w3-animate-fading">
               <img src="images/schoollogo.png">
            </div>
            <div id="se" class="center w3-animate-fading">
               <center>
                  <label id="demo" style="font-size:2.5vw;">Presents</label>
               </center>
            </div>
         </section>
         <header id="header">
            <div class="content">
               <div class="inner">
                  <img src="images/logo.png" style="height:auto; max-width:37.5%;" >
                  <h1 class="glow">Experience Euphoria</h1>
                  <h3 style="color:#fb6a4b;font-weight: lighter;">20th and 21st june 2019</h3>
               </div>
            </div>
            <nav>
               <ul>
                  <li><a href="#events" style="color:#fb6a4b;">Events</a></li>
                  <li><a href="#schedule" style="color:#fb6a4b;">Schedule</a></li>
                  <li><a href="#location" style="color:#fb6a4b;">Location</a></li>
                  <li><a href="#contact" style="color:#fb6a4b;">Contact Us</a></li>
               </ul>
            </nav>
         </header>
         <!-- Main -->
         <canvas id="canvas" class="mobileHide">Canvas is not supported in your browser.</canvas>
         <div id="particle"></div>
         <div id="overlay">
         <div id="main">
            <!-- Intro -->
            <article id="events">
               <h2 class="major">Events</h2>
               <font style="font-weight: bold;">Click On An Event To Know More About The Event</font>
               <br><br>
               <nav>
                  <ol>
                     <li><a href="#greenscreen" style="font-weight:bold;">Green Screen <i class="fa fa-flag" aria-hidden="true"></i>
                        </a> <a href="#greenscreen">- Participant faces the audience while the muted movies is played alongside for which clues would be given to find the movie name.</a>
                     </li>
                     <br>
                     <li><a href="#fifa" style="font-weight:bold">FIFA</a><a href="#fifa"> - A team of 2 will have to compete in a video-game on the PS4 console.</a></li>
                     <br>
                     <li><a href="#shortfilm" style="font-weight:bold">Short Film</a><a href="#shortfilm"> - Are you ready to put your movie-making skills to the test? Worry not movie maker,bring your talent onto the table to compete with fellow movie makers.</a></li>
                     <br>
                     <li><font style="font-weight:bold; ">Surprise Event </font><i class="fa fa-flag" aria-hidden="true"></i>
                        - Surprise! The name Says it all.
                     </li>
                     <br>
                     <li><a href="#jam" style="font-weight:bold">Just A Minute</a><a href="#jam"> - The students must speak on the given topic without hesitation, grammatical errors, etc. </a></li>
                     <br>
                     <li><a href="#basketball" style="font-weight:bold">Slam Dunk</a><a href="#basketball"> - A team of 3+2 players must compete in basketball against other teams.</a></li>
                     <br>
                     <li><a href="#adzap" style="font-weight:bold">Adzap <i class="fa fa-flag" aria-hidden="true"></i>
                        </a><a href="#adzap"> - The advertisement agency should be able to enact an advertisement for the given item.</a>
                     </li>
                     <br>
                     <li><a href="#futsal" style="font-weight:bold">Futsal</a><a href="#futsal"> - A team of 5+3 players must compete in a football tournament against other teams.</a></li>
                     <br>
                     <li><a href="#carnaticmusic" style="font-weight:bold">Sarvam Thaala Mayam</a><a href="#carnaticmusic"> - Classical Music Event - A team of 2-4 perform a fusion of classical music.</a></li>
                     <br>
                     <li><a href="#shipwreck" style="font-weight:bold">Shipwreck <i class="fa fa-flag" aria-hidden="true"></i>
                        </a><a href="#shipwreck"> - The particicpants are eminent celebrities who are on a sinking ship.They have to convince the captain (judge) to give them the last life jacket.</a>
                     </li>
                     <br>
                     <li><a href="#photography" style="font-weight:bold">Photography</a><a href="#photography"> - An event for all the budding photographers who have the passion to capture the extraordinary.</a></li>
                     <br>
                     <li><a href="#spinayarn" style="font-weight:bold">Spin A Yarn</a><a href="#spinayarn"> -  The judge will give a starting line and the participant would have to spin a story on it.</a></li>
                     <br>
                     <li><a href="#moviereviews" style="font-weight:bold">Movie Reviews</a><a href="#moviereviews"> -  As the name suggests, the participant would be given a movie to which he'll have to review.</a></li>
                     <br>
                     <li><a href="#cricket" style="font-weight:bold">Ee Saala Cup Namde</a><a href="#cricket"> - A sport which is played between two teams of 8 players.</a></li>
                     <br>
                     <li><a href="#punaaku" style="font-weight:bold">Pun-Aaku</a><a href="#punaaku"> -  As the name suggests, participants will have to make it through 2 stages of pun-pannifying.</a></li>
                     <br>
                     <li><a href="#channelsurfing" style="font-weight:bold">Channel Surfing <i class="fa fa-flag" aria-hidden="true"></i>
                        </a><a href="#channelsurfing"> - Judges have the remote which has control over the students on stage, to enact the channels chosen by the judges.</a>
                     </li>
                     <br>
                     <li><a href="#treasurehunt" style="font-weight:bold">Treasure Hunt</a><a href="#treasurehunt"> - Treasure hunt is one of many different types of games with 3 players who try to find hidden objects or places by following a series of clues.</a></li>
                     <br>
                     <li><a href="#monoacting" style="font-weight:bold">Mono Acting</a><a href="#monoacting"> - It is a theatrical piece played by a single actor potraying a character or situation.</a></li>
                     <br>
                     <li><a href="#stepup" style="font-weight:bold">Step Up</a><a href="#stepup"> - Western Dance - A team of 6 perform different styles to win the battle.</a></li>
                     <br>
                     <li><a href="#band" style="font-weight:bold">Band</a><a href="#band"> - Music is an art form and cultural activity whose medium is sound organised in time.</a></li>
                     <br>
                     <li><a href="#memes" style="font-weight:bold">Meme Creation</a><a href="#memes"> - As the name suggests participants should create a humorous socially awakening meme.</a></li>
                     <br>
                     <li><a href="#blockandtackle" style="font-weight:bold">Block And Tackle <i class="fa fa-flag" aria-hidden="true"></i>
                        </a><a href="#blockandtackle"> - The participant has to defend or criticize the given agenda on the judges call.</a>
                     </li>
                     <br>
                     <li><a href="#creativewriting" style="font-weight:bold">Creative Writing</a><a href="#creativewriting"> - Unleash your creativity skills and race the other writers to the final line.</a></li>
                  </ol>
               </nav>
            </article>
            <!-- Work -->
            <article id="schedule">
               <h2 class="major">Schedule</h2>
               <h3>Day 1:</h3>
               <ol>
                <li>Shipwreck(Prelims) <i class="fa fa-flag" aria-hidden="true"></i>
                     : 10:15 AM- 12:50 PM
                  </li>
                  <li>Slam Dunk: 10:30 AM Onwards</li>
                  <li>Green Screen(Prelims) <i class="fa fa-flag" aria-hidden="true"></i>
                     : 10:30 AM- 12:30 PM
                  </li>
                  <li>Ee Saala Cup Namde: 10:30 AM Onwards</li>
                  <li>Band: 10:30 AM- 01:00 PM</li>
                  <li>Treasure Hunt: 11:00 AM Onwards</li>
                  <li>Creative Writing: 11:00 AM- 01:30 PM</li>
                  <li>Adzap(Prelims) <i class="fa fa-flag" aria-hidden="true"></i>
                     : 11:00 AM- 01:30 PM
                  </li>
                  <li>Mono Acting: 11:30 AM- 02:00 PM</li>
                  <li>Movie Reviews: 11:45 AM- 03:00 PM</li>
                  <li>Sarvam Thaala Mayam: 12:30 PM- 02:00 PM</li>
                  <li>Meme Creation: 12:30 PM - 02:30 PM</li>
                  <li>Channel Surfing(Prelims) <i class="fa fa-flag" aria-hidden="true"></i>
                     : 01:00 PM- 03:00 PM
                  </li>
                  <li>Adzap(Finals) <i class="fa fa-flag" aria-hidden="true"></i>
                     : 02:00 PM- 03:30 PM
                  </li>
               </ol>
               <h3>Day 2:</h3>
               <ol>
                  <li>Step Up: 08:30 AM- 11:30 PM</li>
                  <li>Just A Minute: 09:30 AM- 12:30 PM</li>
                  <li>Spin-A-Yarn: 10:30 AM- 12:30 PM</li>
                  <li>Block And Tackle <i class="fa fa-flag" aria-hidden="true"></i>
                     : 11:30 AM- 03:00 PM
                  </li>
                  <li>Channel Surfing(Finals) <i class="fa fa-flag" aria-hidden="true"></i>
                     : 11:30 AM- 01:00 PM
                  </li>
                  <li>Pun-Aaku: 11:45 AM- 01:45 PM</li>
                  <li>Suprise Event <i class="fa fa-flag" aria-hidden="true"></i>
                     : 12:45 PM- 02:30 PM
                  </li>
                  <li>Green Screen(Finals) <i class="fa fa-flag" aria-hidden="true"></i>
                     : 01:00 PM- 02:00 PM
                  </li>
                  <li>Shipwreck(Finals) <i class="fa fa-flag" aria-hidden="true"></i>
                     : 02:00 PM- 03:00 PM
                  </li>
                  <li>FIFA: Full Day</li>
                  <li>Short Film: Full Day</li>
                  <li>Photography: Full Day</li>
                  <li>Futsal: 09:30 AM Onwards</li>
               </ol>
            </article>
            <!-- About -->
            <article id="location">
               <h2 class="major">Location</h2>
               <style>
                  .google-maps {
                  position: relative;
                  padding-bottom: 75%; // This is the aspect ratio
                  height: 0;
                  overflow: hidden;
                  }
                  .google-maps iframe {
                  position: absolute;
                  top: 0;
                  left: 0;
                  width: 100% !important;
                  height: 100% !important;
                  } 
               </style>
               <div class="google-maps">
                  <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=The%20PSBB%20Millennium%20School%20Old%20No.9%2C%20New%20No.476%2C%20Multi%20Nagar%2C%20Anna%20Main%20Rd%2C%20Balakrishnan%20Nagar%2C%20Balaji%20Nagar%2C%20Gerugambakkam%2C%20Chennai%2C%20Tamil%20Nadu%20602101&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
               </div>
               <br>
            </article>
            <!-- Contact -->
            <article id="contact">
               <h2 class="major">Contact Us</h2>
               <form action="" method="post" onsubmit="alert('Thank You For Contacting Us! We Will Get Back To You ASAP!');" >
                  <div class="fields">
                     <div class="field half">
                        <label for="name">Name<font style="font-weight:bold;font-size:1.2vw;">*</font></label>
                        <input type="text" name="name" id="name" required/>
                     </div>
                     <div class="field half">
                        <label for="email">Email<font style="font-weight:bold;font-size:1.2vw;">*</font></label>
                        <input type="email" name="email" id="email" pattern=".+@.+.com" required />
                     </div>
                     <div class="field">
                        <label for="message">Message<font style="font-weight:bold;font-size:1.2vw;">*</font></label>
                        <textarea name="message" id="message" rows="4" required></textarea>
                     </div>
                  </div>
                  <ul class="actions">
                     <li><input type="submit" value="Send Message" class="primary" name="contactusform" /></li>
                     <li><input type="reset" value="Reset" /></li>
                  </ul>
               </form>
               <ul class="icons">
                  <li><a href="https://www.instagram.com/tarang.19/" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
               </ul>
            </article>
            <!-- Elements -->
            <article id = "greenscreen">
               <h2 class="major">Green Screen</h2>
               <h3>Rules of The Event:</h3>
               <ul>
                  <li>The participant will be blindfolded with a muted video running behind.</li>
                  <li>The participant will be evaluated according to his spontanity and humour sense.</li>
                  <li>The participant must report what is happening in the video with the help of the clues given by the judge.</li>
                  <li>Controversies and Vulgar comments are strictly prohibited.</li>
               </ul>
               <h3>Judgement Criteria:</h3>
               Interaction with the judges
               <br><br>
               <h3>Number of Participants:</h3>
               Maximum 2 participants per school
               <br><br>
               <h3>Timings(Prelims): </h3>
               10:30 AM- 12:30 PM (Day 1)
               <br><br>
               <h3>Timings(Finals): </h3>
               01:00 PM- 02:00 PM (Day 2)
               <br><br>
               <h3>Place(Prelims): </h3>
               Seminar Hall - Block A: Ground Floor
               <br><br>
               <h3>Place(Finals): </h3>
               Multi Purpose Hall - Block D: Second Floor
            </article>
            <article id = "shipwreck">
               <h2 class="major">Shipwreck</h2>
               <h3>Rules of The Event:</h3>
               <ul>
                  <li>The particicpants will be given a character/role which he/she would have to convince him/her to give the lifejacket.</li>
                  <li>Vulgarity in any form will lead to direct disqualification.</li>
               </ul>
               <h3>Judgement Criteria:</h3>
               Humour,creativity,spontanity.
               <br><br> 
               <h3>Number of Participants:</h3>
               Maximum 2 participants per school
               <br><br> 
               <h3>Timings(Prelims):</h3>
               10:15 AM- 12:50 PM (Day 1)
               <br><br> 
               <h3>Timings(Finals):</h3>
               02:00 PM- 03:00 PM (Day 2)
               <br><br>
               <h3>Place(Prelims): </h3>
               Classroom 12 F - Block D : First Floor
               <br><br>
               <h3>Place(Finals): </h3>
               Multi Purpose Hall - Block D: Second Floor
            </article>
            <article id = "adzap">
               <h2 class="major">Adzap</h2>
               <h3>Rules of The Event:</h3>
               <ul>
                  <li>Preparation time of 30 secs</li>
                  <li>Product will be given on the spot by the judges.</li>
                  <li>Vulgarity in any means will lead to direct disqualification.</li>
                  <li>Top 6 Teams will be selected for the finals.</li>
                  <li>Top 3 teams will be selected for the face off.</li>
               </ul>
               <h3>Judgement Criteria:</h3>
               Humour,creativity,spontanity,relatance to product.
               <br><br>
               <h3>Number of Participants:</h3>
               1 team per school (4-6 members in a team)
               <br><br>
               <h3>Timings(Prelims): </h3>
               11:00 AM- 01:30 PM (Day 1)
               <br><br>
               <h3>Timings(Finals):</h3>
               02:00 PM- 03:30 PM (Day 1)
               <br><br>
               <h3>Place(Prelims): </h3>
               Classroom 11 A - Block C : First Floor
               <br><br>
               <h3>Place(Finals): </h3>
               Seminar Hall - Block A: Ground Floor
            </article>
            <article id = "blockandtackle">
               <h2 class="major">Block And Tackle</h2>
               <h3>Rules of The Event:</h3>
               <ul>
                  <li>Participants will be given a topic and told to speak either for (block) or against (tackle) it.</li>
                  <li>While the participant speaks, the judge can tell the speaker to change stance by saying out "block" or "tackle" at any time.</li>
                  <li>The participants will be given their topics around 10 seconds before they speak.</li>
                  <li>Speakers will lose points do not begin on time,pause for too long or repeat themselves at the judges' discretion.</li>
                  <li>The judges' decision is final and will not be questioned</li>
                  <li>Vulgarity in any form will lead to direct disqualification.</li>
               </ul>
               <h3>Judgement Criteria:</h3>
               Content,humour,spontanity,language use.
               <br><br>
               <h3>Number of Participants:</h3>
               Maximum 2 participants per school
               <br><br>
               <h3>Timings: </h3>
               11:30 AM- 03:00 PM (Day 2)
               <br><br>
               <h3>Place: </h3>
               Classroom 12 C - Block C : First Floor
            </article>
            <article id = "channelsurfing">
               <h2 class="major">Channel Surfing</h2>
               <h3>Rules of The Event:</h3>
               <ul>
                  <li>Participants must enact shows from the channels given to them.</li>
                  <li>30 seconds to prepare and 4 mins to perform.</li>
                  <li>Vulgarity in any form will lead to direct disqualification.</li>
               </ul>
               <h3>Judgement Criteria:</h3>
               Spontanity,humour,coordination,relavance to the channel.
               <br><br>
               <h3>Number of Participants:</h3>
               1 team per school(4-6 members in a team)
               <br><br>
               <h3>Timings(Prelims): </h3>
               01:00 PM- 03:00 PM (Day1)
               <br><br>
               <h3>Timings(Finals): </h3>
               11:30 AM- 01:00 PM (Day 2)
               <br><br>
               <h3>Place: </h3>
               Multi Purpose Hall - (Block D: Second Floor)
            </article>
            <article id = "jam">
               <h2 class="major">Just A Minute</h2>
               <h3>Rules of The Event:</h3>
               <ul>
                  <li>The Decision of MOD stands final.</li>
                  <li>The final speaker will be awarded according to any random rule set by the judge (say,the third one to recieve your hand on my promt will start).</li>
                  <li>One has to slam the table (or anything else set by the judge. For example "Pinch your nose") to raise an objection.
               </ul>
               <h4>Points will be given in the following manner:</h4>
               <ol type="i">
                  <li>Positive points for every second you speak.</li>
                  <li>Negative points for every incorrect objection.</li>
                  <li>Positive points for every correct objection</li>
               </ol>
               <h4>Points of Objection May Be:</h4>
               <ol type="i">
               <li>Early start/late start (optimum time for commencing is within 1 second after giving the promt)</li>
               <li>Grammatically correct British English must be used. No short forms to be used like guys,LOL,etc.</li>
               <li>Deviation from topic allowed only for first seven words.</li>
               <li>Buying time by using words like umm,hmm,aah or stammering.</li>
               <li>The pace used at the beginning must be followed throughout.</li>
               <li>Saying something incoherent.</li>
               <li>Repetition of words/phrases should not be more than three.</li>
               </ul>
               <br><br>
               <h3>Number of Participants:</h3>
               1 participant per school
               <br><br>
               <h3>Timings:</h3>
               09:30 AM- 12:30 PM (Day 2)
               <br><br>
               <h3>Place: </h3>
               Classroom 11 A - Block C : First Floor
            </article>
            <article id = "fifa">
               <h2 class="major">FIFA</h2>
               <h3>Rules of The Event:</h3>
               <ul>
                  <li>The respective teams will choose a random club using chits from a bowl so that the chances of getting a good club is equally likely.</li>
                  <li>Only knockout matches will be conducted.</li>
                  <li>The clubs will change for each team after each round.</li>
                  <li>The clubs will have a minimum of 4.5 rating overall.</li>
               </ul>
               <h3>Number of Participants:</h3>
               1 team per school(2 members per team)
               <br><br>
               <h3>Timings: </h3>
               Full Day
               <br><br>
               <h3>Place: </h3>
               Classroom 12 E - Block D : First Floor
            </article>
            <article id = "basketball">
               <h2 class="major">Slam Dunk</h2>
               <h3>Rules of The Event:</h3>
               <ul>
                  <li>3 VS 3 half court match - Knock-out basis</li>
                  <li>Match duration: 5+5 mins - 1 min halftime; no running time</li>
                  <li>If a player gets two technical fouls he/she is not allowed to play for that match.</li>
                  <li>Timeouts are available in both the halves for a duration of 1 min. 1st half 1 timeout, 2nd half 2 timeouts.</li>
               </ul>
               <h3>Number of Participants:</h3>
               1 team of boys and 1 team of girls per school (3 main players +2 subs)
               <br><br>
               <h3>Timings: </h3>
               10:30 AM onwards (Day 1)
               <br><br>
               <h3>Place: </h3>
               Basketball Court
            </article>
            <article id = "futsal">
               <h2 class="major">Futsal</h2>
               <h3>Rules of The Event:</h3>
               <ul>
                  <li>Substitution caan be made at any point during the match (rolling substitution).</li>
                  <li>All free kicks must be taken indirectly.</li>
                  <li>The penalty taker can only take one step before their penalty kick.</li>
                  <li>The refree's decision on the field is final.</li>
                  <li>Goalkeepers are not permitted to kick the ball ball except while making a save.</li>
                  <li>A yellow card will result in player</li>
                  <li>If a player gets a red card they must leave the field.</li>
                  <li>While distributing the ball it must be done underarm.</li>
               </ul>
               <h3>Number of Participants:</h3>
               1 team per school(5 main players+3 subs)
               <br><br>
               <h3>Timings: </h3>
               09:30 AM onwards (Day 2)
               <br><br>
               <h3>Place: </h3>
               Ground
            </article>
            <article id = "cricket">
               <h2 class="major">Ee Salaa Cup Namde</h2>
               <h3>Rules of The Event:</h3>
               <ul>
                  <li>All players must bring their ID proof.</li>
                  <li>Players who aren't registered cannot play for the team.</li>
                  <li>Tournament will be held in knock-out basis</li>
                  <li>Players can bring their own bats and gear.</li>
               </ul>
               <h3>Number of Participants:</h3>
               1 team per school(8 Players - 6 on field)
               <br><br>
               <h3>Timings: </h3>
               10:30 AM onwards (Day 1)
               <br><br>
               <h3>Place: </h3>
               Ground
            </article>
            <article id = "carnaticmusic">
               <h2 class="major">Sarvam Thaala Mayam</h2>
               <h3>Rules of The Event:</h3>
               <ul>
                  <li>Time limit: 4-6 mins</li>
                  <li>Maximum of 4 students/team.</li>
                  <li>Fusion concerts/performances are allowed.</li>
                  <li>Instruments should be brought by the students who are participating.</li>
               </ul>
               <h3>Judgement Criteria:</h3>
               Adherence to talam,creativity,coordination,synchronisation.
               <br><br>
               <h3>Number of Participants:</h3>
               1 team per school(2-4 members per team)
               <br><br>
               <h3>Timings: </h3>
               12:30 PM- 02:00 PM (Day 1)
               <h3>Place: </h3>
               Seminar Hall - (Block A: Ground Floor)
            </article>
            <article id = "shortfilm">
               <h2 class="major">Short Film</h2>
               <h3>Rules Of Events:</h3>
               <ul>
                  <li>The film shouldn't extend 5 minutes.</li>
                  <li>Should be sent via 'V' Transfer in the mail ID smritisrivijayan@gmail.com</li>
                  <li>Format - 1080 HDMOV</li>
                  <li>Use of abusive language or adult content will lead to direct disqualififcation.</li>
               </ul>
               <h3>Number of Participants:</h3>
               1 team per school(5 participants per team)
               <br><br>
               <h3>Timings: </h3>
               Full Day (Day 2)
               <br><br>
               <h3>Place: </h3>
               Classroom 12 D - Block C : First Floor
            </article>
            <article id = "photography">
               <h2 class="major">Photography</h2>
               <h3>Theme:</h3>
               <ol>
                  <li>Abstract</li>
                  <li>Textures</li>
                  <li>High Speed</li>
                  <li>Emotions</li>
               </ol>
               <h3>Rules Of Events:</h3>
               <ul>
                  <li>No editing allowed at all including anything basic.</li>
                  <li>Pictures must be taken on the day of the event and inside the school campus.</li>
                  <li>4 photos need to be taken and submitted</li>
                  <li>Only DSLR or professional cameras to be used (Phones are not allowed).</li>
               </ul>
               <h3>Judgement Criteria:</h3>
               Creativity,relavence to the theme,angle of photography.
               <br><br>
               <h3>Number of Participants:</h3>
               1 team per school(2 members per team)
               <br><br>
               <h3>Timings: </h3>
               Full Day (Day 2)
               <br><br>
               <h3>Place: </h3>
               Classroom 12 E - Block D : First Floor
            </article>
            <article id = "spinayarn">
               <h2 class="major">Spin A Yarn</h2>
               <h3>Rules Of Events:</h3>
               <ul>
                  <li>The opening story line will be given by the panel of judges on the spot.</li>
                  <li>Usage of colloquial language is not allowed. Political refrences should be avoided.</li>
                  <li>Repetition of the story imprivited by the other participants is not allowed.</li>
               </ul>
               <h3>Judgement Criteria:</h3>
               Confidence,eloquence,creativity,humour and continuity.
               <br><br>
               <h3>Number of Participants:</h3>
               Maximum 2 participants per school
               <br><br>
               <h3>Timings: </h3>
               10:30 AM- 12:30 PM (Day 2)
               <br><br>
               <h3>Place: </h3>
               Classroom 12 B - Block C : First Floor
            </article>
            <article id = "punaaku">
               <h2 class="major">Pun-Aaku</h2>
               <h3>Prelims:</h3>
               <h4>Round 1:</h4>
               <ul>
                  <li>Random topics will be given on spot.</li>
                  <li>Prep time: 90 seconds (first to come gets brownie points).</li>
                  <li>3 on stage, each one should come up with puns within gaps of 30 seconds.</li>
                  <li>Counter statements are awarded with extra points .</li>
                  <li>Teams will be evaluated on basis of audience response and spontaneity.</li>
                  <li>5 teams will be selected from the lot.</li>
               </ul>
               <h4>Round 2:</h4>
               <ul>
                  <li>Time limit - 3 minutes</li>
                  <li>Any topic of your choice</li>
                  <li>Evaluation based on audience response and context.</li>
                  <li>Extra points for interaction with audience.</li>
                  <li>Negative points for exceeding time limit</li>
                  <li>3 individuals out of 5 will be selected whose teams will enter the finals.</li>
               </ul>
               <h3>Finals:</h3>
               <h4>Round 1:</h4>
               <ul>
                  <li>Conversational puns</li>
                  <li>Preparation time - 2 minutes</li>
                  <li>Time limit - 2 minutes</li>
               </ul>
               <h4>Round 2:</h4>
               <ul>
                  <li>Standup on given topic.</li>
               </ul>
               <h3>Rules Of Events:</h3>
               <ul>
                  <li>Vulgar content is strictly prohibited.</li>
                  <li>Any content on religious controversies is strictly prohibited.</li>
               </ul>
               <h3>Judgement Criteria:</h3>
               Humour,creativity.
               <br><br>
               <h3>Number of Participants:</h3>
               1 team per school(4 members per team)
               <br><br>
               <h3>Timings:</h3>
               11:45 AM - 1:45 PM (Day 2)
               <h3>Place: </h3>
               Seminar Hall - (Block A: Ground Floor)
            </article>
            <article id = "treasurehunt">
               <h2 class="major">Treasure Hunt</h2>
               <h3>Rules Of Events:</h3>
               <ul>
                  <li>The clues will be hidden only in the ground floor and first floor of the school campus.</li>
                  <li>Participants should not do any damage to school property.</li>
                  <li>The participants will be accompanied by volunteers. Participants are not allowed to go anywhere without the volunteers.</li>
               </ul>
               <h3>Number of Participants:</h3>
               1 team per school(3 members per team)
               <br><br>
               <h3>Timings:</h3>
               11:00 AM Onwards (Day 1)
               <br><br>
               <h3>Place: </h3>
               Classroom 11 C - Block C : First Floor
            </article>
            <article id = "monoacting">
               <h2 class="major">Mono Acting</h2>
               <h3>Rules Of Events:</h3>
               <ul>
               <li>There will be two rounds:</li>
               <br>
               <ul>
                <li>Round 1: 1 minute to prepare,3 minutes to act</li>
                <li>Round 2: 2 minutes to prepare,5 minutes to act</li>
              </ul>
              <li>Obscenity and offensive gestures are strictly not allowed</li>
              <li>Variety of sound and voices can be imitated</li>
              <li>It should necessarily be cultured and pleasant to look at</li>
            </ul>
            <h3>Judgement Criteria:</h3>
               Humour,creativity,expressions,gestures,voice modulation.
               <br><br>
                  <h3>Number of Participants:</h3>
                  Maximum 2 participants per school
                  <br><br>
                  <h3>Timings:</h3>
                  11:30 AM - 2:00 PM (Day 1)
                  <br><br>
               <h3>Place: </h3>
               Classroom 12 C - Block C : First Floor
            </article>
            <article id = "stepup">
            <h2 class="major">Step Up</h2>
            <h3>Rules Of Events:</h3>
            <ul>
            <li>Duration 3-4 minutes maximum.</li>
            <li>Rating will be done on the basis of dance steps,costume,expression,synchronization and music.</li>
            <li>Use of obsence words in tracks or vulgar steps is prohibited.</li>
            <li>Song must be brought in a pendrive in MP3 format.</li>
            <li>It is an onstage event.</li>
            <li>Two participants from the winning shortlisted teams will be qualified for the next round - Adapt Tunes</li>
            <li>Participants are expected to wear appropriate costumes.</li>
            </ul>
            <h3>Genre:</h3>
            Contemporary
            <h3>Judgement Criteria:</h3>
            Coordination,creativity,costume,expression.
            <br><br>
            <h3>Number of Participants:</h3>
            1 team per school(6 members per team)
            <br><br>
            <h3>Timings: </h3>
            8:30 AM - 11:30 AM (Day 2)
            <br><br>
               <h3>Place: </h3>
               Multi Purpose Hall - (Block D: Second Floor)
            </article>
            <article id = "band">
            <h2 class="major">Band</h2>
            <h3>Rules Of Events:</h3>
            <ul>
            <li>Time given for performance: 9 minutes (3 minutes setting up + 6 minutes for performance)</li>
            <li>If present,lyrics should be presented to the event heads before performance.</li>
            <li>Songs with vulgar lyrics will not be allowed to perform.</li>
            <li>Brownie points will be awarded for original competitions.</li>
            </ul>
            <h3>Judgement Criteria:</h3>
            Coordination,melody,creativity,synchronization.
            <br><br>
            <h3>Number of Participants:</h3>
            1 team per school(4-6 members per band)
            <br><br>
            <h3>Timings:</h3>
            10:30 AM - 01:00 PM (Day 1)
            <br><br>
               <h3>Place: </h3>
               Multi Purpose Hall - (Block D: Second Floor)
            </article>
            <article id = "memes">
            <h2 class="major">Meme Creation</h2>
            <h3>Rules Of Events:</h3>
            <ul>
            <li>Usage of explicit or vulgar content is strictly prohibited and will lead to direct disqualification.</li>
            <li>A total of 7 memes (2 video memes + 5 picture memes) to be made with the topic announced on the spot.</li>
            <li>A mix of both Tamil and English is allowed.</li>
            </ul>
            <h3>Judgement Criteria:</h3>
            Creativity,humour,reach.
            <br><br>
            <h3>Number of Participants:</h3>
            1 team per school (2-4 members per team)
            <br><br>
            <h3>Timings:</h3>
            12:30 PM - 02:30 PM (Day 1)
            <br><br>
               <h3>Place: </h3>
               Classroom 12 D - Block C : First Floor
            </article>
            <article id = "moviereviews">
            <h2 class="major">Movie Reviews</h2>
            <h3>Rules Of Events:</h3>
            <ul>
            <li>Usage of explicit or vulgar content is strictly prohibited and will lead to direct disqualififcation.</li>
            <li>Will have to improvise on spot within 10 seconds of preparation time.</li>
            <li>8 min of review must be given.</li>
            </ul>
            <h3>Judgement Criteria:</h3>
            Humour,content,knowledge.
            <br><br>
            <h3>Number of Participants:</h3>
            Maximum 2 participants per school
            <br><br>
            <h3>Timings:</h3>
            11:45 AM - 3:00 PM (Day 1)
            <br><br>
               <h3>Place: </h3>
               Classroom 12 B - Block C : First Floor
            </article>
            <article id = "creativewriting">
            <h2 class="major">Creative Writing</h2>
            <h3>Rules Of Events:</h3>
            <ul>
            <li>Appropriate language to be used.</li>
            <li>No use of gadgets.</li>
            <li>Maximum of six sides.</li>
            <li>Sticking to the topic is mandatory.</li>
            <li>Maintainance of time</li>
            <li>Topics will be given on spot.</li>
            <li>Plagiarism is prohibited.</li>
            <li>Sheets will be provided</li>
            </ul>
            <h3>Judgement Criteria:</h3>
            Creativity
            <br><br>
            <h3>Number of Participants:</h3>
            1 participant per school
            <br><br>
            <h3>Timings:</h3>
            11 AM - 1:30 PM (Day 1)
            <br><br>
               <h3>Place: </h3>
               Classroom 12 D - Block C : First Floor
            </article>
         </div>
         <br>
         <!-- Footer -->
         <footer id="footer">
         <div id="countdown" style="background-color:#010312;"></div>
         <br><br><br><br>
         <p id="demo" style="background: -webkit-linear-gradient(#252A61,#502b80, #9e3377,#b01075,#cb3160,#fb6a4b);-webkit-background-clip: text;-webkit-text-fill-color: transparent;font-size:3vw;"></p>
         <p class="copyright">&copy; <a href="http://www.psbbmillenniumschool.org/psbbmillennium/PSBB_Millennium/about_us.aspx">The PSBB Millennium School - Gerugambakkam </a></p>
         </footer>
      </div>
   </div>
      <!-- BG -->
      <div id="bg"></div>
      <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>
            <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  
  

    <script  src="assets/js/index.js"></script>
    <script  src="assets/js/index1.js"></script>
   </body>
      <!-- php -->
<?php
  if(isset($_POST['contactusform'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['message'];

    $to='editorpsbb@gmail.com'; // Receiver Email ID, Replace with your email ID
    $subject='Contact Us Submission';
    $message="Name :".$name."\n"."Email :".$email."\n"."Wrote the following :"."\n\n".$msg;
    $headers="From: ".$email;
  }
?>
</html>