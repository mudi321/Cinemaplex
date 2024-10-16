<?php
class Reserve {
  private $pdo = null;
  private $stmt = null;
  public $error = null;

  function __construct () {
    $dbHost = "localhost";     
    $dbName = "user_db";      
    $dbCharset = "utf8mb4";    
    $dbUser = "root";          
    $dbPassword = "";  

    try {
      $this->pdo = new PDO(
        "mysql:host={$dbHost};dbname={$dbName};charset={$dbCharset}",
        $dbUser, $dbPassword, [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
      );
    } catch (PDOException $e) {
      die("Database connection failed: " . $e->getMessage());
    }
  }

  function __destruct () {
    if ($this->stmt !== null) { $this->stmt = null; }
    if ($this->pdo !== null) { $this->pdo = null; }
  }

  function query ($sql, $data=null) : void {
    $this->stmt = $this->pdo->prepare($sql);
    $this->stmt->execute($data);
  }

  function get ($sessid) {
    $this->query(
      "SELECT sa.`seat_id`, r.`user_id` FROM `seats` sa
       LEFT JOIN `sessions` se USING (`room_id`)
       LEFT JOIN `reservations` r USING(`seat_id`)
       WHERE se.`session_id`=?
       ORDER BY sa.`seat_id`", [$sessid]
    );
    $sess = $this->stmt->fetchAll();
    return $sess;
  }

  function save ($sessid, $userid, $seats, $name, $date, $showtime) {
    $sql = "INSERT INTO `reservations` (`session_id`, `seat_id`, `user_id`,`m_id`,`date`,`showtime`) VALUES ";
    $data = [];
    foreach ($seats as $seat) {
      $sql .= "(?,?,?,?,?,?),";
      array_push($data, $sessid, $seat, $userid, $name, $date, $showtime);
    }
    $sql = substr($sql, 0, -1);
    $this->query($sql, $data);
    return true;
  }
}

define("DB_HOST", "localhost");
define("DB_NAME", "user_db");
define("DB_CHARSET", "utf8mb4");
define("DB_USER", "root");
define("DB_PASSWORD", ""); 

$_RSV = new Reserve();
?>
