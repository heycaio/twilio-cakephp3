<?php
namespace Twilio\Controller\Component;

use Cake\Core\Configure;
use Cake\Controller\Component;
use Services_Twilio;
/**
 * Twilio Component
 *
 */
class TwilioComponent extends Component 
{

    /**
     * Client
     *
     * @var Services_Twilio
     */
    public $client;

    /**
     * Initialize method
     *
     * @param array $config
     * @return void
     */
    public function initialize(array $config)
    {
        $sid    = Configure::read('Twilio.sid');
        $token  = Configure::read('Twilio.token');

        $this->client = new Services_Twilio($sid, $token);
    }

    /**
     * Send sms
     *
     * @param string $to
     * @param string $body
     * @param string $from
     * @return mixed
     */
    public function sendSms($to, $body, $from) 
    {

        return $this->client->account->messages->create([
            "From"  => $from,
            "To"    => $to,
            "Body"  => $body,
        ]);
    }

}