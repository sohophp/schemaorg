# phpschemaorg

###  schema.org PHP library
- Current schema.org data: v30.0 (`data/manifest.json`)
- PHP 8.1 - 8.5
- @since 2021/12/23 v3.0.0 升级至 PHP8.1
- @since 2020/03/12 v1.5.0   加入 set 和 get 方法
- @since 2019/08/13 updated 3.9  ,  800 classes

## 特点:

- 支持根据 schema.org 数据自动生成 PHP 类文件
- 提供 PHP 类型提示、PHPDoc 和 IDE 自动补全
- 自定命名空间
- PHP CS Fixer 代码格式化符合PSR标准
- IDE中类与方法可自动完成.

## 安装方法 / installation: 

#### Composer:

```shell 
$ composer require sohophp/schema-org 
```

Requires PHP 8.1 or newer.

## Documentation

- [Installation](docs/installation.md)
- [Basic usage](docs/basic-usage.md)
- [JSON-LD output](docs/json-ld.md)
- [Schema generator](docs/generator.md)
- [Google structured data](docs/google-structured-data.md)
- [Troubleshooting](docs/troubleshooting.md)
- [Compatibility](docs/compatibility.md)
- [Migration notes](docs/migration-4.1.md)
- [Release and distribution](docs/release.md)
- [Changelog](CHANGELOG.md)

#### Git: 
```shell
$ git clone https://github.com/sohophp/schemaorg.git
``` 

## 使用方法 / Usage: 

```PHP
use Sohophp\SchemaOrg\Thing\CreativeWork\WebPage;
$Page = new WebPage();
$Page->name("test one")->text('content');
$script = $Page->toScript();
echo $script;
``` 

Current release: `v5.0.1`. See [release and distribution](docs/release.md) for Composer, GitHub, Packagist, and release procedures.

### JSON-LD metadata and repeated properties

Use `setId()` for a JSON-LD node identifier. Use `addX()` when a property has multiple values; `setX()` remains available for replacing a value with a scalar, object, or array.

```php
$patient = new \Sohophp\SchemaOrg\Thing\Intangible\Audience\MedicalAudience\Patient();
$patient->setId('https://example.com/patient/123')
    ->addDiagnosis($conditionOne)
    ->addDiagnosis($conditionTwo);
```

For multiple related nodes, `SchemaCollection` supports JSON-LD graph output:

```php
$json = $collection->toGraphJson();
$script = $collection->toGraphScript();
```

## 输出结果 / output: 

```javascript
<script type="application/ld+json">
{
    "@context": "https:\/\/schema.org",
    "@type": "WebPage",
    "name": "test one",
    "text": "content"
}
</script>
```



