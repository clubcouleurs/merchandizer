<?php
if (file_exists(get_template_directory() . '/admin/tgm/tgm-init.php')) {
    require_once get_template_directory() . '/admin/tgm/tgm-init.php';
}

if (file_exists(get_template_directory() . '/admin/admin-pages/admin.php')) {
    require_once get_template_directory() . '/admin/admin-pages/admin.php';
}

if (file_exists(get_template_directory() . '/admin/admin-pages/demo-import.php')) {
    require_once get_template_directory() . '/admin/admin-pages/demo-import.php';
}
