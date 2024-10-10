<?php
namespace model;

class Purchase {
	protected int $id;
	protected DateTime $date;
	protected int $status;
	protected User $user;

	function __construct(int $id, DateTime $date, int $status, User $user) {
		$this->id = $id;
		$this->date = $date;
		$this->status = $status;
		$this->user = $user;
	}

	public function getId(): int {
		return $this->id;
	}

	public function setId(int $id): int {
		$this->id = $id;
		return $this->id;
	}

	public function getDate(): DateTime {
		return $this->date;
	}

	public function setDate(DateTime $date): DateTime {
		$this->date = $date;
		return $this->date;
	}

	public function getStatus(): int {
		return $this->status;
	}

	public function setStatus(int $status): int {
		$this->status = $status;
		return $this->status;
	}

	public function getUser(): User {
		return $this->user;
	}

	public function setUser(User $user): User {
		$this->user = $user;
		return $this->user;
	}
}

