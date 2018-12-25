<?php

namespace App\Services;

use App\Providers\GoutteScraper;

class DataCollectorService {

    public function __construct(GoutteScraper $scraper)
    {
        $this->scraper = $scraper;
    }


    public function test()
    {
        $results = $this->scraper->request('GET', 'https://calvinchoe.com');
        $results_array = [];

        $cleaned = $results->filter('h1')->each(function ($node) {
            $results_array[] = $node->text();
        });
        return json_encode($results_array);
    }
}
