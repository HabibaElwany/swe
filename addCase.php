<html>
<head>
    <script src="jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <main>
       
       <div  id="popup" >
       
       <div id="addcase">
           <form action="#" id="form" method="post" name="form">

            <img id="close" src="close.png" width="40px" hight="40px" onclick ="div_hide()">
               
            <b> رقم القضية </b>
            <br>
            <input type ="text" name = "case number">
            <br>
            <br>
            <b> نوع القضية </b>
            <br>
            <input type ="text" name = "case type">
            <br>
            <br>
            <b> تاريخ رفع القضية </b>
            <br>
<select name="Day" id="d">
	<option> - Day - </option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
</select>

<select name="Month" id="m">
	<option> - Month - </option>
	<option value="January">January</option>
	<option value="Febuary">Febuary</option>
	<option value="March">March</option>
	<option value="April">April</option>
	<option value="May">May</option>
	<option value="June">June</option>
	<option value="July">July</option>
	<option value="August">August</option>
	<option value="September">September</option>
	<option value="October">October</option>
	<option value="November">November</option>
	<option value="December">December</option>
</select>

<select name="Year" id="y">
	<option> - Year - </option>
	<option value="2018">2018</option>
	<option value="2019">2019</option>
	<option value="2020">2020</option>
	<option value="2021">2021</option>
	<option value="2022">2022</option>
</select>
            <br>
            <br>
            <b> المحكمة </b>
            <br>
            <input type ="text" name = "court">
            <br>
            <br>
            <b> الدائرة </b>
            <br>
            <input type ="text" name = "circle">
            <br>
            <br>
            <b> معاد الجلسة </b>
            <br>
<select name="Day" id="d">
	<option> - Day - </option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
</select>

<select name="Month" id="m">
	<option> - Month - </option>
	<option value="January">January</option>
	<option value="Febuary">Febuary</option>
	<option value="March">March</option>
	<option value="April">April</option>
	<option value="May">May</option>
	<option value="June">June</option>
	<option value="July">July</option>
	<option value="August">August</option>
	<option value="September">September</option>
	<option value="October">October</option>
	<option value="November">November</option>
	<option value="December">December</option>
</select>

<select name="Year" id="y">
	<option> - Year - </option>
	<option value="2018">2018</option>
	<option value="2019">2019</option>
	<option value="2020">2020</option>
	<option value="2021">2021</option>
	<option value="2022">2022</option>
</select>
               
<select name="Time" id="T">
	<option> - Time - </option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
</select>
<select name="ampm" id="a">
<option value="am">AM</option>
<option value="pm">PM</option>
</select>
               <br>
               <br>
            <b> مكان الجلسة </b>
            <br>
            <input type ="text" name = "sessionplace">
            <br>
            <br>
            <br>
            <b> التفاصيل </b>
             <textarea id="TA" name="details" rows="5" cols="30"></textarea>
               <br>
               <br>
               <button class="m" type="button" onclick ="form1_show() ">التالي</button>
           </form>
           
           <form id="form1">
            <img id="close" src="close.png" width="40px" hight="40px" onclick ="div_hide()">
               
            <b> اسم المحامي </b>
            <br>
            <input type ="text" name = "lawyersearch" placeholder="ابحث عن المحامي هنا">
            <br>
            <br>
            <b> اسم الخصم </b>
            <br>
            <input type ="text" name = "opponent">
            <select name="صفتة" id="side">
            <option> - صفتة - </option>
            <option value="المدعي">المدعي</option>
            <option value="المدعي">المدعي علية</option>
            </select>
            <br>
            <br>
            <button class="m" type="button" onclick ="form1_hide() ">رجوع</button>
            <button class="m" type="button" onclick ="form2_show() ">التالي</button>
           </form>
           
           <form id="form2">
            <img id="close" src="close.png" width="40px" hight="40px" onclick ="div_hide()">
               
            <b> اسم الموكل </b>
            <br>
            <input type ="text" name = "clientsearch" placeholder="ابحث عن الموكل هنا">
            <br>
            <br>
            <button class="m" type="button" onclick ="client_show() ">اضافة موكل</button>
            <br>
            <br>
            <button class="m" type="button" onclick ="form2_hide() ">رجوع</button>
            <button class="m" type="button" onclick ="form3_show() ">التالي</button>
           </form>
           
           <form id="client">
            <img id="close" src="close.png" width="40px" hight="40px" onclick ="div_hide()">
               
            <b> اسم </b>
            <br>
            <input type ="text" name = "clientname">
            <select name="صفتة" id="side">
            <option> - صفتة - </option>
            <option value="المدعي">المدعي</option>
            <option value="المدعي">المدعي علية</option>
            </select>
            <br>
            <br>
            <b> العنوان </b>
            <br>
            <input type ="text" name = "address">
            <br>
            <br>
            <b> الهاتف </b>
            <br>
            <input type ="text" name = "mobile">
            <br>
            <br>
            <button class="m" type="button" onclick ="client_show() "> اوراق الموكل </button>
            <br>
            <br>
            <button class="m" type="button" onclick ="form2_show() ">رجوع</button>
            <button class="m" type="button" onclick ="form3_show() ">التالي</button>
           </form>
           
           <form id="form3">
            <img id="close" src="close.png" width="40px" hight="40px" onclick ="div_hide()">
               
            <b> طريقة الدفع </b>
            <br>
            <select name="payment" id="p">
            <option> - - </option>
            <option value="1">مقدم/مؤخر</option>
            <option value="2">دفعات</option>
            <option value="3">كل مرحلة لها اتعابها</option>
               </select>
            <br>
            <br>
            <button class="m" type="button" onclick ="form3_hide() ">رجوع</button>
            <button class="m" type="submit">حفظ</button>
           </form>
       
       </div>
        </div>
   </main> 
    
    <script>
        $(document).ready(function() {
        document.getElementById('popup').style.display = "block";
        });
        function form1_show() {
        document.getElementById('form').style.display = "none";
        document.getElementById('form1').style.display = "block"; 
        }
         function form1_hide() {
        document.getElementById('form1').style.display = "none";
        document.getElementById('form').style.display = "block"; 
        }
        function form2_show() {
        document.getElementById('form').style.display = "none";
        document.getElementById('form1').style.display = "none";
        document.getElementById('client').style.display = "none"; 
        document.getElementById('form2').style.display = "block"; 
        }
         function form2_hide() {
        document.getElementById('form').style.display = "none";
         document.getElementById('form2').style.display = "none";
        document.getElementById('form1').style.display = "block"; 
        }
         function form3_show() {
        document.getElementById('form').style.display = "none";
        document.getElementById('form1').style.display = "none";
        document.getElementById('form2').style.display = "none";
        document.getElementById('client').style.display = "none"; 
        document.getElementById('form3').style.display = "block"; 
        }
        function form3_hide() {
        document.getElementById('form').style.display = "none";
        document.getElementById('form1').style.display = "none";
        document.getElementById('form3').style.display = "none";
        document.getElementById('form2').style.display = "block"; 
        }
        function client_show() {
        document.getElementById('form').style.display = "none";
        document.getElementById('form1').style.display = "none";
        document.getElementById('form2').style.display = "none";
        document.getElementById('form3').style.display = "none"; 
        document.getElementById('client').style.display = "block"; 
        }
        function div_hide(){
        document.getElementById('popup').style.display = "none";
         header("location:http://localhost/lawfirm/index.php");
        }

    </script>
</body>
</html>