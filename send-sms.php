<?php
class SMSGateway {
    private $apiToken;
    private $baseUrl = 'https://www.smspower.tel';
    
    public function __construct($apiToken) {
        $this->apiToken = $apiToken;
    }
    
    public function sendSMS($phoneNumber, $message) {
        $url = $this->baseUrl . '/api/sms/send';
        
        $data = [
            'number' => $phoneNumber,
            'message' => $message
        ];
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $this->apiToken
        ]);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        if ($httpCode === 200) {
            $result = json_decode($response, true);
            return $result;
        } else {
            return [
                'success' => false,
                'error' => 'HTTP Error: ' . $httpCode
            ];
        }
    }
}

// Usage in PHP
$sms = new SMSGateway('Your-API-KEY');
$result = $sms->sendSMS('180800023041', 'Hello from SMSPOWER.TEL');

if ($result['success']) {
    echo "SMS sent successfully!";
} else {
    echo "Error: " . $result['error'];
}
?>
