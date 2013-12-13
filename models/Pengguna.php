<?php

namespace models;

use lib\MVC\Model\BaseModel;

class Pengguna extends BaseModel {
    public $nama;
    public $email;

    public function __construct($nama, $email) {
        $this->nama = $nama;
        $this->email = $email;
    }

    public static function getPengguna() {
        $query = self::getDB()->prepare("SELECT * FROM `pengguna`");
        $query->execute();

        $result = array();
        while ($row = $query->fetch()) {
            array_push($result, new Pengguna($row["nama"], $row["email"]));
        }

        return $result;
    }
}
