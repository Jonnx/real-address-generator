<?php

namespace RealAddressGenerator;

use InvalidArgumentException;

class Generator
{
    protected $dataset;

    public function __construct($dataset)
    {
        // check dataset
        $this->dataset = $dataset;
        
        if (!$this->datasetExists()) {
            throw new InvalidArgumentException("Dataset {$dataset} does not exist.");
        }
    }

    public function address()
    {
        $linesInDataset = $this->getLinesInDataset();
        $randLineIndex = rand(0, $linesInDataset-1);
        $line = $this->getLine($randLineIndex);
        return json_decode($line);
    }

    public function datasetExists()
    {
        return file_exists($this->getDatasetFilePath());
    }

    protected function getDatasetFilePath()
    {
        return $this->dataset;
    }
    
    public function getLinesInDataset()
    {
        $handle = gzopen($this->getDatasetFilePath(), "r");
        $lineCount = 0;
        while (!gzeof($handle)) {
            $line = gzgets($handle);
            $lineCount++;
        }
        gzclose($handle);

        return $lineCount;
    }

    public function getLine($rowIdx)
    {
        $handle = gzopen($this->getDatasetFilePath(), "r");
        $i = 0;
        while (!gzeof($handle)) {
            $line = gzgets($handle);
            if ($i == $rowIdx) {
                return $line;
            }
            $i++;
        }
        gzclose($handle);

        return null;
    }
}
