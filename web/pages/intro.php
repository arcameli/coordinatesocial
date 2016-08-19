<?PHP
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
         <p class="dark-center"><img src="/img/logo.png" style="height:106px;width:106px" alt="dark Logo"></p>
        </div>
      </div>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="dark-col m7">
    
      <div class="dark-row-padding">
        <div class="dark-col m12">
          <div class="dark-card-2 dark-round dark-white">
            <div class="dark-container dark-padding">
              <h6 class="dark-opacity">News about dark</h6>
            </div>
          </div>
        </div>
      </div>
      
      <?PHP include("feed_news_public.php"); ?>
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="dark-col m2">&nbsp;</div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>