<?php
namespace model;

class OrderLine {
	protected int $quantity;
	protected float $unitPrice;
	protected Purchase $purchase;
	protected Product $product;

	function __construct(int $quantity, float $unitPrice, Order $purchase, Product $product) {
		$this->quantity = $quantity;
		$this->unitPrice = $unitPrice;
		$this->purchase = $purchase;
		$this->product = $product;
	}

	public function getQuantity(): int {
		return $this->quantity;
	}

	public function setQuantity(int $quantity): int {
		$this->quantity = $quantity;
		return $this->quantity;
	}

	public function getUnitPrice(): float {
		return $this->unitPrice;
	}

	public function setUnitPrice(float $unitPrice): float {
		$this->unitPrice = $unitPrice;
		return $this->unitPrice;
	}

	public function getPurchase(): Purchase {
		return $this->purchase;
	}

	public function setPurchase(Purchase $purchase): Purchase {
		$this->purchase = $purchase;
		return $this->purchase;
	}

	public function getProduct(): Product {
		return $this->product;
	}

	public function setProduct(Product $product): Product {
		$this->product = $product;
		return $this->product;
	}
}
