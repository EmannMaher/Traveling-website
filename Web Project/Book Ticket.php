<!DOCTYPE html>
<html>

<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="ToursTicket.css">
<title>Book Ticket</title>
<style>
  
  * {
      font-family: 'Nunito', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      text-transform: capitalize;
      outline: none;
      border: none;
      text-decoration: none;
      transition: all .2s linear;
    }
    .footer{
      background:#333;
}
.footer h4{
    text-align:left;
    margin-bottom:25px;
      padding: .7rem 0;
      color: #fff;
}
.footer .container .row .col-md-3 a {
      color: #eee;
    }
   .topnav{
      overflow: hidden;
      background: #333;
      margin: auto;
      display: flex;
      align-items: center;
      top: 0;
      left: 0;
      right: 0;
      align-items: center;
      justify-content: space-between;
      padding: 2rem 9%;
   
     
    }

    .topnav a{
     color: #fff;
      font-size: 17px;
      margin: 0 .8rem;
 
}
.topnav a:hover,.topnav a.active{
  color: #45f3ff;
  text-decoration: none;
  
}

    .btnn {
      margin-top: 1rem;
      display: inline-block;
      padding: 1rem 3rem;
      font-size: 1.7rem;
      color: #45f3ff;
      border: 0.2rem solid #45f3ff;
      border-radius: 5rem;
      cursor: pointer;
      background: none;
    }

    .btnn:hover {
      background: #45f3ff;
      color: #f8f9fc;
    }

    .totprice{
    width: 100%;
    margin-bottom: 20px;
    margin-top: 20px;
    padding: 12px;
    border: 1px solid;
    color: #fff;
    background-image: linear-gradient(#333,#333);
    border-radius: 3px;
  }

  

</style>

</head>

<body>
  <!---------------------------------header-------------------------------------->
  <div class="topnav" id="myTopnav">
    <img style="width: 100px; float:right;"src="https://www.tripsinegypt.com/wp-content/uploads/2020/04/Trips-in-Egypt-Logo-1.png">
    <a href="home.html">Home</a>
    <a href="Trips.php">Trips</a>
    <a href="toursTickets.html">Tours & Tickets</a>
    <a href="Special Group.html">Special group Trips</a>
    <a href="About Us.html">About Us</a>
    <a href="profile.html">Profile</a>
    <a href="FirstPage.html" class="btnn">Log out</a>
  </div>

  <!---------------------------------bookTicket-------------------------------------->
<div class="row" style="margin-top: 10px;">
  <div class="col-75">
    <div class="container">
      <form action="">
      
        <div class="row">
          <div class="col-50">
            <h3 style="margin-bottom: 50px; margin-top: 10px;"><i class="fa fa-address-card-o"></i> Booking Tour / Ticket Info</h3>
            
            <label for="source">Source</label>
            <?php
             $sourceName = $_GET['source'] ?? null;
              ?>
           <input type="text" value="<?php echo $sourceName; ?>"id="source" name="Source" >

            <label for="num">Number of Tickets</label>
            <input type="text" id="num" name="number" placeholder="5" required>
            
            <div class="row">
              <div class="col-50">
            <button class="totprice" name="total">Get Total Price</button>
              </div>
              <div class="col-50">
                <output > Total Price </output>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Eman Maher Zakarya" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2024" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" required>
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="check" required> I Accept The Terms and Conditions
        </label>
        <input type="submit" value="Confirm" onclick="validate()" class="button" style="background-image: linear-gradient(#333,#333);">
      </form>
    </div>
  </div>
</div>

<!---------------------------------footre-------------------------------------->
  <section class="footer">
    <div class="container">
        <div class="row">

    
           
            <div class="col-md-3">
                <h4>Features</h4>
                 <p>Deals & Offers</p>
                 <p>Customer Reviews</p>
                 <p>Cancelation Policy</p>
            </div>


            <div class="col-md-3">
                <h4>Quick Contact</h4>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone"
            viewBox="0 0 16 16">
            <path
              d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
          </svg> 01222940939</p>
        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house"
            viewBox="0 0 16 16">
            <path
              d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
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
            
        </div>
    </div>
  </section>
 
 
 
 
 
  <!---------------------------------javaScript-------------------------------------->
  <script>
    function validate(){
      var name = document.getElementById('cname').value;
      var regName = /^[a-z A-Z ,.'-]+$/;
      var ccard = document.getElementById('ccnum').value;
      var regnum = /\d{16}$/;
      var expmonth = document.getElementById('expmonth').value;
      var monthes = [ "January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December" ];
      var x=0;
      var expyear = document.getElementById('expyear').value;
      var cvv = document.getElementById('cvv').value;
      var regexcvv = /^[0-9]{3,4}$/;
      document.getElementById("err").style.backgroundColor = "#F2DEDE";
      for (i=0; i<12; i++) {
        if(expmonth == monthes[i]){
          x=1;
          break;
        }
     }
      if (! regName.test(name)) {
        document.getElementById('err').innerHTML="Please enter your name properly.";
        return false;
     }

      else if (! regnum.test(ccard)) {
        document.getElementById('err').innerHTML="Please enter credit card number properly.";
        return false;
     }
     else if (x==0){
      document.getElementById('err').innerHTML="Invalid Month";
      return false;
     }
      else if (expyear <= 2023 || expyear>=2030) {
        document.getElementById('err').innerHTML="Please enter valid year";
        return false;
     }
      else if (!regexcvv.test(cvv)) {
        document.getElementById('err').innerHTML="Please enter valid CVV";
        return false;
     }
     else{
      document.getElementById("err").style.backgroundColor = "white";
      return true;
     }
}
            function myFunction() {
           var x = document.getElementById("myTopnav");
           if (x.className === "topnav") {
           x.className += " responsive";
          } else {
           x.className = "topnav";
         }
       }
  </script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  
</body>
</html>
