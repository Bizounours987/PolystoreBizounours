<?php
namespace model;

class Category {
	protected int $id;
	protected string $label;
	protected Category $category;
	protected CategoryCollection $categorys;
	#[ORM\Table\Categorized]
	protected ProductCollection $products;

	function __construct(int $id, string $label, Category $category) {
		$this->id = $id;
		$this->label = $label;
		$this->category = $category;
		$this->categorys = new CategoryCollection();
		$this->products = new ProductCollection();
	}

	public function getId(): int {
		return $this->id;
	}

	public function setId(int $id): int {
		$this->id = $id;
		return $this->id;
	}

	public function getLabel(): string {
		return $this->label;
	}

	public function setLabel(string $label): string {
		$this->label = $label;
		return $this->label;
	}

	public function getCategory(): Category {
		return $this->category;
	}

	public function setCategory(Category $category): Category {
		$this->category = $category;
		return $this->category;
	}

	public function getCategorys(): CategoryCollection {
		if (!isset($this->categorys)) $this->categorys = new CategoryCollection();
		return $this->categorys;
	}

	public function addCategory(Category $item): Category {
		if (!isset($this->categorys)) $this->categorys = new CategoryCollection();
		$this->categorys[] = $item;
		return $this;
	}

	public function removeCategory(Category $item): Category {
		if (!isset($this->categorys)) $this->categorys = new CategoryCollection();
		$key = array_search($item, $this->categorys);
		if ($key !== false) {
			unset($this->categorys[$key]);
			$this->categorys = array_values($this->categorys);
		}
		return $this;
	}

	public function getProducts(): ProductCollection {
		if (!isset($this->products)) $this->products = new ProductCollection();
		return $this->products;
	}

	public function addProduct(Product $item): Category {
		if (!isset($this->products)) $this->products = new ProductCollection();
		$this->products[] = $item;
		return $this;
	}

	public function removeProduct(Product $item): Category {
		if (!isset($this->products)) $this->products = new ProductCollection();
		$key = array_search($item, $this->products);
		if ($key !== false) {
			unset($this->products[$key]);
			$this->products = array_values($this->products);
		}
		return $this;
	}
}
