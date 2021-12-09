# TourCMS API Demo

The task is to use TourCMS [Tour Search API](https://www.tourcms.com/support/api/mp/tour_search.php) to display a list of *Day tour/trip/activity/attraction (No overnight stay)* (`product_type` `4`) in *Spain* (`country` `ES`).

The tour name, tour url, summary, thumbnail image, duration description, location and from price should come from the TourCSM API response.

It is recommended to use the [TourCMS PHP client library](https://github.com/TourCMS/tourcms-php), sample code for connecting can be found on the GitHub page. Sample code for calling the Tour Search endpoint can be found on the endpoint page (link above).

Sample HTML/CSS is provided in `tours.php`.