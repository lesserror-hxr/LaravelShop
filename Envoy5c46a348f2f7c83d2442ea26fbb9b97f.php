<?php $__container->servers(['web' => 'root@47.107.71.191']); ?>

<?php $__container->startTask('deploy', ['on' => ['web'],confirm' => true]); ?>
cd /var/www/LaravelShop
git pull origin master
composer install
php artisan migrate --force
<?php $__container->endTask(); ?>
