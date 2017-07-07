## spe/01-Simple

**2015-10-15** -- _Copyright (C) 2015-2017 Mark Constable (AGPL-3.0)_

This is the first and simplest project example that demonstrates the
essential core structure for this project series.

We start off on line [5] with a PHP7 declaration of `stict_types` for this
file. Unlike previous versions of PHP, this forces strict type checking on
`int`, `float`, `string`, `bool` and class types for function and method
arguments as well as the return type. Line [7] starts the most important
part of the framework. It has 3 components...

- it contains the only `echo` statement for the entire framework.All output
  to the browser or command line is encapsulated in methods and returned
  as strings and amalgamated to the global `$out` array. There is no "raw"
  (outside of a method or function) code allowed let alone any line by line
  echo statements.

Line[8]  ->this is Associative Array named "in" having the key value pair in [] bracket
Line[11] ->this is Associative Array named "out" having the key value pair in [] bracket
Line[18] ->this is Associative Array named "nav1" having the key value pair in [] bracket
Line[24] ->This is the inbuilt function which creates a new "SinmpleXMLElement" Object.
Line[26] ->"this" function pointing to the current object and "request" for the value associated with the key named as "m"
Line[27] ->this if condition is having two parameter "first" is object and "second" is method name.it returns TRUE if the method given by "$this->in['m']" has been defined for the given $this(object),FALSE otherwise.
Line[28] ->If the above condition is true then the left side variable assigned with value available in right side of expression.
Line[29] ->"foreach" loop is populate the key-value pair from the out array and store in "$this" element.
Line[30] ->this ternary operator indicates if the "method_exists"
Line[33] ->this function having name "toString" and return type string
Line[35] ->it return the value from the html() function
Line[38] ->this function is having name "nav1" and returns string type value
Line[41] ->"join()" function returns a string from the elements of an array in syntax "join(separator,array)"
Line[43] ->return the link of the <nav> tag in which $n[1] is the link and $n[0] is the text displayed for the link
Line[48] ->head() is having string type return value
Line[49] ->this returns the header section of the rendered page
Line[56] ->main() is having string type return value
Line[57] ->it returns the body or main part of the rendered page
Line[63] ->foot() is having string type return value
Line[64] ->below statement returns the footer part of the rendered page
Line[68] ->this is the paragraph which display the content of footer in italic format
Line[71] ->It returns the document structure in HTML format
Line[73] ->The work of "EXTR_SKIP" is On collision,the existing variable is not overwritten
Line[84] ->the whole part is "HTML" document fomat and the corresponding variables is replaced by its value as defined earlier
Line[90] ->On clicking of the specific links in "<nav>" region of rendered page will dislayed for the particular called page

**TODO: complete documentation.**

[5]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L5
[7]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L7
[8]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L8
[11]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L11
[18]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L18
[24]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L24
[26]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L26
[27]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L27
[28]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L28
[30]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L29
[33]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L30
[35]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L33
[38]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L35
[40]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L38
[41]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L41
[43]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L43
[50]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L48
[51]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L49
[56]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L56
[58]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L57
[63]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L63
[65]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L64
[65]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L68
[71]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L71
[73]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L73
[88]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L84
[89]: https://github.com/markc/spe/blob/master/01-Simple/index.php#L90



