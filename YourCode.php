$client = new \Google_Client();
$client->setAuthConfig('/YOUR_GFILE.json');
$client->setApplicationName("Analytics");
$client->setScopes(['https://www.googleapis.com/auth/analytics']);

$ids = "ga:xxxxxxxx";
$start_date = "7daysAgo";
$end_date = "today";
$metrics = "ga:uniquePageviews";

$params = [
  'dimensions' => "ga:PagePath",
  'sort' => "-ga:uniquePageviews",
  'filters' => "ga:PagePath=~(articles/)",
  'max-results' => 10
];

$analytics = new \Google_Service_Analytics($client);
$results = $analytics->data_ga
    ->get($ids, $start_date, $end_date, $metrics, $params)
    ->getRows();
