# phpschemaorg

###  schema.org PHP library


- @since 2019/08/13 updated 3.9  ,  800 classes
- @since 2020/03/12 v1.5.0   加入 set 和 get 方法
- @since 2021/12/23 v3.0.0 升级至 PHP8.1

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



