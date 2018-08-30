<?php

class Pacificm extends CI_Model{
  public function __construct(){
    parent::__construct();
  }

  public function getActivityDropdown(){
    $query = $this->db->query('SELECT activityid, activitydescription from activities');
    if ($query) {
      return $query->result();
    }
  }

  public function getPackageDropdown(){
    $query = $this->db->query('SELECT packageid, packagename from package');
    if ($query) {
      return $query->result();
    }
  }

  public function getPackage(){
    $query = $this->db->query('SELECT packagename, packagedescription, ofnights, cost from package');
    if ($query){
      return $query->result();
    }
  }

  public function insertYurtReservation($data1){
    $sql1 = $this->db->insert('reservationyurt',$data1);
  }

  public function insertclient($data2){
    $sql2 = $this->db->insert('client',$data2);
  }

  public function insertwhen($data3){
    $sql3 = $this->db->insert('whendate',$data3);
  }

  public function getMyReservation($data){
    $this->db->select('client.fname, client.lname, client.phone, client.email, activities.activitydescription, reservationyurt.arrivaldate, reservationyurt.ofnights, package.packageName, whendate.date');
    $this->db->FROM('client');
    $this->db->JOIN('activities', 'client.activityid = activities.activityid');
    $this->db->JOIN('reservationyurt','client.resid = reservationyurt.resid');
    $this->db->JOIN('package','reservationyurt.packageid = package.packageid');
    $this->db->JOIN('whendate','client.clientid = whendate.clientid');
    $this->db->WHERE('client.email',$data['email']);
    $query=$this->db->get();
    // print_r($query);
    if ($query) {
      return $query->result();
    }
  }


}
