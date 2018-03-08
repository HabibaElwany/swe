<?php require ("addCase.php"); ?>
<!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="style2.css">

<body  id='b1' class="w3-light-grey w3-content " >

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-black w3-animate-right " style="width:25%; right:0"  id="mySidebar"><br>
  <div class="w3-container"  >
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-left w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="123.jpg" id="imgLogo"  class="w3-round" style="margin-left:150px"><br><br>
    <h4  onclick="location.href = 'addCase.php';" style="margin-left:220px"><b >الرئيسية</b></h4>

  </div>
  <div class="w3-bar-block" dir="rtl"  style="margin-left:220px" >
    <a href="#portfolio" onclick="w3_close()"  content="text/html;charset=UTF-8" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-balance-scale fa-fw" lang="ar" ></i ><b>القضايا</b></a>
    <a href="#almozfen" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw "></i><b>الموظفين</b></a>
        <a href="secrtary.html" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"  style="margin-left:250px"><i class="fa fa-calendar fa-fw " ></i><b>السكرتارية</b></a>

      <a href="#Agenda" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"  style="margin-left:250px"><i class="fa fa-calendar fa-fw " ></i><b>الاجندة</b></a>

  </div>
  <div class="w3-panel w3-xxlarge" dir="rtl"  style="margin-right:23px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>

    <i class="fa fa-twitter w3-hover-opacity"></i>

  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-right:330px">

  <!-- Header -->
  <header id="portfolio">

   <div class="w3-container">
        <h1 style="margin-left:900px" ><b>القضايا</b></h1>

    </div>
  </header>

  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">

      <div  onclick="location.href = 'addCase.php';" class="w3-container w3-white">
        <h2><b class="fa fa-paperclip"> اضافة قضية جديدة</b></h2>

      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <div onclick="location.href = 'cases.php';" class="w3-container w3-white">
         <h2><b class="fa fa-file-text" > اظهار قضية</b></h2>

      </div>
    </div>
    <div class="w3-third w3-container">

      <div  class="w3-container w3-white">
         <h2><b  class="fa fa-times" > مسح قضية</b></h2>

      </div>
    </div>
  </div>

  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">

      <div onclick="location.href = 'fees.html';" class="w3-container w3-white">
        <h2><b class="fa fa-money"> اتعاب قضية</b></h2>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">

      <div onclick="location.href = 'Bill.html';" class="w3-container w3-white">
         <h2><b  class="fa fa-money"> مصاريف قضية</b></h2>
      </div>
    </div>
    <div class="w3-third w3-container">

      <div class="w3-container w3-white">
         <h2><b  class="fa fa-calendar-o"> مفكرة</b></h2>

      </div>
    </div>
  </div>

 <div id="almozfen">
     <h1  style="margin-left:890px" class="w3-row-padding"><b>الموظفين</b></h1>

    <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">

      <div class="w3-container w3-white">
        <h2><b class="fa fa-user-plus"> اظهار طلب التوظيف</b></h2>

      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <div onclick="location.href = 'lawyer.html';" class="w3-container w3-white">
        <h2><b class="fa fa-user-plus"> تعديل بيانات محامي</b></h2>

      </div>
    </div>
    <div class="w3-third w3-container">

      <div class="w3-container w3-white">
         <h2><b  class="fa fa-times" > مسح موظف</b></h2>

      </div>
    </div>
  </div>

  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">

      <div class="w3-container w3-white">
        <h2><b class="fa fa-money"> مرتبات</b></h2>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">

      <div class="w3-container w3-white">
         <h2><b  class="fa fa-money"> مصاريف</b></h2>
      </div>
    </div>
    <div class="w3-third w3-container">

      <div class="w3-container w3-white">
         <h2><b  class="fa fa-calendar-o"> مفكرة</b></h2>

      </div>
    </div>
  </div>
    </div>




  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-dark-grey" id="footer">
  <div class="w3-row-padding w3-xlarge ">
    <div class="w3-second">


    </div>
      <div id="Agenda"class="w3-third">
          <h3>اجندة</h3>
    </div>
  <!-- -------------------------------------message---------------------------->
    <div class="w3-third">
      <div class="bgimg w3-display-container w3-text-white">
 <div class="w3-display-topleft w3-container w3-xlarge">

    <p><button onclick="document.getElementById('contact').style.display='block'" style="margin-left:500px"class="w3-button w3-black">رسالة</button></p>
  </div>
        </div>

        <!-- Contact Modal -->
<div id="contact" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black">
      <span onclick="document.getElementById('contact').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>رسالة</h1>
    </div>
    <div class="w3-container">
      
      <form action="/action_page.php" target="_blank">
          <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="الرسالة.." required name="Message"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required name="date" value="2017-11-16T20:00"></p>
      
        <p><button class="w3-button" type="submit">إرسال الرسالة</button></p>
      </form>
    </div>
  </div>
</div>


    </div>



  </div>
  </footer>

  <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
