<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2/task.proto

namespace GPBMetadata\Google\Cloud\Tasks\V2;

class Task
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Tasks\V2\Target::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0acc090a20676f6f676c652f636c6f75642f7461736b732f76322f7461736b2e70726f746f1215676f6f676c652e636c6f75642e7461736b732e76321a22676f6f676c652f636c6f75642f7461736b732f76322f7461726765742e70726f746f1a1e676f6f676c652f70726f746f6275662f6475726174696f6e2e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f1a17676f6f676c652f7270632f7374617475732e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22b4050a045461736b120c0a046e616d65180120012809124e0a176170705f656e67696e655f687474705f7265717565737418022001280b322b2e676f6f676c652e636c6f75642e7461736b732e76322e417070456e67696e6548747470526571756573744800123a0a0c687474705f7265717565737418032001280b32222e676f6f676c652e636c6f75642e7461736b732e76322e4874747052657175657374480012310a0d7363686564756c655f74696d6518042001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70122f0a0b6372656174655f74696d6518052001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012340a1164697370617463685f646561646c696e6518062001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e12160a0e64697370617463685f636f756e7418072001280512160a0e726573706f6e73655f636f756e7418082001280512350a0d66697273745f617474656d707418092001280b321e2e676f6f676c652e636c6f75642e7461736b732e76322e417474656d707412340a0c6c6173745f617474656d7074180a2001280b321e2e676f6f676c652e636c6f75642e7461736b732e76322e417474656d7074122e0a0476696577180b2001280e32202e676f6f676c652e636c6f75642e7461736b732e76322e5461736b2e5669657722310a045669657712140a10564945575f554e535045434946494544100012090a054241534943100112080a0446554c4c10023a68ea41650a1e636c6f75647461736b732e676f6f676c65617069732e636f6d2f5461736b124370726f6a656374732f7b70726f6a6563747d2f6c6f636174696f6e732f7b6c6f636174696f6e7d2f7175657565732f7b71756575657d2f7461736b732f7b7461736b7d420e0a0c6d6573736167655f7479706522cf010a07417474656d707412310a0d7363686564756c655f74696d6518012001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012310a0d64697370617463685f74696d6518022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012310a0d726573706f6e73655f74696d6518032001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70122b0a0f726573706f6e73655f73746174757318042001280b32122e676f6f676c652e7270632e53746174757342640a19636f6d2e676f6f676c652e636c6f75642e7461736b732e763242095461736b50726f746f50015a3a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f7461736b732f76323b7461736b73620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

