# Kirby SEO with Yoast

*Requires Kirby 2.3*

## Version 0.01
This is a fork of [Kirby SEO](https://raw.githubusercontent.com/jenstornell/kirby-seo/). It adds in Yoast SEO content analysis to any content field, Open Graph and Twitter previews and a group of fields to drop into the site.yml for default meta title, description Open Graph image and Twitter image.

To get the meta fields add this to a blueprint:

```yaml
  meta:
    extends: meta
```



The plugin looks for a field called text by default but you can add a contentblockname field to a blueprint to analyze something with a different name. Example:
```yaml
  seo:
    label: Kirby SEO
    type: seo
    contentblockname: somethingotherthantext
```

# Kirby SEO

A search engine results page (SERP) preview field for the panel. Sorry that the colors in the GIF are weird:

![](https://raw.githubusercontent.com/jenstornell/kirby-seo/master/preview4.gif)

![](https://raw.githubusercontent.com/jenstornell/kirby-seo/master/archive.gif)

## What is SEO?

It stands for Search Engine Optimization. Make yourself visible in the search engines.

## Chapters

1. [Installation](https://github.com/jenstornell/kirby-seo/blob/master/docs/INSTALL.md)
1. [Blueprint](https://github.com/jenstornell/kirby-seo/blob/master/docs/BLUEPRINT.md)
1. [Frontend](https://github.com/jenstornell/kirby-seo/blob/master/docs/FRONTEND.md)
1. [Controllers](https://github.com/jenstornell/kirby-seo/blob/master/docs/CONTROLLERS.md)
1. [Options](https://github.com/jenstornell/kirby-seo/blob/master/docs/OPTIONS.md)
1. [SEO archive field](https://github.com/jenstornell/kirby-seo/blob/master/docs/ARCHIVE.md)
