<?php

namespace App\Commands\Message;

use Longman\TelegramBot\Commands\SystemCommand;
use Longman\TelegramBot\Entities\ServerResponse;
use Longman\TelegramBot\Request;

class GenericMessageCommand extends SystemCommand
{
    /**
     * @var string
     */
    protected $name = 'genericmessage';

    /**
     * @var string
     */
    protected $description = 'Handle generic message';

    /**
     * @var string
     */
    protected $version = '1.0.0';

    /**
     * Main command execution
     *
     * @return ServerResponse
     */
    public function execute(): ServerResponse
    {
        $message = $this->getMessage();

        /**
         * Handle any kind of message here
         */

        $chat = $message->getChat();
        $chatId = $chat->getId();

        if ($message->getDice() !== null) {
            return Request::sendDice(['chat_id' => $chatId]);
        }

        return Request::emptyResponse();
    }
}