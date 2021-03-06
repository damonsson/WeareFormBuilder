<?php 

namespace Weare\FormBuilderBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="FormBuilderRepository")
 * @ORM\Table(name="formbuilder__form")
 */
class FormBuilder
{
	 /**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")
*/
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;
     /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $submit;
    /**
     * @ORM\Column(type="string", length=1000,nullable = true)
     */
    private $description;
     /**
    * @ORM\OneToMany(targetEntity="Weare\FormBuilderBundle\Entity\FormBuilderField", mappedBy="form",cascade={"persist"})
    */
    protected $fields;
	
     /**
* @return string
*/
    public function __toString()
    {
        return (string)$this->name;
    }

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set form_name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fields = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add fields
     *
     * @param \Weare\FormBuilderBundle\Entity\FormBuilderField $fields
     * @return FormBuilder
     */
    public function addField(\Weare\FormBuilderBundle\Entity\FormBuilderField $fields)
    {
        $this->fields[] = $fields;
    
        return $this;
    }

    /**
     * Remove fields
     *
     * @param \Weare\FormBuilderBundle\Entity\FormBuilderField $fields
     */
    public function removeField(\Weare\FormBuilderBundle\Entity\FormBuilderField $fields)
    {
        $this->fields->removeElement($fields);
    }

    /**
     * Get fields
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return FormBuilder
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set submit
     *
     * @param string $submit
     * @return FormBuilder
     */
    public function setSubmit($submit)
    {
        $this->submit = $submit;
    
        return $this;
    }

    /**
     * Get submit
     *
     * @return string 
     */
    public function getSubmit()
    {
        return $this->submit;
    }
}