<?php 

declare(strict_types=1);

// server to server autorization 

class Session {

    protected $client_id = 'cb6635d5e98348c091ee08aab87b5585';
    protected $client_secret = '252ee8ec03a4498fb52c9c8998459b4c';
    protected $accessToken = '';
    protected $expirationTime = 0;
    protected $refreshToken = '';


    public function getAccessToken(){
        return $this->accessToken;
    }

    public function requestCredentialsToken()
    {

        $parameters = array(
            'grant_type' => 'client_credentials',
        );

        $headers = [
            'Authorization: Basic ' .  base64_encode($this->client_id.':'.$this->client_secret),
            'Content-Type: application/x-www-form-urlencoded',
        ];

        Request::prepare('https://accounts.spotify.com/api/token', $parameters, $headers);
        Request::exec_post();
        $response = Request::get_response_assoc();
      //  print_r($response);
        if (isset($response['access_token'])) {
            $this->accessToken = $response['access_token'];
            $this->expirationTime = time() + $response['expires_in'];
           // $this->scope = $response->scope ?? $this->scope;
            return true;
        }

        return false;
    }

    public function getExpirationTime(){
        return $this->expirationTime;
    }
    

}