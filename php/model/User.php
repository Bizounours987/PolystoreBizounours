<?php
namespace model;

class User {
	protected int $id;
	protected string $firstName;
	protected string $lastName;
	protected string $email;
	protected OrderCollection $orders;
	protected StoreCollection $stores;

	function __construct(int $id, string $firstName, string $lastName, string $email) {
		$this->id = $id;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->email = $email;
		$this->orders = new OrderCollection();
		$this->stores = new StoreCollection();
	}

	public function getId(): int {
		return $this->id;
	}

	public function setId(int $id): int {
		$this->id = $id;
		return $this->id;
	}

	public function getFirstName(): string {
		return $this->firstName;
	}

	public function setFirstName(string $firstName): string {
		$this->firstName = $firstName;
		return $this->firstName;
	}

	public function getLastName(): string {
		return $this->lastName;
	}

	public function setLastName(string $lastName): string {
		$this->lastName = $lastName;
		return $this->lastName;
	}

	public function getEmail(): string {
		return $this->email;
	}

	public function setEmail(string $email): string {
		$this->email = $email;
		return $this->email;
	}

	public function getPurchases(): PurchaseCollection {
		if (!isset($this->purchases)) $this->purchases = new PurchaseCollection();
		return $this->purchases;
	}

	public function addPurchase(Purchase $item): User {
		if (!isset($this->purchases)) $this->purchases = new PurchaseCollection();
		$this->orders[] = $item;
		return $this;
	}

	public function removePurchase(Purchase $item): User {
		if (!isset($this->purchases)) $this->purchases = new PurchaseCollection();
		$key = array_search($item, $this->purchases);
		if ($key !== false) {
			unset($this->purchases[$key]);
			$this->orders = array_values($this->purchases);
		}
		return $this;
	}

	public function getStores(): StoreCollection {
		if (!isset($this->stores)) $this->stores = new StoreCollection();
		return $this->stores;
	}

	public function addStore(Store $item): User {
		if (!isset($this->stores)) $this->stores = new StoreCollection();
		$this->stores[] = $item;
		return $this;
	}

	public function removeStore(Store $item): User {
		if (!isset($this->stores)) $this->stores = new StoreCollection();
		$key = array_search($item, $this->stores);
		if ($key !== false) {
			unset($this->stores[$key]);
			$this->stores = array_values($this->stores);
		}
		return $this;
	}
}
