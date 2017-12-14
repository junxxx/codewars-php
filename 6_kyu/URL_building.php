<?php
/**
 * class for URL build 
 * https://en.wikipedia.org/wiki/URL
 *
 */
class URLBuilder
{
    private $scheme = 'http';
    private $user = null;
    private $pass = null;
    private $host = '';
    private $port = '80';
    private $path = '/';
    private $puery = array();
    private $fragment = null;

    public function __construct(array $url)
    {
        if (!isset($url['host']))
            throw new Exception("host is required");
        if (isset($url['query']) && !is_array($url['query']))
        {
            throw new Exception('query is not array');
        }
        foreach($url as $k => $por)
        {
            $this->$k = $por;
        }
    }
    
    public function build()
    {
        $url = $this->scheme . '://';
        if($this->user && $this->pass)
            $url .= urlencode($this->user) . ':' .  urlencode($this->pass) . '@';
        $url .= $this->host;
        if ($this->port && $this->port != '80')
            $url .= ':' . $this->port;
        $url .= $this->path;
        if (!empty($this->query))
        {
            $query = '?';
            foreach($this->query as $k => $v)
                $query .= urlencode($k).'='.urlencode($v).'&';
            $query = rtrim($query, '&');
            $url .= $query;
        }
        if (!empty($this->fragment))
            $url .= '#' . $this->fragment;

        return $url;
    }
}

$options = [
    ['host' => 'test.com'], 
    ['host' => 'test.com', 'port' => '80'],
    ['host' => 'test.com', 'port' => '8080'], 
    ['host' => 'test.com', 'scheme' => 'https'], 
    ['host' => 'test.com', 'user' => 'a'], 
    ['host' => 'test.com', 'pass' => 'a'], 
    ['host' => 'test.com', 'user' => 'rubens', 'pass' => 't@st'], 
    ['host' => 'test.com', 'path' => ''], 
    ['host' => 'test.com', 'path' => '/some/path/'], 
    ['host' => 'test.com', 'query' => []], 
    ['host' => 'test.com', 'query' => ['abc' => '123']],
    ['host' => 'test.com', 'query' => ['abc' => '123', 'def' => '@bc']], 
    ['host' => 'test.com', 'fragment' => 'frag'], 
    ['host' => 'test.com', 'scheme' => 'https', 'user' => 'rubens', 'pass' => 't@st', 'path' => '/some/path', 'query' => ['klm' => 'mno', 'xyz' => '&pqr'], 'fragment' => 'frag'], 
        ]; 

foreach($options as $option)
{
    $str = (new URLBuilder($option))->build();
    echo $str . "\n";
}

