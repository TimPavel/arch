<?php

declare(strict_types = 1);

namespace Service\Billing\PayWay;

class BankTransfer implements IBilling
{
    /**
     * @inheritdoc
     */
    public function pay(float $totalPrice): void
    {
        // Проведение банковского транзакции (перевод с счёта на счёт)
    }
}
