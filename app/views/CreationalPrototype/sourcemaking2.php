<?php

class SubObject
{
    static $instances = 0;
    public $instance;
    public function __construct() {
        $this->instance = ++self::$instances;
    }
    public function __clone() {
        $this->instance = ++self::$instances;
    }
}

class MyCloneable
{
    public $object1;
    public $object2;
    function __clone() {
        // Force a copy of this->object, otherwise it will point to same object.
        $this->object1 = clone $this->object1;
    }
}

$obj = new MyCloneable();

$obj->object1 = new SubObject();
$obj->object2 = new SubObject();

$obj2 = clone $obj;

?>
<table>
    <tr>
        <td valign="top">
            <pre class='prettyprint'><?=
                htmlspecialchars(file_get_contents(__FILE__))
            ?></pre>
        </td>
        <td valign="top" align="center">
            <div style="margin-left: 40px;"><?
                print("Original Object:<br>");
                print_r($obj);
                echo "<br><br>";
                print("Cloned Object:<br>");
                print_r($obj2);
            ?></div>
        </td>
    </tr>
</table>
