# phpschemaorg

###  schema.org PHP library
- @since 2026/08/19 v30.0/schemaorg-all-https.jsonld
- PHP 8.1 or newer
- @since 2021/12/23 v3.0.0 升级至 PHP8.1
- @since 2020/03/12 v1.5.0   加入 set 和 get 方法
- @since 2019/08/13 updated 3.9  ,  800 classes

## 特点:

- 支持自动生成类目PHP类文件,现schema.org版本v3.4有598个类,877个属性,136个其它
- 强类型检查
- 自定命名空间
- PHP CS Fixer 代码格式化符合PSR标准
- IDE中类与方法可自动完成.

## 安装方法 / installation: 

#### Composer:

```shell 
$ composer require sohophp/schema-org 
```

Requires PHP 8.1 or newer.

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



