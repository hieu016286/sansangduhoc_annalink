---
title: List of available constants
description: Constants that can be added to your wp-config.php
layout: page.html
---
## Introduction

Constants are variables that can be added to your `wp-config.php`.

They are generally used for configuring development or technical features.

To use a constant, simply add a line to your `wp-config.php` file like so:

```
<?php
// [...]
define( 'ALGOLIA_AUTO_PROCESS_QUEUE', false );
/* That's all, stop editing! Happy blogging. */
// [...]
```

<div class="alert alert-warning">Make sure you define your constants before the `That's all, stop editing! Happy blogging.` comment, like showcased just above.</div>

## Constants Reference

Here is the list of all available constants.

| Constant Name             | Default Value | Description                                                                                                                                                                                        |
|:--------------------------|:--------------|:---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| ALGOLIA_HIDE_HELP_NOTICES | false         | By turning this on, you will hide help notices on the autocomplete and instantsearch admin pages. This is sometimes useful if you are using a custom autocomplete or instantsearch implementation. |
| ALGOLIA_SPLIT_POSTS       | true          | By turning this off, 1 post will equal 1 record but content will be truncated to fit into the Algolia payload max size.                                                                            |
| ALGOLIA_CONTENT_MAX_SIZE  | 2000          | Split the content over several records when exceeding ALGOLIA_CONTENT_MAX_SIZE (size in bytes). WARNING: you should only reduce this value, otherwise your queue will break.                       |
| ALGOLIA_APPLICATION_ID    | null          | The Algolia application to use.                                                                                                                                                                    |
| ALGOLIA_SEARCH_API_KEY    | null          | The Algolia search only API key to use.                                                                                                                                                            |
| ALGOLIA_API_KEY           | null          | The Algolia admin API key to use.                                                                                                                                                                  |
| ALGOLIA_INDEX_NAME_PREFIX | 'wp_'         | The index name prefix to use.                                                                                                                                                                      |
