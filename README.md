The MTS SDK for Aliyun OpenAPI
==============================

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


The MTS SDK for Aliyun OpenAPI

## Install

Via Composer

``` bash
$ composer require lokielse/aliyun-open-api-mts
```

## Usage

```php
/**
 * 访问信息
 */
$config = [
	'AccessKeyId'=>'<your access_key_id>',
	'AccessKeySecret'=>'<your access_key_secret>',
];

/**
 * 授权资料
 */
$profile = DefaultProfile::getProfile('cn-hangzhou', $config['AccessKeyId'], $config['AccessKeySecret']);

/**
 * 输入文件信息
 */
$input = [
	'Bucket'   => 'zuren',
	'Location' => 'oss-cn-hangzhou',
	'Object'   => 'videos/test/input_demo_01.mp4'
];

/**
 * 输出文件信息
 */
$outputs = [
	[
		'OutputObject' => 'videos/test/input_demo_01.mp4',
		'TemplateId'   => 'S00000001-200030', //模板ID
	]
];

/**
 * 请求对象
 */
$request = new SubmitJobsRequest();
$request->setInput(json_encode($input));
$request->setOutputBucket('zuren');
$request->setOutputs(json_encode($outputs));
$request->setPipelineId('81029d8fb1724902a4f7a421f509e153'); //管道ID

$client  = new DefaultAcsClient($profile);
$response = $client->getAcsResponse($request);

var_dump($response);
```

[官方文档](https://help.aliyun.com/document_detail/mts/api-reference/trans-ossfile/SubmitJobs.html)