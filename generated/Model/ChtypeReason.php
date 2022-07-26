<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeReason implements \JsonSerializable
{
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $reasonType = 'REASON_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $requestorComment;
    /**
     * 
     *
     * @var string
     */
    protected $requestedBy = 'ACTOR_TYPE_INVALID';
    /**
     * 
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReasonType()
    {
        return $this->reasonType;
    }
    /**
     * 
     *
     * @param string $reasonType
     *
     * @return self
     */
    public function setReasonType(string $reasonType)
    {
        $this->reasonType = $reasonType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRequestorComment()
    {
        return $this->requestorComment;
    }
    /**
     * 
     *
     * @param string $requestorComment
     *
     * @return self
     */
    public function setRequestorComment(string $requestorComment)
    {
        $this->requestorComment = $requestorComment;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRequestedBy()
    {
        return $this->requestedBy;
    }
    /**
     * 
     *
     * @param string $requestedBy
     *
     * @return self
     */
    public function setRequestedBy(string $requestedBy)
    {
        $this->requestedBy = $requestedBy;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['description' => $this->description, 'reasonType' => $this->reasonType, 'requestorComment' => $this->requestorComment, 'requestedBy' => $this->requestedBy];
    }
}