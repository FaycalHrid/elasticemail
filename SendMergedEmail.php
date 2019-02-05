<?php
    require_once 'ElasticEmailClient.php';
    
    ElasticEmailClient\ApiClient::SetApiKey("11111111-2222-3333-4444-555555555555");
    
    function SendEmail($subject, $from, $fromName, $text, $html, $attachments, $filenameWithRecipients) {	
        $EEemail = new ElasticEmailClient\Email();
        
        try
        {
            $response = $EEemail->Send($subject, $from, $fromName, null, null, null, null, null, null, array(), array(), array(), array(), array(), array(), $filenameWithRecipients, null, $html, $text, null, null, null, null, null, $attachments);		
        }
        catch (Exception $e)
        {
            echo 'Something went wrong: ', $e->getMessage(), '\n';
            
            return;
        }		
        
        echo 'MsgID to store locally: ', $response->messageid, '\n'; // Available only if sent to a single recipient
        echo 'TransactionID to store locally: ', $response->transactionid;
    }
    
    $subject = "Your subject";
    $fromEmail = "Your Email";
    $fromName = "Your Company Name";
    $bodyText = "Text body";
    $bodyHtml = "<h1>Html Body</h1>";
    $attachments = array('C:/Users/recipients.csv');
    $filenameWithRecipients = "recipients.csv"; // same as the file above
    
    SendEmail($subject, $fromEmail, $fromName, $bodyText, $bodyHtml, $attachments, $filenameWithRecipients);
?>