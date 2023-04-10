<?php

namespace Reflection;

use Exception;
use Reflection\Book;

class Seralizer
{

    public function serialize($data, $normalize = 'object')
    {
        switch ($normalize) {
            case 'object':
                $data = $this->objectNormalize($data);
                break;
            case 'GetSetMethod':
                break;
            default:
                throw new \Exception($normalize, 'not found');
        }
        return $this->encode($data);
    }

    private function objectNormalize($data)
    {
        $finalData = [];
        if (is_iterable($data)) {
            foreach ($data as $item) {
                $finalData = $this->normalizesingleobject($item);
            }
        } else {
            $finalData = $this->normalizesingleobject($data);
        }
        return $finalData;
    }

    private function encode($data)
    {
        try {
            return json_encode($data);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function normalizesingleobject($data)
    {
        $array = [];
        if (is_object($data)) {
            $refClass =  new ReflectionClass(Book::class);
            $properties = $refClass->getProperties(ReflectionClass::IS_PRIVATE);
            foreach ($properties as $property) {
                $property->setAccessible(true);
                $array[$property->getName] = $property->getValue($data);
            }
        }

        return $array;
    }
}