<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/scheduler/v1/cloudscheduler.proto

namespace GPBMetadata\Google\Cloud\Scheduler\V1;

class Cloudscheduler
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Scheduler\V1\Job::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a8d140a2e676f6f676c652f636c6f75642f7363686564756c65722f76312f636c6f75647363686564756c65722e70726f746f1219676f6f676c652e636c6f75642e7363686564756c65722e76311a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a23676f6f676c652f636c6f75642f7363686564756c65722f76312f6a6f622e70726f746f1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e70726f746f22730a0f4c6973744a6f62735265717565737412390a06706172656e741801200128094229e04102fa41231221636c6f75647363686564756c65722e676f6f676c65617069732e636f6d2f4a6f6212110a09706167655f73697a6518052001280512120a0a706167655f746f6b656e18062001280922590a104c6973744a6f6273526573706f6e7365122c0a046a6f627318012003280b321e2e676f6f676c652e636c6f75642e7363686564756c65722e76312e4a6f6212170a0f6e6578745f706167655f746f6b656e18022001280922480a0d4765744a6f625265717565737412370a046e616d651801200128094229e04102fa41230a21636c6f75647363686564756c65722e676f6f676c65617069732e636f6d2f4a6f62227f0a104372656174654a6f625265717565737412390a06706172656e741801200128094229e04102fa41231221636c6f75647363686564756c65722e676f6f676c65617069732e636f6d2f4a6f6212300a036a6f6218022001280b321e2e676f6f676c652e636c6f75642e7363686564756c65722e76312e4a6f624203e04102227a0a105570646174654a6f625265717565737412300a036a6f6218012001280b321e2e676f6f676c652e636c6f75642e7363686564756c65722e76312e4a6f624203e0410212340a0b7570646174655f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b4203e04102224b0a1044656c6574654a6f625265717565737412370a046e616d651801200128094229e04102fa41230a21636c6f75647363686564756c65722e676f6f676c65617069732e636f6d2f4a6f62224a0a0f50617573654a6f625265717565737412370a046e616d651801200128094229e04102fa41230a21636c6f75647363686564756c65722e676f6f676c65617069732e636f6d2f4a6f62224b0a10526573756d654a6f625265717565737412370a046e616d651801200128094229e04102fa41230a21636c6f75647363686564756c65722e676f6f676c65617069732e636f6d2f4a6f6222480a0d52756e4a6f625265717565737412370a046e616d651801200128094229e04102fa41230a21636c6f75647363686564756c65722e676f6f676c65617069732e636f6d2f4a6f6232b30a0a0e436c6f75645363686564756c6572129e010a084c6973744a6f6273122a2e676f6f676c652e636c6f75642e7363686564756c65722e76312e4c6973744a6f6273526571756573741a2b2e676f6f676c652e636c6f75642e7363686564756c65722e76312e4c6973744a6f6273526573706f6e7365223982d3e493022a12282f76312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a7d2f6a6f6273da4106706172656e74128b010a064765744a6f6212282e676f6f676c652e636c6f75642e7363686564756c65722e76312e4765744a6f62526571756573741a1e2e676f6f676c652e636c6f75642e7363686564756c65722e76312e4a6f62223782d3e493022a12282f76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6a6f62732f2a7dda41046e616d65129c010a094372656174654a6f62122b2e676f6f676c652e636c6f75642e7363686564756c65722e76312e4372656174654a6f62526571756573741a1e2e676f6f676c652e636c6f75642e7363686564756c65722e76312e4a6f62224282d3e493022f22282f76312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a7d2f6a6f62733a036a6f62da410a706172656e742c6a6f6212a5010a095570646174654a6f62122b2e676f6f676c652e636c6f75642e7363686564756c65722e76312e5570646174654a6f62526571756573741a1e2e676f6f676c652e636c6f75642e7363686564756c65722e76312e4a6f62224b82d3e4930233322c2f76312f7b6a6f622e6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6a6f62732f2a7d3a036a6f62da410f6a6f622c7570646174655f6d61736b1289010a0944656c6574654a6f62122b2e676f6f676c652e636c6f75642e7363686564756c65722e76312e44656c6574654a6f62526571756573741a162e676f6f676c652e70726f746f6275662e456d707479223782d3e493022a2a282f76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6a6f62732f2a7dda41046e616d651298010a0850617573654a6f62122a2e676f6f676c652e636c6f75642e7363686564756c65722e76312e50617573654a6f62526571756573741a1e2e676f6f676c652e636c6f75642e7363686564756c65722e76312e4a6f62224082d3e4930233222e2f76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6a6f62732f2a7d3a70617573653a012ada41046e616d65129b010a09526573756d654a6f62122b2e676f6f676c652e636c6f75642e7363686564756c65722e76312e526573756d654a6f62526571756573741a1e2e676f6f676c652e636c6f75642e7363686564756c65722e76312e4a6f62224182d3e4930234222f2f76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6a6f62732f2a7d3a726573756d653a012ada41046e616d651292010a0652756e4a6f6212282e676f6f676c652e636c6f75642e7363686564756c65722e76312e52756e4a6f62526571756573741a1e2e676f6f676c652e636c6f75642e7363686564756c65722e76312e4a6f62223e82d3e4930231222c2f76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6a6f62732f2a7d3a72756e3a012ada41046e616d651a51ca411d636c6f75647363686564756c65722e676f6f676c65617069732e636f6dd2412e68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c6174666f726d4281010a1d636f6d2e676f6f676c652e636c6f75642e7363686564756c65722e7631420e5363686564756c657250726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f7363686564756c65722f76313b7363686564756c6572a202095343484544554c4552620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

