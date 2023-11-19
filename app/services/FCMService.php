<?php

namespace app\Services;

class FCMService
{
    public static function send($userDeviceDetail, $notification)
    {
        $serverApiKey =  "AAAA16uewd8:APA91bGfpaF57JRfrqEUhH-wPmMLz30O7moGcj0y60OPzpPtj1KE4fvzx5BwmOd1rDU5j1bm_J4P006SO7scsGsu6NAY9jJ4fqC2u5lqng9XcOmRsSCXVpf8ENhvPKe6j5-g2IDmSocx";
        //env('FCM_SERVER_KEY');
               // dd($serverApiKey);
        $payload = [
            "notification" => [
                "title" => $notification['title'],
                "body" => $notification['body']['description'],
            ],
            "data" => [
                "click_action" => "FLUTTER_NOTIFICATION_CLICK",
                "body" => $notification['body'],

            ],
            "android" => [
                "priority" => 'high',
            ],
            "registration_ids" => $userDeviceDetail->pluck('fcmToken')->all(),
        ];
        $dataString = json_encode($payload);
        $headers = [
            'Authorization: key=' . $serverApiKey,
            'Content-Type: application/json',
        ];
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
        return curl_exec($ch);
        
    }
}
