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


set('INFOBIP_SENDER', 'ManifestGH');
set('INFOBIP_AUTHORIZATION', 'App db184ed638df3de1d2d608ab8eac7ab2-81ea90e5-399f-4e23-84c5-242e959520a6');

task('notify', function(){
    
    // SEND SMS
    $destination="233543737620"; 
    // $destination="233549539417"; 
    $message="Dear Akosua, deployment task for eProcure has completed successfully. Thank you."; 
    $sender=get('INFOBIP_SENDER'); 
    $authorization=get('INFOBIP_AUTHORIZATION');

    $response= SMSnotify($destination, $message, $sender, $authorization); 
    
    write('Sending SMS Notification');
    
    print_r($response);

    }); 

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

after('success', 'notify');