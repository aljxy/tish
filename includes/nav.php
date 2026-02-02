<!-- MOBILE NAVBAR -->
<div class="uk-hidden@l" uk-sticky>
  <div class="uk-grid-margin uk-first-column">
    <nav class="uk-width-1-1 uk-navbar-container uk-light" uk-navbar="dropbar: false"
         style="background-color: white; box-shadow: 0 2px 10px 0 rgb(0 0 0 / 15%); height: 62px;">
      <!-- LOGO -->
      <div class="uk-navbar-left">
        <a class="uk-logo" href="index.php">
          <img src="images/navlogo.png" style="max-width: 100%; max-height: 100%; height: 49px; padding-left: 20px">
        </a>
      </div>

      <!-- MOBILE MENU ICON -->
      <div class="uk-navbar-right uk-hidden@l" style="margin-top:-9px">
        <ul class="uk-navbar-nav">
          <li>
            <a href="#offcanvas-slide" uk-toggle class="uk-padding uk-icon uk-navbar-toggle-animate" uk-icon="icon: menu; ratio: 1.5" style="color: #0ea1cd; padding-right: 20px;">
              <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
            </a>
          </li>
        </ul>

        <!-- OFF-CANVAS MENU -->
        <div id="offcanvas-slide" uk-offcanvas>
          <div class="uk-offcanvas-bar" style="font-size: 15px; background-color: #0ea1cd; z-index: 1000;">
            <div class="uk-text-center uk-button-link uk-align-center">
              <img src="images/logowhite.png" alt="canvaslogo" style="max-height: 200px; max-width: 200px;">
            </div>

            <ul uk-nav="multiple: false" class="uk-nav-default uk-nav-parent-icon uk-nav" style="font-size:15px; color:white;">
              <li><a href="index.php" style="color:white;">Home</a></li>
              <li><a href="services.php" style="color:white;">Amenities</a></li>
              <li><a href="reviews.php" style="color:white;">Customer Reviews</a></li>
              <li><a href="contactus.php" style="color:white;">Contact Us</a></li>
              <li>
                <a href="#modal-center" uk-toggle>
                  <button class="uk-button uk-button-small" style="background: transparent; border: 2px solid white; border-radius: 20px; color: white;">
                    Book Your Stay
                  </button>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>
</div>

	<!--NAVBAR ENDS HERE, IT STOPS HERE BABY GIRL-->



    <div uk-sticky  class="uk-visible@l">


