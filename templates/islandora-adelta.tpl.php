<?php

/**
 * @file
 * This is the template file for the object page for basic image
 *
 * @TODO: add documentation about file and available variables
 */
?>

<div class="islandora-adelta-object islandora">
  <div class="islandora-adelta-content-wrapper clearfix">
    <?php if (isset($islandora_content)): ?>
      <div class="islandora-adelta-content">
      <section id="photos">
        <?php print str_replace ( 'alt="" title=' , 'alt=' , $islandora_content );
			  foreach ($other_images as $img) {
			  	print str_replace ( 'alt="" title=' , 'alt=' , $img );
			  }
        ?>
        </section>
      </div>
    <?php endif; ?>
  <div class="islandora-adelta-sidebar">
  	<!-- <?php print $mods?> 
    <?php if (!empty($dc_array['dc:description']['value'])): ?>
      <h2><?php print $dc_array['dc:description']['label']; ?></h2>
      <p><?php print $dc_array['dc:description']['value']; ?></p> 
    <?php endif; ?>
    <?php if ($parent_collections): ?>
      <div>
        <h2><?php print t('In collections'); ?></h2>
        <ul>
          <?php foreach ($parent_collections as $collection): ?>
            <li><?php print l($collection->label, "islandora/object/{$collection->id}"); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>-->
  </div>
  </div>
  <fieldset class="collapsible islandora-adelta-metadata">
  <legend><span class="fieldset-legend"><?php print t('Details'); ?></span></legend>
    <section xmlns:dc="http://purl.org/dc/elements/1.1/"
about="http://www.example.com/books/wikinomics" class="fieldset-wrapper">
      <dl class="islandora-inline-metadata islandora-adelta-fields">
        <!--<?php $row_field = 0; ?>
        <?php foreach($dc_array as $key => $value): ?>
          <dt class="<?php print $value['class']; ?><?php print $row_field == 0 ? ' first' : ''; ?>">
            <?php print $value['label']; ?>
          </dt>
          <dd class="<?php print $value['class']; ?><?php print $row_field == 0 ? ' first' : ''; ?>">
            <?php print $value['value']; ?>
          </dd>
          <?php $row_field++; ?>
        <?php endforeach; ?>-->
        <?php print $mods?>
      </dl>
    </section>
  </fieldset>
</div>
