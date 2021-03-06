<?php

return array (
  'module' => 'admin',
  'menu' => 
  array (
    0 => 'add',
    1 => 'forbid',
    2 => 'resume',
    3 => 'delete',
    4 => 'recyclebin',
    5 => 'saveorder',
  ),
  'create_config' => true,
  'controller' => 'Perman',
  'title' => '',
  'form' => 
  array (
    0 => 
    array (
      'title' => '学生编号',
      'name' => 'identifier',
      'type' => 'number',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    1 => 
    array (
      'title' => '学号',
      'name' => 'number',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    2 => 
    array (
      'title' => '姓名',
      'name' => 'fullname',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    16 => 
    array (
      'title' => '性别',
      'name' => 'sex',
      'type' => 'radio',
      'option' => '男#女',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    15 => 
    array (
      'title' => '联系地址',
      'name' => 'address',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    14 => 
    array (
      'title' => '联系电话',
      'name' => 'telphone',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    13 => 
    array (
      'title' => '邮箱',
      'name' => 'email',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    12 => 
    array (
      'title' => '学历',
      'name' => 'education',
      'type' => 'text',
      'option' => '高中#专科#本科#研究生',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    11 => 
    array (
      'title' => '图片',
      'name' => 'thumb',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    10 => 
    array (
      'title' => '所在学校',
      'name' => 'school',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    9 => 
    array (
      'title' => '所在院系',
      'name' => 'department',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    8 => 
    array (
      'title' => '所在班级',
      'name' => 'class',
      'type' => 'text',
      'option' => 'PHP开发班#UI 二班#UI一班#电商运营',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    7 => 
    array (
      'title' => '所在专业',
      'name' => 'major',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    6 => 
    array (
      'title' => '入学年份',
      'name' => 'entrytime',
      'type' => 'date',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    5 => 
    array (
      'title' => '毕业年份',
      'name' => 'graduateyear',
      'type' => 'date',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    4 => 
    array (
      'title' => '状态',
      'name' => 'stustatus',
      'type' => 'radio',
      'option' => '在职#求职',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    3 => 
    array (
      'title' => '登录用户编号',
      'name' => 'loginnum',
      'type' => 'number',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
  ),
  'create_table' => '1',
  'table_engine' => 'InnoDB',
  'table_name' => '',
  'field' => 
  array (
    1 => 
    array (
      'name' => 'identifier',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '学生编号',
      'extra' => '',
    ),
    2 => 
    array (
      'name' => 'number',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '学号',
      'extra' => '',
    ),
    3 => 
    array (
      'name' => 'fullname',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '姓名',
      'extra' => '',
    ),
    4 => 
    array (
      'name' => 'sex',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '性别',
      'extra' => '',
    ),
    5 => 
    array (
      'name' => 'address',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '联系地址',
      'extra' => '',
    ),
    6 => 
    array (
      'name' => 'telphone',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '联系电话',
      'extra' => '',
    ),
    7 => 
    array (
      'name' => 'email',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '邮箱',
      'extra' => '',
    ),
    8 => 
    array (
      'name' => 'education',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '学历',
      'extra' => '',
    ),
    9 => 
    array (
      'name' => 'thumb',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '图片',
      'extra' => '',
    ),
    10 => 
    array (
      'name' => 'school',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '所在学校',
      'extra' => '',
    ),
    11 => 
    array (
      'name' => 'department',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '所在院系',
      'extra' => '',
    ),
    12 => 
    array (
      'name' => 'class',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '所在班级',
      'extra' => '',
    ),
    13 => 
    array (
      'name' => 'major',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '所在专业',
      'extra' => '',
    ),
    14 => 
    array (
      'name' => 'entrytime',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '入学年份',
      'extra' => '',
    ),
    15 => 
    array (
      'name' => 'graduateyear',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '毕业年份',
      'extra' => '',
    ),
    16 => 
    array (
      'name' => 'stustatus',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '状态',
      'extra' => '',
    ),
    17 => 
    array (
      'name' => 'loginnum',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '登录用户编号',
      'extra' => '',
    ),
  ),
  'model' => '1',
  'auto_timestamp' => '1',
  'validate' => '1',
);
