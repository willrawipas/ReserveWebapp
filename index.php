
<html>
<head>
<title>ReserveWebapp Test!!</title>
<!--------------------------------------bootstrap---------------------------------------------------------------------->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<!--------------------------------------tailwindcss---------------------------------------------------------------------->
<link href="https://unpkg.com/tailwindcss@%5E2/dist/tailwind.min.css" rel="stylesheet" />
<!----------------------------------------Front Body------------------------------------------------------------------->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
<style>
body {
   
        font-family: 'Kanit', serif;
    
      }
</style>
<!----------------------------------------Front Body------------------------------------------------------------------->






</head>
<body class="bg-light">

<!---------------------------------------header page------------------------------------------------------------------------------->

<header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark" style="padding-top: 0.7rem!important;
    padding-bottom: 0.7rem!important;">
  <div class="container-fluid d-flex align-items-center" style="padding-right: 30;">
    <h2 class="d-flex align-items-center fs-4 text-white mb-0">
      <a href="/ReserveWebapp/index.php"><img src="img/05.png" width="38" height="30" class="me-3" alt="Bootstrap" ></a>
      <a href="/ReserveWebapp/index.php"  class="ms-auto link-light">Reserve</a>
    </h2>
    <a href="/ReserveWebapp/Login.php" class="ms-auto link-light" hreflang="ar">Login</a>
  </div>
</header>

<!---------------------------------------header page------------------------------------------------------------------------------->

<!---------------------------------------carousel------------------------------------------------------------------------------->

<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" style="width: 100%!important;
    margin-left: auto;
    margin-right: auto;  ">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"  ></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"  ></li>
   
  
  </ol>
  <div class="carousel-inner">
    
    <div class="carousel-item active" data-bs-interval="5000">
      <img src="https://www.lib.kmutt.ac.th/wp-content/uploads/2021/01/Red-Status-on-Web-01.jpg" class="d-block w-100 " alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="5000">
      <img src="https://www.lib.kmutt.ac.th/wp-content/uploads/2016/07/kmuttarchive.png" class="d-block w-100" alt="...">
    </div>
   
    <div class="carousel-item" data-bs-interval="5000">
      <img src="https://www.lib.kmutt.ac.th/wp-content/uploads/2020/03/Web_eJournalMag-01.jpg" class="d-block w-100" alt="...">
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>

</div>
<!---------------------------------------carousel------------------------------------------------------------------------------->



<!---------------------------------------List------------------------------------------------------------------------------->

<p class="float-left" style="font-size:36px; padding-left:230px; padding-top:50px; ">ห้องทั้งหมด</p>

<!-- Large button groups (default and split) -->
<div class="btn-group" style="margin-left:30px; margin-top:55px; ">
  <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Status
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item " href="#">ห้องทั้งหมด</a></li>
    <li><a class="dropdown-item" href="#">ห้องว่าง</a></li>
    
  </ul>
</div>




<div class="album py-5 bg-light">
    <div class="container">

      <div class="row">

        <?php for($i=1;$i<=6;$i++) { ?>
       
        <div class=" col-md-4 transform hover:scale-105 duration-300" style="padding:2rem; " >
        
          <div class="card mb-4 shadow-sm rounded-lg w-90" >
          
          <img src="img/07.jpg" class="d-block w-100 rounded-md"  >
          <!--button type="button" class="btn btn-secondary rounded-full  px-2.8" style="margin-left:340px;  margin-bottom:30px; margin-top:15px; position:absolute; display:block; font-size:13px">ปิดปรับปรุง</button-->
          <!--div class=" btn-danger rounded-full py-1 px-2.5 active" style="margin-left:340px;  margin-bottom:30px; margin-top:15px; position:absolute; display:block; font-size:13px">มีคนจองแล้ว</div-->
          <div class="btn-success rounded-full py-1 px-2.5 active" style="margin-left:360px;  margin-bottom:30px; margin-top:15px; position:absolute; display:block; font-size:13px">ห้องว่าง</div>
            <div class="card-body" >
              <p class="card-text">ห้องประชุม 1</p>
              <div class="d-flex justify-content-between align-items-center">
                
                  <button type="button" class="btn btn-sm btn-outline-secondary">ดูรายละเอียด</button>
                  </div>
                </div>
                
              </div>
              </div>
        <?php } ?>
            </div>
          </div>
        </div>
<!---------------------------------------List------------------------------------------------------------------------------->



<!---------------------------------------footer------------------------------------------------------------------------------->

<footer class="footer mt-auto py-3 bg-dark">
  <div class="container">
    <span class="link-light">Place sticky footer content here.</span>
  </div>
</footer>

<!---------------------------------------footer------------------------------------------------------------------------------->


</body>
</html>