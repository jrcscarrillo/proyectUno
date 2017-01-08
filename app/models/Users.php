<?php

use Phalcon\Mvc\Model\Validator\Email as Email;

class Users extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=10, nullable=false)
     */
    protected $id;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    protected $name;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    protected $email;

    /**
     *
     * @var string
     * @Column(type="string", length=60, nullable=false)
     */
    protected $password;

    /**
     *
     * @var string
     * @Column(type="string", length=1, nullable=true)
     */
    protected $mustChangePassword;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=false)
     */
    protected $profilesId;

    /**
     *
     * @var string
     * @Column(type="string", length=1, nullable=false)
     */
    protected $banned;

    /**
     *
     * @var string
     * @Column(type="string", length=1, nullable=false)
     */
    protected $suspended;

    /**
     *
     * @var string
     * @Column(type="string", length=1, nullable=true)
     */
    protected $active;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Method to set the value of field email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Method to set the value of field password
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Method to set the value of field mustChangePassword
     *
     * @param string $mustChangePassword
     * @return $this
     */
    public function setMustChangePassword($mustChangePassword)
    {
        $this->mustChangePassword = $mustChangePassword;

        return $this;
    }

    /**
     * Method to set the value of field profilesId
     *
     * @param integer $profilesId
     * @return $this
     */
    public function setProfilesId($profilesId)
    {
        $this->profilesId = $profilesId;

        return $this;
    }

    /**
     * Method to set the value of field banned
     *
     * @param string $banned
     * @return $this
     */
    public function setBanned($banned)
    {
        $this->banned = $banned;

        return $this;
    }

    /**
     * Method to set the value of field suspended
     *
     * @param string $suspended
     * @return $this
     */
    public function setSuspended($suspended)
    {
        $this->suspended = $suspended;

        return $this;
    }

    /**
     * Method to set the value of field active
     *
     * @param string $active
     * @return $this
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Returns the value of field password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Returns the value of field mustChangePassword
     *
     * @return string
     */
    public function getMustChangePassword()
    {
        return $this->mustChangePassword;
    }

    /**
     * Returns the value of field profilesId
     *
     * @return integer
     */
    public function getProfilesId()
    {
        return $this->profilesId;
    }

    /**
     * Returns the value of field banned
     *
     * @return string
     */
    public function getBanned()
    {
        return $this->banned;
    }

    /**
     * Returns the value of field suspended
     *
     * @return string
     */
    public function getSuspended()
    {
        return $this->suspended;
    }

    /**
     * Returns the value of field active
     *
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $this->validate(
            new Email(
                [
                    'field'    => 'email',
                    'required' => true,
                ]
            )
        );

        if ($this->validationHasFailed() == true) {
            return false;
        }

        return true;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'users';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
