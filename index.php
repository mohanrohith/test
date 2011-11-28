<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
    <script type="text/javascript" src="jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="jquery-ui-1.7.3.custom.min.js"></script>

    <link href="ui-lightness/jquery-ui-1.7.3.custom.css" rel="stylesheet" />

    <style>
      #draggable { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
      #droppable { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
      .droppable {
        float: left;
        position: relative;
        width: 141px;
        height: 131px;
        background: lightBlue;
        top: 100px;
        -webkit-border-radius: 80px;
        -moz-border-radius: 80px;
        border: 2px dashed;
      }

      .draggable {
        list-style: none !important;
        float: left;
        border: 2px solid;
        margin-right: 5px !important;
      }


    </style>
    <script>
      $(function() {
        $( ".draggable" ).draggable();
        $( ".droppable" ).droppable({
          drop: function(  ) {
            alert("kuch karo");
          }
        });
      });
    </script>
  </head>
  <body>

    <div class="demo">

      <div id="draggable" class="ui-widget-content">

      </div>

      <div id="droppable" class="ui-widget-header">

      </div>

    </div><!-- End demo -->


    <div class="users-grid-view">
      <ul> 
        <li class="draggable user-uid-1 ui-draggable" style="position: relative; ">
          <img height="50" width="50" src="/acquia_lc/sites/default/files/default-user.png" alt="user-profile-picture">
          <span class="usr-name"> admin</span>
        </li> 
        <li class="draggable user-uid-3 ui-draggable" style="position: relative; "><img height="50" width="50" src="/acquia_lc/sites/default/files/pictures/picture-3.jpg" alt="user-profile-picture"><span class="usr-name"> swapnil</span></li> <li class="draggable user-uid-4 ui-draggable" style="position: relative; "><img height="50" width="50" src="/acquia_lc/sites/default/files/default-user.png" alt="user-profile-picture"><span class="usr-name"> navdeep</span></li> <li class="draggable user-uid-5 ui-draggable" style="position: relative; "><img height="50" width="50" src="/acquia_lc/sites/default/files/default-user.png" alt="user-profile-picture"><span class="usr-name"> mahendert</span></li></ul></div>


    <div class="droppable ui-droppable"></div>

  </body>
</html>
