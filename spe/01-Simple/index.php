<?php
// index.php 20150101 - 20170302
// Copyright (C) 2015-2017 Mark Constable <markc@renta.net> (AGPL-3.0)

echo new class
{
    private
    $in = [        // this is Associative Array named "in" having the key value pair in [] bracket
        'm'     => 'home',      // Method action
    ],
    $out = [    // this is Associative Array named "out" having the key value pair in [] bracket
        'doc'   => 'SPE::01',
        'nav1'  => '',
        'head'  => 'Simple',
        'main'  => '<p>Error: missing page!</p>',
        'foot'  => 'Copyright (C) 2015-2017 Mark Constable (AGPL-3.0)',
    ],
    $nav1 = [   // this is Associative Array named "nav1" having the key value pair in [] bracket
        ['Home', '?m=home'],
        ['About', '?m=about'],
        ['Contact', '?m=contact'],
    ];

    public function __construct() // This is the inbuilt function which creates a new "SinmpleXMLElement" Object.
    {
        $this->in['m'] = $_REQUEST['m'] ?? $this->in['m']; // "this" function pointing to the current object and "request" for the value associated with the key named as "m"
        if (method_exists($this, $this->in['m'])) // this if condition is having two parameter "first" is object and "second" is method name.it returns TRUE if the method given by "$this->in['m']" has been defined for the given $this(object),FALSE otherwise.
            $this->out['main'] = $this->{$this->in['m']}(); // If the above condition is true then the left side variable assigned with value available in right side of expression.
        foreach ($this->out as $k => $v) // "foreach" loop is populate the key-value pair from the out array and store in "$this" element.
            $this->out[$k] = method_exists($this, $k) ? $this->$k() : $v; // this ternary operator indicates if the "method_exists"
    }

    public function __toString() : string //This function having name "toString" and return type string
    {
        return $this->html(); // it return the value from the html() function
    }

    private function nav1() : string // this function is having name "nav1" and returns string type value
    {
        return '
      <nav>' . join('', array_map(function ($n) { //"join()" function returns a string from the elements of an array in syntax "join(separator,array)"
            return '
        <a href="' . $n[1] . '">' . $n[0] . '</a>'; //return the link of the <nav> tag in which $n[1] is the link and $n[0] is the text displayed for the link
        }, $this->nav1)) . '
      </nav>';
    }

    private function head() : string // head() is having string type return value
    {  // this returns the header section of the rendered page
        return '
    <header>join(separator,array)
      <h1>' . $this->out['head'] . '</h1>' . $this->out['nav1'] . '
    </header>';
    }

    private function main() : string   // main() is having string type return value
    {   // it returns the body or main part of the rendered page
        return '
    <main>' . $this->out['main'] . '
    </main>';
    }

    private function foot() : string // foot() is having string type return value
    {  //below statement returns the footer part of the rendered page
        return '
    <footer>
      <p><em><small>' . $this->out['foot'] . '</small></em></p>
    </footer>'; //this is the paragraph which display the content of footer in italic format
    }

    private function html() : string  //It returns the document structure in HTML format
    {
        extract($this->out, EXTR_SKIP); //The work of "EXTR_SKIP" is On collision,the existing variable is not overwritten
        return '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>' . $doc . '</title>
  </head>
  <body>' . $head . $main . $foot . '
  </body>
</html>
'; // the whole part is "HTML" document fomat and the corresponding variables is replaced by its value as defined earlier
    }

    private function home() { return '<h2>Home Page</h2><p>Lorem ipsum home.</p>'; }
    private function about() { return '<h2>About Page</h2><p>Lorem ipsum about.</p>'; }
    private function contact() { return '<h2>Contact Page</h2><p>Lorem ipsum contact.</p>'; }
}; // On calling of the specific method it returns the tags associated with.
