<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/servicedirectory/v1beta1/registration_service.proto

namespace GPBMetadata\Google\Cloud\Servicedirectory\V1Beta1;

class RegistrationService
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
        \GPBMetadata\Google\Cloud\Servicedirectory\V1Beta1\Endpoint::initOnce();
        \GPBMetadata\Google\Cloud\Servicedirectory\V1Beta1\PBNamespace::initOnce();
        \GPBMetadata\Google\Cloud\Servicedirectory\V1Beta1\Service::initOnce();
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0adf390a40676f6f676c652f636c6f75642f736572766963656469726563746f72792f763162657461312f726567697374726174696f6e5f736572766963652e70726f746f1225676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461311a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a34676f6f676c652f636c6f75642f736572766963656469726563746f72792f763162657461312f656e64706f696e742e70726f746f1a35676f6f676c652f636c6f75642f736572766963656469726563746f72792f763162657461312f6e616d6573706163652e70726f746f1a33676f6f676c652f636c6f75642f736572766963656469726563746f72792f763162657461312f736572766963652e70726f746f1a1e676f6f676c652f69616d2f76312f69616d5f706f6c6963792e70726f746f1a1a676f6f676c652f69616d2f76312f706f6c6963792e70726f746f1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e70726f746f22b8010a164372656174654e616d6573706163655265717565737412390a06706172656e741801200128094229e04102fa41230a216c6f636174696f6e732e676f6f676c65617069732e636f6d2f4c6f636174696f6e12190a0c6e616d6573706163655f69641802200128094203e0410212480a096e616d65737061636518032001280b32302e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e4e616d6573706163654203e0410222af010a154c6973744e616d657370616365735265717565737412390a06706172656e741801200128094229e04102fa41230a216c6f636174696f6e732e676f6f676c65617069732e636f6d2f4c6f636174696f6e12160a09706167655f73697a651802200128054203e0410112170a0a706167655f746f6b656e1803200128094203e0410112130a0666696c7465721804200128094203e0410112150a086f726465725f62791805200128094203e0410122770a164c6973744e616d65737061636573526573706f6e736512440a0a6e616d6573706163657318012003280b32302e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e4e616d65737061636512170a0f6e6578745f706167655f746f6b656e18022001280922560a134765744e616d65737061636552657175657374123f0a046e616d651801200128094231e04102fa412b0a29736572766963656469726563746f72792e676f6f676c65617069732e636f6d2f4e616d6573706163652298010a165570646174654e616d6573706163655265717565737412480a096e616d65737061636518012001280b32302e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e4e616d6573706163654203e0410212340a0b7570646174655f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b4203e0410222590a1644656c6574654e616d65737061636552657175657374123f0a046e616d651801200128094231e04102fa412b0a29736572766963656469726563746f72792e676f6f676c65617069732e636f6d2f4e616d65737061636522b8010a14437265617465536572766963655265717565737412410a06706172656e741801200128094231e04102fa412b0a29736572766963656469726563746f72792e676f6f676c65617069732e636f6d2f4e616d65737061636512170a0a736572766963655f69641802200128094203e0410212440a077365727669636518032001280b322e2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e536572766963654203e0410222b5010a134c69737453657276696365735265717565737412410a06706172656e741801200128094231e04102fa412b0a29736572766963656469726563746f72792e676f6f676c65617069732e636f6d2f4e616d65737061636512160a09706167655f73697a651802200128054203e0410112170a0a706167655f746f6b656e1803200128094203e0410112130a0666696c7465721804200128094203e0410112150a086f726465725f62791805200128094203e0410122710a144c6973745365727669636573526573706f6e736512400a08736572766963657318012003280b322e2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e5365727669636512170a0f6e6578745f706167655f746f6b656e18022001280922520a114765745365727669636552657175657374123d0a046e616d65180120012809422fe04102fa41290a27736572766963656469726563746f72792e676f6f676c65617069732e636f6d2f536572766963652292010a14557064617465536572766963655265717565737412440a077365727669636518012001280b322e2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e536572766963654203e0410212340a0b7570646174655f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b4203e0410222550a1444656c6574655365727669636552657175657374123d0a046e616d65180120012809422fe04102fa41290a27736572766963656469726563746f72792e676f6f676c65617069732e636f6d2f5365727669636522ba010a15437265617465456e64706f696e7452657175657374123f0a06706172656e74180120012809422fe04102fa41290a27736572766963656469726563746f72792e676f6f676c65617069732e636f6d2f5365727669636512180a0b656e64706f696e745f69641802200128094203e0410212460a08656e64706f696e7418032001280b322f2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e456e64706f696e744203e0410222b4010a144c697374456e64706f696e747352657175657374123f0a06706172656e74180120012809422fe04102fa41290a27736572766963656469726563746f72792e676f6f676c65617069732e636f6d2f5365727669636512160a09706167655f73697a651802200128054203e0410112170a0a706167655f746f6b656e1803200128094203e0410112130a0666696c7465721804200128094203e0410112150a086f726465725f62791805200128094203e0410122740a154c697374456e64706f696e7473526573706f6e736512420a09656e64706f696e747318012003280b322f2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e456e64706f696e7412170a0f6e6578745f706167655f746f6b656e18022001280922540a12476574456e64706f696e7452657175657374123e0a046e616d651801200128094230e04102fa412a0a28736572766963656469726563746f72792e676f6f676c65617069732e636f6d2f456e64706f696e742295010a15557064617465456e64706f696e745265717565737412460a08656e64706f696e7418012001280b322f2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e456e64706f696e744203e0410212340a0b7570646174655f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b4203e0410222570a1544656c657465456e64706f696e7452657175657374123e0a046e616d651801200128094230e04102fa412a0a28736572766963656469726563746f72792e676f6f676c65617069732e636f6d2f456e64706f696e7432cf200a13526567697374726174696f6e5365727669636512ea010a0f4372656174654e616d657370616365123d2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e4372656174654e616d657370616365526571756573741a302e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e4e616d657370616365226682d3e493024022332f763162657461312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a7d2f6e616d657370616365733a096e616d657370616365da411d706172656e742c6e616d6573706163652c6e616d6573706163655f696412d3010a0e4c6973744e616d65737061636573123c2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e4c6973744e616d65737061636573526571756573741a3d2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e4c6973744e616d65737061636573526573706f6e7365224482d3e493023512332f763162657461312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a7d2f6e616d65737061636573da4106706172656e7412c0010a0c4765744e616d657370616365123a2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e4765744e616d657370616365526571756573741a302e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e4e616d657370616365224282d3e493023512332f763162657461312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6e616d657370616365732f2a7dda41046e616d6512ec010a0f5570646174654e616d657370616365123d2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e5570646174654e616d657370616365526571756573741a302e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e4e616d657370616365226882d3e493024a323d2f763162657461312f7b6e616d6573706163652e6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6e616d657370616365732f2a7d3a096e616d657370616365da41156e616d6573706163652c7570646174655f6d61736b12ac010a0f44656c6574654e616d657370616365123d2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e44656c6574654e616d657370616365526571756573741a162e676f6f676c652e70726f746f6275662e456d707479224282d3e49302352a332f763162657461312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6e616d657370616365732f2a7dda41046e616d6512e9010a0d43726561746553657276696365123b2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e43726561746553657276696365526571756573741a2e2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e53657276696365226b82d3e4930249223e2f763162657461312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6e616d657370616365732f2a7d2f73657276696365733a0773657276696365da4119706172656e742c736572766963652c736572766963655f696412d8010a0c4c6973745365727669636573123a2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e4c6973745365727669636573526571756573741a3b2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e4c6973745365727669636573526573706f6e7365224f82d3e4930240123e2f763162657461312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6e616d657370616365732f2a7d2f7365727669636573da4106706172656e7412c5010a0a4765745365727669636512382e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e47657453657276696365526571756573741a2e2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e53657276696365224d82d3e4930240123e2f763162657461312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6e616d657370616365732f2a2f73657276696365732f2a7dda41046e616d6512eb010a0d55706461746553657276696365123b2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e55706461746553657276696365526571756573741a2e2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e53657276696365226d82d3e493025132462f763162657461312f7b736572766963652e6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6e616d657370616365732f2a2f73657276696365732f2a7d3a0773657276696365da4113736572766963652c7570646174655f6d61736b12b3010a0d44656c65746553657276696365123b2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e44656c65746553657276696365526571756573741a162e676f6f676c652e70726f746f6275662e456d707479224d82d3e49302402a3e2f763162657461312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6e616d657370616365732f2a2f73657276696365732f2a7dda41046e616d6512fb010a0e437265617465456e64706f696e74123c2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e437265617465456e64706f696e74526571756573741a2f2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e456e64706f696e74227a82d3e4930256224a2f763162657461312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6e616d657370616365732f2a2f73657276696365732f2a7d2f656e64706f696e74733a08656e64706f696e74da411b706172656e742c656e64706f696e742c656e64706f696e745f696412e7010a0d4c697374456e64706f696e7473123b2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e4c697374456e64706f696e7473526571756573741a3c2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e4c697374456e64706f696e7473526573706f6e7365225b82d3e493024c124a2f763162657461312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6e616d657370616365732f2a2f73657276696365732f2a7d2f656e64706f696e7473da4106706172656e7412d4010a0b476574456e64706f696e7412392e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e476574456e64706f696e74526571756573741a2f2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e456e64706f696e74225982d3e493024c124a2f763162657461312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6e616d657370616365732f2a2f73657276696365732f2a2f656e64706f696e74732f2a7dda41046e616d6512fd010a0e557064617465456e64706f696e74123c2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e557064617465456e64706f696e74526571756573741a2f2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e456e64706f696e74227c82d3e493025f32532f763162657461312f7b656e64706f696e742e6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6e616d657370616365732f2a2f73657276696365732f2a2f656e64706f696e74732f2a7d3a08656e64706f696e74da4114656e64706f696e742c7570646174655f6d61736b12c1010a0e44656c657465456e64706f696e74123c2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461312e44656c657465456e64706f696e74526571756573741a162e676f6f676c652e70726f746f6275662e456d707479225982d3e493024c2a4a2f763162657461312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6e616d657370616365732f2a2f73657276696365732f2a2f656e64706f696e74732f2a7dda41046e616d6512f2010a0c47657449616d506f6c69637912222e676f6f676c652e69616d2e76312e47657449616d506f6c696379526571756573741a152e676f6f676c652e69616d2e76312e506f6c69637922a60182d3e493029f0122442f763162657461312f7b7265736f757263653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6e616d657370616365732f2a7d3a67657449616d506f6c6963793a012a5a54224f2f763162657461312f7b7265736f757263653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6e616d657370616365732f2a2f73657276696365732f2a7d3a67657449616d506f6c6963793a012a12f2010a0c53657449616d506f6c69637912222e676f6f676c652e69616d2e76312e53657449616d506f6c696379526571756573741a152e676f6f676c652e69616d2e76312e506f6c69637922a60182d3e493029f0122442f763162657461312f7b7265736f757263653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6e616d657370616365732f2a7d3a73657449616d506f6c6963793a012a5a54224f2f763162657461312f7b7265736f757263653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6e616d657370616365732f2a2f73657276696365732f2a7d3a73657449616d506f6c6963793a012a129e020a125465737449616d5065726d697373696f6e7312282e676f6f676c652e69616d2e76312e5465737449616d5065726d697373696f6e73526571756573741a292e676f6f676c652e69616d2e76312e5465737449616d5065726d697373696f6e73526573706f6e736522b20182d3e49302ab01224a2f763162657461312f7b7265736f757263653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6e616d657370616365732f2a7d3a7465737449616d5065726d697373696f6e733a012a5a5a22552f763162657461312f7b7265736f757263653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6e616d657370616365732f2a2f73657276696365732f2a7d3a7465737449616d5065726d697373696f6e733a012a1a53ca411f736572766963656469726563746f72792e676f6f676c65617069732e636f6dd2412e68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c6174666f726d429c020a29636f6d2e676f6f676c652e636c6f75642e736572766963656469726563746f72792e763162657461314218526567697374726174696f6e5365727669636550726f746f50015a55676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f736572766963656469726563746f72792f763162657461313b736572766963656469726563746f7279f80101aa0225476f6f676c652e436c6f75642e536572766963654469726563746f72792e56314265746131ca0225476f6f676c655c436c6f75645c536572766963654469726563746f72795c56316265746131ea0228476f6f676c653a3a436c6f75643a3a536572766963654469726563746f72793a3a56316265746131620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
