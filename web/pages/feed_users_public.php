<?PHP require_once($_SERVER["DOCUMENT_ROOT"]."/load.php"); ?>

      <div class="dark-container dark-card-2 dark-white dark-round dark-margin"><br>
        <img src="img_avatar5.png" alt="Avatar" class="dark-left dark-circle dark-margin-right" style="width:60px">
        <span class="dark-right dark-opacity">16 min</span>
        <h4>Jane Doe</h4><br>
        <hr class="dark-clear">
        <?php

$stripe = array(
  "secret_key"      => "sk_test_nmBqbJhBKrhdfbzYriVyiCdy",
  "publishable_key" => "pk_test_kkoq32TRFRxxf5IrQgTZgKhE"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>

        <form action="charge.php" method="post" class='stripe-form' data-name='Test Name' data-desc='Test Description' data-price='1337'>
            <button class='stripe-button'>Purchase</button>
        </form>
        <p><?php print_r($dark['profile']); ?></p><button type="button" class="dark-btn dark-theme-d1 dark-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button>
        <button type="button" class="dark-btn dark-theme-d2 dark-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
      </div>