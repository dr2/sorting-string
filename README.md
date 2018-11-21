test-task/sorting-string
=================
[![License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://tldrlegal.com/license/mit-license)



Класс, который принимает utf8-текст и возвращает текст, в котором буквы слов отсортированы в алфавитном порядке.



Примеры:

'lemon orange banana apple' ---> 'elmno aegnor aaabnn aelpp'

'лимон апельсин банан яблоко' ---> 'илмно аеилнпсь аабнн бклооя'

'αβγαβγ αβγαβγαβγ' ---> 'ααββγγ αααβββγγγ'


  
Установка
------------------
Установка пакета с помощью Composer.

```
composer require dr2/sorting-string
```


Использование
-------------

```php


$sort_obj = new SortingString\AlphabeticalSorting();

$sort_obj->sortString('лимон апельсин банан яблоко') // илмно аеилнпсь аабнн бклооя

```