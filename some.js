(function() {
  var fill;
  fill = function(var1, var2) {
    if (var2 == null) {
      var2 = "def var2";
    }
    return "Value of var1 is  " + var1 + " and value of var2 is " + var2 + " ";
  };
}).call(this);
