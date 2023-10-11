<?php
include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do-List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="header-container">
        <h1>TODO LIST</h1>
      </div>
    </header>

    <div class="app-body">
      <div class="app-container">
        <form action="insert.php" method="POST">
          <input type="text" id="task-name" name="tasking" placeholder="Enter a task you want to perform">
          <button id="add">ADD</button>
        </form>
      </div>
    </div>

    <div class="app-data">
      <div class="app-container">
        <table>
            <?php
              $stmt = $conn->query('SELECT * FROM taskslist');
              $stmt->execute();
              $result = $stmt->fetchAll();
              
              if($result){
                foreach($result as $data){
                  ?>
                  <tr>
                    <td>
                      <form action="update.php" method="POST">
                        <input type="checkbox" name="check" value="<?=$data['task_no']; ?>">
                        <!--I am working on update/edit-->
                      </form>
                    </td>
                    <td>
                      <?=$data['task_no']; ?>.
                      <?=$data['task_name']; ?>
                      <br>Status:
                      <?=$data['task_status'];?>
                    </td>
                    <td >
                     <form action="delete.php" method="POST">
                      <button style="background-color:red" type="submit" name="del" value="<?=$data['task_no']; ?>">
                      Delete
                    </button>
                     </form>
                    </td>
                  </tr>
                  <?php
                }
              }else{
                ?>
                <tr>
                  <td colspan=3>No Records Found</td>
                </tr>
                <?php
              }
              ?>
        </table>
      </div>
    </div>

  </body>
</html>