<?php
# Used in db.php
define('DATABASE_NAME','ereporting');
define('DATABASE_HOST','db');
define('DATABASE_USER','root');
define('DATABASE_PASSWORD','');

# Used in swiftmail.php
define('MAILER_HOST','maildev');
define('MAILER_PORT', 25);
define('MAILER_FROM', 'john@doe.com');
define('MAILER_TO', 'receiver@domain.org');

# Used in writefile.php
$path = $_SERVER['DOCUMENT_ROOT']."/../tmp";
define('WRITE_FILE_FOLDER',$path);