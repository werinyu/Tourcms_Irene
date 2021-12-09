# TourCMS API Demo

The task is to use TourCMS [Tour Search API](https://www.tourcms.com/support/api/mp/tour_search.php) to display a list of *Day tour/trip/activity/attraction (No overnight stay)* (`product_type` `4`) in *Spain* (`country` `ES`).

The tour name, tour url, summary, thumbnail image, duration description, location and from price should come from the TourCSM API response.

It is recommended to install and use the [TourCMS PHP client library](https://github.com/TourCMS/tourcms-php). Sample code for connecting to the TourCMS API can be found on the GitHub page. Sample code for calling the Tour Search endpoint and looping through the results can be found on the endpoint page (link above).

Sample HTML/CSS is provided in `tours.php`.

## Problems running the code on Windows? 

The API is accessed via https. Occasionally Windows users can have problems connecting to the API, if you have included the PHP wrapper and added credentials and do not get a response from the API, try opening `TourCMS.php` and adding the following two lines after `$ch = curl_init();` to bypass SSL checks:

```php 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
```