<nav class="uk-navbar-container" style="background-color: rgba(255,255,255,0.70);backdrop-filter: saturate(180%) blur(20px);-webkit-backdrop-filter: blur(20px);height: 62px;">
    <div class="uk-container" >

        <div uk-navbar="dropbar: true" style="margin-top:-9px">

            <div class="uk-navbar-center ">
 				<a class="uk-navbar-item uk-logo uk-visible@l uk-visible@m uk-visible@s" href="index.php" aria-label="Back to Home"><img src="images/navlogo.png" style="max-width: 100% !important; max-height: 100%;height: 47px;"></a>

                <ul class="uk-navbar-nav uk-visible@l">
                    <li><a href="index.php" style="color:#0ea1cd;text-transform: none;font-size: 13.5px;font-weight: 500;">Home</a></li>


                  					<li><a href="services.php" style="color:#0ea1cd;text-transform: none;font-size: 14px;font-weight: 500;">Amenities</a></li>

                  					<li><a href="reviews.php" style="color:#0ea1cd;text-transform: none;font-size: 14px;font-weight: 500;">Customer Reviews</a></li>

                  					<li><a href="contactus.php" style="color:#0ea1cd;text-transform: none;font-size: 14px;font-weight: 500;">Contact Us</a></li>


                  					<li><a href="#modal-center" uk-toggle style="font-size:16px" class="uk-link-primary"><button class="uk-button  uk-button-small"  style="border-radius: 20px;text-transform: none;font-weight: 600;font-size: 13.5px; color: #ffed63; background-color: #0ea1cd">Book Your Stay</button></a></li>
  </ul>

 <style>
   .checkbox-group {
     display: flex;
     flex-wrap: wrap;
     gap: 20px;
     margin-top: 10px;
   }

   .checkbox-group label {
     font-size: 16px;
     display: flex;
     align-items: center;
     gap: 8px;
     flex: 1 1 100%;
   }

   @media (min-width: 640px) {
     .checkbox-group label {
       flex: 1 1 calc(33.33% - 20px);
     }
   }

   .checkbox-group input[type="checkbox"]:checked {
     accent-color: red;
   }

   .red-button {
     background-color: red !important;
     border: none;
     color: white;
   }

   /* Centered modal dialog */
   .uk-modal-dialog.fullscreen {
     width: 60vw;
     max-width: 100%;
     padding: 20px;
     border-radius: 18px;
     margin: auto;                /* centers vertically & horizontally */
   }

   /* Remove extra space around form */
   .fullscreen form {
     margin: 0;
     padding: 0;
   }

   /* Mobile modal adjustment */
   @media (max-width: 640px) {
     .uk-modal-dialog.fullscreen {
       width: 90vw;
       padding: 15px;
     }
   }
 </style>

 <!-- Perfectly Centered Modal -->
 <div id="modal-center" class="uk-flex-middle" uk-modal>
   <div class="uk-modal-dialog uk-modal-body fullscreen" uk-overflow-auto>

     <button class="uk-modal-close-default" type="button" uk-close
             style="background: #e8e8ed; border-radius: 50%; height: 36px; width: 36px;">
     </button>

     <div class="uk-text-center">
       <img src="images/navlogo.png" alt="Logo"
            style="width: 250px; height: auto; margin-bottom: 10px;">
     </div>

     <p style="color:black;" class="uk-text-center">
       Complete the form below to make an enquiry about booking our Villa.
     </p>

 <form action="enquiry.php" method="post" class="uk-grid-small uk-flex-center" uk-grid>

   <!-- Name -->
   <div class="uk-width-1-1 uk-width-1-2@m">
     <input class="uk-input uk-form-controls uk-form-large" type="text" name="name" placeholder="Name"
            style="border-radius: 12px; font-size: 17px;">
   </div>

   <!-- Email -->
   <div class="uk-width-1-1 uk-width-1-2@m">
     <input class="uk-input uk-form-controls uk-form-large" type="email" name="email" placeholder="Email"
            style="border-radius: 12px; font-size: 17px;">
   </div>

   <!-- Contact Number -->
   <div class="uk-width-1-1 uk-width-1-2@m">
     <input class="uk-input uk-form-controls uk-form-large" type="text" name="contact" placeholder="Contact Number"
            style="border-radius: 12px; font-size: 17px;">
   </div>

   <!-- Number of Persons -->
   <div class="uk-width-1-1 uk-width-1-2@m">
     <input class="uk-input uk-form-controls uk-form-large" type="number" name="persons" placeholder="Number of Persons" min="1"
            style="border-radius: 12px; font-size: 17px;">
   </div>

   <!-- Centered Check-in and Check-out -->
   <div class="uk-width-1-1 uk-flex uk-flex-center uk-grid-small" uk-grid>
     <!-- Check-in Date -->
     <div class="uk-width-1-2@s">
       <label for="checkin_date">Check-in Date</label>
       <input id="checkin_date" class="uk-input uk-form-controls uk-form-large" type="date" name="checkin_date"
              style="border-radius: 12px; font-size: 17px;">
     </div>

     <!-- Check-out Date -->
     <div class="uk-width-1-2@s">
       <label for="checkout_date">Check-out Date</label>
       <input id="checkout_date" class="uk-input uk-form-controls uk-form-large" type="date" name="checkout_date"
              style="border-radius: 12px; font-size: 17px;">
     </div>
   </div>

   <!-- Submit Button -->
   <div class="uk-width-1-1 uk-text-center uk-align-center">
     <input style="border-radius: 12px; font-size: 17px; color: #ffed63; background-color: #0ea1cd"
            class="uk-text-capitalize uk-button uk-width-1-1 uk-form-large"
            type="submit" name="submit" value="Submit">
   </div>

 </form>




   </div>
 </div>



            </div>

        </div>


    </div>
</nav>
</div>

