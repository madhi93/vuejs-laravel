<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/error_stats_service.proto

namespace GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1;

class ErrorStatsService
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
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\Common::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9b200a45676f6f676c652f646576746f6f6c732f636c6f75646572726f727265706f7274696e672f763162657461312f6572726f725f73746174735f736572766963652e70726f746f122b676f6f676c652e646576746f6f6c732e636c6f75646572726f727265706f7274696e672e763162657461311a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a38676f6f676c652f646576746f6f6c732f636c6f75646572726f727265706f7274696e672f763162657461312f636f6d6d6f6e2e70726f746f1a1e676f6f676c652f70726f746f6275662f6475726174696f6e2e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f2283050a154c69737447726f757053746174735265717565737412490a0c70726f6a6563745f6e616d651801200128094233e04102fa412d0a2b636c6f75647265736f757263656d616e616765722e676f6f676c65617069732e636f6d2f50726f6a65637412150a0867726f75705f69641802200328094203e04101125e0a0e736572766963655f66696c74657218032001280b32412e676f6f676c652e646576746f6f6c732e636c6f75646572726f727265706f7274696e672e763162657461312e53657276696365436f6e7465787446696c7465724203e0410112540a0a74696d655f72616e676518052001280b323b2e676f6f676c652e646576746f6f6c732e636c6f75646572726f727265706f7274696e672e763162657461312e517565727954696d6552616e67654203e04101123c0a1474696d65645f636f756e745f6475726174696f6e18062001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e4203e0410112580a09616c69676e6d656e7418072001280e32402e676f6f676c652e646576746f6f6c732e636c6f75646572726f727265706f7274696e672e763162657461312e54696d6564436f756e74416c69676e6d656e744203e0410112370a0e616c69676e6d656e745f74696d6518082001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d704203e0410112500a056f7264657218092001280e323c2e676f6f676c652e646576746f6f6c732e636c6f75646572726f727265706f7274696e672e763162657461312e4572726f7247726f75704f726465724203e0410112160a09706167655f73697a65180b200128054203e0410112170a0a706167655f746f6b656e180c200128094203e0410122c0010a164c69737447726f75705374617473526573706f6e736512570a116572726f725f67726f75705f737461747318012003280b323c2e676f6f676c652e646576746f6f6c732e636c6f75646572726f727265706f7274696e672e763162657461312e4572726f7247726f7570537461747312170a0f6e6578745f706167655f746f6b656e18022001280912340a1074696d655f72616e67655f626567696e18042001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d702286040a0f4572726f7247726f7570537461747312460a0567726f757018012001280b32372e676f6f676c652e646576746f6f6c732e636c6f75646572726f727265706f7274696e672e763162657461312e4572726f7247726f7570120d0a05636f756e74180220012803121c0a1461666665637465645f75736572735f636f756e74180320012803124d0a0c74696d65645f636f756e747318042003280b32372e676f6f676c652e646576746f6f6c732e636c6f75646572726f727265706f7274696e672e763162657461312e54696d6564436f756e7412330a0f66697273745f7365656e5f74696d6518052001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012320a0e6c6173745f7365656e5f74696d6518062001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012560a1161666665637465645f736572766963657318072003280b323b2e676f6f676c652e646576746f6f6c732e636c6f75646572726f727265706f7274696e672e763162657461312e53657276696365436f6e74657874121d0a156e756d5f61666665637465645f7365727669636573180820012805124f0a0e726570726573656e74617469766518092001280b32372e676f6f676c652e646576746f6f6c732e636c6f75646572726f727265706f7274696e672e763162657461312e4572726f724576656e7422790a0a54696d6564436f756e74120d0a05636f756e74180120012803122e0a0a73746172745f74696d6518022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70122c0a08656e645f74696d6518032001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7022dc020a114c6973744576656e74735265717565737412490a0c70726f6a6563745f6e616d651801200128094233e04102fa412d0a2b636c6f75647265736f757263656d616e616765722e676f6f676c65617069732e636f6d2f50726f6a65637412150a0867726f75705f69641802200128094203e04102125e0a0e736572766963655f66696c74657218032001280b32412e676f6f676c652e646576746f6f6c732e636c6f75646572726f727265706f7274696e672e763162657461312e53657276696365436f6e7465787446696c7465724203e0410112540a0a74696d655f72616e676518042001280b323b2e676f6f676c652e646576746f6f6c732e636c6f75646572726f727265706f7274696e672e763162657461312e517565727954696d6552616e67654203e0410112160a09706167655f73697a651806200128054203e0410112170a0a706167655f746f6b656e1807200128094203e0410122b2010a124c6973744576656e7473526573706f6e7365124d0a0c6572726f725f6576656e747318012003280b32372e676f6f676c652e646576746f6f6c732e636c6f75646572726f727265706f7274696e672e763162657461312e4572726f724576656e7412170a0f6e6578745f706167655f746f6b656e18022001280912340a1074696d655f72616e67655f626567696e18042001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7022e7010a0e517565727954696d6552616e676512520a06706572696f6418012001280e32422e676f6f676c652e646576746f6f6c732e636c6f75646572726f727265706f7274696e672e763162657461312e517565727954696d6552616e67652e506572696f642280010a06506572696f6412160a12504552494f445f554e535045434946494544100012110a0d504552494f445f315f484f5552100112120a0e504552494f445f365f484f555253100212100a0c504552494f445f315f444159100312110a0d504552494f445f315f5745454b100412120a0e504552494f445f33305f444159531005225e0a1453657276696365436f6e7465787446696c74657212140a07736572766963651802200128094203e0410112140a0776657273696f6e1803200128094203e04101121a0a0d7265736f757263655f747970651804200128094203e0410122600a1344656c6574654576656e74735265717565737412490a0c70726f6a6563745f6e616d651801200128094233e04102fa412d0a2b636c6f75647265736f757263656d616e616765722e676f6f676c65617069732e636f6d2f50726f6a65637422160a1444656c6574654576656e7473526573706f6e73652a750a1354696d6564436f756e74416c69676e6d656e7412250a214552524f525f434f554e545f414c49474e4d454e545f554e5350454349464945441000121b0a17414c49474e4d454e545f455155414c5f524f554e4445441001121a0a16414c49474e4d454e545f455155414c5f41545f454e4410022a7d0a0f4572726f7247726f75704f72646572121b0a1747524f55505f4f524445525f554e5350454349464945441000120e0a0a434f554e545f44455343100112120a0e4c4153545f5345454e5f44455343100212100a0c435245415445445f44455343100312170a1341464645435445445f55534552535f444553431004328b060a114572726f7253746174735365727669636512ea010a0e4c69737447726f7570537461747312422e676f6f676c652e646576746f6f6c732e636c6f75646572726f727265706f7274696e672e763162657461312e4c69737447726f75705374617473526571756573741a432e676f6f676c652e646576746f6f6c732e636c6f75646572726f727265706f7274696e672e763162657461312e4c69737447726f75705374617473526573706f6e7365224f82d3e493022f122d2f763162657461312f7b70726f6a6563745f6e616d653d70726f6a656374732f2a7d2f67726f75705374617473da411770726f6a6563745f6e616d652c74696d655f72616e676512d8010a0a4c6973744576656e7473123e2e676f6f676c652e646576746f6f6c732e636c6f75646572726f727265706f7274696e672e763162657461312e4c6973744576656e7473526571756573741a3f2e676f6f676c652e646576746f6f6c732e636c6f75646572726f727265706f7274696e672e763162657461312e4c6973744576656e7473526573706f6e7365224982d3e493022b12292f763162657461312f7b70726f6a6563745f6e616d653d70726f6a656374732f2a7d2f6576656e7473da411570726f6a6563745f6e616d652c67726f75705f696412d5010a0c44656c6574654576656e747312402e676f6f676c652e646576746f6f6c732e636c6f75646572726f727265706f7274696e672e763162657461312e44656c6574654576656e7473526571756573741a412e676f6f676c652e646576746f6f6c732e636c6f75646572726f727265706f7274696e672e763162657461312e44656c6574654576656e7473526573706f6e7365224082d3e493022b2a292f763162657461312f7b70726f6a6563745f6e616d653d70726f6a656374732f2a7d2f6576656e7473da410c70726f6a6563745f6e616d651a56ca4122636c6f75646572726f727265706f7274696e672e676f6f676c65617069732e636f6dd2412e68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c6174666f726d42a3020a2f636f6d2e676f6f676c652e646576746f6f6c732e636c6f75646572726f727265706f7274696e672e7631626574613142164572726f7253746174735365727669636550726f746f50015a5e676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f646576746f6f6c732f636c6f75646572726f727265706f7274696e672f763162657461313b636c6f75646572726f727265706f7274696e67f80101aa0223476f6f676c652e436c6f75642e4572726f725265706f7274696e672e56314265746131ca0223476f6f676c655c436c6f75645c4572726f725265706f7274696e675c56316265746131ea0226476f6f676c653a3a436c6f75643a3a4572726f725265706f7274696e673a3a56316265746131620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

