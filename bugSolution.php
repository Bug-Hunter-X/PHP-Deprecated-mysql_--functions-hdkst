This updated code uses PDO (PHP Data Objects) for database interaction, which is more secure and efficient than the deprecated `mysql_*` functions. 
```php
<?php
$host = 'localhost';
$dbname = 'database';
$user = 'user';
$password = 'password';
try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $pdo->query("SELECT * FROM table");
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // process each row
    print_r($row);
  }
} catch (PDOException $e) {
  die("Error: " . $e->getMessage());
}
?>
```