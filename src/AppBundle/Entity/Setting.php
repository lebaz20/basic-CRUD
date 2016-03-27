<?php
// src/AppBundle/Entity/Setting.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Setting entity hold key-value pairs
 * 
 * @ORM\Entity
 * @ORM\Table(name="setting")
 * @ORM\HasLifecycleCallbacks
 * 
 * @property int $id
 * @property string $key
 * @property string $value
 * @property \DateTime $created
 * @property \DateTime $modified
 * 
 * @package appBundle
 * @subpackage entity
 */
class Setting
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $key;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    private $value;
    
    /**
     * @ORM\Column(type="date")
     * @var \DateTime
     */
    public $created;
    
    /**
     * @ORM\Column(type="date" , nullable=true)
     * @var \DateTime
     */
    public $modified = null;
    
    /**
     * Get id
     * 
     * 
     * @access public
     * @return int id
     */
    public function getId() {
        return $this->id;
    }  
    
    /**
     * Get key
     * 
     * 
     * @access public
     * @return string key
     */
    public function getKey() {
        return $this->key;
    }    

    /**
     * Set key
     * 
     * 
     * @access public
     * @param string $key
     * @return Setting current entity
     */
    public function setKey($key) {
        $this->key = $key;
        return $this;
    }
    
    /**
     * Get value
     * 
     * 
     * @access public
     * @return string value
     */
    public function getValue() {
        return $this->value;
    }    

    /**
     * Set value
     * 
     * 
     * @access public
     * @param string $value
     * @return Setting current entity
     */
    public function setValue($value) {
        $this->value = $value;
        return $this;
    }
   
    /**
     * Get created
     * 
     * 
     * @access public
     * @return \DateTime created
     */
    public function getCreated() {
        return $this->created;
    }
    
    /**
     * Set created
     * 
     * @ORM\PrePersist
     * @access public
     * @return Setting current entity
     */
    public function setCreated() {
        $this->created = new \DateTime();
        return $this;
    }
    
    /**
     * Get modified
     * 
     * 
     * @access public
     * @return \DateTime modified
     */
    public function getModified() {
        return $this->modified;
    }
    
    /**
     * Set modified
     * 
     * @ORM\PreUpdate
     * @access public
     * @return Setting current entity
     */
    public function setModified() {
        $this->modified = new \DateTime();
        return $this;
    }

}
