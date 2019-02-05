<?php
    require_once 'ElasticEmailClient.php';
    
    ElasticEmailClient\ApiClient::SetApiKey("11111111-2222-3333-4444-555555555555");
    
    function QuickAddContacts($contacts) {	
        $EEcontact = new ElasticEmailClient\Contact();
        
        try
        {
            $EEcontact->QuickAdd($contacts);		
        }
        catch (Exception $e)
        {
            echo 'Something went wrong: ', $e->getMessage(), '\n';
            
            
            return;
        }		
        
        echo 'Success';
    }
    
    $contacts = [ "test1@test.com", "test2@test.com" ];
    
    QuickAddContacts($contacts);
?>