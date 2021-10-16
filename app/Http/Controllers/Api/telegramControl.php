<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;
use Illuminate\Notifications\Notification;

class telegramControl extends Notification
{
    //
    public function via($notifiable){
        return [TelegramChannel::class];
    }
    public function toTelegram(){
        return TelegramMessage::create()
        ->content("Alguien observo o vio la pagina web \n");
    }
    public function consumir($notifiable){
        $url=url('/invoice/'. $this->inovice->id);
    }

}
