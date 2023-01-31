<html>
    <head>
        <title> RTC_NEW </title>
        <link rel="manifest" href="manifest.json">
    </head>
    <body>

<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header> MIS Concerns! </header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label></label>
          <input type="text" name="email" placeholder="Student ID" required>
        </div>
        <div class="field input">
          <label></label><br>
          <input type="password" name="password" placeholder="Password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Sign in">
        </div>
      </form>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
        
    </body>
    <script>
        window.addEventListener('load', () => {
          registerSW();
        });
     
        // Register the Service Worker
        async function registerSW() {
          if ('serviceWorker' in navigator) {
            try {
              await navigator
                    .serviceWorker
                    .register('serviceworker.js');
            }
            catch (e) {
              console.log('SW registration failed');
            }
          }
        }
     </script>
</html>