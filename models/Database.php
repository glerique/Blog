<?php

namespace models;

class Database{

  protected function dbConnect()
      {
          $db = new \PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
          $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
          return $db;
      }
}
