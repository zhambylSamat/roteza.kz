<?php
    $a = '';
    if(isset($_POST['submit1'])){
        $a = 'Клиент желает получть консультацию';
    }
    else if(isset($_POST['submit2'])){
        $a = 'Клиент желает сделать заказ';
    }
    if ((isset($_POST['submit1']) && isset($_POST['submit2'])) && $_POST['phone']!=' '){
        $to = "zhambyl.9670@gmail.com, nurbol.uka@gmail.com";
        $subject = "Request from roteza.kz";
        $message = "
        <html>
        <head>
        <title>Request</title>
        </head>
        <body>
        <table>
        <tr>
        <td colspan='2'>
        <h1>".$a."</h1>
        </td>
        </tr>
        <tr>
        <th>Name</th>
        <th>Phone</th>
        </tr>
        <tr>
        <td>".$_POST['name']."</td>
        <td>".$_POST['phone']."</td>
        </tr>
        </table>
        </body>
        </html>";
        $headers = "MIME-Version: 1.0" . "\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\n";

        // More headers
        $headers .= 'From: <roteza.kz>' . "\n";
        $headers .= 'Cc: from roteza.kz' . "\n";

        mail($to,$subject,$message,$headers);
        header("Location:index.html");
    }

    else{
        header("Location:index.html");
    }
?>