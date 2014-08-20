This is just a very simple script to scan all users on Drupal.org by country.

### Usage

    git clone git@github.com:andytruong/drupalorg_users_by_country.git
    cd drupalorg_users_by_country
    composer install
    http://selenium-release.storage.googleapis.com/2.42/selenium-server-standalone-2.42.2.jar
    java -jar selenium-server-standalone-2.11.0.jar &
    # Update config.php
    touch users.txt
    php DoScan.php
