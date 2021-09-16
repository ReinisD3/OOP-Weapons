<?php

class StoreDisplay
{
    private array $payMethods = [];
    private Store $store;

    public function __construct(Store $store)
    {
        $this->store = $store;
        $this->payMethods = [new Paypal(), new CreditCard()];
    }

    public function open(): void
    {
        echo '--------------------------Welcome to gun Store---------------------------' . PHP_EOL;
        $this->showGuns();
        $gunToBuy = $this->chooseGunToBuy();
        $this->showPaymentMethods();
        $payMethod = $this->choosePaymentMethod();
        $payMethod->enterCredentials();
        if ($this->store->makePayment($payMethod)) {
            var_dump($this->store->giveGun($gunToBuy));
        };
    }

    private function showGuns(): void
    {
        echo '~~~~~~~~~~~ In store available are ===>>> ' . PHP_EOL;
        foreach ($this->store->getStoredGuns() as $index => $storedGun) {
            $gun = $storedGun->getGun();
            echo '(' . $index . ')' . $gun->getName() . ' | license(' . $gun->getLicense() . ') | Bullet Trajectory : ' . $gun->bulletTrajectory() . ' | Sound : ' . $gun->sound() . PHP_EOL;
        }
    }

    private function showPaymentMethods(): void
    {
        foreach ($this->payMethods as $key => $payMethod) {
            echo 'Enter ' . $key . ' to pay with ' . $payMethod . PHP_EOL;
        }
    }

    private function chooseGunToBuy(): ?StoredGun
    {
        $gunToBuyName = readline('Enter gun name to buy it : ');
        $gunToBuy = $this->store->checkIfGunIsStored($gunToBuyName);
        if ($gunToBuy === null) {
            echo 'No such gun in store' . PHP_EOL;
            return null;
        }
        echo 'You choose ' . $gunToBuy->getGun()->getName() . ' to buy' . PHP_EOL;
        // could ask quantity amount to buy
        return $gunToBuy;
    }

    private function choosePaymentMethod(): ?PaymentMethod
    {
        $methodChosen = readline('>');
        $methodChosen = (int)$methodChosen;
        if (isset($this->payMethods[$methodChosen])) {
            return $this->payMethods[$methodChosen];
        }
        echo 'Wrong pay method input' . PHP_EOL;
        return null;

    }
}