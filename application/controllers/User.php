<?php

class User extends CI_Controller{
  public function form(){
    $this->load->view("form_user_v");
  }

  public function add(){
  	//get data
  	echo $this->input->post("username"), "<br/>";
  	echo $this->input->post("password"), "<br/>";
  	echo $this->input->post("fullname"), "<br/>";
  	echo $this->input->post("level"), "<br/>";
  }
}