<?PHP require_once($_SERVER["DOCUMENT_ROOT"]."/load.php"); ?>

      <div class="dark-container dark-card-2 dark-white dark-round dark-margin"><br>
        <img src="img_avatar5.png" alt="Avatar" class="dark-left dark-circle dark-margin-right" style="width:60px">
        <span class="dark-right dark-opacity">16 min</span>
        <h4>Jane Doe</h4><br>
        <hr class="dark-clear">
        <p>
        <form action="/create_subscription.php" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_kkoq32TRFRxxf5IrQgTZgKhE"
    data-image="images/marketplace.png"
    data-name="Emma's Farm CSA"
    data-description="Subscription for 1 weekly box"
    data-amount="2000"
    data-label="Sign Me Up!">
  </script>
</form>
        </p>
        <p><?php print_r($dark['profile']); ?></p>     <button type="button" class="dark-btn dark-theme-d1 dark-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button>
        <button type="button" class="dark-btn dark-theme-d2 dark-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
      </div>