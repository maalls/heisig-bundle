<?php
namespace Maalls\HeisigBundle\Tests\Repository;

include __dir__ . "/../../src/Lib/Text.php";

use Maalls\HeisigBundle\Entity\Heisig;
use PHPUnit\Framework\TestCase;
use Maalls\HeisigBundle\Lib\Text;

class TextTest extends TestCase
{

    public function testSplitKanji()
    {
        /*$products = $this->entityManager
            ->getRepository(Product::class)
            ->searchByCategoryName('foo')
        ;*/

        $rep = new Text();

        $kanjis = $rep->splitKanjis("この度、当サイトにてご予約");
        $this->assertEquals(["度", "当", "予", "約"], $kanjis);

    }

}