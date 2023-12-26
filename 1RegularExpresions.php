<!-- Task: Write a PHP function called isValidEmail that takes a string as input and uses a regular expression
to verify if it is a valid email address.  
Input Format: The input will be a string. 
Constraints: The string will contain at least one character. 
Output Format: The output will be a boolean. Return true if the string is a valid email address and false otherwise.
-->
<?php 
    function isValidEmail($string) {

      // Regular Expresion to Validate Email
      $expresion = '/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z]+$/';
      
      // Validate email with regular expresion ($expresion) and returning boolean 
      // true = 1, false = 0
      return (preg_match($expresion, $string)); 
    }
  
    $emailtoValidate = "user@ss.com";
    echo isValidEmail($emailtoValidate);
?>  