
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> - Task manager UI</title>
  <link rel="stylesheet" href="./assets/css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="page">
  <div class="pageHeader">
    <div class="title">Dashboard</div>
    <div class="userPanel"><i class="fa fa-chevron-down"></i><span class="username">John Doe </span><img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/73.jpg" width="40" height="40"/></div>
  </div>
  <div class="main">
    <div class="nav">
      <!-- <div class="searchbox">
        <div><i class="fa fa-search"></i>
          <input type="search" placeholder="Search"/>
        </div>
      </div> -->
      <style>
        .main .nav .menu ul li.active a{
         text-decoration: none;
          color: #79BC46;
           }
      </style>
      <div class="menu">
        <div class="title">folders</div>
        <ul class="folders-list">
          
          <li class="active">
          <li class="<?= isset($_GET['folder_id']) ? '' : 'active' ; ?>"><a style="text-decoration: none;" href="?folder_id ?>"> <i class="fa fa-folder"></i> All Folder</a></li> 
          </li>
     
          <?php foreach($folders as $folder):?>

          <li class="active"> 
          <li class="<?= ($_GET['folder_id'] == $folder->id) ? 'active' : '' ; ?>">
          <a style="text-decoration: none;" href="?folder_id=<?= $folder->id ?>"><i class="fa fa-folder"></i><?= $folder->name ?></a>
          <a style="text-decoration: none;float:right;color:red;padding: right 20px;" href="?delete_folder=<?= $folder->id ?>" onclick="return confirm('Are You sure delete for folder')" >!!!</a>
          </li>
          
          <?php endforeach; ?>
          <!-- <li><i class="fa fa-signal"></i>Activity</li>
          <li class="active"> <i class="fa fa-tasks"></i>Manage Tasks</li>
          <li> <i class="fa fa-envelope"></i>Messages</li> --> 
        </ul>
        <div>
  <input style="width: 65%;margin-left: 3%;" type="text" id="addFolderInput" placeholder="Add New Folder"/>
  
  <button  class="btn clickable" id="addFolderBtn">+</button>
          </div>
      </div>
    
    </div>

    <div>

    <div class="view">
        
                <div class="viewHeader">
                  <input  style="height: 40;width: 270;"  type="text" id="addTaskInput" placeholder="Name Task" >
                      <div class="functions">
                           <button class="button active" id="addTaskBtn" ><div >Add New Task</div></button> 
                        <div class="button">Completed</div>
                      <a href="?task_id=<?= $task->id ?>"> <div class="button inverz"><i class="fa fa-trash-o"></i></div> </a>  
                      </div>
                </div>
         
      <div class="content">
        <div class="list">
          <div class="title">Today</div>
          <ul>
            <?php if(sizeof($tasks)):  ?>

            <?php foreach($tasks as $task): ?>
            <li class="<?= $task->is_done ? 'checked' : '' ; ?>">
            <i data-taskId="<?= $task->id ?>" class="isDone fa <?= $task->is_done ? 'fa-check-square-o' : 'fa-square-o' ; ?> "></i>
            <span> <?= $task->title ?> </span>
              <div class="info">
                <span><?= $task->created_at?></span>
                <a class="remove" style="text-decoration: none;float:right;color:red;padding: right 20px;" href="?delete_task=<?= $task->id ?>" onclick="return confirm('Are You sure delete for task')" >!!!</a>
              </div>
            </li>

            <?php endforeach; ?>
              <?php else: ?>
                <li>No Task Here ...</li>
                <?php endif; ?>
            <!-- <li><i class="fa fa-square-o"></i><span>Design a new logo</span>
              <div class="info">
                <div class="button">Pending</div><span>Complete by 10/04/2014</span>
              </div>
            </li>
            <li><i class="fa fa-square-o"></i><span>Find a front end developer</span>
              <div class="info"></div>
            </li>
          </ul>
        </div>
        <div class="list">
          <div class="title">Tomorrow</div>
          <ul>
            <li><i class="fa fa-square-o"></i><span>Find front end developer</span>
              <div class="info"></div>
            </li> -->

          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script src="/assets/js/script.js"></script>
   <script>
  
 $(document).ready(function(e){

  $("#addFolderBtn").click(function(e){
      var input = $('input#addFolderInput');
      $.ajax({
          url : "proccess/ajaxHandler.php",
          method : "post",
          data : {action: "addFolder",folderName: input.val()},
          success : function(response){

            if(response == '1'){
        
              $(' <li><a style="text-decoration: none;" href="><i class="fa fa-folder"></i>'+input.val()+'</a></li>').appendTo('ul.folders-list');
          
            }else{

              alert(response);

            }  
        }
    });
  });
});


$('#addTaskInput').on('keypress',function(e){
  e.stopPropagation();
  if(e.which == 13){
    $.ajax({
          url : "proccess/ajaxHandler.php",
          method : "post",
          data : {action: "addTask",folderId : <?php echo $_GET['folder_id']; ?> ,taskTitle: $('#addTaskInput').val()},
          success : function(response){
            alert(response);
            if(response == '1'){
              Location.reload();
            }else{

              alert(response);

          }  
        }
    });  
        }
    });
   



// $(document).ready(function(b){
//   $('#addTaskBtn').click(function(b){
//     var input = $('input#addTaskInput');
//     $.ajax({
//       url : "proccess/ajaxHandler.php",
//       method : "post",
//       data : {action: "addTask",taskName: input.val()},
//       success : function(response){
//         alert(response);
//       }
//     });
//   });
// });



   </script>
</body>
</html>
