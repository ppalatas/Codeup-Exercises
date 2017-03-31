<!-- WRITING CLASSES EXERCISES:

   Each of the exercises below should be written in their own file named after the class (remember to always capitalize class file names).

   - all objects should be instantiated in a file called oop_test.php and each class file should be required once at the top of the oop_test.php file.

   - all properties and methods should be declared public.
    - all methods should simply echo out what they are for unless otherwise specified, e.g...
    
        function bark()
        {
            echo "Bark BARK!";
        }

   1) Rewrite the non-class.php variable/function definitions as a class and test the procedural code exactly in oop_test.php.
        - call the class Person
        - call the object $thisGuy


   2) Write a class of Pet:
        - write properties for species, weight, color, name
        - write methods for eat, move, sleep
        - Instantiate 3 different pet objects and set all properties in oop_test.php.


   3) Write a class of Car:
        - write properties for make, model, color, miles
        - write methods for turnOn(), turnOff(), brake(), honk(), accelerate()
        - write a method driveToDestination() that calls the other methods in a logical order
        - Instantiate 3 different car objects and set all properties in oop_test.php.


   4) Write a class of Restaurant:
        - write at least 5 properties of your choice // (e.g. name, numberOfEmployees, cuisine, hoursOfOperation, etc.) examples
        - write at least 5 methods of your choice // (e.g. cookOrder(), takeOrder(), cleanTable() etc.)
        - Instantiate a restaurant object and set all properties to match your favorite restaurant in oop_test.php.


   5) Write a class of Rectangle:
        - write properties for width, height, area
        - write a method of calculateArea() that when called calculates the area and sets the value of the area property ** You will need to use $this **
        - write a method of changeDimensions($length1, $length2) which sets new values for the width and height
        - Instantiate a Rectangle object in oop_test.php and set width and height to 2 and 3. 
        - Call and echo the results of calculateArea(). Call changeDimensions(4, 6), call calculateArea() and echo out the new area.


   6) Create a class of User:
        - write properties for username, email, password, date_created
        - write a method to return an array of user information except the password
        - instantiate the object from the class, set all properties, and test out the returnUserInformation() method by using a var_dump of the method call -->