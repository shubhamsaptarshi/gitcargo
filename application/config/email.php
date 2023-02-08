<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    // 'protocol'  => 'smtp', 
    // 'smtp_host' => 'mail.boomingtree.in', 
    // 'smtp_port' => 587,
    // 'smtp_user' => 'noreply@boomingtree.in',
    // 'smtp_pass' => 'MlQGRocMVQ#0',
    // 'mailtype'  => 'html',
    // 'charset'   => 'utf-8',
    // 'wordwrap'  => TRUE,
    // 'priority'  => 1,
    // 'newline'   => "\r\n",
    // 'smtp_timeout' => '7' //in seconds

    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => 'smtp.gmail.com', 
    'smtp_port' => 465,
    'smtp_user' => 's71646004@gmail.com',
    'smtp_pass' => 'tech@123',
    'smtp_crypto' => 'tls', //can be 'ssl' or 'tls' for example
    'mailtype' => 'text', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '4', //in seconds
    'charset' => 'iso-8859-1',
    'wordwrap' => TRUE
);