<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends MY_Model {

    protected $_table_products = 'products';
    protected $_table_category = 'category';
    protected $_primary_key = 'id';
    protected $_primary_filter = 'intval';
    protected $_order_by = 'id';


    function __construct()
    {
        parent::__construct();
    }


}