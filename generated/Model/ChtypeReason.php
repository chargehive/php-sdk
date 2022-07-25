<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeReason
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
    public function getDescription() : string
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
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReasonType() : string
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
    public function setReasonType(string $reasonType) : self
    {
        $this->reasonType = $reasonType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRequestorComment() : string
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
    public function setRequestorComment(string $requestorComment) : self
    {
        $this->requestorComment = $requestorComment;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRequestedBy() : string
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
    public function setRequestedBy(string $requestedBy) : self
    {
        $this->requestedBy = $requestedBy;
        return $this;
    }
}