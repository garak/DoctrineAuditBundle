<?php

namespace DH\DoctrineAuditBundle\Tests\Fixtures\Core\Standard;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table(name="`comment`", indexes={@ORM\Index(name="fk__idx", columns={"post_id"})})
 */
class Comment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned": true})
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\Column(type="text")
     */
    protected $body;

    /**
     * Comment author email.
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $author;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    protected $created_at;

    /**
     * @ORM\Column(type="integer", options={"unsigned": true})
     */
    protected $post_id;

    /**
     * @ORM\ManyToOne(targetEntity="Post", inversedBy="comments", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="post_id", referencedColumnName="id", nullable=false)
     */
    protected $post;

    public function __construct()
    {
    }

    public function __sleep()
    {
        return ['id', 'body', 'author', 'created_at', 'post_id'];
    }

    /**
     * Set the value of id.
     *
     * @param int $id
     *
     * @return Comment
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id.
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of body.
     *
     * @param string $body
     *
     * @return Comment
     */
    public function setBody(string $body): self
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get the value of body.
     *
     * @return string|null
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set the value of author.
     *
     * @param string $author
     *
     * @return Comment
     */
    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of author.
     *
     * @return string|null
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of created_at.
     *
     * @param null|DateTime $created_at
     *
     * @return Comment
     */
    public function setCreatedAt(DateTime $created_at = null): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of created_at.
     *
     * @return null|DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set the value of post_id.
     *
     * @param int $post_id
     *
     * @return Comment
     */
    public function setPostId(int $post_id): self
    {
        $this->post_id = $post_id;

        return $this;
    }

    /**
     * Get the value of post_id.
     *
     * @return int|null
     */
    public function getPostId()
    {
        return $this->post_id;
    }

    /**
     * Set Post entity (many to one).
     *
     * @param null|Post $post
     *
     * @return Comment
     */
    public function setPost(Post $post = null): self
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get Post entity (many to one).
     *
     * @return null|Post
     */
    public function getPost()
    {
        return $this->post;
    }
}
