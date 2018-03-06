<?php
/**
 * Created by PhpStorm.
 * User: 40749
 * Date: 2018/3/7
 * Time: 0:12
 */
namespace Home\Model;
use Think\Model;

class UserModel extends Model{
    protected $tablePrefix = 'tp_';
    protected $tableName = 'abc';
    protected $trueTableName = 'tp_abc';
    protected $dbName = 'thinkphp';
}