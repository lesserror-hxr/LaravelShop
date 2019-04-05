@servers(['web' => 'deployer@47.107.71.191'])

@task('deploy', ['on' => ['web']])
cd /var/www/LaravelShop
git pull origin master
composer install
php artisan migrate --force
@endtask
