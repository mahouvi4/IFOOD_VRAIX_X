<?php
    include_once("PagSeguroLibrary/PagSeguroLibrary.php");

    $notificationCode = $_POST['notificationCode'];

    try {  
        $credentials = PagSeguroConfig::getAccountCredentials(); // getApplicationCredentials()  
        $response = PagSeguroNotificationService::checkTransaction(  
          $credentials,  
          $notificationCode  
        ); 

        $reference = $response->getReference();
        $status = $response->getStatus()->getTypeFromValue();

        switch($status){
            case "WAITING_PAYMENT":
                echo "Aguardando p";
            break;

            case "PAID":
                echo "p";
            break;

            case "AVAILABLE":
                echo "A";
            break;

            case "IN_DISPUTE":
                echo "em";
            break;

            case "CANCELLED":
                echo "C";
            break;

            case "REFUNDED":
                echo "R";
            break;
        }



        
      } catch (PagSeguroServiceException $e) {  
        die($e->getMessage());  
      } 

?>