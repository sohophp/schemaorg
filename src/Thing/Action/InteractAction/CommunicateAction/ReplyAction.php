<?php
namespace Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

  use Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;
  use Sohophp\SchemaOrg\Thing\CreativeWork\Comment;

/**
  * The act of responding to a question/message asked/sent by the object. Related
 * to [[AskAction]].
 * 
 * Related actions:
 * 
 * * [[AskAction]]: Appears generally as an origin of a ReplyAction.
  * @see schema:ReplyAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction
*/
class ReplyAction extends CommunicateAction
{


  /**
      * A sub property of result. The Comment created or sent as a result of this
 * action.
    * @param Comment|array $value
  * @return $this
  */
  public function resultComment($value)
  {
  $this->setProperty('resultComment', $value);
  return $this;
  }

  /**
  * @param Comment|array $value
  * @return $this
  */
  public function setResultComment($value)
  {
  $this->setProperty('resultComment', $value);
  return $this;
  }

  /**
  * @param Comment $value
  * @return $this
  */
  public function addResultComment($value)
  {
  $current = $this->getProperty('resultComment');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('resultComment', $current);
  return $this;
  }

  /**
  * @return Comment|array
  */
  public function getResultComment()
  {
  return $this->getProperty('resultComment');
  }


}
