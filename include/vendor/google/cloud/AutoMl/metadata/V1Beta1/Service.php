<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/service.proto

namespace GPBMetadata\Google\Cloud\Automl\V1Beta1;

class Service
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
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\AnnotationPayload::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\AnnotationSpec::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\ColumnSpec::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Dataset::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Image::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Io::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Model::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\ModelEvaluation::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Operations::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\TableSpec::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ade4c0a29676f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f736572766963652e70726f746f121b676f6f676c652e636c6f75642e6175746f6d6c2e763162657461311a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a34676f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f616e6e6f746174696f6e5f7061796c6f61642e70726f746f1a31676f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f616e6e6f746174696f6e5f737065632e70726f746f1a2d676f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f636f6c756d6e5f737065632e70726f746f1a29676f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f646174617365742e70726f746f1a27676f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f696d6167652e70726f746f1a24676f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f696f2e70726f746f1a27676f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f6d6f64656c2e70726f746f1a32676f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f6d6f64656c5f6576616c756174696f6e2e70726f746f1a2c676f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f6f7065726174696f6e732e70726f746f1a2c676f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f7461626c655f737065632e70726f746f1a23676f6f676c652f6c6f6e6772756e6e696e672f6f7065726174696f6e732e70726f746f1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e70726f746f228d010a14437265617465446174617365745265717565737412390a06706172656e741801200128094229e04102fa41230a216c6f636174696f6e732e676f6f676c65617069732e636f6d2f4c6f636174696f6e123a0a076461746173657418022001280b32242e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e446174617365744203e0410222480a11476574446174617365745265717565737412330a046e616d651801200128094225e04102fa411f0a1d6175746f6d6c2e676f6f676c65617069732e636f6d2f446174617365742287010a134c69737444617461736574735265717565737412390a06706172656e741801200128094229e04102fa41230a216c6f636174696f6e732e676f6f676c65617069732e636f6d2f4c6f636174696f6e120e0a0666696c74657218032001280912110a09706167655f73697a6518042001280512120a0a706167655f746f6b656e18062001280922670a144c6973744461746173657473526573706f6e736512360a08646174617365747318012003280b32242e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4461746173657412170a0f6e6578745f706167655f746f6b656e1802200128092283010a145570646174654461746173657452657175657374123a0a076461746173657418012001280b32242e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e446174617365744203e04102122f0a0b7570646174655f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b224b0a1444656c657465446174617365745265717565737412330a046e616d651801200128094225e04102fa411f0a1d6175746f6d6c2e676f6f676c65617069732e636f6d2f44617461736574228d010a11496d706f7274446174615265717565737412330a046e616d651801200128094225e04102fa411f0a1d6175746f6d6c2e676f6f676c65617069732e636f6d2f4461746173657412430a0c696e7075745f636f6e66696718032001280b32282e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e496e707574436f6e6669674203e04102228f010a114578706f7274446174615265717565737412330a046e616d651801200128094225e04102fa411f0a1d6175746f6d6c2e676f6f676c65617069732e636f6d2f4461746173657412450a0d6f75747075745f636f6e66696718032001280b32292e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4f7574707574436f6e6669674203e0410222560a18476574416e6e6f746174696f6e5370656352657175657374123a0a046e616d65180120012809422ce04102fa41260a246175746f6d6c2e676f6f676c65617069732e636f6d2f416e6e6f746174696f6e53706563227c0a134765745461626c65537065635265717565737412350a046e616d651801200128094227e04102fa41210a1f6175746f6d6c2e676f6f676c65617069732e636f6d2f5461626c6553706563122e0a0a6669656c645f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b22b5010a154c6973745461626c6553706563735265717565737412350a06706172656e741801200128094225e04102fa411f0a1d6175746f6d6c2e676f6f676c65617069732e636f6d2f44617461736574122e0a0a6669656c645f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b120e0a0666696c74657218032001280912110a09706167655f73697a6518042001280512120a0a706167655f746f6b656e180620012809226e0a164c6973745461626c655370656373526573706f6e7365123b0a0b7461626c655f737065637318012003280b32262e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e5461626c655370656312170a0f6e6578745f706167655f746f6b656e180220012809228a010a165570646174655461626c655370656352657175657374123f0a0a7461626c655f7370656318012001280b32262e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e5461626c65537065634203e04102122f0a0b7570646174655f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b227e0a14476574436f6c756d6e537065635265717565737412360a046e616d651801200128094228e04102fa41220a206175746f6d6c2e676f6f676c65617069732e636f6d2f436f6c756d6e53706563122e0a0a6669656c645f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b22b8010a164c697374436f6c756d6e53706563735265717565737412370a06706172656e741801200128094227e04102fa41210a1f6175746f6d6c2e676f6f676c65617069732e636f6d2f5461626c6553706563122e0a0a6669656c645f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b120e0a0666696c74657218032001280912110a09706167655f73697a6518042001280512120a0a706167655f746f6b656e18062001280922710a174c697374436f6c756d6e5370656373526573706f6e7365123d0a0c636f6c756d6e5f737065637318012003280b32272e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e436f6c756d6e5370656312170a0f6e6578745f706167655f746f6b656e180220012809228d010a17557064617465436f6c756d6e537065635265717565737412410a0b636f6c756d6e5f7370656318012001280b32272e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e436f6c756d6e537065634203e04102122f0a0b7570646174655f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b2287010a124372656174654d6f64656c5265717565737412390a06706172656e741801200128094229e04102fa41230a216c6f636174696f6e732e676f6f676c65617069732e636f6d2f4c6f636174696f6e12360a056d6f64656c18042001280b32222e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4d6f64656c4203e0410222440a0f4765744d6f64656c5265717565737412310a046e616d651801200128094223e04102fa411d0a1b6175746f6d6c2e676f6f676c65617069732e636f6d2f4d6f64656c2285010a114c6973744d6f64656c735265717565737412390a06706172656e741801200128094229e04102fa41230a216c6f636174696f6e732e676f6f676c65617069732e636f6d2f4c6f636174696f6e120e0a0666696c74657218032001280912110a09706167655f73697a6518042001280512120a0a706167655f746f6b656e18062001280922600a124c6973744d6f64656c73526573706f6e736512310a056d6f64656c18012003280b32222e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4d6f64656c12170a0f6e6578745f706167655f746f6b656e18022001280922470a1244656c6574654d6f64656c5265717565737412310a046e616d651801200128094223e04102fa411d0a1b6175746f6d6c2e676f6f676c65617069732e636f6d2f4d6f64656c22ef020a124465706c6f794d6f64656c526571756573741284010a30696d6167655f6f626a6563745f646574656374696f6e5f6d6f64656c5f6465706c6f796d656e745f6d6574616461746118022001280b32482e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e496d6167654f626a656374446574656374696f6e4d6f64656c4465706c6f796d656e744d6574616461746148001281010a2e696d6167655f636c617373696669636174696f6e5f6d6f64656c5f6465706c6f796d656e745f6d6574616461746118042001280b32472e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e496d616765436c617373696669636174696f6e4d6f64656c4465706c6f796d656e744d65746164617461480012310a046e616d651801200128094223e04102fa411d0a1b6175746f6d6c2e676f6f676c65617069732e636f6d2f4d6f64656c421b0a196d6f64656c5f6465706c6f796d656e745f6d6574616461746122490a14556e6465706c6f794d6f64656c5265717565737412310a046e616d651801200128094223e04102fa411d0a1b6175746f6d6c2e676f6f676c65617069732e636f6d2f4d6f64656c2299010a124578706f72744d6f64656c5265717565737412310a046e616d651801200128094223e04102fa411d0a1b6175746f6d6c2e676f6f676c65617069732e636f6d2f4d6f64656c12500a0d6f75747075745f636f6e66696718032001280b32342e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4d6f64656c4578706f72744f7574707574436f6e6669674203e0410222b1010a1e4578706f72744576616c75617465644578616d706c65735265717565737412310a046e616d651801200128094223e04102fa411d0a1b6175746f6d6c2e676f6f676c65617069732e636f6d2f4d6f64656c125c0a0d6f75747075745f636f6e66696718032001280b32402e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4578706f72744576616c75617465644578616d706c65734f7574707574436f6e6669674203e0410222580a194765744d6f64656c4576616c756174696f6e52657175657374123b0a046e616d65180120012809422de04102fa41270a256175746f6d6c2e676f6f676c65617069732e636f6d2f4d6f64656c4576616c756174696f6e2289010a1b4c6973744d6f64656c4576616c756174696f6e735265717565737412330a06706172656e741801200128094223e04102fa411d0a1b6175746f6d6c2e676f6f676c65617069732e636f6d2f4d6f64656c120e0a0666696c74657218032001280912110a09706167655f73697a6518042001280512120a0a706167655f746f6b656e180620012809227f0a1c4c6973744d6f64656c4576616c756174696f6e73526573706f6e736512460a106d6f64656c5f6576616c756174696f6e18012003280b322c2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4d6f64656c4576616c756174696f6e12170a0f6e6578745f706167655f746f6b656e18022001280932ed270a064175746f4d6c12bd010a0d4372656174654461746173657412312e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e43726561746544617461736574526571756573741a242e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e44617461736574225382d3e493023c22312f763162657461312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a7d2f64617461736574733a0764617461736574da410e706172656e742c6461746173657412a4010a0a47657444617461736574122e2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e47657444617461736574526571756573741a242e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e44617461736574224082d3e493023312312f763162657461312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f64617461736574732f2a7dda41046e616d6512b7010a0c4c697374446174617365747312302e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4c6973744461746173657473526571756573741a312e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4c6973744461746173657473526573706f6e7365224282d3e493023312312f763162657461312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a7d2f6461746173657473da4106706172656e7412be010a0d5570646174654461746173657412312e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e55706461746544617461736574526571756573741a242e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e44617461736574225482d3e493024432392f763162657461312f7b646174617365742e6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f64617461736574732f2a7d3a0764617461736574da41076461746173657412d0010a0d44656c6574654461746173657412312e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e44656c65746544617461736574526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e226d82d3e49302332a312f763162657461312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f64617461736574732f2a7dda41046e616d65ca412a0a15676f6f676c652e70726f746f6275662e456d70747912114f7065726174696f6e4d6574616461746112e6010a0a496d706f727444617461122e2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e496d706f727444617461526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e22880182d3e4930241223c2f763162657461312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f64617461736574732f2a7d3a696d706f7274446174613a012ada41116e616d652c696e7075745f636f6e666967ca412a0a15676f6f676c652e70726f746f6275662e456d70747912114f7065726174696f6e4d6574616461746112e7010a0a4578706f727444617461122e2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4578706f727444617461526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e22890182d3e4930241223c2f763162657461312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f64617461736574732f2a7d3a6578706f7274446174613a012ada41126e616d652c6f75747075745f636f6e666967ca412a0a15676f6f676c652e70726f746f6275662e456d70747912114f7065726174696f6e4d6574616461746112cb010a11476574416e6e6f746174696f6e5370656312352e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e476574416e6e6f746174696f6e53706563526571756573741a2b2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e416e6e6f746174696f6e53706563225282d3e493024512432f763162657461312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f64617461736574732f2a2f616e6e6f746174696f6e53706563732f2a7dda41046e616d6512b7010a0c4765745461626c655370656312302e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4765745461626c6553706563526571756573741a262e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e5461626c6553706563224d82d3e4930240123e2f763162657461312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f64617461736574732f2a2f7461626c6553706563732f2a7dda41046e616d6512ca010a0e4c6973745461626c65537065637312322e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4c6973745461626c655370656373526571756573741a332e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4c6973745461626c655370656373526573706f6e7365224f82d3e4930240123e2f763162657461312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f64617461736574732f2a7d2f7461626c655370656373da4106706172656e7412da010a0f5570646174655461626c655370656312332e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e5570646174655461626c6553706563526571756573741a262e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e5461626c6553706563226a82d3e493025732492f763162657461312f7b7461626c655f737065632e6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f64617461736574732f2a2f7461626c6553706563732f2a7d3a0a7461626c655f73706563da410a7461626c655f7370656312c8010a0d476574436f6c756d6e5370656312312e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e476574436f6c756d6e53706563526571756573741a272e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e436f6c756d6e53706563225b82d3e493024e124c2f763162657461312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f64617461736574732f2a2f7461626c6553706563732f2a2f636f6c756d6e53706563732f2a7dda41046e616d6512db010a0f4c697374436f6c756d6e537065637312332e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4c697374436f6c756d6e5370656373526571756573741a342e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4c697374436f6c756d6e5370656373526573706f6e7365225d82d3e493024e124c2f763162657461312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f64617461736574732f2a2f7461626c6553706563732f2a7d2f636f6c756d6e5370656373da4106706172656e7412ee010a10557064617465436f6c756d6e5370656312342e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e557064617465436f6c756d6e53706563526571756573741a272e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e436f6c756d6e53706563227b82d3e493026732582f763162657461312f7b636f6c756d6e5f737065632e6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f64617461736574732f2a2f7461626c6553706563732f2a2f636f6c756d6e53706563732f2a7d3a0b636f6c756d6e5f73706563da410b636f6c756d6e5f7370656312c9010a0b4372656174654d6f64656c122f2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4372656174654d6f64656c526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e226a82d3e4930238222f2f763162657461312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a7d2f6d6f64656c733a056d6f64656cda410c706172656e742c6d6f64656cca411a0a054d6f64656c12114f7065726174696f6e4d65746164617461129c010a084765744d6f64656c122c2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4765744d6f64656c526571756573741a222e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4d6f64656c223e82d3e4930231122f2f763162657461312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6d6f64656c732f2a7dda41046e616d6512af010a0a4c6973744d6f64656c73122e2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4c6973744d6f64656c73526571756573741a2f2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4c6973744d6f64656c73526573706f6e7365224082d3e4930231122f2f763162657461312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a7d2f6d6f64656c73da4106706172656e7412ca010a0b44656c6574654d6f64656c122f2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e44656c6574654d6f64656c526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e226b82d3e49302312a2f2f763162657461312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6d6f64656c732f2a7dda41046e616d65ca412a0a15676f6f676c652e70726f746f6275662e456d70747912114f7065726174696f6e4d6574616461746112d4010a0b4465706c6f794d6f64656c122f2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4465706c6f794d6f64656c526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e227582d3e493023b22362f763162657461312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6d6f64656c732f2a7d3a6465706c6f793a012ada41046e616d65ca412a0a15676f6f676c652e70726f746f6275662e456d70747912114f7065726174696f6e4d6574616461746112da010a0d556e6465706c6f794d6f64656c12312e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e556e6465706c6f794d6f64656c526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e227782d3e493023d22382f763162657461312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6d6f64656c732f2a7d3a756e6465706c6f793a012ada41046e616d65ca412a0a15676f6f676c652e70726f746f6275662e456d70747912114f7065726174696f6e4d6574616461746112e3010a0b4578706f72744d6f64656c122f2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4578706f72744d6f64656c526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e22830182d3e493023b22362f763162657461312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6d6f64656c732f2a7d3a6578706f72743a012ada41126e616d652c6f75747075745f636f6e666967ca412a0a15676f6f676c652e70726f746f6275662e456d70747912114f7065726174696f6e4d65746164617461128c020a174578706f72744576616c75617465644578616d706c6573123b2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4578706f72744576616c75617465644578616d706c6573526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e22940182d3e493024c22472f763162657461312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6d6f64656c732f2a7d3a6578706f72744576616c75617465644578616d706c65733a012ada41126e616d652c6f75747075745f636f6e666967ca412a0a15676f6f676c652e70726f746f6275662e456d70747912114f7065726174696f6e4d6574616461746112cd010a124765744d6f64656c4576616c756174696f6e12362e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4765744d6f64656c4576616c756174696f6e526571756573741a2c2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4d6f64656c4576616c756174696f6e225182d3e493024412422f763162657461312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6d6f64656c732f2a2f6d6f64656c4576616c756174696f6e732f2a7dda41046e616d6512e0010a144c6973744d6f64656c4576616c756174696f6e7312382e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4c6973744d6f64656c4576616c756174696f6e73526571756573741a392e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4c6973744d6f64656c4576616c756174696f6e73526573706f6e7365225382d3e493024412422f763162657461312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6d6f64656c732f2a7d2f6d6f64656c4576616c756174696f6e73da4106706172656e741a49ca41156175746f6d6c2e676f6f676c65617069732e636f6dd2412e68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c6174666f726d42b2010a1f636f6d2e676f6f676c652e636c6f75642e6175746f6d6c2e76316265746131420b4175746f4d6c50726f746f50015a41676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f6175746f6d6c2f763162657461313b6175746f6d6cca021b476f6f676c655c436c6f75645c4175746f4d6c5c56316265746131ea021e476f6f676c653a3a436c6f75643a3a4175746f4d4c3a3a56316265746131620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

