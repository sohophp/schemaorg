# phpschemaorg

schema.org PHP library

##特点:

支持自动生成类目PHP类文件,现有版本schema.org v3.4可生成597个类,1万多属性

强类型检查

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

##官方网址:

https://schema.org

##中文网址:

https://schema.org.cn
