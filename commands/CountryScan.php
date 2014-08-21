<?php

use Behat\Mink\Driver\Selenium2Driver;
use Behat\Mink\Element\NodeElement;
use Behat\Mink\Session;

require_once 'vendor/autoload.php';
$conf = require __DIR__ . '/../config.php';

$driver = new Selenium2Driver(
    'firefox', 'https://www.drupal.org/'
);

// init session:
$session = new Session($driver);

// start session:
$session->start();
$session->visit('https://www.drupal.org/');
$session->getPage()->clickLink("Log in / Register");
$session->wait(2);

$form = $session->getPage()->findById('user-login');
$form->findField('edit-name')->setValue($conf['username']);
$form->findField('edit-pass')->setValue($conf['password']);
$form->findButton('edit-submit')->click();
$session->wait(1);

// Find total pages
$session->visit("https://www.drupal.org/profile/country/{$conf['country']}");
$last = $session->getPage()->find('css', 'li.pager-last.last a');
$total = (int) preg_replace('/^.+page=(\d+)$/', '$1', $last->getAttribute('href'));

for ($page = 0; $page <= $total; ++$page) {
    $session->wait(2);
    $session->visit("https://www.drupal.org/profile/country/{$conf['country']}?page={$page}");

    foreach ($session->getPage()->findAll('css', 'a.username') as $element) {
        /* @var $element NodeElement */
        $uri = \str_replace('https://www.drupal.org', '', $element->getAttribute('href'));
        exec("echo '{$uri}'  >> " . __DIR__ . "/../files/users.txt");
    }
}

if ($session->getPage()->findLink("Log out")) {
    $session->getPage()->clickLink("Log out");
}
