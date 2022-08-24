<?php

namespace App\Service;

use YooKassa\Client;

class PaymentService
{
    public function getClient(): Client
    {
        $client = new Client();
        $client->setAuth(config('services.yookassa.shop_id'), config('services.yookassa.secret_key'));

        return $client;
    }


    /**
     * @throws \YooKassa\Common\Exceptions\NotFoundException
     * @throws \YooKassa\Common\Exceptions\ResponseProcessingException
     * @throws \YooKassa\Common\Exceptions\ApiException
     * @throws \YooKassa\Common\Exceptions\BadApiRequestException
     * @throws \YooKassa\Common\Exceptions\ExtensionNotFoundException
     * @throws \YooKassa\Common\Exceptions\InternalServerError
     * @throws \YooKassa\Common\Exceptions\ForbiddenException
     * @throws \YooKassa\Common\Exceptions\TooManyRequestsException
     * @throws \YooKassa\Common\Exceptions\UnauthorizedException
     */
    public function createPayment(float $amount, string $description, array $options = []): string
    {
        $client = new Client();
        $client->setAuth(config('services.yookassa.shop_id'), config('services.yookassa.secret_key'));


        $payment = $client->createPayment([
            'amount' => [
                'value' => $amount,
                'currency' => 'RUB',
            ],
            'capture' => false,
            'confirmation' => [
                'type' => 'redirect',
                'return_url' => 'https://happykids.maximtresk.ru',
            ],
            'metadata' => [
                'transaction_id' => $options['transaction_id']
            ],
            'description' => $description,
        ],
            uniqid('', true));

        return $payment->getConfirmation()->getConfirmationUrl();
    }
}
