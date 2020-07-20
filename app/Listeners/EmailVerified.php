<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Verifed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailVerified
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Verifed  $event
     * @return void
     */
    public function handle(Verifed $event)
    {
        //绘画里闪存认证成功后的消息提示
        session()->flash('success', '邮箱验证成功 ^_^');
    }
}
