<?php

namespace Maalls\HeisigBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
//use Maalls\JMDictBundle\Entity\Word;
/**
 * @ORM\Table( 
 *    uniqueConstraints={
 *        @ORM\UniqueConstraint(name="kanji", 
 *            columns={"kanji"})
 *    }
 * )
 * @ORM\Entity(repositoryClass="Maalls\HeisigBundle\Repository\HeisigRepository")
 */
class Heisig
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    // add your own fields

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    private $frameNoV4;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    private $frameNoV6;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=64)
     */
    private $keyword;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=64)
     */
    private $kanji;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=64)
     */
    private $strokeDiagram;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $hint;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $constituent;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    private $strokeCount;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    private $lessonNo;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $myStory;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $heisigStory;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $heisigComment;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $koohiiStory1;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $koohiiStory2;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    private $jouYou;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    private $jlpt;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=256)
     */
    private $onYomi;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=256)
     */
    private $kunYomi;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $words;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $readingExamples;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=64)
     */
    private $Tags;




    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return integer
     */
    public function getHeisigId()
    {
        return $this->heisigId;
    }

    /**
     * @param integer $heisigId
     *
     * @return self
     */
    public function setHeisigId($heisigId)
    {
        $this->heisigId = $heisigId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getFrameNoV4()
    {
        return $this->frameNoV4;
    }

    /**
     * @param integer $frameNoV4
     *
     * @return self
     */
    public function setFrameNoV4($frameNoV4)
    {
        $this->frameNoV4 = $frameNoV4;

        return $this;
    }

    /**
     * @return integer
     */
    public function getFrameNoV6()
    {
        return $this->frameNoV6;
    }

    /**
     * @param integer $frameNoV6
     *
     * @return self
     */
    public function setFrameNoV6($frameNoV6)
    {
        $this->frameNoV6 = $frameNoV6;

        return $this;
    }

    /**
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param string $keyword
     *
     * @return self
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * @return string
     */
    public function getKanji()
    {
        return $this->kanji;
    }

    /**
     * @param string $kanji
     *
     * @return self
     */
    public function setKanji($kanji)
    {
        $this->kanji = $kanji;

        return $this;
    }

    /**
     * @return string
     */
    public function getStrokeDiagram()
    {
        return $this->strokeDiagram;
    }

    /**
     * @param string $strokeDiagram
     *
     * @return self
     */
    public function setStrokeDiagram($strokeDiagram)
    {
        $this->strokeDiagram = $strokeDiagram;

        return $this;
    }

    /**
     * @return string
     */
    public function getHint()
    {
        return $this->hint;
    }

    /**
     * @param string $hint
     *
     * @return self
     */
    public function setHint($hint)
    {
        $this->hint = $hint;

        return $this;
    }

    /**
     * @return string
     */
    public function getConstituent()
    {
        return $this->constituent;
    }

    /**
     * @param string $constituent
     *
     * @return self
     */
    public function setConstituent($constituent)
    {
        $this->constituent = $constituent;

        return $this;
    }

    /**
     * @return integer
     */
    public function getStrokeCount()
    {
        return $this->strokeCount;
    }

    /**
     * @param integer $strokeCount
     *
     * @return self
     */
    public function setStrokeCount($strokeCount)
    {
        $this->strokeCount = $strokeCount;

        return $this;
    }

    /**
     * @return integer
     */
    public function getLessonNo()
    {
        return $this->lessonNo;
    }

    /**
     * @param integer $lessonNo
     *
     * @return self
     */
    public function setLessonNo($lessonNo)
    {
        $this->lessonNo = $lessonNo;

        return $this;
    }

    /**
     * @return string
     */
    public function getMyStory()
    {
        return $this->myStory;
    }

    /**
     * @param string $myStory
     *
     * @return self
     */
    public function setMyStory($myStory)
    {
        $this->myStory = $myStory;

        return $this;
    }

    /**
     * @return string
     */
    public function getHeisigStory()
    {
        return $this->heisigStory;
    }

    /**
     * @param string $heisigStory
     *
     * @return self
     */
    public function setHeisigStory($heisigStory)
    {
        $this->heisigStory = $heisigStory;

        return $this;
    }

    /**
     * @return string
     */
    public function getHeisigComment()
    {
        return $this->heisigComment;
    }

    /**
     * @param string $heisigComment
     *
     * @return self
     */
    public function setHeisigComment($heisigComment)
    {
        $this->heisigComment = $heisigComment;

        return $this;
    }

    /**
     * @return string
     */
    public function getKoohiiStory1()
    {
        return $this->koohiiStory1;
    }

    /**
     * @param string $koohiiStory1
     *
     * @return self
     */
    public function setKoohiiStory1($koohiiStory1)
    {
        $this->koohiiStory1 = $koohiiStory1;

        return $this;
    }

    /**
     * @return string
     */
    public function getKoohiiStory2()
    {
        return $this->koohiiStory2;
    }

    /**
     * @param string $koohiiStory2
     *
     * @return self
     */
    public function setKoohiiStory2($koohiiStory2)
    {
        $this->koohiiStory2 = $koohiiStory2;

        return $this;
    }

    /**
     * @return integer
     */
    public function getJouYou()
    {
        return $this->jouYou;
    }

    /**
     * @param integer $jouYou
     *
     * @return self
     */
    public function setJouYou($jouYou)
    {
        $this->jouYou = $jouYou;

        return $this;
    }

    /**
     * @return integer
     */
    public function getJlpt()
    {
        return $this->jlpt;
    }

    /**
     * @param integer $jlpt
     *
     * @return self
     */
    public function setJlpt($jlpt)
    {
        $this->jlpt = $jlpt;

        return $this;
    }

    /**
     * @return string
     */
    public function getOnYomi()
    {
        return $this->onYomi;
    }

    /**
     * @param string $onYomi
     *
     * @return self
     */
    public function setOnYomi($onYomi)
    {
        $this->onYomi = $onYomi;

        return $this;
    }

    /**
     * @return string
     */
    public function getKunYomi()
    {
        return $this->kunYomi;
    }

    /**
     * @param string $kunYomi
     *
     * @return self
     */
    public function setKunYomi($kunYomi)
    {
        $this->kunYomi = $kunYomi;

        return $this;
    }

    /**
     * @return string
     */
    public function getWords()
    {
        return $this->words;
    }

    /**
     * @param string $words
     *
     * @return self
     */
    public function setWords($words)
    {
        $this->words = $words;

        return $this;
    }

    /**
     * @return string
     */
    public function getReadingExamples()
    {
        return $this->readingExamples;
    }

    /**
     * @param string $readingExamples
     *
     * @return self
     */
    public function setReadingExamples($readingExamples)
    {
        $this->readingExamples = $readingExamples;

        return $this;
    }

    /**
     * @return string
     */
    public function getTags()
    {
        return $this->Tags;
    }

    /**
     * @param string $Tags
     *
     * @return self
     */
    public function setTags($Tags)
    {
        $this->Tags = $Tags;

        return $this;
    }
}