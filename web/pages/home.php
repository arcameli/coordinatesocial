<?PHP
$protected = true;
require_once($_SERVER["DOCUMENT_ROOT"]."/load.php");
?>
<!-- Page Container -->
<div class="dark-container dark-content" style="margin-top:80px">
  <!-- The Grid -->
  <div class="dark-row">
    <!-- Left Column -->
    <div class="dark-col m3">
      <!-- Profile -->
      <div class="dark-card-2 dark-round dark-white">
        <div class="dark-container">
         <h4 class="dark-center"><?PHP echo $dark['profile']['name']; ?></h4>
         <p class="dark-center"><img src="<?PHP echo $dark['profile']['picture']; ?>" class="dark-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw dark-margin-right dark-text-theme"></i> Designer, UI</p>
         <p><i class="fa fa-home fa-fw dark-margin-right dark-text-theme"></i> London, UK</p>
         <p><i class="fa fa-birthday-cake fa-fw dark-margin-right dark-text-theme"></i> April 1, 1988</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="dark-card-2 dark-round">
        <div class="dark-accordion dark-white">
          <button onclick="myFunction('Demo1')" class="dark-btn-block dark-theme-l1 dark-left-align"><i class="fa fa-circle-o-notch fa-fw dark-margin-right"></i> My Groups</button>
          <div id="Demo1" class="dark-accordion-content dark-container">
            <p>Some text..</p>
          </div>
          <button onclick="myFunction('Demo2')" class="dark-btn-block dark-theme-l1 dark-left-align"><i class="fa fa-calendar-check-o fa-fw dark-margin-right"></i> My Events</button>
          <div id="Demo2" class="dark-accordion-content dark-container">
            <p>Some other text..</p>
          </div>
          <button onclick="myFunction('Demo3')" class="dark-btn-block dark-theme-l1 dark-left-align"><i class="fa fa-users fa-fw dark-margin-right"></i> My Photos</button>
          <div id="Demo3" class="dark-accordion-content dark-container">
         <div class="dark-row-padding">
         <br>
           <div class="dark-half">
             <img src="img_lights.jpg" style="width:100%" class="dark-margin-bottom">
           </div>
           <div class="dark-half">
             <img src="img_nature.jpg" style="width:100%" class="dark-margin-bottom">
           </div>
           <div class="dark-half">
             <img src="img_mountains.jpg" style="width:100%" class="dark-margin-bottom">
           </div>
           <div class="dark-half">
             <img src="img_forest.jpg" style="width:100%" class="dark-margin-bottom">
           </div>
           <div class="dark-half">
             <img src="img_nature.jpg" style="width:100%" class="dark-margin-bottom">
           </div>
           <div class="dark-half">
             <img src="img_fjords.jpg" style="width:100%" class="dark-margin-bottom">
           </div>
         </div>
          </div>
        </div>
      </div>
      <br>
      
      <!-- Interests -->
      <div class="dark-card-2 dark-round dark-white dark-hide-small">
        <div class="dark-container">
          <p>Interests</p>
          <p>
            <span class="dark-tag dark-small dark-theme-d5">News</span>
            <span class="dark-tag dark-small dark-theme-d4">W3Schools</span>
            <span class="dark-tag dark-small dark-theme-d3">Labels</span>
            <span class="dark-tag dark-small dark-theme-d2">Games</span>
            <span class="dark-tag dark-small dark-theme-d1">Friends</span>
            <span class="dark-tag dark-small dark-theme">Games</span>
            <span class="dark-tag dark-small dark-theme-l1">Friends</span>
            <span class="dark-tag dark-small dark-theme-l2">Food</span>
            <span class="dark-tag dark-small dark-theme-l3">Design</span>
            <span class="dark-tag dark-small dark-theme-l4">Art</span>
            <span class="dark-tag dark-small dark-theme-l5">Photos</span>
          </p>
        </div>
      </div>
      <br>
      
      <!-- Alert Box -->
      <div class="dark-container dark-round dark-theme-l4 dark-border dark-theme-border dark-margin-bottom dark-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="dark-hover-text-grey dark-closebtn">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <p>People are looking at your profile. Find out who.</p>
      </div>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="dark-col m7">
    
      <div class="dark-row-padding">
        <div class="dark-col m12">
          <div class="dark-card-2 dark-round dark-white">
            <div class="dark-container dark-padding">
              <h6 class="dark-opacity">Social Media template by w3.css</h6>
              <p contenteditable="true" class="dark-border dark-padding">Status: Feeling Blue</p>
              <button type="button" class="dark-btn dark-theme"><i class="fa fa-pencil"></i>  Post</button>
            </div>
          </div>
        </div>
      </div>
      
      <?PHP include("feed_users_public.php"); ?>
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="dark-col m2">
      <div class="dark-card-2 dark-round dark-white dark-center">
        <div class="dark-container">
          <p>Upcoming Events:</p>
          <img src="img_forest.jpg" alt="Forest" style="width:100%;">
          <p><strong>Holiday</strong></p>
          <p>Friday 15:00</p>
          <p><button class="dark-btn dark-btn-block dark-theme-l4">Info</button></p>
        </div>
      </div>
      <br>
      
      <div class="dark-card-2 dark-round dark-white dark-center">
        <div class="dark-container">
          <p>Friend Request</p>
          <img src="img_avatar6.png" alt="Avatar" style="width:50%"><br>
          <span>Jane Doe</span>
          <div class="dark-row dark-opacity">
            <div class="dark-half">
              <button class="dark-btn dark-green dark-btn-block dark-section" title="Accept"><i class="fa fa-check"></i></button>
            </div>
            <div class="dark-half">
              <button class="dark-btn dark-red dark-btn-block dark-section" title="Decline"><i class="fa fa-remove"></i></button>
            </div>
          </div>
        </div>
      </div>
      <br>
      
      <div class="dark-card-2 dark-round dark-white dark-padding-16 dark-center">
        <p>ADS</p>
      </div>
      <br>
      
      <div class="dark-card-2 dark-round dark-white dark-padding-32 dark-center">
        <p><i class="fa fa-bug dark-xxlarge"></i></p>
      </div>
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>