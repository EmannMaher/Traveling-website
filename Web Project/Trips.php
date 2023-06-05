<?php
if(!isset($_SESSION)){
  session_start();
if (!isset($_SESSION['UserID'])){
  header("location: FirstPage.html");
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
  rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
 <title>Trips</title>
 <style>
  .topnav {
  overflow: hidden;
  background-color:#333;
  margin: auto;
}
.topnav a:hover,.topnav a.active{
  border-bottom: 3px solid #45f3ff;;
}
.footer{
    padding:100px 20px 15px;
    background-color:#333;
    color:#fff;

}
.totprice,.btn ,#myBtn,.input-group-text{
  background-color:#333;
}
.about-section{
  border-color:#333;
}
</style>
</head>
<body>
  <div class="topnav" id="myTopnav">
    <img style="width: 100px; float:right;"src="images\logo.png">
    <a href="home.html">Home</a>
    <a class="active" href="Trips.php">Trips</a>
    <a href="toursTickets.html">Tours & Tickets</a>
    <a href="SpecialGroup.php">Special group Trips</a>
    <a href="About Us.html">About Us</a>
    <a href="profile.php">Profile</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
<section class="header">
    <h1>Explore Egypt</h1>
    <div class="input-group">
      <img style="width: 100px; float:right;"src="images\logo.png">
    </div><br>
</section>

<div class="topnav" id="mynav" style="background-image: linear-gradient(black,black);">
  <a class="active" href="#familyTrip" ><b>Family Trips</b></a>
  <a href="#dayUse" ><b>Day Use</b></a>
  <a href="#nileCruise" ><b>Nile Cruise</b></a>
  <a href="#honeyMoon" ><b>Honey Moon</b></a>
  <a href="javascript:void(0);"  class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<br>

    <div class="center"> 
    <H1 id="familyTrips">Family Trips</H1>
    <div class="row">
      <div class="column">
          <div class="card" id="div1">
            <img src="images/pyramisa.jpg" alt="pyramisa" style="width:100% ">
            <div class="container">
              <h4>Pyramisa Resort</h4>
              <p class="title">One of the best Sahl Hasheesh resorts</p>
              <p>4 Days / 3 Nights</p>
              <p>3000 $</p>
              <p><button class="button" onclick="book('div1')">Book</button></p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card" id="div2">
            <img src="images/luxor.jpg" alt="Iberotel Luxor" style="width:100%">
            <div class="container">
              <h4>Iberotel Luxor</h4>
              <p class="title">Resort Gamed w zy elfol wel 3eela kolaha htz2tt</p>
              <p>5 Days / 4 Nights</p>
              <p>5000 $</p>
              <p><button class="button" onclick="book('div2')">Book</button></p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card" id="div3">
            <img src="images/oberoi.jpg" alt="oberoi" style="width:100%">
            <div class="container">
              <h4>Oberoi Resort</h4>
              <p class="title">One of the best Sahl Hasheesh resorts</p>
              <p>4 Days / 3 Nights</p>
              <p>5000 $</p>
              <p><button class="button" onclick="book('div3')">Book</button></p>
            </div>
          </div>
        </div>
  </div>
    <div class="row">
      <div class="column">
        <div class="card" id="div4">
          <img src="images/porto marina.jpg" alt="porto marina" style="width:100%">
          <div class="container">
            <h4>Porto Marina</h4>
            <p class="title">Lazem ykon fe sa7el bardo fa masho b de 7alkom</p>
            <p>5 Days / 4 Nights</p>
            <p>3000 $</p>
            <p><button class="button" onclick="book('div4')">Book</button></p>
          </div>
        </div>
      </div>

          <div class="column">
            <div class="card" id="div5">
              <img src="images/Luxor Hilton.jpg" alt="hilton" style="width:100%">
              <div class="container">
                <h4>Luxor Hilton Resort</h4>
                <p class="title">mn agmad el resorts elle fe luxor</p>
                <p>8 Days / 7 Nights</p>
                <p>12000 $</p>
                <p><button class="button" onclick="book('div5')">Book</button></p>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card" id="div6">
              <img src="images/kasa mar.jpg" alt="kasa mar" style="width:100%">
              <div class="container">
                <h4>Kasa Mar Resort</h4>
                <p class="title">Msh m7taga a2ol 7aga bs el3eela htz2tt</p>
                <p>4 Days / 3 Nights</p>
                <p>5000 $</p>
                <p><button class="button" onclick="book('div6')">Book</button></p>
              </div>
            </div>
          </div>
    </div>
    <div class="row">
          <div class="column">
            <div class="card" id="div7">
              <img src="images/matrouh.jpg" alt="matrouh" style="width:100%">
              <div class="container">
                <h4>Carols Beau Rivage Hotel</h4>
                <p class="title">Matrou7 y3ny masyaf el3eela elmasreya elaseela</p>
                <p>4 Days / 3 Nights</p>
                <p>2500 $</p>
                <p><button class="button" onclick="book('div7')">Book</button></p>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card" id="div8">
              <img src="images/nwebaa.jpg" alt="nuweiba club resort" style="width:100%">
              <div class="container">
                <h4>Nuweiba club resort</h4>
                <p class="title">Sho8l Faaa5er Bsara7aaa</p>
                <p>7 Days / 6 Nights</p>
                <p>8000 $</p>
                <p><button class="button" onclick="book('div8')">Book</button></p>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card" id="div9">
              <img src="images/strand taba hights.jpg" alt="taba" style="width:100%">
              <div class="container">
                <h4>Strand Taba Heights</h4>
                <p class="title">Taba w Gamal Taba b2a msh m7taga atklm</p>
                <p>6 Days / 5 Nights</p>
                <p>10000 $</p>
                <p><button class="button" onclick="book('div9')">Book</button></p>
              </div>
            </div>
          </div>
    </div>
    <H1 id="dayUse">Day Use</H1>
    <div class="row">
      <div class="column">
          <div class="card" id="div10">
            <img src="images/background.jpg" alt="pyramids" style="width:100%">
            <div class="container">
              <h4>Pyramids</h4>
              <p class="title">7000 sana dol msh mwdoo3 ymor ;)</p>
              <p class="title">Se3r el re7la shamel rkob 7omar yalla 3eddo el gamayel ;)</p>
              <p>300 $</p>
              <p><button class="button" onclick="book('div10')">Book</button></p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card" id="div11">
            <img src="images/el fayoum.jpg" alt="elfayoum" style="width:100%">
            <div class="container">
              <h4>Wadi El-Rayyan</h4>
              <p class="title">Men fena mtz7l2sh wetkafa 3la wesho fe shalalat wadi el rayyan?</p>
              <p>500 $</p>
              <p><button class="button" onclick="book('div11')">Book</button></p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card" id="div12">
            <img src="images/cairo.jpg" alt="cairo" style="width:100%">
            <div class="container">
              <h4>Cairo Tower W shwyet Sarma7a Fel Qahera</h4>
              <p class="title">Bsra7a Re7la la atmnaha l ald a3da2e</p>
              <p>100 $</p>
              <p><button class="button" onclick="book('div12')">Book</button></p>
            </div>
          </div>
        </div>
  </div>
    <div class="row">
        <div class="column">
            <div class="card" id="div13">
              <img src="images/africano.jpg" alt="africano" style="width:100%">
              <div class="container">
                <h4>Africano park</h4>
                <p class="title">Re7la bttklm 3n Nfsha Bsra7a</p>
                <p class="title">Et2kdo en el3eela kolaha httbst ;)</p>
                <p>250 $</p>
                <p><button class="button" onclick="book('div13')">Book</button></p>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card" id="div14">
              <img src="images/sand skating.jpg" alt="skating" style="width:100%">
              <div class="container">
                <h4>Sand Skating</h4>
                <p class="title">Yoom Kamel Sand Skating bs yaksh ythd 7elko</p>
                <p class="title">Yalla E7gzooo ;)</p>
                <p>600 $</p>
                <p><button class="button" onclick="book('div14')">Book</button></p>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card" id="div15">
              <img src="images/sky egypt.jpg" alt="sky egypt" style="width:100%">
              <div class="container">
                <h4>Sky Egypt</h4>
                <p class="title">Msh M7taga A2ol 7aga hena</p>
                <p class="title">Yalla book 3shan ttswr m3 elbtreek ;)</p>
                <p>800 $</p>
                <p><button class="button" onclick="book('div15')">Book</button></p>
              </div>
            </div>
          </div>
    </div>
    <div class="row">
          <div class="column">
            <div class="card" id="div16">
              <img src="images/1porto elsokhna.jpg" alt="sokhna" style="width:100%">
              <div class="container">
                <h4>Porto El-Sokhna</h4>
                <p class="title">3shan elly 3ayez yblbt youm sad rad</p>
                <p class="title">Aham 7aga matensoush el mayouhat</p>
                <p>200 $</p>
                <p><button class="button" onclick="book('div16')">Book</button></p>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card" id="div17">
              <img src="images/alex.jpg" alt="alex" style="width:100%">
              <div class="container">
                <h4>Alexandria</h4>
                <p class="title">El Fetar mn 3m Za8lool wl 8ada kebdet El fala7</p>
                <p class="title">W hn7bs b 3asser Asab Aw 5aroub Amal</p>
                <p>1000 $</p>
                <p><button class="button" onclick="book('div17')">Book</button></p>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card" id="div18">
              <img src="images/port said.jpg" alt="port Said" style="width:100%">
              <div class="container">
                <h4>Port Said</h4>
                <p class="title">Agmad Day Use Fe Port Said le Agmad Clients</p>
                <p class="title">Msh m7taga a2ol enkom httbsto</p>
                <p>900 $</p>
                <p><button class="button" onclick="book('div18')">Book</button></p>
              </div>
            </div>
          </div>
    </div>
    <H1 id="nileCruise">Nile Cruise</H1>
    <div class="row">
      <div class="column">
          <div class="card" id="div19">
            <img src="images/solaris.jpg" alt="solarase" style="width:100%">
            <div class="container">
              <h4>Solarase</h4>
              <p class="title">Agmad ba5era fel magarra</p>
              <p>4 Days / 3 Nights</p>
              <p>2000 $</p>
              <p><button class="button" onclick="book('div19')">Book</button></p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card" id="div20">
            <img src="images/dolphin.jpg" alt="dolphin" style="width:100%">
            <div class="container">
              <h4>Dolphin</h4>
              <p class="title">El7elwa Tofa7a llsafar welseya7a</p>
              <p>4 Days / 3 Nights</p>
              <p>3000 $</p>
              <p><button class="button" onclick="book('div20')">Book</button></p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card" id="div21">
            <img src="images/blue shadow 2.jpg" alt="blue shadow" style="width:100%">
            <div class="container">
              <h4>Blue Shadow 2</h4>
              <p class="title">From Luxor to Aswan</p>
              <p>7 Days / 6 Nights</p>
              <p>4000 $</p>
              <p><button class="button" onclick="book('div21')">Book</button></p>
            </div>
          </div>
        </div>
  </div>
    <div class="row">
        <div class="column">
            <div class="card" id="div22">
              <img src="images/gas gobily.jpg" alt="gas" style="width:100%">
              <div class="container">
                <h4>Gas Gobeily</h4>
                <p class="title">From Aswan to Luxor</p>
                <p>4 Days / 3 Nights</p>
                <p>3000 $</p>
                <p><button class="button" onclick="book('div22')">Book</button></p>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card" id="div23">
              <img src="images/princess sara 1.jpg" alt="sara" style="width:100%">
              <div class="container">
                <h4>Princess Sara 1</h4>
                <p class="title">7aga keda zy Normandy 2</p>
                <p>8 Days / 7 Nights</p>
                <p>10000 $</p>
                <p><button class="button" onclick="book('div23')">Book</button></p>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card" id="div24">
              <img src="images/posoly.jpg" alt="posoly" style="width:100%">
              <div class="container">
                <h4>Posoly</h4>
                <p class="title">From Aswan to Luxor</p>
                <p>4 Days / 3 Nights</p>
                <p>6000 $</p>
                <p><button class="button" onclick="book('div24')">Book</button></p>
              </div>
            </div>
          </div>
    </div>
    <div class="row">
          <div class="column">
            <div class="card" id="div25">
              <img src="images/radamis 1.jpg" alt="radamis" style="width:100%">
              <div class="container">
                <h4>Radamis 1</h4>
                <p class="title">One of the best mn el bwa5er elle 3ndna</p>
                <p>4 Days / 3 Nights</p>
                <p>2500 $</p>
                <p><button class="button" onclick="book('div25')">Book</button></p>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card" id="div26">
              <img src="images/royal ayzadora.jpg" alt="royal" style="width:100%">
              <div class="container">
                <h4>Royal Ayzadora</h4>
                <p class="title">Gamda w zy el fol</p>
                <p>5 Days / 4 Nights</p>
                <p>4000 $</p>
                <p><button class="button" onclick="book('div26')">Book</button></p>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card" id="div27">
              <img src="images/shamplion.jpg" alt="shamplion" style="width:100%">
              <div class="container">
                <h4>Shamplion</h4>
                <p class="title">From Aswan to Luxor</p>
                <p>7 Days / 6 Nights</p>
                <p>6000 $</p>
                <p><button class="button" onclick="book('div27')">Book</button></p>
              </div>
            </div>
          </div>
          <H1 id="honeyMoon">Honey Moon</H1>
          <div class="row">
            <div class="column">
                <div class="card" id="div28">
                  <img src="images/marsa alam magic tiolip.jpg" alt="marsa alam" style="width:100%">
                  <div class="container">
                    <h4>Magic Tulip</h4>
                    <p class="title">One of the best Marsa Alam Resorts</p>
                    <p>6 Days / 5 Nights</p>
                    <p>6000 $</p>
                    <p><button class="button" onclick="book('div28')">Book</button></p>
                  </div>
                </div>
              </div>
              <div class="column">
                <div class="card" id="div29">
                  <img src="images/sahl hasheesh sunrise romance.jpg" alt="sunrise" style="width:100%">
                  <div class="container">
                    <h4>Sunrise Romance</h4>
                    <p class="title">One of the best Sahl Hasheesh resorts</p>
                    <p>8 Days / 7 Nights</p>
                    <p>10000 $</p>
                    <p><button class="button" onclick="book('div29')">Book</button></p>
                  </div>
                </div>
              </div>
              <div class="column">
                <div class="card" id="div30">
                  <img src="images/Sharm-Marina sharm.jpg" alt="oberoi" style="width:100%">
                  <div class="container">
                    <h4>Marina Sharm</h4>
                    <p class="title">One of the Sharm El-Sheikh resorts</p>
                    <p>4 Days / 3 Nights</p>
                    <p>5000 $</p>
                    <p><button class="button" onclick="book('div30')">Book</button></p>
                  </div>
                </div>
              </div>
        </div>
          <div class="row">
              <div class="column">
                  <div class="card" id="div31">
                    <img src="images/sahl hasheesh preimer loref.jpg" alt="le reve" style="width:100%">
                    <div class="container">
                      <h4>Premier Le Reve</h4>
                      <p class="title">The best Hotel & Spa in Hurgada</p>
                      <p>8 Days / 7 Nights</p>
                      <p>15000 $</p>
                      <p><button class="button" onclick="book('div31')">Book</button></p>
                    </div>
                  </div>
                </div>
                <div class="column">
                  <div class="card" id="div32">
                    <img src="images/novotel marsa alam.jpg" alt="pyramisa" style="width:100%">
                    <div class="container">
                      <h4>Steigenberger ALDAU Resort</h4>
                      <p class="title">Resort Gaaamedd w zy el fol</p>
                      <p>5 Days / 4 Nights</p>
                      <p>8000 $</p>
                      <p><button class="button" onclick="book('div32')">Book</button></p>
                    </div>
                  </div>
                </div>
                <div class="column">
                  <div class="card" id="div33">
                    <img src="images/tropital sharm.jpg" alt="oberoi" style="width:100%">
                    <div class="container">
                      <h4>Tropitel Naama Bay</h4>
                      <p class="title">Gaaamed ya Ged3aaaan w se3ro wla arwa3</p>
                      <p>4 Days / 3 Nights</p>
                      <p>6000 $</p>
                      <p><button class="button" onclick="book('div33')">Book</button></p>
                    </div>
                  </div>
                </div>
          </div>
          <div class="row">
                <div class="column">
                  <div class="card" id="div34">
                    <img src="images/trpitel.jpg" alt="Tropitel" style="width:100%">
                    <div class="container">
                      <h4>Tropitel at Sahl Hasheesh</h4>
                      <p class="title">Resort Gamed w Zy elfol</p>
                      <p>4 Days / 3 Nights</p>
                      <p>1500 $</p>
                      <p><button class="button" onclick="book('div34')">Book</button></p>
                    </div>
                  </div>
                </div>
                <div class="column">
                  <div class="card" id="div35">
                    <img src="images/honeymoon.jpg" alt="honeymoon" style="width:100%">
                    <div class="container">
                      <h4>Baron Palace Resort</h4>
                      <p class="title">Book yalla msh hatla2o agmad mn kedaaa</p>
                      <p>4 Days / 3 Nights</p>
                      <p>5000 $</p>
                      <p><button class="button" onclick="book('div35')">Book</button></p>
                    </div>
                  </div>
                </div>
                <div class="column">
                  <div class="card" id="div36">
                    <img src="images/honeymoon2.jpg" alt="honeymoon 2" style="width:100%">
                    <div class="container">
                      <h4>The Oberoi Beach Resort</h4>
                      <p class="title">Gaaaaaaaameddd</p>
                      <p>8 Days / 7 Nights</p>
                      <p>12000 $</p>
                      <p><button class="button" onclick="book('div36')">Book</button></p>
                    </div>
                  </div>
                </div>
          </div>
    </div>
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
</svg></button>
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="images/logo.png" class="footer-logo">
                 <p>Our mission is to save our guests time, money, and stress with our simple online booking
                    platform on which they can search and book their trips & tours and buy tickets in one place.</p>
            </div>
            <div class="col-md-3">
                <h4>Features</h4>
                 <p>Deals & Offers</p>
                 <p>Customer Reviews</p>
                 <p>Cancelation Policy</p>
            </div>
            <div class="col-md-3">
                <h4>Quick Contact</h4>
                 <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                  </svg> 01201341551</p>
                 <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                  </svg> emaher455@gmail.com</p>
                 <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                  </svg> AAST AbuQir</p>
            </div>
            <div class="col-md-3">
                <h4>Follow Us on</h4>
                <a href="https://www.facebook.com/eman.maher.7773/"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                </svg><i>  Facebook</i></a><br>
                <a href="https://twitter.com/emaherrrr/"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                </svg><i> Twitter</i></a><br>
                <a href="https://www.instagram.com/emannmaherr/"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                </svg><i> Instagram </i></a><br>                  
            </div>
        </div><hr>
    </div>
  </section>
  <script type="text/javascript">
    // Get the button
    let mybutton = document.getElementById("myBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
function myFunction() {
  var x = document.getElementById("myTopnav");
  var y=document.getElementById("mynav");
  if (x.className === "topnav") {
    x.className += " responsive";
  }else if (y.className === "topnav") {
    y.className += " responsive";
  }
   else {
    x.className = "topnav";
    y.className = "topnav";
  }
}
    function book(x){ 
      var text = document.getElementById(x).getElementsByTagName("img")[0].src;
      text=text.substring(31,text.length);
      document.cookie="img="+text;
      window.location.href="Book Trip.php";
    }
    function validate(){
    var n = document.getElementById('search').value;
        var nREGEX = /^[a-zA-Z\s]{3,}$/;
        var nResult = nREGEX.test(n);
        if(nResult == false)
        {
          alert('Please enter a valid Place');
          return false;
        }
      }
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>
