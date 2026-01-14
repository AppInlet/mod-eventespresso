<?php

?>
<h3><?php
    _e('Payfast Aggregation', 'event_espresso'); ?></h3>
<p>
    <?php
    _e(
        'You will need a Payfast Aggregation Individual or Business account to receive payments using Payfast Aggregation.',
        'event_espresso'
    ); ?>
</p>
<h3><?php
    _e('Payfast Aggregation Settings', 'event_espresso'); ?></h3>
<ul>
    <li>
        <strong><?php
            _e('Debug Mode', 'event_espresso'); ?></strong><br/>
        <?php
        _e(
            'This is the equivalent to sandbox or test mode. If this option is enabled,
           be sure to enter the sandbox credentials in the necessary fields.
           Be sure to turn this setting off when you are done testing.',
            'event_espresso'
        ); ?>
    </li>
    <li>
        <strong><?php
            _e('Image URL', 'event_espresso'); ?></strong><br/>
        <?php
        _e('Select an image/logo that should be shown on the payment page for Payfast Aggregation.', 'event_espresso'); ?>
    </li>
    <li>
        <strong><?php
            _e('Merchant ID', 'event_espresso'); ?></strong><br/>
        <?php
        _e('The merchant id available from the \'Settings\' page within the logged in dashboard on payfast.io'); ?>
    </li>
    <li>
        <strong><?php
            _e('Merchant Key', 'event_espresso'); ?></strong><br/>
        <?php
        _e('The merchant key available from the \'Settings\' page within the logged in dashboard on payfast.io'); ?>
    </li>
    <strong><?php
        _e('Passphrase', 'event_espresso'); ?></strong><br/>
    </li>

</ul>
