<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> </title>

<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  <link rel="stylesheet" href="jquery/css/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <script src="js/addtask.js"></script>
   <script src="jquery/js/jquery.js"></script>
  <script src="jquery/js/jquery-ui.js"></script>
  <script src="js/script.js"></script>
</head>
<body>


<div class="cont_principal">
   <div class="cont_centrar">
   
     <div class="cont_todo_list_top">
     <div class="cont_titulo_cont">
       <h3>THINGS TO DO</h3>
       </div>
   <div class="cont_add_titulo_cont"><a href="#e" onclick="add_new()"><i class="material-icons">&#xE145;</i></a>
       </div>
    


      </div>
<div class="cont_crear_new">
  <table class="table">
<tr>
    <th>category</th>
    <th>Title</th>
    <th>Date</th>
</tr>
    
    
<tr>
    <form action="add_todo.php" method="post">
         <fieldset>

    <td>
        <select name="category" id="action_select">
          <option value="work">work</option>
          <option value="dev">dev</option> <option value="other">other</option> 
        </select>
    </td>
      
    <td>
        <input type="text" class="input_description" name="desc" placeholder="title..." />  
    </td>
   
    <td>
        <input class="input-block-level" type="text" name="date" placeholder="Date..." id="datepicker" />
    </td>
    
</tr>
<tr>

    <td colspan="3">
    <button class="btn_add_fin" type="submit">ADD</button>
    </td>

</tr>


</table>
      
      
      </fieldset>
    </form>
       

  </div>


      
      <?php
        include("connect.php");
        $x = mysqli_query($con, "SELECT * FROM todo WHERE `todo`.`done`=0 ORDER BY `date`");
  
        if(mysqli_num_rows($x) == 0) {
          echo "<tr>";
          echo "<td>Yes ! you haven't task</td>";
          echo "<td>-</td>";
          echo "<td>-</td>";
          echo "</tr>";
        }
        else {
          date_default_timezone_set($time_zone);

          while($row = mysqli_fetch_array($x)) {
            $d = date('y-m-d');
            if($d == $row['date']) {
              $display_date = 'Today';
            }
            else {
              $display_date = $row['date'];
            }


            echo '<div class="cont_princ_lists">';
            echo '<ul>';
            echo '<li class="list_shopping li_num_0_1">';
            echo '<div class="col_md_1_list">';
            echo "<h4>".$row['category']."</h4>";
            echo '</div>';

        echo '<div class="col_md_2_list">';
        echo "<h4>".$row['desc']."</h4>";
        echo ' </div>';



        echo ' <div class="col_md_3_list">';
        echo "<a href='done.php?id=".$row['id']."'><i class='fas fa-check'></i></a>  <a href='edit.php?id=".$row['id']."'><i class='fas fa-edit'></i></a>  <a href='del_todo.php?id=".$row['id']."'><i class='fas fa-trash-alt'></i></a>";
        echo '</div>';
        echo '<div class="cont_btns_options">';
        
           echo '</div>';
           echo '</div>';
           echo '</ul>';
          }
        }
/* done */
        $x = mysqli_query($con, "SELECT * FROM todo WHERE `todo`.`done`=1");
        include("connect.php");
  
          date_default_timezone_set($time_zone);

          while($row = mysqli_fetch_array($x)) {
            $d = date('d-m-y');
            if($d == $row['date']) {
              $display_date = 'Today';
            }
            else {
              $display_date = $row['date'];
            }


            echo '<div class="cont_princ_lists">';
            echo '<ul>';
            echo '<li class="list_shopping li_num_0_1">';
            echo '<div class="col_md_1_list">';
            echo "<h4>".$display_date."</h4>";
            echo '</div>';

        echo '<div class="col_md_2_list">';
        echo "<strike><h4>".$row['desc']."</strike></h4>";
        echo ' </div>';



        echo ' <div class="col_md_3_list">';
       
        echo "<a href='done.php?id=".$row['id']."'><i class='fas fa-check'></i></a>  <a href='edit.php?id=".$row['id']."'><i class='fas fa-edit'></i></a>  <a href='del_todo.php?id=".$row['id']."'><i class='fas fa-trash-alt'></i></a>";
           echo '</div>';
           echo '<div class="cont_btns_options">';
        
           echo '</div>';
           echo '</div>';
           echo '</ul>';
          }
        
        mysqli_close($con);
        ?>
     
   
  
</body>
</html>