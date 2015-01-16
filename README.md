restructr
====
 
domain driven development component foundation

[![Build Status](https://travis-ci.org/jgswift/restructr.png?branch=master)](https://travis-ci.org/jgswift/restructr)

## Installation

Install via cli using [composer](https://getcomposer.org/):
```sh
php composer.phar require jgswift/restructr:0.1.*
```

Install via composer.json using [composer](https://getcomposer.org/):
```json
{
    "require": {
        "jgswift/restructr": "0.1.*"
    }
}
```


## Dependency

* [php](http://php.net) 5.5+

## Description

restructr provides a set of foundational component abstractions in order to facilitate [domain driven development](https://en.wikipedia.org/wiki/Domain-driven_design) in PHP.
With no exception, the component foundation classes are composed at compile-time by traits, allowing a flexible approach that requires little imposition on an already existing domain model.  restructr provides these domain driven abstractions from both array-first or object-first perspectives.  restructr assumes very little about any given domains implementation and allows significant customization of existing functionality.

## Component Abstractions

* ```Entity``` - A single identifiable component
* ```Collection``` - A collection of ```Entity``` components
* ```ValueArray``` - An immutable ```ArrayAccess``` (```offsetGet```, ```offsetSet```, etc..)
* ```ValueObject``` - An immutable ```ObjectAccess``` (```__get```, ```__set```, etc..)
* ```CollectionEntity``` - An ```Entity``` component that also accepts/serializes an inner ```Collection```
* ```CollectionIterator``` - A ```Collection``` of non-accessable but iterable ```Entity``` components.
* ```EntityIterator``` - A ```Entity``` of non-accessable but iterable domain data

As mentioned above, it is possible to include these concepts into an already existing domain without extending the provided abstractions.  Nearly all abstractions are provided as composable traits that may be used or combined in any number of ways.

## Trait Extensions

These traits are included to customize domain implementations in various ways.  Some of these are foundational to the provided component abstractions, while others may be excluded or included on a per-domain basis.

* ```ArrayAccess``` - SPL ```ArrayAccess``` implementation using local domain data
* ```ArrayAggregate``` - SPL ```IteratorAggregate``` implementation using local domain data
* ```ArrayAttributable``` - ```ArrayAccess``` key restraints as defined by ```getAttributes``` method
* ```ArrayEnumerable``` - ```Enumerable``` implementation to retrieve local domain data
* ```ArrayEnumerableAggregate``` - SPL ```IterateAggregate``` implementation using ```Enumerable``` data
* ```ArrayImmutable``` - ```ArrayAccess``` implementation that disallows mutation (```offsetSet```, ```offsetUnset```)
* ```ArrayIterator``` - SPL ```Iterator``` implementation using local domain data
* ```Countable``` - SPL ```Countable``` implementation using local domain data
* ```ObjectAccess``` - Object magic implementation based on ```ArrayAccess``` trait
* ```ObjectAttributable``` - ```ObjectAccess``` property restraints as defined by ```getAttributes``` method
* ```ObjectEnumerable``` - ```ArrayEnumerable``` alias
* ```ObjectImmutable``` - ```ObjectAccess``` implementation that disallows property mutation (```__set```, ```__unset```)
* ```RecursiveArrayIterator``` - SPL ```RecursiveIterator``` implementation that uses RecursiveArrayIterator from SPL 
* ```RecursiveIterator``` - Minimal SPL ```RecursiveIterator``` implementation
* ```RecursiveSerializer``` - ```Enumerable``` implementation that recursively converts domain data to an array
