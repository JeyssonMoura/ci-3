<?php

class Model_escola extends CI_Model {
    public function insert ($escola) {
        return $this->db->insert("escola",$escola);
    }
}
