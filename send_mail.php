
<?php

// use PHPMailer\PHPMailer\PHPMailer;

// if(isset($_POST['name']) && isset($_POST['email'])){
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $phone = $_POST['phone'];
//     $message = $_POST['message'];    

//     require_once "phpMailer/Exception.php";
//     require_once "phpMailer/SMTP.php";
//     require_once "phpMailer/PHPMailer.php";

//     $mail = new PHPMailer();

//     $mail ->isSMTP();
//     $mail ->Host= "mail.dotareclinica.ro";
//     $mail ->SMTPAuth= true;
//     $mail ->Username= "";
//     $mail ->Password= '';
//     $mail ->Port= 465;
//     $mail ->SMTPSecure= "ssl";

//     $mail ->isHTML(true);
//     $mail ->setFrom($email,$name);
//     $mail ->addAddress("info@dotareclinica.ro");
//     $mail ->Phone= $phone;
//     $mail ->Message= $message;

//     if($mail->send())
//         $response= "Email is sent";
//     else
//         $response= "Something went wrong: <br><br>" . $mail->ErrorInfo;
//         exit(json_encode(array("response"=>$response)));
// }




// $message_sent= false;
//     if(isset($_POST['email']) && $_POST['email'] != ''){

//         if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            
//             //submit the form
//             $userName= $_POST['name'];
//             $userEmail= $_POST['email'];
//             $userPhone= $_POST['phone'];
//             $message= $_POST['message'];

//             $to = "adimoraru47@gmail.com";
//             $body= "";

//             $body .="From: " .$userName. "\r\n";
//             $body .="Email: " .$userEmail. "\r\n";
//             $body .="Phone: " .$userPhone. "\r\n";

//             mail($to, $message, $body);

//             $message_sent= true;
//         }    
            

//     }


if(isset($_POST['submit']))
    {
        $name = $_POST['name']; // Get Name value from HTML Form
        $email_id = $_POST['email']; // Get Email Value
        $phone_no = $_POST['phone']; // Get Mobile No
        $msg = $_POST['message']; // Get Message Value
         
        $to = "info@oxigenladoza.ro"; // You can change here your Email
        $subject = "'$name' a trimis un email"; // This is your subject
         
        // HTML Message Starts here
        $message ="
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Name: </strong></td>
                            <td style='width:400px'>$name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Email: </strong></td>
                            <td style='width:400px'>$email_id</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Phone: </strong></td>
                            <td style='width:400px'>$phone_no</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Message: </strong></td>
                            <td style='width:400px'>$msg</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";
        // HTML Message Ends here
         
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
        // More headers
        $headers .= 'From: Admin <info@oxigenladoza.ro>' . "\r\n"; // Give an email id on which you want get a reply. User will get a mail from this email id

         
        if(mail($to,$subject,$message,$headers)){
            // Message if mail has been sent
            echo "<script>
                    alert('Acest email a fost trimis cu succes. Iti multumim!');
                </script>"; 
        }
 
        else{
            // Message if mail has been not sent
            echo "<script>
                    alert('ACESTY EMAIL NU A PUTUT FI TRIMIS. INCEARCA DIN NOU CU MAI MULTA ATENTIE.');
                </script>";
        }
    }    header("refresh: 1; url = http://localhost/oxigenladoza/"); 
    
    exit; 



?>
