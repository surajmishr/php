php mysql check SELECT VERSION();

If use composer  install PhP any frame work, which eaisly install , Which approved MIT Liences,

First  install your  computer  machine depend  your pc linux or windows unix.,
install Git directly and commond trhow
Then Check verson git --version

composer init initialize your dir
composer require codeigniter4/framework frame
Csv File Use 
composer require phpoffice/phpspreadsheet
Pdf 

composer require dompdf/dompdf
<?php

// Require the Composer autoloader
require 'vendor/autoload.php';

// Use the Dompdf namespace
use Dompdf\Dompdf;

// Create a new Dompdf instance
$dompdf = new Dompdf();

// Load HTML content into Dompdf
$html = '<h1>Hello, world!</h1>';
$dompdf->loadHtml($html);

// Render the PDF
$dompdf->render();

// Output the generated PDF to the browser
$dompdf->stream('document.pdf');

Razor pay Api aceess payment getway use 
composer require razorpay/razorpay
<?php

// Require the Composer autoloader
require 'vendor/autoload.php';

// Use the Razorpay namespace
use Razorpay\Api\Api;

// Initialize Razorpay client with your API keys
$api = new Api('YOUR_KEY_ID', 'YOUR_KEY_SECRET');

// Create an order
$order = $api->order->create([
    'amount' => 50000, // Amount in paisa (e.g., 50000 for ₹500.00)
    'currency' => 'INR',
    'receipt' => 'order_rcptid_11',
    'payment_capture' => 1 // Auto-capture payment
]);

// Get order ID
$orderId = $order->id;

// Redirect user to Razorpay checkout page
header("Location: {$order->short_url}");
exit;

php GuzzleHttp 
composer require guzzlehttp/guzzle
<?php

// Include the Composer autoloader
require 'vendor/autoload.php';

// Use the GuzzleHttp namespace
use GuzzleHttp\Client;

// Create a new GuzzleHttp client instance
$client = new Client();

// Make a GET request to a URL
$response = $client->get('https://api.example.com');

// Get the response body as a string
$body = $response->getBody()->getContents();

// Output the response body
echo $body;
