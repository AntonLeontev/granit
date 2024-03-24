<?php

namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/AntonLeontev/granit.git');
set('keep_releases', 2);

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('45.146.165.254')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/three');

task('build', function () {
    cd('{{release_path}}');
    run('npm install');
    run('npm run build');
});

task('translate', function () {
    cd('{{release_path}}');
    run('php artisan lingua:generate');
});

// Hooks

after('deploy:failed', 'deploy:unlock');
after('deploy:vendors', 'translate');
after('translate', 'build');
