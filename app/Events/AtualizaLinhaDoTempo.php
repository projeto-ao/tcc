<?php

namespace App\Events;

use App\Publicacoes as ModelPublicacoes;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AtualizaLinhaDoTempo implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $nova_publicacao;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($publicacao)
    {
        $this->nova_publicacao = $publicacao;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel(env('PUSHER_CHANNEL'));
    }

    public function broadcastAS()
    {
        return 'atualiza.publicacoes';
    }
}
