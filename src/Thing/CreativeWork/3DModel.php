<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A 3D model represents some kind of 3D content, which may have <a class="localLink" href="http://schema.org/encoding">encoding</a>s in one or more <a class="localLink" href="http://schema.org/MediaObject">MediaObject</a>s. Many 3D formats are available (e.g. see <a href="https://en.wikipedia.org/wiki/Category:3D_graphics_file_formats">Wikipedia</a>); specific encoding formats can be represented using the <a class="localLink" href="http://schema.org/encodingFormat">encodingFormat</a> property applied to the relevant <a class="localLink" href="http://schema.org/MediaObject">MediaObject</a>. For the
case of a single file published after Zip compression, the convention of appending '+zip' to the <a class="localLink" href="http://schema.org/encodingFormat">encodingFormat</a> can be used. Geospatial, AR/VR, artistic/animation, gaming, engineering and scientific content can all be represented using <a class="localLink" href="http://schema.org/3DModel">3DModel</a>.
* @see http://schema.org/3DModel
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class 3DModel extends CreativeWork
{


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\3DModel','Thing\\3DModel');

