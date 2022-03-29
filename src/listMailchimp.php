<?php



class listMailchimp{
    //const MAILCHIMP_API_KEY = 'c13e931a824980ffaba7e9cf9aeb4c14-us20'; // see https://mailchimp.com/help/about-api-keys
    const MAILCHIMP_API_KEY = 'c13e931a824980ffaba7e9cf9aeb4c14-us20'; // see https://mailchimp.com/help/about-api-keys
    const LIST_ID = '3bfdd022fb'; // see https://3by400.com/get-support/3by400-knowledgebase?view=kb&kbartid=6
    const SERVER_LOCATION = 'us20'; // the string after the '-' in your MAILCHIMP_API_KEY f.e. us4

    private $name;
    private $email;

    public function __construct($mail, $name){
      $this->name = $name;
      $this->email = $mail;
    
    }

    public function getEmail(){
        return $this->email;
    }

    public function getName(){
        return $this->name;
    }

      /**
     * {@inheritdoc}
     */
   /* public function defaultConfiguration() {
        return [];
      }*/

    
    
   
    /**
     * {@inheritdoc}
     */
    public function submitList() {
  
       // $email=$form_state->getValue('email');
    //$name=$form_state->getValue('nom');
        $email=$this->email;
        $name=$this->name;
        // The data to send to the API
        $postData = array(
          "email_address" => "$email",
          "status" => "subscribed",
          'tags'  => array('Newsletter'),
          "merge_fields" => array(
            "FNAME" => "$name"
          )
        );
    
        // Setup cURL
        // To get the correct dataserver, see the url of your mailchimp back-end, mine is https://us20.admin.mailchimp.com/account/api/
        $ch = curl_init('https://'.self::SERVER_LOCATION.'.api.mailchimp.com/3.0/lists/'.self::LIST_ID.'/members/');
        curl_setopt_array($ch, array(
          CURLOPT_POST => TRUE,
          CURLOPT_RETURNTRANSFER => TRUE,
          CURLOPT_HTTPHEADER => array(
            'Authorization: apikey '.self::MAILCHIMP_API_KEY,
            'Content-Type: application/json'
          ),
          CURLOPT_POSTFIELDS => json_encode($postData)
        ));
    
        // Send the request
        $response = curl_exec($ch);
        $readable_response = json_decode($response);
        if(!$readable_response) {
          //\Drupal::logger('Mailchimp_subscriber')->error($readable_response->title.': '.$readable_response->detail .'. Raw values:'.print_r($values));
          //\Drupal::messenger()->addError('Something went wrong. Please contact your webmaster.');
        }
        if($readable_response->status == 403) {
          //\Drupal::logger('Mailchimp_subscriber')->error($readable_response->title.': '.$readable_response->detail .'. Raw values:'.print_r($values));
          //\Drupal::messenger()->addError('Something went wrong. Please contact your webmaster.');
        }
        if($readable_response->status == 'subscribed') {
          //\Drupal::messenger()->addStatus('You are now successfully subscribed.');
        }
        if($readable_response->status == 400) {
          if($readable_response->title == 'Member Exists') {
            //\Drupal::messenger()->addWarning('You are already subscribed to this mailing list.');
          }
        }
        /*
        header ("Location: ../artechandra.html");
        echo '<h3 class="messeje">Datos enviados correctamente gracias. </h3>';
        return true;
*/

    }
    
}

?>