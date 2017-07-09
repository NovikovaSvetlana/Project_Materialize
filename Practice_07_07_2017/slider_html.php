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
    
   <?php
        require_once "functions.php";
        $directories = getDirectories();
        $directory = $_GET['name'];
        if(!$directory){
            $directory = 'Kiev';
        }
        $dataList = getPictures($directory);
        
//        echo '<pre>';
//        var_dump ($dataList);
//        echo '</pre>';
          
//        echo '<pre>';
//       var_dump ($directory);
//       echo '</pre>';

    ?>
    <div class="col s8 offset-s2">
            <div class="cards">
                <div class="cards-content">
                   <form>
                     <div class="row">
                         <div class="input-field col s12">
                            <select name="name">
                               <?php foreach ($directories as $dir): ?>
                                <option value="<?= $dir; ?>" <?= ($dir == $directory) ? 'selected' : ''; ?>>
                                    <?=$dir; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                                 <label>Галлереи</label>
                          </div>
                    </div>
                    <button class="btn orange">Submit</button>
                    </form>
                </div>
        </div>
        
     
     
     <div class="carousel">
       <?php foreach ($dataList as $id => $pic): ?>
        <a class="carousel-item" href="#o<?= $id?>!"><img src="<?= $pic; ?>"></a>
        <?php endforeach; ?>
        
      </div>
</div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
      <script>
          $(document).ready(function(){
              $('.carousel').carousel();
              $('select').material_select();
          });
        </script>
    </body>
  </html>