<?php
 

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'fobiblankson95@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  $contact = new PHP_Email_Form;
$contact->ajax = true;
$contact->to = 'fobiblankson95@gmail.com';
$contact->from_name = $_POST['name'];
$contact->from_email = $_POST['email'];
$contact->subject = $_POST['subject'];

$contact->smtp = array(
  'host' => 'smtp.gmail.com',
  'username' => 'fobiblankson95@gmail.com',
  'password' => 'bihl iqgu vbli qqcg',
  'port' => '587',
  'encryption' => 'tls'
);


  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  isset($_POST['phone']) && $contact->add_message($_POST['phone'], 'Phone');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
