<?php


class Cookie
{
    private $type;

    public function setType($type)
    {
        $availableTypes = array('шоколадное', 'ванильное', 'ореховое', 'фруктовое');
        if (in_array($type, $availableTypes)) {
            $this->type = $type;
        } else {
            throw new Exception("Недопустимый тип печенья: $type");
        }
    }

    public function getType()
    {
        return $this->type;
    }
}

$cookie = new Cookie();
$cookie->setType('шоколадное');
echo "Тип печенья: " . $cookie->getType() . "<br>";

$cookie->setType('фруктовое');
echo "Тип печенья: " . $cookie->getType() . "<br>";

try {
    $cookie->setType('кексовое');
} catch (Exception $e) {
    echo $e->getMessage() . "<br>";
}
