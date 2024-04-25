<?php
/**
 * Interface Serializer
 *
 * @author Diego Wagner <diegowagner4@gmail.com>
 * http://www.discoverytecnologia.com.br
 */
namespace Dsc\MercadoLivre\Parser;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerInterface as JMSSerializerInterface;

interface SerializerInterface extends JMSSerializerInterface
{
    /**
     * Serializes the given data to the specified output format.
     *
     * @param mixed $data
     *
     * @throws RuntimeException
     */
    public function serialize($data, string $format, ?SerializationContext $context = null, ?string $type = null): string;

    /**
     * @param string $data
     * @param string $type
     * @param string $format
     * @param DeserializationContext|null $context
     * @return mixed
     */
    public function deserialize($data, $type, $format = Formatter::JSON, DeserializationContext $context = null);
}
