<?php
abstract class Model
{
  private static $pdo;

  private static function setBdd()
  {
    self::$pdo = new PDO("mysql:host=localhost;dbname=pascalco_db_stat;charset=utf8", 'pascalco_pascalco', 'adminpascal56');
    self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  }

  protected function getBdd()
  {
    if (self::$pdo === null) {
      self::setbdd();
    }
    return self::$pdo;
  }
}
