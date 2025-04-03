<?php require_once '../template/header_logged_out.php';?>
  
<?php include '../template/nav.php';?>

        <div class="mainarea">
		
            <h1>Title </h1>
        </div>

      <div class="row marketing">
        <div>
          <h4>Other Page</h4>
          <p>Logged out users can see this page. Another header php page is used without the redirect.</p>
		  
		  <p>The redirect causes logged out users to fail to access the page. Session does not, but can be used to clear a condition to stop the redirect (being logged in for example).</p>

       </div>

          <?php require_once '../template/footer.php';?>
