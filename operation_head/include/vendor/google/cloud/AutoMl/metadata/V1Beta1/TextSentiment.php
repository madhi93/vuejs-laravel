<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/text_sentiment.proto

namespace GPBMetadata\Google\Cloud\Automl\V1Beta1;

class TextSentiment
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Classification::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa5050a30676f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f746578745f73656e74696d656e742e70726f746f121b676f6f676c652e636c6f75642e6175746f6d6c2e763162657461311a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f222c0a175465787453656e74696d656e74416e6e6f746174696f6e12110a0973656e74696d656e7418012001280522c5020a1e5465787453656e74696d656e744576616c756174696f6e4d65747269637312110a09707265636973696f6e180120012802120e0a06726563616c6c18022001280212100a0866315f73636f7265180320012802121b0a136d65616e5f6162736f6c7574655f6572726f72180420012802121a0a126d65616e5f737175617265645f6572726f7218052001280212140a0c6c696e6561725f6b6170706118062001280212170a0f7175616472617469635f6b6170706118072001280212660a10636f6e667573696f6e5f6d617472697818082001280b324c2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e436c617373696669636174696f6e4576616c756174696f6e4d6574726963732e436f6e667573696f6e4d6174726978121e0a12616e6e6f746174696f6e5f737065635f69641809200328094202180142b7010a1f636f6d2e676f6f676c652e636c6f75642e6175746f6d6c2e7631626574613142125465787453656e74696d656e7450726f746f5a41676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f6175746f6d6c2f763162657461313b6175746f6d6cca021b476f6f676c655c436c6f75645c4175746f4d6c5c56316265746131ea021e476f6f676c653a3a436c6f75643a3a4175746f4d4c3a3a56316265746131620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
