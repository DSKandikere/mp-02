<?php
require 'vendor/autoload.php'; // Load the Twilio PHP SDK

use Twilio\Rest\Client;

// Get the JSON input
$input = json_decode(file_get_contents('php://input'), true);

// Extract message and location
$message = $input['message'];
$latitude = $input['latitude'];
$longitude = $input['longitude'];

// Format the message to include the location
$locationLink = "https://maps.google.com/?q=$latitude,$longitude";
$fullMessage = "$message Here is my location: $locationLink";

// Twilio credentials
$sid = 'AC346e703cf0919e0cf229c8b494c643d3';
$token = '54e72b0afa84919f5f0d5a5e78bbbc2d';
$twilioNumber = '+15072644727';

// Create a Twilio client
$client = new Client($sid, $token);

// Send the SMS
try {
    $client->messages->create(
        '+917349347948', // Replace with the recipient's phone number
        [
            'from' => $twilioNumber,
            'body' => $fullMessage
        ]
    );
    echo json_encode(['status' => 'success', 'message' => 'SMS sent successfully.']);
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
?>
