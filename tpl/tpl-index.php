
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
      <div class="menu">
        <div class="title">folders</div>
        <ul>
            <?php
            foreach($folders as $folder):?>
          <li> 
          <a style="text-decoration: none;" href="?folder_id=<?= $folder->id ?>"><i class="fa fa-folder"></i><?= $folder->name ?></a>
          <a style="text-decoration: none;float:right;color:red;padding: right 20px;" href="?delete_folder=<?= $folder->id ?>">!!!</a>
          </li>
          <?php endforeach; ?>
          <li class="active"> <i class="fa fa-folder"></i>curent folder</li>
          <!-- <li><i class="fa fa-signal"></i>Activity</li>
          <li class="active"> <i class="fa fa-tasks"></i>Manage Tasks</li>
          <li> <i class="fa fa-envelope"></i>Messages</li> -->
          <div>
          <input style="width: 65%;margin-left: 3%;" type="text" id="NewFolderInput" placeholder="Add New Folder"/>
          <button class="btn" id="New_Folder_Btn">+</button>
        </div>
        </ul>
      </div>
    
    </div>

    <div>

    <div class="view">
      <div class="viewHeader">
        <div class="title">Manage Tasks</div>
        <div class="functions">
          <div class="button active">Add New Task</div>
          <div class="button">Completed</div>
          <div class="button inverz"><i class="fa fa-trash-o"></i></div>
        </div>
      </div>

      <div class="content">
        <div class="list">
          <div class="title">Today</div>
          <ul>
            <?php foreach($tasks as $task): ?>
            <li class="checked"><i class="fa fa-check-square-o"></i><span><?= $task->title?></span>
              <div class="info">
                <div class="button green">In progress</div><span><?= $task->created_at ?></span>
              </div>
            </li>
            <?php endforeach; ?>
            <li><i class="fa fa-square-o"></i><span>Design a new logo</span>
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
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='/assets/js//script.js'></script><script  src="/assets/js/script.js"></script>

</body>
</html>
