<?php
class Task {
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private int $priority;
    private bool  $isDone = false;
    private User $user;
    private Comment $text;


    public function __construct(?string $description = null, ?int $priority = null)
    {
        $this->description = $description;
        $this->priority = $priority;
        $this->setDateCreated(new DateTime());
    }
    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;
        $this->setDateUpdated(new DateTime());
        return $this;
    }

    /**
     * Get the value of dateCreated
     */ 
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set the value of dateCreated
     *
     * @return  self
     */ 
    public function setDateCreated()
    {
        $this->dateCreated = new DateTime();

        return $this;
    }

    /**
     * Get the value of dateUpdated
     */ 
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    /**
     * Set the value of dateUpdated
     *
     * @return  self
     */ 
    public function setDateUpdated()
    {
        $this->dateUpdated = new DateTime();

        return $this;
    }

    /**
     * Get the value of dateDone
     */ 
    public function getDateDone()
    {
        return $this->dateDone;
    }

    /**
     * Set the value of dateDone
     *
     * @return  self
     */ 
    public function setDateDone()
    {
        $this->dateDone = new DateTime();

        return $this;
    }

    /**
     * Get the value of priority
     */ 
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set the value of priority
     *
     * @return  self
     */ 
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get the value of isDone
     */ 
    public function getIsDone()
    {
        return $this->isDone;
    }

    /**
     * Set the value of isDone
     *
     * @return  self
     */ 
    private function setIsDone()
    {
        $this->isDone = true;

        return $this;
    }

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

   public function markAsDone (){
    $this->setIsDone();
    $this->setDateUpdated(new DateTime());
    $this->setDateDone(new DateTime());
   }


    /**
     * Get the value of text
     */ 
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the value of text
     *
     * @return  self
     */ 
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }
}