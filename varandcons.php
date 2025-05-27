<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variabes and constants</title>
</head>
<body>

  <?php  
  define('PHONENO' , '789930772X');
  define('DEPARTMENT', 'department of computer science engineering');
  
  $collegename = 'GOVERNMENT ENGINEERING COLLEGE';
  $regno = '2GO21CS031';
  $branch= 'Computer Science';
     ?>





    <h1><?php echo $collegename;?> </h1>
    <h1><?php echo $regno;?> </h1>
    <h1><?php echo $branch;?> </h1>
    
     <h2><?php echo PHONENO;?> </h2>
    <h2><?php echo DEPARTMENT;?> </h2>

</body>
</html>