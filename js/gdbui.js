function myconsole($scope, $http, $templateCache) {


   $scope.execute = function(cmd) {

      if(cmd = undefined){
        $scope.output = "Please specify command";
      }
      $scope.code = null;
      $scope.response = null;
      $scope.url =  'nitro/nitro.php?cmd='         + cmd;
 
      $http({method: "GET", url: $scope.url, cache: $templateCache}).
         success(function(data, status) {
            if(data.errorcode == -1  || data.cap == undefined){
               msg = data.message;
               if(data.errorcode != -1)
                  msg = "nothing to display !!!";
            }
            $scope.status = status;
            $scope.data = data;
         }).
         error(function(data, status) {
            $scope.data = data || "Unable to process request.";
            $scope.status = status;
         }
      );
   };



  $scope.execute = function(cmd) {
    $scope.output.push(cmd);
    $scope.command = "";
  };
 
}
