<?php
include_once("includes/header.php");
include_once("includes/navbar.php");

?>
      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>Access gdb from UI</h1>
        </div>
        <div ng-controller="myconsole">
           <div class="panel panel-default" style="height:200px">
              <div class="panel-heading">
                 Panel heading
              </div>
              <div class="panel-body">
                 <p ng-model="output"> {{output}} </p>
              </div>
           </div>
           <form>
              <input type="text" ng-model="command" />
              <button ng-click="execute(command)">run</button>
           </form>
        </div>
      </div>

<?php

include_once("includes/footer.php");
?>
