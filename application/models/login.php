<?php
/**
 * Created by PhpStorm.
 * User: Andreas
 * Date: 01/07/2018
 * Time: 5:44
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class login extends CI_Model
{
    function getLogin($username){
        $this->db->select("*")->from('user')->where('username',$username);
        return $this->db->get();
    }
}