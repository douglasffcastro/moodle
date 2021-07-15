<?php
$settings->add(new admin_setting_heading(
            'headerconfig',
            get_string('headerconfig', 'block_blockexample'),
            get_string('descconfig', 'block_blockexample')
        ));

$settings->add(new admin_setting_configcheckbox(
            'blockexample/Allow_HTML',
            get_string('labelallowhtml', 'block_blockexample'),
            get_string('descallowhtml', 'block_blockexample'),
            '0'
        ));