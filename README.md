# wp-redberry

Wordpress basic installation and clean base theme.

--------------------------------------------------------------------------------

GUIDE - Steps to customize for some project:

1. Create new database and upload database ZIP file. Database file is located
   into the '/wp-content/backupwordpress-*******-backups/' directory.

2. Open 'rb_options' table and change first two options (siteurl and home)
   values with 'http://localhost/your-project-name'.

3. Open 'wp-config.php' file and define some constants:

   define('DB_NAME', 'your_database_name');
   define('DB_USER', 'your_database_username');
   define('DB_PASSWORD', 'your_database_user_password');
   define('DB_HOST', 'your_database_hostname');

4. Regenerate authentication unique keys and salts. To complete this task,
   visit the site (https://api.wordpress.org/secret-key/1.1/salt/) and
   paste generated unique keys and salts into the 'wp-config.php' file.

5. Open .htaccess file and replace '/wp-reddbery' with '/your-project-name'.
   Replace all occurrences.

--------------------------------------------------------------------------------

Credentials:

Admin page: admin-487
Admin user: super-admin
Admin pass: 2000
