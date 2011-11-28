(function() {
  var cubes, list, math, num;
  list = [1, 2, 3, 4, 5];
  math = {
    square: function(x) {
      return x * x;
    },
    cube: function(x) {
      return x * x * x;
    },
    root: Math.srt
  };
  cubes = (function() {
    var _i, _len, _results;
    _results = [];
    for (_i = 0, _len = list.length; _i < _len; _i++) {
      num = list[_i];
      _results.push(math.cube);
    }
    return _results;
  })();
}).call(this);
