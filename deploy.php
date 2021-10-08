<?php
namespace Deployer;

require 'recipe/laravel.php';

set('ssh_type', 'native'); 
set('ssh_multiplexing', false); 

// Project name
set('application', 'EaziProcure');

// Project repository
set('repository', 'https://github.com/manifest-multimedia/eaziprocure.git');

// [Optional] Allocate tty for git clone. Default value is false.
// set('git_tty', true); 

set('writable_mode', 'chown');

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);


// Hosts

host('18.119.130.230')
->user('ubuntu')
->become('root')
->port(22)
->identityFile('~/.ssh/mccallys.pem')
->forwardAgent(true)
    ->set('deploy_path', '/var/www/eaziprocure.com');

// Tasks

task('build', function () {
    run('cd {{release_path}} && npm run build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');
