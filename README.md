# IDER
Create ID for any value.

## Instalition
In your ```composer.json``` file use:

```
{
    "require": {
        "kalaomer/ider": "*"
    }
}
```

Then run ```composer install```

## IDER Usage
Ider is very small and very easy class.

### GetID
Create ID.

```

$obj = new stdClass;
$objID = Ider::getID( $obj );

$stringID = Ider::getID( "Lorem Ipsum" );
```

### Check
Check ID and value.

```
$isThisObj = Ider::check( $objID, $obj );	// TRUE

$isThisObj = Ider::check( $objID, new stdClass );	// false
```