<?php
    require_once 'ElasticEmailClient.php';
    
    ElasticEmailClient\ApiClient::SetApiKey("11111111-2222-3333-4444-555555555555");
    
    function LoadAccount() {	
        $EEaccount = new ElasticEmailClient\Account();
        
        try
        {
            $account = $EEaccount->Load();		
        }
        catch (Exception $e)
        {
            echo 'Something went wrong: ', $e->getMessage(), "\n";
            
            return;
        }
        
        echo $account->priceperemail; // what a deal!
    }
    
    LoadAccount();
?>