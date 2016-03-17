<?php namespace Thujohn\Twitter\Traits;

use Exception;

Trait TrendTrait {

	/**
     * @var string
     */
    private $oauth_access_token;

    /**
     * @var string
     */
    private $oauth_access_token_secret;

    /**
     * @var string
     */
    private $consumer_key;

    /**
     * @var string
     */
    private $consumer_secret;

    /**
     * @var array
     */
    private $postfields;

    /**
     * @var string
     */
    private $getfield;

    /**
     * @var mixed
     */
    protected $oauth;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $requestMethod;




	/**
	 * Returns the top 10 trending topics for a specific WOEID, if trending information is available for it.
	 *
	 * Parameters :
	 * - id
	 * - exclude
	 */


	public function getTrendsPlace($parameters = [])
	{
		if (!array_key_exists('id', $parameters))
		{
			throw new Exception('Parameter required missing : id');
		}

		return $this->get('trends/place', $parameters);
	}

	/**
	 * Returns the locations that Twitter has trending topic information for.
	 */
	public function getTrendsAvailable($parameters = [])
	{
		return $this->get('trends/available', $parameters);
	}

	/**
	 * Returns the locations that Twitter has trending topic information for, closest to a specified location.
	 *
	 * Parameters :
	 * - lat
	 * - long
	 */
	public function getTrendsClosest($parameters = [])
	{
		if (!array_key_exists('lat', $parameters) || !array_key_exists('long', $parameters))
		{
			throw new Exception('Parameter required missing : lat or long');
		}

		return $this->get('trends/closest', $parameters);
	}

	//here

	/**
     * Set getfield string, example: '?screen_name=J7mbo'
     * 
     * @param string $string Get key and value pairs as string
     *
     * @throws \Exception
     * 
     * @return \TwitterAPIExchange Instance of self for method chaining
     */
    public function setGetfield($string)
    {
        if (!is_null($this->getPostfields())) 
        { 
            throw new Exception('You can only choose get OR post fields.'); 
        }
        
        $getfields = preg_replace('/^\?/', '', explode('&', $string));
        $params = array();

        foreach ($getfields as $field)
        {
            if ($field !== '')
            {
                list($key, $value) = explode('=', $field);
                $params[$key] = $value;
            }
        }

        $this->getfield = '?' . http_build_query($params);
        
        return $this;
    }
    

    /**
     * Get postfields array (simple getter)
     * 
     * @return array $this->postfields
     */
    public function getPostfields()
    {
        return $this->postfields;
    }


    public function buildOauth($url, $requestMethod)
    {
        if (!in_array(strtolower($requestMethod), array('post', 'get')))
        {
            throw new Exception('Request method must be either POST or GET');
        }
        
        $consumer_key              = "WdUNYvgwB6Uq6DOUnUcd50YFq";
        $consumer_secret           = "jH3CzZa9nz0MILRSGF1USRAUA29m683CosVnxtHJoiF3rq8YXy";
        $oauth_access_token        = "4922466929-IlexNNEw9ADDhKN6gf0X0besMP0yWAhGVQVwYgq";
        $oauth_access_token_secret = "NHYNzUgsIvQe896daccHiWVO8j7KVn5vqrdKaAHnLcSDR";
        
        $oauth = array(
            'oauth_consumer_key' => $consumer_key,
            'oauth_nonce' => time(),
            'oauth_signature_method' => 'HMAC-SHA1',
            'oauth_token' => $oauth_access_token,
            'oauth_timestamp' => time(),
            'oauth_version' => '1.0'
        );
        
        $getfield = $this->getGetfield();
        
        if (!is_null($getfield))
        {
            $getfields = str_replace('?', '', explode('&', $getfield));

            foreach ($getfields as $g)
            {
                $split = explode('=', $g);

                /** In case a null is passed through **/
                if (isset($split[1]))
                {
                    $oauth[$split[0]] = urldecode($split[1]);
                }
            }
        }
        
        $postfields = $this->getPostfields();

        if (!is_null($postfields)) {
            foreach ($postfields as $key => $value) {
                $oauth[$key] = $value;
            }
        }

        $base_info = $this->buildBaseString($url, $requestMethod, $oauth);
        $composite_key = rawurlencode($consumer_secret) . '&' . rawurlencode($oauth_access_token_secret);
        $oauth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, true));
        $oauth['oauth_signature'] = $oauth_signature;
        
        $this->url = $url;
        $this->requestMethod = $requestMethod;
        $this->oauth = $oauth;
        
        return $this;
    }

     /**
     * Get getfield string (simple getter)
     * 
     * @return string $this->getfield
     */
    public function getGetfield()
    {
        return $this->getfield;
    }

     /**
     * Private method to generate the base string used by cURL
     * 
     * @param string $baseURI
     * @param string $method
     * @param array  $params
     * 
     * @return string Built base string
     */
    private function buildBaseString($baseURI, $method, $params) 
    {
        $return = array();
        ksort($params);

        foreach($params as $key => $value)
        {
            $return[] = rawurlencode($key) . '=' . rawurlencode($value);
        }
        
        return $method . "&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $return)); 
    }
    
    public function performRequest($return = true, $curlOptions = array())
    {
        if (!is_bool($return))
        {
            throw new Exception('performRequest parameter must be true or false');
        }

        $header =  array($this->buildAuthorizationHeader($this->oauth), 'Expect:');

        $getfield = $this->getGetfield();
        $postfields = $this->getPostfields();

        $options = array(
            CURLOPT_HTTPHEADER => $header,
            CURLOPT_HEADER => false,
            CURLOPT_URL => $this->url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 10,
        ) + $curlOptions;

        if (!is_null($postfields))
        {
            $options[CURLOPT_POSTFIELDS] = http_build_query($postfields);
        }
        else
        {
            if ($getfield !== '')
            {
                $options[CURLOPT_URL] .= $getfield;
            }
        }

        $feed = curl_init();
        curl_setopt_array($feed, $options);
        $json = curl_exec($feed);

        if (($error = curl_error($feed)) !== '')
        {
            curl_close($feed);

            throw new \Exception($error);
        }

        curl_close($feed);

        return $json;
    }

    private function buildAuthorizationHeader(array $oauth)
    {
        $return = 'Authorization: OAuth ';
        $values = array();
        
        foreach($oauth as $key => $value)
        {
            if (in_array($key, array('oauth_consumer_key', 'oauth_nonce', 'oauth_signature',
                'oauth_signature_method', 'oauth_timestamp', 'oauth_token', 'oauth_version'))) {
                $values[] = "$key=\"" . rawurlencode($value) . "\"";
            }
        }
        
        $return .= implode(', ', $values);
        return $return;
    }

}