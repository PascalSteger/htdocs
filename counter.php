<?php
#count hits
$fp=fopen('counts.txt', 'a');
$content=file('counts.txt');
ftruncate($fp,0);
$content=$content[0]+1;
fputs($fp, $content);
fclose($fp);

$fp = fopen('users.log', 'a');
$fpf = fopen('users_fields.log','a');
$fields= '';
$content = @date('[d/M/Y:H:i:s]');
foreach($_SERVER as $k => $v) {
  $fields  = $fields.' '.$k;
  $content = $content.' '.$v;
}
ftruncate($fpf, 0);
fputs($fpf, $fields);
fputs($fp, $content);
fclose($fp);

/* require_once "Mail.php"; */
/* $from = "psteger@student.ethz.ch"; */
/* $to = "psteger@ethz.ch"; */
/* $subject = 'igloo:'.$_SERVER['REQUEST_URI'].'________'.$_SERVER['REMOTE_ADDR']; */
/* $body='<html><body><table>'; */

/* foreach($_SERVER as $k => $v) { */
/*       $body = $body.'<tr><td>'.$k.'</td><td>'.$v.'</td></tr>'; */
/*       } */

/* $body=$body.'</table></body></html>'; */
/* $host = "mail.ethz.ch"; */
/* $username = "psteger"; */
/* $pd = "stupidpassword"; */

/* if (mail($to, $subject, $body)) { */
/*   echo("<p>Email successfully sent!</p>"); */
/*  } else { */
/*   echo("<p>Email delivery failed…</p>"); */
/*  } */

/* $headers = array ('From' => $from, */
/*   'To' => $to, */
/*   'Subject' => $subject, */
/*   'MIME-Version'=>'1.0', */
/*   'Content-type'=>'text/html; charset=iso-8859-1'); */
/* $smtp = Mail::factory('smtp', */
/*   array ('host' => $host, */
/*     'auth' => true, */
/*     'username' => $username, */
/*     'password' => $pd)); */

# $mail = $smtp->send($to, $headers, $body);

?>
