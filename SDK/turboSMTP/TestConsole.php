<?php

namespace TurboSMTP;

require '../vendor/autoload.php'; // Include Composer autoloader

use TurboSMTP\APIExtensions\MailAPIExtension;
use API_TurboSMTP_Invoker\Configuration; // Include the correct namespace for Configuration
use API_TurboSMTP_Invoker\API_TurboSMTP_Model\EmailRequestBody;
use GuzzleHttp\Client;

//$declaredClasses = get_declared_classes();
//var_dump($declaredClasses);
//return;

class TestConsole {
    public function run() {
        $email_request_body = new EmailRequestBody();
        $email_request_body->setFrom("sergio.a.matteoda@gmail.com");
        $email_request_body->setTo("sergio.a.matteoda@gmail.com");
        $email_request_body->setSubject("From PHP");
        $email_request_body->setContent("Test PHP");

        $client = new Client([
                    'verify'=>false
                  ]);
        $configuration = new Configuration();
        $configuration->setApiKey('consumerKey','1ef0eef86f089b18cb610532beecf72e');
        $configuration->setApiKey('consumerSecret','GIx7Z0OncXf9oANe8z3gUQ6wYPtJH21d');

        //$mailApi = new MailApi(null,$configuration);
        $mailApi = new MailAPIExtension($client,$configuration);
        
        // Example usage of MailApi
        $promise = $mailApi->sendEmailAsync($email_request_body);

        $promise->then(
            function ($response) {
                // Handle the successful response
                echo 'Email sent successfully! Response: ' . $response->getBody();
            },
            function ($exception) {
                // Handle any errors
                echo 'Failed to send email: ' . $exception->getMessage();
            }
        );
        
        $promise->wait();        
    }
}

// Create an instance of TestConsole and run it
$testConsole = new TestConsole();
$testConsole->run();