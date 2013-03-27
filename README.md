openlss/func-gen
========

Generation functions: handles, uuid, etc

Usage
----

```php
$guid = gen_guid();

$handle = gen_handle();
```

Reference
----

### (string) gen_guid()
Returns a GUID using either the preferred extension or a pure PHP implementation

### (string) gen_handle($len=6)
Returns an alphanumeric case senstive handle for use as an ID
  * $len	Length of the handle

Typically this would be used to generate pseudo-random identifiers with code like this
```php
	do {
		$handle = gen_handle();
	} while(handleExists($handle));
```

