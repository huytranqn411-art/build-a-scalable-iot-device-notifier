<?php
// Configuration File for Scalable IoT Device Notifier

// Database Settings
$db_host = 'localhost';
$db_username = 'iot_notifier';
$db_password = 'iot_notifier_password';
$db_name = 'iot_devices';

// MQTT Broker Settings
$mqtt_broker_url = 'mqtt://localhost:1883';
$mqtt_username = 'iot_notifier';
$mqtt_password = 'iot_notifier_password';
$mqtt_client_id = 'scalable_iot_notifier';

// Notification Settings
$notification_api_key = 'YOUR_NOTIFICATION_API_KEY';
$notification_api_secret = 'YOUR_NOTIFICATION_API_SECRET';

// IoT Device Settings
$iot_devices = array(
    'device_1' => array(
        'device_id' => 'device_1_id',
        'device_type' => 'temperature_sensor',
        ' notification_threshold' => 30 // temperature in Celcius
    ),
    'device_2' => array(
        'device_id' => 'device_2_id',
        'device_type' => 'humidity_sensor',
        'notification_threshold' => 60 // humidity percentage
    ),
    // Add more devices here...
);

// Logging Settings
$log_level = 'DEBUG';
$log_file = 'iot_notifier.log';

// Email Settings
$email_smtp_host = 'smtp.example.com';
$email_smtp_username = 'iot_notifier@example.com';
$email_smtp_password = 'iot_notifier_password';
$email_from = 'iot_notifier@example.com';

// Other Settings
$device_data_refresh_interval = 300; // in seconds
$notification_send_interval = 60; // in seconds
?>