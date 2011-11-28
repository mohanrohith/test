(function() {
  var cubes, list, math, num, number, opposite, square, str;
  number = 42;
  opposite = true;
  str = "myString";
  if (opposite) {
    number = -42;
  }
  square = function(x) {
    return x * x;
  };
  list = [1, 2, 3, 4, 5];
  math = {
    root: Math.sqrt,
    square: square,
    cube: function(x) {
      return x * x * x;
    }
  };
  if (typeof condition !== "undefined" && condition !== null) {
    alert("ALL DOne");
  }
  cubes = (function() {
    var _i, _len, _results;
    _results = [];
    for (_i = 0, _len = list.length; _i < _len; _i++) {
      num = list[_i];
      _results.push(math.cube(num));
    }
    return _results;
  })();
}).call(this);
