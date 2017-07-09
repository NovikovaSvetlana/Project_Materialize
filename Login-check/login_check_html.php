<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="../assets/css/mystyle.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
     
     <div class="row">
         <div class="col s8 offset-s2">
            <div class="cards">
                <div class="cards-content">
                   <form method="POST" action="login_check.php">
                     <div class="row">
                         <div class="input-field col s12">
                             <input id="login" type="text" class="validate" name="login">
                             <label for="login">LOGIN</label>
                         </div>
                         <div class="input-field col s12">
                            <input id="password" type="password" class="validate" name="password">
                             <label for="password">PASSWORD</label>
                         </div>
                     </div>
                     <button class="btn orange">Submit</button>
                 </form>    
                </div>
            </div>
         </div>
     </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
      <script>
          $(document).ready(function() {
            $('select').material_select();
         });
        </script>
    </body>
  </html>