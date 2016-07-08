<?php

namespace Ruwer\TopArticles;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

class TopArticlesController extends Controller
{
    public function get($ids, $start_date, $end_date, $filter, $results)
    {
        $client = new \Google_Client();
        $client->setAuthConfig(config('analytics.file'));
        $client->setApplicationName("Analytics");
        $client->setScopes(['https://www.googleapis.com/auth/analytics']);

        $ids = $ids;
        $start_date = $start_date;
        $end_date = $end_date;
        $metrics = "ga:uniquePageviews";

        $params = [
            'dimensions' => "ga:PagePath",
            'sort' => "-ga:uniquePageviews",
            'filters' => "ga:PagePath=~" . $filter,
            'max-results' => $results
        ];

        $analytics = new \Google_Service_Analytics($client);
        $results = $analytics->data_ga
            ->get($ids, $start_date, $end_date, $metrics, $params)
            ->getRows();

        return $results;
    }
}
