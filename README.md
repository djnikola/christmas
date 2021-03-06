# Christmas

## User story
As a geeky Christmas fan I want to generate ASCII shapes of stars and trees in three different
sizes so that I can decorate my office nicely for Christmas.

## Details
The designer has provided the following designs for the shapes: Tree and Star

The following sizes should be available:
- S (small): 5 lines height
- M (medium): 7 lines height
- L (large): 11 lines height

If the user does not provide a size, pick a random size.
It should be possible to output the shapes both on the command line and in a browser.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. 

### Installing

Go to your web directory and type:
```
git clone https://github.com/djnikola/christmas.git 
```
This will create a christmas folder and it will put the code in it.

then run:
```
<patch_to_project>$cd christmas
<patch_to_project>$composer install
```
This will install all dependeces. Currently only PHP unit.

### Running

#### Using Web broweser

In your browser type:
```
http://<patch_to_project>/
```

#### Using Command Line

Go to the project path and type:
```
<patch_to_project>$php index.php
```

### PHP Unit tests

To run the tests type:
```
<patch_to_project>$./vendor/bin/phpunit tests/
```
This will execute all tests and provide an output.

## Simplifications

Instead of user input the program will print all shapes in all sizes.

## Issues 

It seems there is an error in the request for the large Star shape.
The first three lines of small Star start as:
```
    +
    X
 +XXXXX+
```
The first three lines of medium Star shape start as:
```
    +
    X
  XXXXX
```

but the first three lines of large Star shape start as:

```
    +
    X
   XXX
```

to me it seems it should be like this:

```
    +
    X
  XXXXX
```
The code is written based on this assumption.

## Documentation 

None. :)


## Built With

* PHP 7.3.2
* PHPUnit 9.0.0 by Sebastian Bergmann and contributors.

## Authors

* **Nikola Dordevic**
