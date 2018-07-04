<?php
    use PHPUnit\Framework\TestCase;
    require_once './src/SummaryRanges.php';

    class SummaryRangesTest extends TestCase {
        public function testSummaryRanges() {
            $testDataSummaryRanges = array(
                array(
                    "result" => ["0->2", "4->5"],
                    "input" => [0, 1, 2, 4, 5, 7]
                ),
                array(
                    "result" => ["-2->1", "4->5", "99->102"],
                    "input" => [-2, -1, 0, 1, 4, 5, 7, 99, 100, 101, 102, 333]
                )
            );

            for($i = 0; $i < count($testDataSummaryRanges); $i++) {
                $this->assertEquals($testDataSummaryRanges[$i]["result"], summaryRanges($testDataSummaryRanges[$i]["input"]));
            }
        }
    }
?>