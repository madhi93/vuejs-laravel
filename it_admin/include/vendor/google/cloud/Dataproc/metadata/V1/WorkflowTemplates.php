<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/workflow_templates.proto

namespace GPBMetadata\Google\Cloud\Dataproc\V1;

class WorkflowTemplates
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
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        \GPBMetadata\Google\Cloud\Dataproc\V1\Jobs::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0adf3a0a31676f6f676c652f636c6f75642f6461746170726f632f76312f776f726b666c6f775f74656d706c617465732e70726f746f1218676f6f676c652e636c6f75642e6461746170726f632e76311a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a27676f6f676c652f636c6f75642f6461746170726f632f76312f636c7573746572732e70726f746f1a23676f6f676c652f636c6f75642f6461746170726f632f76312f6a6f62732e70726f746f1a23676f6f676c652f6c6f6e6772756e6e696e672f6f7065726174696f6e732e70726f746f1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f22cd050a10576f726b666c6f7754656d706c617465120f0a0269641802200128094203e0410212110a046e616d651801200128094203e0410312140a0776657273696f6e1803200128054203e0410112340a0b6372656174655f74696d6518042001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d704203e0410312340a0b7570646174655f74696d6518052001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d704203e04103124b0a066c6162656c7318062003280b32362e676f6f676c652e636c6f75642e6461746170726f632e76312e576f726b666c6f7754656d706c6174652e4c6162656c73456e7472794203e04101124b0a09706c6163656d656e7418072001280b32332e676f6f676c652e636c6f75642e6461746170726f632e76312e576f726b666c6f7754656d706c617465506c6163656d656e744203e0410212370a046a6f627318082003280b32242e676f6f676c652e636c6f75642e6461746170726f632e76312e4f7264657265644a6f624203e0410212440a0a706172616d657465727318092003280b322b2e676f6f676c652e636c6f75642e6461746170726f632e76312e54656d706c617465506172616d657465724203e041011a2d0a0b4c6162656c73456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a0238013aca01ea41c6010a286461746170726f632e676f6f676c65617069732e636f6d2f576f726b666c6f7754656d706c617465124970726f6a656374732f7b70726f6a6563747d2f726567696f6e732f7b726567696f6e7d2f776f726b666c6f7754656d706c617465732f7b776f726b666c6f775f74656d706c6174657d124d70726f6a656374732f7b70726f6a6563747d2f6c6f636174696f6e732f7b6c6f636174696f6e7d2f776f726b666c6f7754656d706c617465732f7b776f726b666c6f775f74656d706c6174657d200122b4010a19576f726b666c6f7754656d706c617465506c6163656d656e7412430a0f6d616e616765645f636c757374657218012001280b32282e676f6f676c652e636c6f75642e6461746170726f632e76312e4d616e61676564436c7573746572480012450a10636c75737465725f73656c6563746f7218022001280b32292e676f6f676c652e636c6f75642e6461746170726f632e76312e436c757374657253656c6563746f724800420b0a09706c6163656d656e7422e3010a0e4d616e61676564436c757374657212190a0c636c75737465725f6e616d651802200128094203e04102123c0a06636f6e66696718032001280b32272e676f6f676c652e636c6f75642e6461746170726f632e76312e436c7573746572436f6e6669674203e0410212490a066c6162656c7318042003280b32342e676f6f676c652e636c6f75642e6461746170726f632e76312e4d616e61676564436c75737465722e4c6162656c73456e7472794203e041011a2d0a0b4c6162656c73456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a02380122b5010a0f436c757374657253656c6563746f7212110a047a6f6e651801200128094203e0410112590a0e636c75737465725f6c6162656c7318022003280b323c2e676f6f676c652e636c6f75642e6461746170726f632e76312e436c757374657253656c6563746f722e436c75737465724c6162656c73456e7472794203e041021a340a12436c75737465724c6162656c73456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a02380122de050a0a4f7264657265644a6f6212140a07737465705f69641801200128094203e0410212390a0a6861646f6f705f6a6f6218022001280b32232e676f6f676c652e636c6f75642e6461746170726f632e76312e4861646f6f704a6f62480012370a09737061726b5f6a6f6218032001280b32222e676f6f676c652e636c6f75642e6461746170726f632e76312e537061726b4a6f624800123b0a0b7079737061726b5f6a6f6218042001280b32242e676f6f676c652e636c6f75642e6461746170726f632e76312e5079537061726b4a6f62480012350a08686976655f6a6f6218052001280b32212e676f6f676c652e636c6f75642e6461746170726f632e76312e486976654a6f62480012330a077069675f6a6f6218062001280b32202e676f6f676c652e636c6f75642e6461746170726f632e76312e5069674a6f624800123a0a0b737061726b5f725f6a6f62180b2001280b32232e676f6f676c652e636c6f75642e6461746170726f632e76312e537061726b524a6f624800123e0a0d737061726b5f73716c5f6a6f6218072001280b32252e676f6f676c652e636c6f75642e6461746170726f632e76312e537061726b53716c4a6f62480012390a0a70726573746f5f6a6f62180c2001280b32232e676f6f676c652e636c6f75642e6461746170726f632e76312e50726573746f4a6f62480012450a066c6162656c7318082003280b32302e676f6f676c652e636c6f75642e6461746170726f632e76312e4f7264657265644a6f622e4c6162656c73456e7472794203e0410112400a0a7363686564756c696e6718092001280b32272e676f6f676c652e636c6f75642e6461746170726f632e76312e4a6f625363686564756c696e674203e0410112220a157072657265717569736974655f737465705f696473180a200328094203e041011a2d0a0b4c6162656c73456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a023801420a0a086a6f625f74797065229d010a1154656d706c617465506172616d6574657212110a046e616d651801200128094203e0410212130a066669656c64731802200328094203e0410212180a0b6465736372697074696f6e1803200128094203e0410112460a0a76616c69646174696f6e18042001280b322d2e676f6f676c652e636c6f75642e6461746170726f632e76312e506172616d6574657256616c69646174696f6e4203e0410122a1010a13506172616d6574657256616c69646174696f6e123a0a05726567657818012001280b32292e676f6f676c652e636c6f75642e6461746170726f632e76312e526567657856616c69646174696f6e4800123b0a0676616c75657318022001280b32292e676f6f676c652e636c6f75642e6461746170726f632e76312e56616c756556616c69646174696f6e480042110a0f76616c69646174696f6e5f7479706522270a0f526567657856616c69646174696f6e12140a07726567657865731801200328094203e0410222260a0f56616c756556616c69646174696f6e12130a0676616c7565731801200328094203e0410222af050a10576f726b666c6f774d6574616461746112150a0874656d706c6174651801200128094203e0410312140a0776657273696f6e1802200128054203e0410312470a0e6372656174655f636c757374657218032001280b322a2e676f6f676c652e636c6f75642e6461746170726f632e76312e436c75737465724f7065726174696f6e4203e04103123b0a05677261706818042001280b32272e676f6f676c652e636c6f75642e6461746170726f632e76312e576f726b666c6f7747726170684203e0410312470a0e64656c6574655f636c757374657218052001280b322a2e676f6f676c652e636c6f75642e6461746170726f632e76312e436c75737465724f7065726174696f6e4203e0410312440a05737461746518062001280e32302e676f6f676c652e636c6f75642e6461746170726f632e76312e576f726b666c6f774d657461646174612e53746174654203e0410312190a0c636c75737465725f6e616d651807200128094203e04103124e0a0a706172616d657465727318082003280b323a2e676f6f676c652e636c6f75642e6461746170726f632e76312e576f726b666c6f774d657461646174612e506172616d6574657273456e74727912330a0a73746172745f74696d6518092001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d704203e0410312310a08656e645f74696d65180a2001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d704203e0410312190a0c636c75737465725f75756964180b200128094203e041031a310a0f506172616d6574657273456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a02380122380a055374617465120b0a07554e4b4e4f574e1000120b0a0750454e44494e471001120b0a0752554e4e494e47100212080a04444f4e45100322540a10436c75737465724f7065726174696f6e12190a0c6f7065726174696f6e5f69641801200128094203e0410312120a056572726f721802200128094203e0410312110a04646f6e651803200128084203e04103224b0a0d576f726b666c6f774772617068123a0a056e6f64657318012003280b32262e676f6f676c652e636c6f75642e6461746170726f632e76312e576f726b666c6f774e6f64654203e0410322a3020a0c576f726b666c6f774e6f646512140a07737465705f69641801200128094203e0410312220a157072657265717569736974655f737465705f6964731802200328094203e0410312130a066a6f625f69641803200128094203e0410312440a05737461746518052001280e32302e676f6f676c652e636c6f75642e6461746170726f632e76312e576f726b666c6f774e6f64652e4e6f646553746174654203e0410312120a056572726f721806200128094203e04103226a0a094e6f64655374617465121a0a164e4f44455f53544154455f554e5350454349464945441000120b0a07424c4f434b45441001120c0a0852554e4e41424c451002120b0a0752554e4e494e471003120d0a09434f4d504c455445441004120a0a064641494c4544100522a4010a1d437265617465576f726b666c6f7754656d706c6174655265717565737412400a06706172656e741801200128094230e04102fa412a12286461746170726f632e676f6f676c65617069732e636f6d2f576f726b666c6f7754656d706c61746512410a0874656d706c61746518022001280b322a2e676f6f676c652e636c6f75642e6461746170726f632e76312e576f726b666c6f7754656d706c6174654203e0410222720a1a476574576f726b666c6f7754656d706c61746552657175657374123e0a046e616d651801200128094230e04102fa412a0a286461746170726f632e676f6f676c65617069732e636f6d2f576f726b666c6f7754656d706c61746512140a0776657273696f6e1802200128054203e0410122ad020a22496e7374616e7469617465576f726b666c6f7754656d706c61746552657175657374123e0a046e616d651801200128094230e04102fa412a0a286461746170726f632e676f6f676c65617069732e636f6d2f576f726b666c6f7754656d706c61746512140a0776657273696f6e1802200128054203e0410112170a0a726571756573745f69641805200128094203e0410112650a0a706172616d657465727318062003280b324c2e676f6f676c652e636c6f75642e6461746170726f632e76312e496e7374616e7469617465576f726b666c6f7754656d706c617465526571756573742e506172616d6574657273456e7472794203e041011a310a0f506172616d6574657273456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a02380122c8010a28496e7374616e7469617465496e6c696e65576f726b666c6f7754656d706c6174655265717565737412400a06706172656e741801200128094230e04102fa412a12286461746170726f632e676f6f676c65617069732e636f6d2f576f726b666c6f7754656d706c61746512410a0874656d706c61746518022001280b322a2e676f6f676c652e636c6f75642e6461746170726f632e76312e576f726b666c6f7754656d706c6174654203e0410212170a0a726571756573745f69641803200128094203e0410122620a1d557064617465576f726b666c6f7754656d706c6174655265717565737412410a0874656d706c61746518012001280b322a2e676f6f676c652e636c6f75642e6461746170726f632e76312e576f726b666c6f7754656d706c6174654203e041022291010a1c4c697374576f726b666c6f7754656d706c617465735265717565737412400a06706172656e741801200128094230e04102fa412a12286461746170726f632e676f6f676c65617069732e636f6d2f576f726b666c6f7754656d706c61746512160a09706167655f73697a651802200128054203e0410112170a0a706167655f746f6b656e1803200128094203e041012281010a1d4c697374576f726b666c6f7754656d706c61746573526573706f6e736512420a0974656d706c6174657318012003280b322a2e676f6f676c652e636c6f75642e6461746170726f632e76312e576f726b666c6f7754656d706c6174654203e04103121c0a0f6e6578745f706167655f746f6b656e1802200128094203e0410322750a1d44656c657465576f726b666c6f7754656d706c61746552657175657374123e0a046e616d651801200128094230e04102fa412a0a286461746170726f632e676f6f676c65617069732e636f6d2f576f726b666c6f7754656d706c61746512140a0776657273696f6e1802200128054203e0410132e6100a17576f726b666c6f7754656d706c61746553657276696365129b020a16437265617465576f726b666c6f7754656d706c61746512372e676f6f676c652e636c6f75642e6461746170726f632e76312e437265617465576f726b666c6f7754656d706c617465526571756573741a2a2e676f6f676c652e636c6f75642e6461746170726f632e76312e576f726b666c6f7754656d706c617465229b0182d3e49302820122352f76312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a7d2f776f726b666c6f7754656d706c617465733a0874656d706c6174655a3f22332f76312f7b706172656e743d70726f6a656374732f2a2f726567696f6e732f2a7d2f776f726b666c6f7754656d706c617465733a0874656d706c617465da410f706172656e742c74656d706c61746512f4010a13476574576f726b666c6f7754656d706c61746512342e676f6f676c652e636c6f75642e6461746170726f632e76312e476574576f726b666c6f7754656d706c617465526571756573741a2a2e676f6f676c652e636c6f75642e6461746170726f632e76312e576f726b666c6f7754656d706c617465227b82d3e493026e12352f76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f776f726b666c6f7754656d706c617465732f2a7d5a3512332f76312f7b6e616d653d70726f6a656374732f2a2f726567696f6e732f2a2f776f726b666c6f7754656d706c617465732f2a7dda41046e616d6512d5020a1b496e7374616e7469617465576f726b666c6f7754656d706c617465123c2e676f6f676c652e636c6f75642e6461746170726f632e76312e496e7374616e7469617465576f726b666c6f7754656d706c617465526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e22d80182d3e493028c0122412f76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f776f726b666c6f7754656d706c617465732f2a7d3a696e7374616e74696174653a012a5a44223f2f76312f7b6e616d653d70726f6a656374732f2a2f726567696f6e732f2a2f776f726b666c6f7754656d706c617465732f2a7d3a696e7374616e74696174653a012ada41046e616d65da410f6e616d652c706172616d6574657273ca41290a15676f6f676c652e70726f746f6275662e456d7074791210576f726b666c6f774d6574616461746112f4020a21496e7374616e7469617465496e6c696e65576f726b666c6f7754656d706c61746512422e676f6f676c652e636c6f75642e6461746170726f632e76312e496e7374616e7469617465496e6c696e65576f726b666c6f7754656d706c617465526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e22eb0182d3e49302a60122472f76312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a7d2f776f726b666c6f7754656d706c617465733a696e7374616e7469617465496e6c696e653a0874656d706c6174655a5122452f76312f7b706172656e743d70726f6a656374732f2a2f726567696f6e732f2a7d2f776f726b666c6f7754656d706c617465733a696e7374616e7469617465496e6c696e653a0874656d706c617465da410f706172656e742c74656d706c617465ca41290a15676f6f676c652e70726f746f6275662e456d7074791210576f726b666c6f774d6574616461746112a6020a16557064617465576f726b666c6f7754656d706c61746512372e676f6f676c652e636c6f75642e6461746170726f632e76312e557064617465576f726b666c6f7754656d706c617465526571756573741a2a2e676f6f676c652e636c6f75642e6461746170726f632e76312e576f726b666c6f7754656d706c61746522a60182d3e4930294011a3e2f76312f7b74656d706c6174652e6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f776f726b666c6f7754656d706c617465732f2a7d3a0874656d706c6174655a481a3c2f76312f7b74656d706c6174652e6e616d653d70726f6a656374732f2a2f726567696f6e732f2a2f776f726b666c6f7754656d706c617465732f2a7d3a0874656d706c617465da410874656d706c6174651287020a154c697374576f726b666c6f7754656d706c6174657312362e676f6f676c652e636c6f75642e6461746170726f632e76312e4c697374576f726b666c6f7754656d706c61746573526571756573741a372e676f6f676c652e636c6f75642e6461746170726f632e76312e4c697374576f726b666c6f7754656d706c61746573526573706f6e7365227d82d3e493026e12352f76312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a7d2f776f726b666c6f7754656d706c617465735a3512332f76312f7b706172656e743d70726f6a656374732f2a2f726567696f6e732f2a7d2f776f726b666c6f7754656d706c61746573da4106706172656e7412e6010a1644656c657465576f726b666c6f7754656d706c61746512372e676f6f676c652e636c6f75642e6461746170726f632e76312e44656c657465576f726b666c6f7754656d706c617465526571756573741a162e676f6f676c652e70726f746f6275662e456d707479227b82d3e493026e2a352f76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f776f726b666c6f7754656d706c617465732f2a7d5a352a332f76312f7b6e616d653d70726f6a656374732f2a2f726567696f6e732f2a2f776f726b666c6f7754656d706c617465732f2a7dda41046e616d651a4bca41176461746170726f632e676f6f676c65617069732e636f6dd2412e68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c6174666f726d427a0a1c636f6d2e676f6f676c652e636c6f75642e6461746170726f632e76314216576f726b666c6f7754656d706c6174657350726f746f50015a40676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f6461746170726f632f76313b6461746170726f63620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

