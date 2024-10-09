<?php
namespace model;

class OrderLine {
	protected int $quantity;
	protected float $unitPrice;
	protected Order $order;
	protected Product $product;

	function __construct(int $quantity, float $unitPrice, Order $order, Product $product) {
		$this->quantity = $quantity;
		$this->unitPrice = $unitPrice;
		$this->order = $order;
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

	public function getOrder(): Order {
		return $this->order;
	}

	public function setOrder(Order $order): Order {
		$this->order = $order;
		return $this->order;
	}

	public function getProduct(): Product {
		return $this->product;
	}

	public function setProduct(Product $product): Product {
		$this->product = $product;
		return $this->product;
	}
}
