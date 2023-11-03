# To work with redis in laravel to send mail using job

1. install redis on your computer 

    A. Open Windows Powershell with administration mode
    B. Type this command - Enable-WindowsOptionalFeature -Online -FeatureName Microsoft-Windows-Subsystem-Linux
    C. Open Microsoft store
    D. Install Ubuntu from there.
    E. Create user and password if these are not created already.
    F. Type this command to create repository for redis - sudo apt-add-repository ppa:redislabs/redis
    G. Type this command to update your system - sudo apt-get update
    H. Type this command to upgrade your system - sudo apt-get upgrade
    I. Type this command to install redis on your system - sudo apt-get install redis-server
    J. Type this command to start your redis server - sudo service redis-server start
    K. Type this command to stop your redis server - sudo service redis-server stop
    L. Type this command to restart your redis server - sudo service redis-server restart
    M. To open redis server type this command - redis-cli


2. Now you have to go to on your project and install redis there by typing this command - composer require predis/predis

3. Go your config/database.php and modify phpredis to predis.

4. Go to your environment and change the queue-connection to redis.

5. Finally, you are good to go
