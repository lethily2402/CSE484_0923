<?php
 class Student{
    private $id;
    private $name;
    private $email;
    private $birthday;
	private $idClass;
    public function __construct($id, $name, $email, $birthday,$idClass){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->birthday = $birthday;
		$this->idClass = $idClass;
    }
 
	/**
	 * @return mixed
	 */
	

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @param mixed $id 
	 * @return self
	 */
	public function setId($id): self {
		$this->id = $id;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 * @param mixed $name 
	 * @return self
	 */
	public function setName($name): self {
		$this->name = $name;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * @param mixed $email 
	 * @return self
	 */
	public function setEmail($email): self {
		$this->email = $email;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getBirthday() {
		return $this->birthday;
	}
	
	/**
	 * @param mixed $birthday 
	 * @return self
	 */
	public function setBirthday($birthday): self {
		$this->birthday = $birthday;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getIdClass() {
		return $this->idClass;
	}
	
	/**
	 * @param mixed $idClass 
	 * @return self
	 */
	public function setIdClass($idClass): self {
		$this->idClass = $idClass;
		return $this;
	}
}