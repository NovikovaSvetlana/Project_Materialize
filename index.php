<?php
function fun(){
    echo "<pre>";
    var_dump($_GET);
    echo "</pre>";
}
//$_get=[]; // моя локальная переменная потому что доступно в маленьком регистре
//var_dump($_get); // запрос на локальную переменную
fun(); // выполняет запрос на Глобальную переменну $_GET
?>


<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="assets/css/mystyle.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
     
     <div class="row">
         <div class="col s8 offset-s2">
            <div class="cards">
                <div class="cards-content">
                   <form action="test.php">
                     <div class="row">
                         <div class="input-field col s12">
                             <input id="first_name" type="text" class="validate" name="fName">
                             <label for="first_name">First Name</label>
                         </div>
                         <div class="input-field col s12">
                             <textarea class="materialize-textarea validate" name="decription" id="descr"></textarea>
                             <label for="descr">Description</label>
                         </div>
                         <div class="col s12 m6">
                                <p>
                                  <input name="city" type="radio" id="test1" value="kiev"/>
                                  <label for="test1">Kiev</label>
                                </p>
                                <p>
                                  <input name="city" type="radio" id="test2" value="kharkov"/>
                                  <label for="test2">Kharkov</label>
                                </p>
                                <p>
                                  <input name="city" type="radio" id="test3" value="lvov" />
                                  <label for="test3">Lvov</label>
                                </p>
                         </div>
                         <div class="col s12 m6">
                                <p>
                                  <input type="checkbox" id="test5" name="red"/>
                                  <label for="test5">Red</label>
                                </p>
                                <p>
                                  <input type="checkbox" id="test6" name="green"/>
                                  <label for="test6">Green</label>
                                </p>
                                <p>
                                  <input type="checkbox" id="test7" name="blue"/>
                                  <label for="test7">Blue</label>
                                </p>
                         </div>
                          <div class="input-field col s12">
                            <select name="select">
                              <option value="" disabled selected>Choose your option</option>
                              <option value="1">Option 1</option>
                              <option value="2">Option 2</option>
                              <option value="3">Option 3</option>
                            </select>
                          </div>
                         <div class="input-field col s12">
                             <p>
                                  <input type="checkbox" id="agree" name="agree"/>
                                  <label for="agree">Agree</label>
                            </p>
                         </div>
                     </div>
                     <button class="btn orange">Submit</button>
                 </form>    
                </div>
            </div>
<!--
             <form class="col s12">
                 <div class="row">
                     <div class="input-field col s12">
                         <input id="first_name" type="text" class="validate" name="fName">
                         <label for="first_name">First Name</label>
                     </div>
                 </div>
                 <button class="btn">Submit</button>
             </form>
-->
         </div>
     </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
      <script>
          $(document).ready(function() {
            $('select').material_select();
         });
        </script>
    </body>
  </html>