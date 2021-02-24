<?php


namespace App\Classe;


use Mailjet\Client;
use Mailjet\Resources;

class Mail
{
    private $api_key = 'db6102ee06a725675a92521e23de0127';
    private $api_key_secret = '81069e1f5b32cf972ae80edfef14ccbf';

    public function send($to_email, $to_name, $subject, $content)
    {
        $mj = new Client($this->api_key, $this->api_key_secret, true,['version' => 'v3.1']);

        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "b.sahouli@hotmail.fr",
                        'Name' => "MYPROGRESS"
                    ],
                    'To' => [
                        [
                            'Email' => $to_email,
                            'Name' => $to_name
                        ]
                    ],
                    'TemplateID' => 2354994,
                    'TemplateLanguage' => true,
                    'Subject' => $subject,
                    'Variables' => [
                        'content' => $content,
                    ]
                ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success();
    }
}