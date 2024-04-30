<?php

use Dto\Trias;
use PHPUnit\Framework\TestCase;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\NameConverter\NameConverterInterface;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

class Test extends TestCase
{

    private Symfony\Component\Serializer\Serializer $serializer;

    public function setUp(): void
    {
        $nameconverter = new class() implements NameConverterInterface {
            #[Override]
            public function normalize(string $propertyName): string
            {
                return ucfirst($propertyName);
            }

            #[Override]
            public function denormalize(string $propertyName): string
            {
                return lcfirst($propertyName);
            }
        };


        $this->serializer = new Serializer(
            [
                new GetSetMethodNormalizer(
                    null,
                    $nameconverter,
                    new PhpDocExtractor,
                ),
                new ArrayDenormalizer(),
            ],
            [new XmlEncoder()]
        );
    }

    public function test(): void
    {
        static::expectNotToPerformAssertions();
        $xml = file_get_contents(__DIR__ . '/input.xml') ?: static::fail('cant load input.xml');
        $this->serializer->deserialize($xml, Trias::class, XmlEncoder::FORMAT);
    }
}
