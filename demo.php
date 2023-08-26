<?php
// Function to generate a random 10-digit number
function generateRandomNumber() {
  return mt_rand(100000, 900000);
}

// Function to check if a number exists in the database table
function numberExistsInDatabase($number, $connection) {
  // Replace 'your_table' with the actual table name
  $query = "SELECT COUNT(*) as count FROM your_table WHERE number = $number";
  $result = mysqli_query($connection, $query);
  
  if ($result) {
    $row = mysqli_fetch_assoc($result);
    $count = $row['count'];
    return ($count > 0);
  }
  
  return false;
}

// Function to generate a unique number with a default name
function generateUniqueNumber($defaultName, $connection) {
  $uniqueNumber = generateRandomNumber();
  
  // Append the default name to the number to create a unique identifier
  $identifier = $defaultName . $uniqueNumber;
  
  while (numberExistsInDatabase($identifier, $connection)) {
    $uniqueNumber = generateRandomNumber();
    $identifier = $defaultName . $uniqueNumber;
  }
  
  return $identifier;
}

// Establish a database connection
$connection = mysqli_connect('localhost', 'root', '', 'car');
if (!$connection) {
  die("Database connection failed: " . mysqli_connect_error());
}

// Set the default name
$defaultName = 'DRIV';

// Generate a unique number with the default name
$uniqueIdentifier = generateUniqueNumber($defaultName, $connection);

// Close the database connection
mysqli_close($connection);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Unique Number Generator</title>
</head>
<body>
  <p>Unique Number for <?php echo $defaultName; ?>: <?php echo $uniqueIdentifier; ?></p>
</body>
</html>
