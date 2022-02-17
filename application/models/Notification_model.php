<?php
class Notification_model extends CI_Model
{


   function reg_email($name,$email,$phone)
   {


      $to = $email;
      $subject = 'Donor Login Details';

      $message = "<h1>Donor Details</h1>";
                $message .= "<hr>";
                // $message .= '<p><b>ID:</b> '.$miss_data->id.'</p>';
                $message .= '<p><b>Name:</b> '.$name.'</p>';
                $message .= '<p><b>User ID :</b> '.$email.'</p>';
                $message .= '<p><b>Password :</b> '.$phone.'</p>';
                       
                $message .= "<hr>";  
                $headers[] = 'MIME-Version: 1.0';
                $headers[] = 'Content-type: text/html; charset=iso-8859-1';

                // $headers[] = 'Cc: dharmar@gemsbihar.org';
                // send email
                $email_status = mail($to, $subject, $message, implode("\r\n", $headers));

                return $email_status;
                      
   }    

   /*Prayer Request Email Notificaton */

   function prayer_request($name,$email,$phone,$request)
   {

           $to = "dharmar@gemsbihar.org";
           $subject = 'Prayer Request';

              $message = "<h1>Prayer Request</h1>";
                $message .= "<hr>";
                // $message .= '<p><b>ID:</b> '.$miss_data->id.'</p>';
                $message .= '<p><b>Name:</b> '.$name.'</p>';
                $message .= '<p><b>Eamil ID :</b> '.$email.'</p>';
                $message .= '<p><b>Phone Number :</b> '.$phone.'</p>';
                $message .= '<p><b>Prayer Details :</b> '.$request.'</p>';
                $message .= "<hr>"; 

                $headers[] = 'MIME-Version: 1.0';
                $headers[] = 'Content-type: text/html; charset=iso-8859-1';

                // $headers[] = 'Cc: dharmar@gemsbihar.org';
                // send email
                $email_status = mail($to, $subject, $message, implode("\r\n", $headers));

                return $email_status;

   }

/*Prayer Request Email Notificaton */

   /*Othere Areas to More about detail Email Notificaton */

   function details_request($name,$email,$phone,$purpose,$remark)
   {

                 $to = "dharmar@gemsbihar.org";
                $subject = 'To More About | '.$purpose.'';

              $message = "<h1>To Know More About '.$purpose.'</h1>";
                $message .= "<hr>";
                // $message .= '<p><b>ID:</b> '.$miss_data->id.'</p>';
                $message .= '<p><b>Name:</b> '.$name.'</p>';
                $message .= '<p><b>Eamil ID :</b> '.$email.'</p>';
                $message .= '<p><b>Phone Number :</b> '.$phone.'</p>';
                $message .= '<p><b>purpose :</b> '.$purpose.'</p>';
                                      
                $message .= "<hr>";  
                $message .= '<p><b>Details :</b> '.$remark.'</p>';

                $headers[] = 'MIME-Version: 1.0';
                $headers[] = 'Content-type: text/html; charset=iso-8859-1';

                // $headers[] = 'Cc: dharmar@gemsbihar.org';
                // send email
                $email_status = mail($to, $subject, $message, implode("\r\n", $headers));

                return $email_status;
                

   }

   function pwd_change($email,$create_at)
   {

                    $to = $email;
                  $subject = 'GEMS Partner - Change Password';
                  $message = "";
            
                 $message .= '<p><b>Dear Partner :</b></p>';
                $message .= '<p><b>Your Password Have been Changed on </b> '.$create_at.'</p>';
                $message .= '<p><b>Any Clarification Contact gems@gemsbihar.org  </b></p>';
            
                $headers[] = 'MIME-Version: 1.0';
                $headers[] = 'Content-type: text/html; charset=iso-8859-1';

                // $headers[] = 'Cc: dharmar@gemsbihar.org';
                // send email
                $email_status = mail($to, $subject, $message, implode("\r\n", $headers));

                return $email_status;

   }



/*Prayer Request Email Notificaton */



}