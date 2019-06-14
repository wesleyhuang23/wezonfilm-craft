<?php

$vendorDir = dirname(__DIR__);

return array (
  'dolphiq/sitemap' => 
  array (
    'class' => 'dolphiq\\sitemap\\Sitemap',
    'basePath' => $vendorDir . '/dolphiq/sitemap/src',
    'handle' => 'sitemap',
    'aliases' => 
    array (
      '@dolphiq/sitemap' => $vendorDir . '/dolphiq/sitemap/src',
    ),
    'name' => 'XML Sitemap',
    'version' => '1.0.9',
    'schemaVersion' => '1.0.2',
    'description' => 'Craft 3 plugin that provides an easy way to provide and manage a XML sitemap for search engines like Google and Bing',
    'developer' => 'Dolphiq',
    'developerUrl' => 'https://dolphiq.nl/',
    'documentationUrl' => 'https://github.com/Dolphiq/craft3-plugin-sitemap/blob/master/README.md',
    'changelogUrl' => 'https://github.com/Dolphiq/craft3-plugin-sitemap/blob/master/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => false,
    'components' => 
    array (
      'sitemapService' => 'dolphiq\\sitemap\\services\\SitemapService',
    ),
  ),
  'rias/craft-position-fieldtype' => 
  array (
    'class' => 'rias\\positionfieldtype\\PositionFieldtype',
    'basePath' => $vendorDir . '/rias/craft-position-fieldtype/src',
    'handle' => 'position-fieldtype',
    'aliases' => 
    array (
      '@rias/positionfieldtype' => $vendorDir . '/rias/craft-position-fieldtype/src',
    ),
    'name' => 'Position Fieldtype',
    'version' => '1.0.14',
    'schemaVersion' => '1.0.0',
    'description' => 'Brings back the Position fieldtype from Craft 2',
    'developer' => 'Rias',
    'developerUrl' => 'https://rias.be',
    'changelogUrl' => 'https://raw.githubusercontent.com/Rias500/craft-position-fieldtype/master/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
  ),
  'studioespresso/craft-dumper' => 
  array (
    'class' => 'studioespresso\\craftdumper\\CraftDumper',
    'basePath' => $vendorDir . '/studioespresso/craft-dumper/src',
    'handle' => 'dumper',
    'aliases' => 
    array (
      '@studioespresso/craftdumper' => $vendorDir . '/studioespresso/craft-dumper/src',
    ),
    'name' => 'Dumper',
    'version' => '1.3.1',
    'schemaVersion' => '1.0.0',
    'description' => 'Bringing larapack/dd to Craft 3',
    'developer' => 'Studio Espresso',
    'developerUrl' => 'https://studioespresso.co',
    'changelogUrl' => 'https://raw.githubusercontent.com/studioespresso/craft3-dumper/master/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
  ),
  'craftcms/redactor' => 
  array (
    'class' => 'craft\\redactor\\Plugin',
    'basePath' => $vendorDir . '/craftcms/redactor/src',
    'handle' => 'redactor',
    'aliases' => 
    array (
      '@craft/redactor' => $vendorDir . '/craftcms/redactor/src',
    ),
    'name' => 'Redactor',
    'version' => '2.3.3.2',
    'description' => 'Edit rich text content in Craft CMS using Redactor by Imperavi.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'documentationUrl' => 'https://github.com/craftcms/redactor/blob/v2/README.md',
  ),
  'dolphiq/redirect' => 
  array (
    'class' => 'dolphiq\\redirect\\RedirectPlugin',
    'basePath' => $vendorDir . '/dolphiq/redirect/src',
    'handle' => 'redirect',
    'aliases' => 
    array (
      '@dolphiq/redirect' => $vendorDir . '/dolphiq/redirect/src',
    ),
    'name' => 'Redirect plugin for Craft 3',
    'version' => '1.0.23',
    'schemaVersion' => '1.0.5',
    'description' => 'Craft redirect plugin provides an easy way to enter and maintain 301 and 302 redirects and 404 error pages.',
    'developer' => 'Dolphiq',
    'developerUrl' => 'https://dolphiq.nl/',
    'documentationUrl' => 'https://github.com/Dolphiq/craft3-plugin-redirect/blob/master/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/Dolphiq/craft3-plugin-redirect/master/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => true,
  ),
  'born05/craft-assetusage' => 
  array (
    'class' => 'born05\\assetusage\\Plugin',
    'basePath' => $vendorDir . '/born05/craft-assetusage/src',
    'handle' => 'assetusage',
    'aliases' => 
    array (
      '@born05/assetusage' => $vendorDir . '/born05/craft-assetusage/src',
    ),
    'name' => 'Asset Usage',
    'version' => '2.0.1',
    'description' => 'Adds a column to see which assets are used or unused.',
    'developer' => 'Born05',
    'developerUrl' => 'https://www.born05.com/',
    'changelogUrl' => 'https://raw.githubusercontent.com/born05/craft-assetusage/master/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
  ),
  'mmikkel/cp-clearcache' => 
  array (
    'class' => 'mmikkel\\cpclearcache\\CpClearCache',
    'basePath' => $vendorDir . '/mmikkel/cp-clearcache/src',
    'handle' => 'cp-clearcache',
    'aliases' => 
    array (
      '@mmikkel/cpclearcache' => $vendorDir . '/mmikkel/cp-clearcache/src',
    ),
    'name' => 'CP Clear Cache',
    'version' => '1.0.4',
    'description' => 'Less clickin’ to get clearin’',
    'developer' => 'Mats Mikkel Rummelhoff',
    'developerUrl' => 'https://vaersaagod.no',
    'changelogUrl' => 'https://raw.githubusercontent.com/mmikkel/CpClearCache-Craft/master/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
  ),
  'ether/seo' => 
  array (
    'class' => 'ether\\seo\\Seo',
    'basePath' => $vendorDir . '/ether/seo/src',
    'handle' => 'seo',
    'aliases' => 
    array (
      '@ether/seo' => $vendorDir . '/ether/seo/src',
    ),
    'name' => 'SEO',
    'version' => '3.5.4',
    'description' => 'SEO utilities including a unique field type, sitemap, & redirect manager',
    'developer' => 'Ether Creative',
    'developerUrl' => 'https://ethercreative.co.uk',
  ),
  'craftcms/element-api' => 
  array (
    'class' => 'craft\\elementapi\\Plugin',
    'basePath' => $vendorDir . '/craftcms/element-api/src',
    'handle' => 'element-api',
    'aliases' => 
    array (
      '@craft/elementapi' => $vendorDir . '/craftcms/element-api/src',
    ),
    'name' => 'Element API',
    'version' => '2.5.4',
    'description' => 'Create a JSON API for your elements in Craft',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/element-api',
    'changelogUrl' => 'https://raw.githubusercontent.com/craftcms/element-api/v2/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/craftcms/element-api/archive/v2.zip',
  ),
  'craftcms/aws-s3' => 
  array (
    'class' => 'craft\\awss3\\Plugin',
    'basePath' => $vendorDir . '/craftcms/aws-s3/src',
    'handle' => 'aws-s3',
    'aliases' => 
    array (
      '@craft/awss3' => $vendorDir . '/craftcms/aws-s3/src',
    ),
    'name' => 'Amazon S3',
    'version' => '1.2.3',
    'description' => 'Amazon S3 integration for Craft CMS',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'documentationUrl' => 'https://github.com/craftcms/aws-s3/blob/master/README.md',
  ),
);
