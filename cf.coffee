#Assignment
number = 42
opposite = true
str = "myString"

#Conditions
number = -42 if opposite


#Functions
square = (x)->x*x


#Arrays
list = [1,2,3,4,5]


#Objects
math = 
  root : Math.sqrt
  square: square
  cube: (x)-> x*x*x


#Existence
alert "ALL DOne" if condition?


cubes = ( math.cube num for num in list)
