# twilio-cakephp3

How to use

/* bootstrap.php */
Plugin::load('Twilio');

/* Controller */
public function initialize()
{
  parent::initialize();
  $this->loadComponent('Twilio.Twilio');
}

public function send()
{
   $sendSms = $this->Twilio->sendSms($to, $body, $from);
}
