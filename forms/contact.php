<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace İletişim@example.com with your real receiving email address
  $receiving_email_address = 'İletişim@example.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $İletişim = new PHP_Email_Form;
  $İletişim->ajax = true;
  
  $İletişim->to = $receiving_email_address;
  $İletişim->from_name = $_POST['name'];
  $İletişim->from_email = $_POST['email'];
  $İletişim->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $İletişim->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $İletişim->add_message( $_POST['name'], 'From');
  $İletişim->add_message( $_POST['email'], 'Email');
  $İletişim->add_message( $_POST['message'], 'Message', 10);

  echo $İletişim->send();
?>
