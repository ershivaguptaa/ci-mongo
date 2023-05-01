<?php
 
namespace Config;
 
use CodeIgniter\Config\BaseConfig;
 
/**
* Author: Shiv Kumar Gupta
*/
 
class MongoDbConfig extends BaseConfig {
             
    public $host = '127.0.0.1';
    public $port = 27017;
    public $username = '';
    public $password = '';
    public $authRequired = false;
 
}