<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: index.html");
  }
?>

<!DOCTYPE html>
<html lang="en" style="height: auto;">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title> MISC-RTC-APP </title>
  <link rel="icon" href="./images/icon-512x512.png">
  <link rel="stylesheet" href="./Chat BOT_files/all.min.css">
  <link rel="stylesheet" href="./Chat BOT_files/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="./Chat BOT_files/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="./Chat BOT_files/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="./Chat BOT_files/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="./Chat BOT_files/select2.min.css">
  <link rel="stylesheet" href="./Chat BOT_files/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="./Chat BOT_files/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="./Chat BOT_files/jqvmap.min.css">
  <link rel="stylesheet" href="style3.css">
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <!-- Theme style -->
    <link rel="stylesheet" href="./Chat BOT_files/adminlte.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="./Chat BOT_files/OverlayScrollbars.min.css">

  <script src="./Chat BOT_files/jquery.min.js.download"></script>
  <script src="./Chat BOT_files/jquery-ui.min.js.download"></script>
  <script src="./Chat BOT_files/sweetalert2.min.js.download"></script>
  <script src="./Chat BOT_files/toastr.min.js.download"></script>
  <script> var _base_url_ = 'http://localhost/simple_chat_bot/';</script>
  <script src="./Chat BOT_files/script.js.download"></script>
  <script src="./Chat BOT_files/scripts.js.download"></script>
</head>

<?php include_once "header.php"; ?>
<body>
    
<div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <!-- <img src="php/images/<?php echo $row['img']; ?>" alt="image"> -->
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname']. " <br> " .$row['unique_id'] ?></span>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
      </header>


    <div class="card card-outline-navy rounded-0">
        <div class="card-header">
            <div class="d-flex w-100 align-items-center">
                <div class="col-auto">
                    <img src="./images/icon-512x512.png" class="img-fluid img-thumbnail rounded-circle" style="width:1.9em;height:1.9em;object-fit:cover;object-position:center center">
                </div>
                <div class="col-auto">
                    <b> MIS-RTC: Support Chat</b>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="overflow-auto" id="convo-box">
            <div id="suggestion-list" class="my-3 px-2">
            <a href="javascript:void(0)" class="w-auto rounded-pill bg-transparent border px-3 py-2 text-decoration-none text-reset suggestion">Example 1</a>
            <a href="javascript:void(0)" class="w-auto rounded-pill bg-transparent border px-3 py-2 text-decoration-none text-reset suggestion">Example 2</a>
            <a href="javascript:void(0)" class="w-auto rounded-pill bg-transparent border px-3 py-2 text-decoration-none text-reset suggestion">Example 3</a>
        </div>
        <div class="d-flex w-100 align-items-center mt-4">


    </div>
	<div>
        <div class="col-auto text-center">
            <div>
            </div>
        </div>
        <div class="col-auto flex-shrink-1 flex-grow-1 text-right">
            
        </div>
    </div>
        <div class="d-flex w-100 align-items-center mt-4">
        <div class="col-auto">
        <img src="images/icon-512x512.png" style="width:2.5em;height:2.5em;object-fit:cover;object-position:center center">
    </div>
    <div class="col-auto flex-shrink-1 flex-grow-1">
    <div class="msg-field bot-msg w-auto d-inline-block bg-gradient-light border rounded px-2 py-1"><p>WELCOME! BCP's Students,&nbsp; What's your concerns?&nbsp;&nbsp;</p>
    </div>
    </div>
    </div>
    </div>
    <div class="d-flex w-100 align-items-center">
    <div class="col-auto flex-shrink-1 flex-grow-1">
    <textarea name="keyword" id="keyword" cols="30" class="form-control form-control-sm rounded-0" placeholder="Write your query here" rows="2"></textarea>
    </div>
    <div class="col-auto">
    <button class="btn btn-primary" type="button" id="submit"><i class="bx bxs-send"></i></button>
    </div>
    </div>
    </div>
    </div>
    </div>

<noscript id="resp-msg">
    <div class="d-flex w-100 align-items-center mt-4">
    <div class="col-auto">
    <img src="images/icon-512x512.png" style="width:2.5em;height:2.5em;object-fit:cover;object-position:center center">
    </div>
    <div class="col-auto flex-shrink-1 flex-grow-1">
    <div class="msg-field bot-msg w-auto d-inline-block bg-gradient-light border rounded px-2 py-1 response"></div>
        </div>
    </div>
</noscript>
<noscript id="user-msg">
    <div class="d-flex flex-row-reverse  w-100 align-items-center mt-4">
        <div class="col-auto text-center">
            <div class="img-fluid img-thumbnail rounded-circle" style="width:2.5em;height:2.5em;background-color:lightblue;">
                <i class="bx bx-user" style="font-size:1em"></i>
            </div>
        </div>
        <div class="col-auto flex-shrink-1 flex-grow-1 text-right">
            <div class="msg-field w-auto d-inline-block bg-gradient-light border rounded-pill px-3 py-2 msg text-left"></div>
        </div>
    </div> 
	
	
</noscript>
<noscript id="sg-item">
    <a href="javascript:void(0)" class="w-auto rounded-pill bg-transparent border px-3 py-2 text-decoration-none text-reset suggestion"></a>
</noscript>


<script>
    function add_msg($kw=""){
        var item = $($('noscript#user-msg').html()).clone()
        item.find('.msg-field').text($kw)
        $('#suggestion-list').after(item)
    }
    function fetch_response($kw=""){
        var item = $($('noscript#resp-msg').html()).clone()
        $.ajax({
            url:_base_url_+"classes/Master.php?f=fetch_response",
            method:'POST',
            data:{kw : $kw},
            dataType:'json',
            error:err=>{
                console.log(err)
                alert("An errror occurred while fetching a response")
            },
            success:function(resp){
                if(resp.status = 'success'){
                    item.find('.msg-field').html(resp.response)
                    $('#suggestion-list').after(item)
                    $('#suggestion-list').html("")
                    if(!!resp.suggestions && Object.keys(resp.suggestions).length){
                        Object.keys(resp.suggestions).map((k)=>{
                            if(resp.suggestions[k] != ''){
                                var item = $($('noscript#sg-item').html()).clone()
                                item.text(resp.suggestions[k])
                                $('#suggestion-list').append(item)
                                item.click(function(){
                                    var kw = $(this).text()
                                    add_msg(kw)
                                    fetch_response(kw)
                                })
                            }
                        })
                        
                    }
                }else{
                    alert("An errror occurred while fetching a response")
                }
            }
        })
    }
    $(function(){
        $('#keyword').keypress(function(e){
            if(e.which == 13 && e.shiftKey == false){
                e.preventDefault()
                $('#submit').click()
            }
        })
        $('#submit').click(function(){
            var kw = $('#keyword').val()
            add_msg(kw)
            fetch_response(kw)
            var kw = $('#keyword').val('').focus()
        })
        $('.suggestion').click(function(){
            var kw = $(this).text()
            add_msg(kw)
            fetch_response(kw)
        })
    })
</script>
</body>
</html>

<!-- JS Script -->
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
