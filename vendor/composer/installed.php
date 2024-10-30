<?php return array(
    'root' => array(
        'name' => 'figarts/bookslot',
        'pretty_version' => '0.8',
        'version' => '0.8.0.0',
        'reference' => '07d32b041f0b68cc6a038471643469a935e04bb5',
        'type' => 'wordpress-plugins',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => false,
    ),
    'versions' => array(
        'composer/installers' => array(
            'pretty_version' => 'v1.12.0',
            'version' => '1.12.0.0',
            'reference' => 'd20a64ed3c94748397ff5973488761b22f6d3f19',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'figarts/bookslot' => array(
            'pretty_version' => '0.8',
            'version' => '0.8.0.0',
            'reference' => '07d32b041f0b68cc6a038471643469a935e04bb5',
            'type' => 'wordpress-plugins',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'roundcube/plugin-installer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'shama/baton' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
    ),
);
