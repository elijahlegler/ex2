<?php
include_once('classes/user.class.php');
include_once('classes/registeredUser.class.php');
include_once('classes/admin.class.php');

$reg_user = new registeredUser('Regular User', 'vicoladipo');
$admin_user = new admin('Administrator', 'bobsmith');

$admin_user->first_name = 'Bob';
$admin_user->last_name = 'Smith';
$admin_user->email_address = 'bobsmith@gmail.com';

$reg_user->first_name = 'Victor';
$reg_user->last_name = 'Oladipo';
$reg_user->email_address = 'vicoladipo@pacers.com';
?>

<html>
<body>
<?php
echo 'User Level: ' . $reg_user->user_level;?><br><?php
echo 'Registered User ID: ' . $reg_user->user_id;?><br><?php
echo 'Registered User Type: ' . $reg_user->user_type;?><br><?php
echo 'Registered First Name: ' . $reg_user->first_name;?><br><?php
echo 'Registered Last Name: ' . $reg_user->last_name;?><br><?php
echo 'Registered Email: ' . $reg_user->email_address;?><br><?php
?>
<hr>
<?php
echo 'User Level: ' . $admin_user->user_level;?><br><?php
echo 'Admin User ID: ' . $admin_user->user_id;?><br><?php
echo 'Admin User Type: ' . $admin_user->user_type;?><br><?php
echo 'Admin First Name: ' . $admin_user->first_name;?><br><?php
echo 'Admin Last Name: ' . $admin_user->last_name;?><br><?php
echo 'Admin Email: ' . $admin_user->email_address;?><br><?php
?>
</body>
</html>
