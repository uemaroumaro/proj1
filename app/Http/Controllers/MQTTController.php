<?php

namespace App\Http\Controllers;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use App\MyLibs\phpMQTT;
class MQTTController extends Controller {

    public function getIndex() {
        
        $mqtt_host = "119.27.36.192"; # MQTT ブローカー
        $mqtt_port = 1883; # MQTT ポート番号
        $mqtt_clientid = "d:quickstart:MyDevice:me.juge.mqtt.test"; # クライアントID
        $mqtt_topic = "orz"; # トピック文字列
        $mqtt_message = '{"val1":123,"val2":"ABC"}'; # パブリッシュするメッセージ

        $mqtt = new phpMQTT($mqtt_host, $mqtt_port, $mqtt_clientid);
        if ($mqtt->connect()) {
            $mqtt->publish($mqtt_topic, $mqtt_message, 0);
            $mqtt->close();
        }
        return "???ooo???";
    }

}
