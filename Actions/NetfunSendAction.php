<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 48d3f55 (up)
=======
declare(strict_types=1);

>>>>>>> bc60653 (up)
=======
declare(strict_types=1);

>>>>>>> 602db11 (up)
=======
declare(strict_types=1);

>>>>>>> fe06862 (.)
=======
>>>>>>> 01282f2 (up)
=======
declare(strict_types=1);

>>>>>>> c3e3fc0 (up)
namespace Modules\Notify\Actions;

use Exception;
use GuzzleHttp\Client;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Str;
use Modules\Notify\Datas\SmsData;
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;

class NetfunSendAction
{
=======
=======
use GuzzleHttp\Exception\ClientException;
>>>>>>> bc60653 (up)
=======
use GuzzleHttp\Exception\ClientException;
>>>>>>> 602db11 (up)
use Illuminate\Support\Str;
use Modules\Notify\Data\SmsData;
=======
>>>>>>> ace9eb3 (up)
use Spatie\QueueableAction\QueueableAction;

class NetfunSendAction {
>>>>>>> 48d3f55 (up)
=======
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Str;
use Modules\Notify\Datas\SmsData;
use Spatie\QueueableAction\QueueableAction;

<<<<<<< HEAD
class NetfunSendAction {
>>>>>>> fe06862 (.)
=======
class NetfunSendAction
{
>>>>>>> 42f9249 (.)
=======
=======
use GuzzleHttp\Exception\ClientException;
>>>>>>> c3e3fc0 (up)
use Illuminate\Support\Str;
use Modules\Notify\Data\SmsData;
use Spatie\QueueableAction\QueueableAction;

class NetfunSendAction {
>>>>>>> 01282f2 (up)
    use QueueableAction;

