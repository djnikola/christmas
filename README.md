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
composer install
```
This will install all dependeces. Currently only PHP unit.

### Running

#### Using Web broweser

In your broser type:
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

## Documentation 

None. :)


## Built With

* PHP 7.3.2
* PHPUnit 9.0.0 by Sebastian Bergmann and contributors.

## Authors

* **Nikola Dordevic**
