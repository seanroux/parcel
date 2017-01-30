<?php

namespace SeanRoux\Parcel;

use DVDoug\BoxPacker\Box as BoxInterface;

class Box implements BoxInterface
{
    public function __construct(
      $reference,
      $outerWidth,
      $outerLength,
      $outerDepth,
      $emptyWeight,
      $innerWidth,
      $innerLength,
      $innerDepth,
      $maxWeight
  ) {
        $this->reference = $reference;
        $this->outerWidth = $outerWidth;
        $this->outerLength = $outerLength;
        $this->outerDepth = $outerDepth;
        $this->emptyWeight = $emptyWeight;
        $this->innerWidth = $innerWidth;
        $this->innerLength = $innerLength;
        $this->innerDepth = $innerDepth;
        $this->maxWeight = $maxWeight;
        $this->innerVolume = $this->innerWidth * $this->innerLength * $this->innerDepth;
    }

    public function getReference()
    {
        return $this->reference;
    }

    public function getOuterWidth()
    {
        return $this->outerWidth;
    }

    public function getOuterLength()
    {
        return $this->outerLength;
    }

    public function getOuterDepth()
    {
        return $this->outerDepth;
    }

    public function getEmptyWeight()
    {
        return $this->emptyWeight;
    }

    public function getInnerWidth()
    {
        return $this->innerWidth;
    }

    public function getInnerLength()
    {
        return $this->innerLength;
    }

    public function getInnerDepth()
    {
        return $this->innerDepth;
    }

    public function getInnerVolume()
    {
        return $this->innerVolume;
    }

    public function getMaxWeight()
    {
        return $this->maxWeight;
    }
}
