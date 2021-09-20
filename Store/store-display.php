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
        $this->showProducts();
        $gunToBuy = $this->chooseProductToBuy();
        $this->showPaymentMethods();
        $payMethod = $this->choosePaymentMethod();
        $payMethod->enterCredentials();
        if ($this->store->makePayment($payMethod)) {
            var_dump($this->store->giveProduct($gunToBuy));
        };
    }

    private function showProducts(): void
    {
        echo '~~~~~~~~~~~ In store available are ===>>> ' . PHP_EOL;
        foreach ($this->store->getStoredProducts() as $index => $storedProduct) {
            $product = $storedProduct->getProduct();
            echo '(' . $index . ')' . $product->getName() . ' | ' . $storedProduct->getQuantity().' in stock' .PHP_EOL;
        }
    }

    private function showPaymentMethods(): void
    {
        foreach ($this->payMethods as $key => $payMethod) {
            echo 'Enter ' . $key . ' to pay with ' . $payMethod . PHP_EOL;
        }
    }

    private function chooseProductToBuy(): ?StoredProduct
    {
        $gunToBuyName = readline('Enter gun name to buy it : ');
        $gunToBuy = $this->store->checkIfProductIsStored($gunToBuyName);
        if ($gunToBuy === null) {
            echo 'No such gun in store' . PHP_EOL;
            return null;
        }
        echo 'You choose ' . $gunToBuy->getProduct()->getName() . ' to buy' . PHP_EOL;
        // could ask quantity amount to buy
        $amountToBuy = readline('Enter quantity to buy : ');
        $amountToBuy = (int) $amountToBuy;
        if (!$this->store->checkQuantity($amountToBuy,$gunToBuy))
        {
            echo 'No such amount in store' . PHP_EOL;
            return null;
        }
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