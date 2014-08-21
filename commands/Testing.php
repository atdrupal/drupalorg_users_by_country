<?php

use AndyTruong\DrupalOrgScan\Model\Account;

require_once __DIR__ . '/../vendor/autoload.php';

ORM::configure('sqlite:' . dirname(__DIR__) . '/files/db.sqlite');

/* @var $account Account */
$account = Model::factory('AndyTruong\DrupalOrgScan\Model\Account');
$account->setUid(84886);
$account->setName('thehong');
$account->save();
