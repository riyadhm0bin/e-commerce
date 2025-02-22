<?php
/**
 * Disable All in one migration plugin updates.
 */
add_filter('site_transient_update_plugins', function($value) {
    if(isset($value->response['all-in-one-wp-migration/all-in-one-wp-migration.php'])){
        unset($value->response['all-in-one-wp-migration/all-in-one-wp-migration.php']);
    }
    return $value;
});