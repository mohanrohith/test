list = [1, 2, 3, 4, 5]

math = 
  square: (x)-> x* x
  cube: (x)-> x*x*x
  root: Math.srt

cubes = (math.cube for num in list)
