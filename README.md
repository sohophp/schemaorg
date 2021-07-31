# phpschemaorg

schema.org PHP library

@since v1.5.0 2020/03/12  加入 set 和 get 方法

### 

@since 2019/08/13 updated 3.9  ,  800 classes

## 特点:

支持自动生成类目PHP类文件,现schema.org版本v3.4有598个类,877个属性,136个其它

强类型检查

自定命名空间

PHP CS Fixer 代码格式化符合PSR标准

IDE中类与方法可自动完成.

##安装方法:

Composer:

composer require sohophp/schema-org

Git:

git clone https://github.com/sohophp/schemaorg.git



##使用方法:

<pre> 
use Sohophp\SchemaOrg\Thing\CreativeWork\WebPage;
$Page = new WebPage();
$Page->name("test one")->text('content');
$script = $Page->toScript();
echo $script;
</pre>

##输出结果:

<pre>
&lt;script type=&quot;application/ld+json&quot;&gt;
{
    &quot;@context&quot;: &quot;https:\/\/schema.org&quot;,
    &quot;@type&quot;: &quot;WebPage&quot;,
    &quot;name&quot;: &quot;test one&quot;,
    &quot;text&quot;: &quot;content&quot;
}
&lt;/script&gt;
</pre>
