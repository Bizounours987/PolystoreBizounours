<?php
namespace model;

class Store {
	protected int $id;
	protected string $name;
	protected string $registrationNumber;
	protected User $user;
	protected ProductCollection $products;

	function __construct(int $id, string $name, string $registrationNumber, User $user) {
		$this->id = $id;
		$this->name = $name;
		$this->registrationNumber = $registrationNumber;
		$this->user = $user;
		$this->products = new ProductCollection();
	}

	public function getId(): int {
		return $this->id;
	}

	public function setId(int $id): int {
		$this->id = $id;
		return $this->id;
	}

	public function getName(): string {
		return $this->name;
	}

	public function setName(string $name): string {
		$this->name = $name;
		return $this->name;
	}

	public function getRegistrationNumber(): string {
		return $this->registrationNumber;
	}

	public function setRegistrationNumber(string $registrationNumber): string {
		$this->registrationNumber = $registrationNumber;
		return $this->registrationNumber;
	}

	public function getUser(): User {
		return $this->user;
	}

	public function setUser(User $user): User {
		$this->user = $user;
		return $this->user;
	}

	public function getProducts(): ProductCollection {
		if (!isset($this->products)) $this->products = new ProductCollection();
		return $this->products;
	}

	public function addProduct(Product $item): Store {
		if (!isset($this->products)) $this->products = new ProductCollection();
		$this->products[] = $item;
		return $this;
	}

	public function removeProduct(Product $item): Store {
		if (!isset($this->products)) $this->products = new ProductCollection();
		$key = array_search($item, $this->products);
		if ($key !== false) {
			unset($this->products[$key]);
			$this->products = array_values($this->products);
		}
		return $this;
	}
}
