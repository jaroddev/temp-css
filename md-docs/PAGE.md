# How to create a page

[How to render and test an existing twig file](https://github.com/sitedevente/temp-css/md-docs/TEST.md)
[How to create a form](https://github.com/sitedevente/temp-css/md-docs/FORM.md)
[How to contribute by creating a css script](https://github.com/sitedevente/temp-css/md-docs/CSS.md)

## Where to create a new twig file
In the twig folder, if the appropriate folder exists then choose it else create it.

	You want to add a twig which contains a grid of products.
	Save the file in the product folder.
	

## Name a new twig file
Be careful to respect Twig official naming convention, [use snake case](https://symfony.com/doc/current/templates.html#template-naming)

Name it:
   - index.html.twig if it does not exists
   - after a CRUD verb (add, edit, show, update)
   - after the main feature introduced by the twig file

## What to put inside

### Base template inheritance

We first extend the basic template with:

	{% extends 'base.html.twig' %}

Then add the 4 following blocks to your document:

### Add styles to header

Put css scripts in the style block without calling parent()

	{% block style %}
	<link rel="stylesheet" href"../style/a_script.css">
	<link rel="stylesheet" href"../layouts/another_script.css">
	{% endblock %}

### Add title

	{% block title %}
	Homepage		
	{% endblock %}

Here it should render as <Homepage> - Unison

### Add html

	{% block content %}

	{% endblock %}

### Add js scripts

	{% block script %}

	{% endblock %}

## Macro

A components folder was created to put macro files in it
	