    public string $token;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public array $vars = [];

=======
    public array $vars=[];
>>>>>>> 48d3f55 (up)
=======
    public array $vars = [];

>>>>>>> bc60653 (up)
=======
    public array $vars = [];

>>>>>>> 602db11 (up)
=======
    public array $vars = [];

>>>>>>> fe06862 (.)
=======
    public array $vars=[];
>>>>>>> 01282f2 (up)
=======
    public array $vars = [];

>>>>>>> c3e3fc0 (up)
    /**
     * Create a new action instance.
     *
     * @return void
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct()
    {
        // Prepare the action for execution, leveraging constructor injection.
        $token = config('services.netfun.token');
<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_string($token)) {
=======
        if (null === $token) {
>>>>>>> 602db11 (up)
=======
        if (null == $token) {
>>>>>>> 915cbe1 (.)
            throw new Exception('put [NETFUN_TOKEN] variable to your .env and config [services.netfun.token] ');
        }
        $this->token = $token;
    }

    /**
<<<<<<< HEAD
     * Execute the action.
     */
    public function execute(SmsData $sms): array
    {
=======
=======
>>>>>>> fe06862 (.)
    public function __construct() {
=======
    public function __construct()
    {
>>>>>>> 42f9249 (.)
        // Prepare the action for execution, leveraging constructor injection.
        $token = config('services.netfun.token');
        if (! is_string($token)) {
            throw new Exception('put [NETFUN_TOKEN] variable to your .env and config [services.netfun.token] ');
        }
        $this->token = $token;
    }

    /**
<<<<<<< HEAD
=======
>>>>>>> 602db11 (up)
     * Execute the action.
     */
<<<<<<< HEAD
    public function execute(SmsData $sms): array {
>>>>>>> 48d3f55 (up)
=======
     * Execute the action.
     */
    public function execute(SmsData $sms): array {
>>>>>>> fe06862 (.)
=======
    public function execute(SmsData $sms): array
    {
>>>>>>> 42f9249 (.)
=======
    public function __construct() {
        // Prepare the action for execution, leveraging constructor injection.
        $token = config('services.netfun.token');
        if (null == $token) {
            throw new Exception('put [NETFUN_TOKEN] variable to your .env and config [services.netfun.token] ');
        }
        $this->token = $token;
    }

    /**
     * Execute the action.
     */
    public function execute(SmsData $sms): array {
>>>>>>> 01282f2 (up)
        $endpoint = 'https://v2.smsviainternet.it/api/rest/v1/sms-batch.json';
        $headers = [
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json',
        ];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        // dddx([ord($this->body[0]), $this->body]);

        $sms->to .= '';
        if (Str::startsWith($sms->to, '00')) {
            $sms->to = '+39' . substr($sms->to, 2);
        }

        if (! Str::startsWith($sms->to, '+')) {
            $sms->to = '+39' . $sms->to;
=======
        
=======
>>>>>>> bc60653 (up)
=======
>>>>>>> 602db11 (up)
=======
>>>>>>> fe06862 (.)

        // dddx([ord($this->body[0]), $this->body]);

        $sms->to .= '';
        if (Str::startsWith($sms->to, '00')) {
            $sms->to = '+39' . substr($sms->to, 2);
        }

        if (! Str::startsWith($sms->to, '+')) {
<<<<<<< HEAD
            $sms->to = '+39'.$sms->to;
<<<<<<< HEAD
>>>>>>> 48d3f55 (up)
=======
>>>>>>> fe06862 (.)
=======
            $sms->to = '+39' . $sms->to;
>>>>>>> b735fbf (.)
=======
        
=======
>>>>>>> c3e3fc0 (up)

        // dddx([ord($this->body[0]), $this->body]);

        $sms->to = $sms->to.'';
        if (Str::startsWith($sms->to, '00')) {
            $sms->to = '+39'.substr($sms->to, 2);
        }

        if (! Str::startsWith($sms->to, '+')) {
            $sms->to = '+39'.$sms->to;
>>>>>>> 01282f2 (up)
        }

        $body = [
            'api_token' => $this->token,
            // "gateway"=> 99,
            'sender' => $sms->from,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'text_template' => $sms->body, // .'  '.rand(1, 100),
=======
            'text_template' => $sms->body,//.'  '.rand(1, 100),
>>>>>>> 48d3f55 (up)
=======
            'text_template' => $sms->body, // .'  '.rand(1, 100),
>>>>>>> bc60653 (up)
=======
            'text_template' => $sms->body, // .'  '.rand(1, 100),
>>>>>>> 602db11 (up)
=======
            'text_template' => $sms->body, // .'  '.rand(1, 100),
>>>>>>> fe06862 (.)
=======
            'text_template' => $sms->body,//.'  '.rand(1, 100),
>>>>>>> 01282f2 (up)
=======
            'text_template' => $sms->body, // .'  '.rand(1, 100),
>>>>>>> c3e3fc0 (up)
            /*
            'delivery_callback' => 'https://www.google.com?code={{code}}',
            'default_placeholders' => [
                'code' => '0000',
            ],
            */
            'async' => true,
            // 'max_sms_length' => 1,
            'utf8_enabled' => true,
            'destinations' => [
                [
                    'number' => $sms->to,
                    /*
                    'placeholders' => [
                        'fullName' => 'Santi',
                        'body' => 'Ciao, hai vinto il premio',
                        'code' => '1234',
                    ],
                    */
                ],
            ],
        ];

        // dddx($body);

        $client = new Client($headers);
        try {
            $response = $client->post($endpoint, ['json' => $body]);
        } catch (ClientException $e) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception($e->getMessage() . '[' . __LINE__ . '][' . __FILE__ . ']');
=======
            throw new Exception($e->getMessage().'['.__LINE__.']['.__FILE__.']');
>>>>>>> 48d3f55 (up)
=======
            throw new Exception($e->getMessage().'['.__LINE__.']['.__FILE__.']');
>>>>>>> fe06862 (.)
=======
            throw new Exception($e->getMessage() . '[' . __LINE__ . '][' . __FILE__ . ']');
>>>>>>> b735fbf (.)
=======
            throw new Exception($e->getMessage().'['.__LINE__.']['.__FILE__.']');
>>>>>>> 01282f2 (up)
        }
        /*
        echo '<hr/>';
        echo '<pre>to: '.$this->to.'</pre>';
        echo '<pre>body: '.$this->body.'</pre>';
        echo '<pre>'.var_export($response->getStatusCode(), true).'</pre>';
        echo '<pre>'.var_export($response->getBody()->getContents(), true).'</pre>';
        */

        $this->vars['status_code'] = $response->getStatusCode();
        $this->vars['status_txt'] = $response->getBody()->getContents();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bc60653 (up)
=======
>>>>>>> 602db11 (up)
=======
>>>>>>> fe06862 (.)
=======
>>>>>>> c3e3fc0 (up)

        return $this->vars;
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        return $this->vars;
    }
}
>>>>>>> 48d3f55 (up)
=======
>>>>>>> bc60653 (up)
=======
>>>>>>> 602db11 (up)
=======
>>>>>>> fe06862 (.)
=======
        return $this->vars;
    }
}
>>>>>>> 01282f2 (up)
=======
>>>>>>> c3e3fc0 (up)
