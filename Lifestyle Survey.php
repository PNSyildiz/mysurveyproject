<?php
<!DOCTYPE html> 


require_once 'DBConnection.php';
$connection = new mysqli($hn, $un, $db, $pw);
if ($connnection->connect_error) die("Fatal Error");
?>
<head>
    <h1> Take our Survey</h1>
</head>
<body>
    <form> 
Surname : 
<input type ="text" Surname="surname"><br><br>
Firstname :
<input type ="text" Surname="Firstname"><br><br>
Contact :
<input type ="text" Surname="Contact"><br><br>
Date :
<input type ="text" Surname="Date"><br><br>
Age :
<input type ="text" Surname="Age"><br><br>
<br>

What is Your Favourite food?(You can choose more than one answer)
<br>
<br>
<input type="checkbox" name="ice[]" value="Pizza">Pizza<br>
 <input type="checkbox" name="ice[]" value="Pasta">Pasta<br>
<input type="checkbox" name="ice[]" value="Pap and wors"> Pap and wors<br>
<input type="checkbox" name="ice[]" value="Chicken Stir fry"> Chicken stir fry<br>
<input type="checkbox" name="ice[]" value="Beef stir fry">Beef stir fry <br>
<input type="checkbox" name="ice[]" value="Other">Other 



<table class="table table-responsive">
    
    <thead>
        <tr>
            <th>Question</th>
            <th>Strongly Agree</th>

            <th>Agree</th>

            <th>Nuetral</th>

            <th>Disagree</th>

            <th>Strongly disagree</th>
        </tr>
        <tr> 
       
       <th> I like to eat out  
       </th>
<th><input type="radio" name=" agree"></th>
 <th><input type="radio" name=" agree"></th>
 <th><input type="radio" name=" agree"></th> 
<th><input type="radio" name=" agree"></th> 
<th><input type="radio" name=" agree"></th> 

</tr>
     </thead>
        <tr> 
       <th> I like to watch movies</th>
 <th> <input type="radio" name="Nutral"></th>
<th> <input type="radio" name="Nutral"></th>
<th><input type="radio" name="Nutral"></th>
     <th> <input type="radio" name="Nutral"></th>
     <th> <input type="radio" name="Nutral"></th>
</tr>
     </thead>
        <tr> 
       <th> I like to watch TV</th>
 <th><input type="radio" name="Disagree"></th>
 <th><input type="radio" name="Disagree"></th>
 <th><input type="radio" name="Disagree"></th>
 <th><input type="radio" name="Disagree"></th>
 <th><input type="radio" name="Disagree"></th>
</tr>
     </thead>
        <tr> 
       <th> I like to Listen to the radio</th>
 <th><input type="radio" name="stongly disagree"></th><br>
 <th><input type="radio" name="stongly disagree"></th><br>
 <th><input type="radio" name="stongly disagree"></th><br>
 <th><input type="radio" name="stongly disagree"></th><br>
 <th><input type="radio" name="stongly disagree"></th><br>


</tr>
     </thead>

     <br>
    
    <br>
    
        </form> 
    </body>
On a scale of 1 to 5 decide wether yo strongly agree to strongly disagree


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />

?>