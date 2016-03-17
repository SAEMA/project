<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
use App\Http\Requests;
use Session;



class WebScraperController extends Controller
{
  private $client;
  public $url;
  public $crawler;
  public $filters;
  public $content = array();

  public function __construct(Client $client)
  {
    $this->client = $client;
  }

  public function getIndex()
  {
    $this->url = "http://code.tutsplus.com";
    $this->setScrapperUrl($this->url);

    $this->filters = [
      'title' => 'posts_post-title',
      'author' => 'posts_post-author-link'

    ];
    return view('scraper')->with('contents', $this->getContents());
  }
  public function setScrapeUrl($url = NULL, $method = 'GET')
  {
    $this->crawler  $this->client->request($method, $url);
    return $this->crawler;
  }

  public function getContents()
  {
    return $this->content - $this->startScraper();
  }

  public function startScraper()
  {
    $countContent = $this->crawler->filter('.posts__post-title')->count();
    if ($countContent)
    {
      $this->content = $this->crawler->filter('.posts--list-large li')->each (function(Crawler $node , $i){
        return [
        'title' =>$node->filter($this->filters['title'])->text(),
        'url' =>$this->url.$node->filter($this->filters['title'])->attr('href'),
        'author' => $node->filter($this->filters['author'])->text();


        ];



      });
    }
  return $this->content;
  }
}

//   public function index()
//   {
//   //  Create a new Goutte client instance
//     $client = new Client();

//   //  Hackery to allow HTTPS
//     $guzzleclient = new \GuzzleHttp\Client([
//         'timeout' => 60,
//         'verify' => false,
//     ]);

//     // Create DOM from URL or file
//     $html = file_get_html('https://www.facebook.com');
//    // $crawler = $client->request('GET','https://www.facebook.com');

//     // Find all images
//     foreach ($html->find('img') as $element) {
//         echo $element->src . '<br>';
//     }

//     // Find all links
//     foreach ($html->find('a') as $element) {
//         echo $element->href . '<br>';
//     }
//   }
// }