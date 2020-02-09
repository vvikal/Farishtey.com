<?php
  include("header.php")
?>
      <div class="container" style="margin-top:40px">
          <div class="row">
             <div class="col-sm message">
                 <p>Be the reason someone is alive</p>
                 <p>Donate <strong><span id="blood">blood</span> </strong>today</p><br>
                  
                  <ul class="display-container">
                    <li class="note-display" data-note="4">
                      <div class="circle">
                        <svg width="84" height="84" class="circle__svg">
                          <circle cx="41" cy="41" r="38" class="circle__progress circle__progress--path"></circle>
                          <circle cx="41" cy="41" r="38" class="circle__progress circle__progress--fill"></circle>
                        </svg>

                        <div class="percent">
                          <span class="percent__int">0</span>
                        </div>
                      </div>



      <span class="label" ><h5>Donors Available</h5></span>
    </li>
             </div>
             <div class="col-sm">
              <img src="./images/blood-donation.png" class="img-thumbnail">
            </div>
          </div>
          <!-- cards-->
          <div class="row">
             <div class="col-sm">
                 <div class="card" style="width: 18rem; text-align: center;">
                    <div class="card-body">
                       <h5 class="card-title">Support Us</h5>
                        <p class="card-text">We belive that time is money and would really appreciate whichever you choose to give</p>
                       <a href="#" class="btn btn-success">Donate Amount</a>
                       
                    </div>
                </div>
             </div>
             <div class="col-sm">
              <div class="card" style="width: 18rem; text-align: center;">
                    <div class="card-body">
                       <h5 class="card-title">Donate blood</h5>
                        <p class="card-text">Donate blood to save a life and change million lifes and be a hero in real life</p>
                       <a href="./donate.php" class="btn btn-success">Donate Blood</a>
                      
                    </div>
                </div>
            </div>
              <div class="col-sm">
              <div class="card" style="width: 18rem; text-align: center;">
                    <div class="card-body">
                       <h5 class="card-title">Request for Blood</h5>
                        <p class="card-text">Request for blood from people in your city or someone nearby. Just believe and live</p>
                       <a href="./login.php" class="btn btn-success">Request Blood</a>
                       
                    </div>
                </div>
            </div>
            
            <div class="col-sm " style="text-align: center;">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Available Units</h5>
                  <p class="card-text">Availabe units around the different cities in premium hospitals</p>
                  <a href="hospitals.php" class="btn btn-success">See Units</a>
              </div>
            </div>
          </div>
</div>
</ul></div></div></div>
    <?php
  include("footer.php")
?>