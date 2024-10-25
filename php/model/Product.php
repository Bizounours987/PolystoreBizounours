<?php
namespace model;


class Product {
	protected int $id;
	protected string $reference;
	protected string $label;
	protected float $unitPrice;
	protected Store $store;
	#[ORM\Table\Categorized]
	protected CategoryCollection $categories;

	function __construct(int $id, string $reference, string $label, float $unitPrice, Store $store) {
		$this->id = $id;
		$this->reference = $reference;
		$this->label = $label;
		$this->unitPrice = $unitPrice;
		$this->store = $store;
		$this->categories = new CategoryCollection();
	}

	public function getId(): int {
		return $this->id;
	}

	public function setId(int $id): int {
		$this->id = $id;
		return $this->id;
	}

	public function getReference(): string {
		return $this->reference;
	}

	public function setReference(string $reference): string {
		$this->reference = $reference;
		return $this->reference;
	}

	public function getLabel(): string {
		return $this->label;
	}

	public function setLabel(string $label): string {
		$this->label = $label;
		return $this->label;
	}

	public function getUnitPrice(): float {
		return $this->unitPrice;
	}

	public function setUnitPrice(float $unitPrice): float {
		$this->unitPrice = $unitPrice;
		return $this->unitPrice;
	}

	public function getStore(): Store {
		return $this->store;
	}

	public function setStore(Store $store): Store {
		$this->store = $store;
		return $this->store;
	}

	public function getCategories(): CategoryCollection {
		if (!isset($this->categories)) $this->categories = new CategoryCollection();
		return $this->categories;
	}

	public function addCategory(Category $item): Product {
		if (!isset($this->categories)) $this->categories = new CategoryCollection();
		$this->categories[] = $item;
		return $this;
	}

	public function removeCategory(Category $item): Product {
		if (!isset($this->categories)) $this->categories = new CategoryCollection();
		$key = array_search($item, $this->categories);
		if ($key !== false) {
			unset($this->categories[$key]);
			$this->categories = array_values($this->categories);
		}
		return $this;
	}
}
