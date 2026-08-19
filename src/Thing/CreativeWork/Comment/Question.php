<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Comment;

  use Sohophp\SchemaOrg\Thing\CreativeWork\Comment;
  use Sohophp\SchemaOrg\Thing\Intangible\ItemList;
  use Sohophp\SchemaOrg\Thing\CreativeWork\Comment\Answer;
  use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
  * A specific question - e.g. from a user seeking answers online, or collected
 * in a Frequently Asked Questions (FAQ) document.
  * @see schema:Question
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Comment
*/
class Question extends Comment
{


  /**
      * The answer(s) that has been accepted as best, typically on a Question/Answer
 * site. Sites vary in their selection mechanisms, e.g. drawing on community
 * opinion and/or the view of the Question author.
    * @param ItemList|Answer|array $value
  * @return $this
  */
  public function acceptedAnswer($value)
  {
  $this->setProperty('acceptedAnswer', $value);
  return $this;
  }

  /**
  * @param ItemList|Answer|array $value
  * @return $this
  */
  public function setAcceptedAnswer($value)
  {
  $this->setProperty('acceptedAnswer', $value);
  return $this;
  }

  /**
  * @param ItemList|Answer $value
  * @return $this
  */
  public function addAcceptedAnswer($value)
  {
  $current = $this->getProperty('acceptedAnswer');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('acceptedAnswer', $current);
  return $this;
  }

  /**
  * @return ItemList|Answer|array
  */
  public function getAcceptedAnswer()
  {
  return $this->getProperty('acceptedAnswer');
  }


  /**
      * The number of answers this question has received.
    * @param int|array $value
  * @return $this
  */
  public function answerCount($value)
  {
  $this->setProperty('answerCount', $value);
  return $this;
  }

  /**
  * @param int|array $value
  * @return $this
  */
  public function setAnswerCount($value)
  {
  $this->setProperty('answerCount', $value);
  return $this;
  }

  /**
  * @param int $value
  * @return $this
  */
  public function addAnswerCount($value)
  {
  $current = $this->getProperty('answerCount');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('answerCount', $current);
  return $this;
  }

  /**
  * @return int|array
  */
  public function getAnswerCount()
  {
  return $this->getProperty('answerCount');
  }


  /**
      * An answer (possibly one of several, possibly incorrect) to a Question, e.g.
 * on a Question/Answer site.
    * @param ItemList|Answer|array $value
  * @return $this
  */
  public function suggestedAnswer($value)
  {
  $this->setProperty('suggestedAnswer', $value);
  return $this;
  }

  /**
  * @param ItemList|Answer|array $value
  * @return $this
  */
  public function setSuggestedAnswer($value)
  {
  $this->setProperty('suggestedAnswer', $value);
  return $this;
  }

  /**
  * @param ItemList|Answer $value
  * @return $this
  */
  public function addSuggestedAnswer($value)
  {
  $current = $this->getProperty('suggestedAnswer');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('suggestedAnswer', $current);
  return $this;
  }

  /**
  * @return ItemList|Answer|array
  */
  public function getSuggestedAnswer()
  {
  return $this->getProperty('suggestedAnswer');
  }


  /**
      * For questions that are part of learning resources (e.g. Quiz),
 * eduQuestionType indicates the format of question being given. Example:
 * "Multiple choice", "Open ended", "Flashcard".
    * @param string|array $value
  * @return $this
  */
  public function eduQuestionType($value)
  {
  $this->setProperty('eduQuestionType', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setEduQuestionType($value)
  {
  $this->setProperty('eduQuestionType', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addEduQuestionType($value)
  {
  $current = $this->getProperty('eduQuestionType');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('eduQuestionType', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getEduQuestionType()
  {
  return $this->getProperty('eduQuestionType');
  }


  /**
      * The parent of a question, answer or item in general. Typically used for Q/A
 * discussion threads e.g. a chain of comments with the first comment being an
 * [[Article]] or other [[CreativeWork]]. See also [[comment]] which points from
 * something to a comment about it.
    * @param CreativeWork|Comment|array $value
  * @return $this
  */
  public function parentItem($value)
  {
  $this->setProperty('parentItem', $value);
  return $this;
  }

  /**
  * @param CreativeWork|Comment|array $value
  * @return $this
  */
  public function setParentItem($value)
  {
  $this->setProperty('parentItem', $value);
  return $this;
  }

  /**
  * @param CreativeWork|Comment $value
  * @return $this
  */
  public function addParentItem($value)
  {
  $current = $this->getProperty('parentItem');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('parentItem', $current);
  return $this;
  }

  /**
  * @return CreativeWork|Comment|array
  */
  public function getParentItem()
  {
  return $this->getProperty('parentItem');
  }


}
