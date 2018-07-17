<?php

namespace Trello\Event;

use Trello\Model\ActionInterface;
use Trello\Model\MemberInterface;

class CardCommentEvent extends CardEvent
{
    /**
     * @var ActionInterface
     */
    protected $comment;
    /**
     * @var MemberInterface
     */
    protected $member;
    /**
     * @var integer
     */
    protected $id;
    /**
     * @var string
     */
    protected $authorFullName;

    /**
     * Set comment
     *
     * @param ActionInterface $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get comment
     *
     * @return ActionInterface
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set member
     *
     * @param MemberInterface $member
     */
    public function setMember(MemberInterface $member)
    {
        $this->member = $member;
    }

    /**
     * Get member
     *
     * @return MemberInterface
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Set comment id
     *
     * @param integer $id
     */
    public function setCommentId($id)
    {
        $this->id = $id;
    }

    /**
     * Get comment id
     *
     * @return integer
     */
    public function getCommentId()
    {
        return $this->id;
    }

    /**
     * Set comment author full name
     *
     * @param string $name
     */
    public function setCommentCreatorFullName($name)
    {
        $this->authorFullName = $name;
    }

    /**
     * Get comment author full name
     *
     * @return string
     */
    public function getCommentCreatorFullName()
    {
        return $this->authorFullName;
    }
}
