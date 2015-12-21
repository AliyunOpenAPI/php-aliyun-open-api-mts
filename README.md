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
 * 配置网关
 */
$endpoint = new Endpoint('cn-hangzhou', EndpointConfig::getRegionIds(), EndpointConfig::getProductDomains());
EndpointProvider::setEndpoints([ $endpoint ]);

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


## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email lokielse@gmail.com instead of using the issue tracker.

## Credits

- [Lokielse][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/lokielse/aliyun-open-api-mts.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/lokielse/aliyun-open-api-mts/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/lokielse/aliyun-open-api-mts.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/lokielse/aliyun-open-api-mts.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/lokielse/aliyun-open-api-mts.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/lokielse/aliyun-open-api-mts
[link-travis]: https://travis-ci.org/lokielse/aliyun-open-api-mts
[link-scrutinizer]: https://scrutinizer-ci.com/g/lokielse/aliyun-open-api-mts/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/lokielse/aliyun-open-api-mts
[link-downloads]: https://packagist.org/packages/lokielse/aliyun-open-api-mts
[link-author]: https://github.com/lokielse
[link-contributors]: ../../contributors