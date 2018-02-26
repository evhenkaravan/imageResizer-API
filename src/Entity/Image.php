<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource
 * @ORM\Entity(repositoryClass="App\Repository\ImageRepository")
 * @ORM\Table(name="images")
 */
class Image
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

	/**
	 * @var int shows parent image
	 * @ORM\Column(type="integer")
	 */
	private $original_id;

	/**
	 * @var string shows path to current image
	 * @ORM\Column(length=140,nullable=true)
	 */
	private $link;

	/**
	 * @var int the width of current image in pixels
	 * @ORM\Column(type="integer")
	 */
	private $width;

	/**
	 * @var int the height of current image in pixels
	 * @ORM\Column(type="integer")
	 */
	private $height;

	/**
	 * @var int user's id
	 * @ORM\Column(type="integer")
	 */
	private $owner_id;

	/**
	 * @var string the uploading's file date
	 * @ORM\Column(type="datetime")
	 */
	private $date;

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return int
	 */
	public function getOriginalId(): int {
		return $this->original_id;
	}

	/**
	 * @param int $original_id
	 */
	public function setOriginalId( int $original_id ): void {
		$this->original_id = $original_id;
	}

	/**
	 * @return string
	 */
	public function getLink(): string {
		return $this->link;
	}

	/**
	 * @param string $link
	 */
	public function setLink( string $link ): void {
		$this->link = $link;
	}

	/**
	 * @return int
	 */
	public function getWidth(): int {
		return $this->width;
	}

	/**
	 * @param int $width
	 */
	public function setWidth( int $width ): void {
		$this->width = $width;
	}

	/**
	 * @return int
	 */
	public function getHeight(): int {
		return $this->height;
	}

	/**
	 * @param int $height
	 */
	public function setHeight( int $height ): void {
		$this->height = $height;
	}

	/**
	 * @return int
	 */
	public function getOwnerId(): int {
		return $this->owner_id;
	}

	/**
	 * @param int $owner_id
	 */
	public function setOwnerId( int $owner_id ): void {
		$this->owner_id = $owner_id;
	}

	/**
	 * @return string
	 */
	public function getDate(): string {
		return $this->date;
	}

	/**
	 * @param string $date
	 */
	public function setDate( string $date ): void {
		$this->date = $date;
	}


}
