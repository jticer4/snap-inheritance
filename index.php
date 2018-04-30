<?php

class vehicle {
	public $licensePlate;

	/**
	 * vehicle constructor.
	 * @param string $licensePlate
	 */
	public function __construct(string $licensePlate) {
		$this->licensePlate = $licensePlate;
	}

	/**
	 * @return string
	 **/
	public function getLicensePlate(): string {
		return $this->licensePlate;
	}

	/**
	 * @param string $licensePlate
	 **/
	public function setLicensePlate($licensePlate): void {
		$this->licensePlate = $licensePlate;
	}

}

class nissanAltima extends vehicle {
	public $belongsToMarlon;

	/**
	 * nissanAltima constructor.
	 * @param $belongsToMarlon
	 **/
	public function __construct($belongsToMarlon) {
		parent::__construct("licensePlate");
		$this->belongsToMarlon = $belongsToMarlon;
	}

	/**
	 * @return boolean
	 **/
	public function getBelongsToMarlon(): bool {
		return $this->belongsToMarlon;
	}

	/**
	 * @param boolean $belongsToMarlon
	 **/
	public function setBelongsToMarlon($belongsToMarlon): void {
		$this->belongsToMarlon = $belongsToMarlon;
	}

}

class horseAndBuggy extends vehicle {
	public $numHorses;

	/**
	 * horseAndBuggy constructor.
	 * @param $numHorses
	 */
	public function __construct($numHorses) {
		parent::__construct("licensePlate");
		$this->numHorses = $numHorses;
	}

	/**
	 * @return integer
	 */
	public function getNumHorses(): int {
		return $this->numHorses;
	}

	/**
	 * @param integer $numHorses
	 */
	public function setNumHorses($numHorses): void {
		$this->numHorses = $numHorses;
	}

}

$toyota = new vehicle("54854858");
echo "This Toyota's license plate number is " . $toyota->getLicensePlate() . "<br>";

$honda = new nissanAltima("false");
echo "Does this Honda belong to Marlon? " . $honda->belongsToMarlon . "<br>";

$wagon = new horseAndBuggy(5);
echo "I have a VW, it has " . $wagon->getNumHorses() . " horses";

