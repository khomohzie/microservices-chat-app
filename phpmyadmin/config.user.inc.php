<?php
    $i++;
    $cfg['Servers'][$i]['verbose'] = 'chat_service';
    $cfg['Servers'][$i]['host'] = 'chat_service_db';
    $cfg['Servers'][$i]['port'] = '';
    $cfg['Servers'][$i]['socket'] = '';
    $cfg['Servers'][$i]['connect_type'] = 'tcp';
    $cfg['Servers'][$i]['extension'] = 'mysqli';
    $cfg['Servers'][$i]['auth_type'] = 'config';
    $cfg['Servers'][$i]['user'] = 'root';
    $cfg['Servers'][$i]['password'] = 'password';
    $cfg['Servers'][$i]['AllowNoPassword'] = false;
  
    $i++;
    $cfg['Servers'][$i]['verbose'] = 'users_service';
    $cfg['Servers'][$i]['host'] = 'users_service_db';
    $cfg['Servers'][$i]['port'] = '';
    $cfg['Servers'][$i]['socket'] = '';
    $cfg['Servers'][$i]['connect_type'] = 'tcp';
    $cfg['Servers'][$i]['extension'] = 'mysqli';
    $cfg['Servers'][$i]['auth_type'] = 'config';
    $cfg['Servers'][$i]['user'] = 'root';
    $cfg['Servers'][$i]['password'] = 'password';
    $cfg['Servers'][$i]['AllowNoPassword'] = false;
?>