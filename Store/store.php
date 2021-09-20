<?php
// ieroču veikals
//ieroči
//licences
//ierocim ir lodes lidojuma trajektorija


class Store
{
    private array $storedProducts = [];

    public function __construct(array $productsToStore)
    {
        foreach ($productsToStore as $storedProduct) {
            $this->addProduct($storedProduct);
        }
    }

    public function addProduct(StoredProduct $storedProduct): void
    {
        $this->storedProducts[] = $storedProduct;
    }

    public function getStoredProducts(): array
    {
        return $this->storedProducts;
    }

    public function makePayment(PaymentMethod $paymentMethod): bool
    {
        //nonemu naudu -- ielieku store cashier
        return true;

    }

    public function giveProduct(StoredProduct $storedProduct): Gun
    {
        $storedProduct->setQuantity(1);
        return $storedProduct->getProduct();
    }

    public function checkIfProductIsStored(string $searchGunName): ?StoredProduct
    {
        foreach ($this->storedProducts as $storedProduct) {
            $product = $storedProduct->getProduct();
            if (strtolower($product->getName()) === strtolower($searchGunName)) return $storedProduct;

        }
        return null;
    }
    public function checkQuantity(int $amount,StoredProduct $storedProduct):bool
    {
        return $amount <= $storedProduct->getQuantity();
    }
}

