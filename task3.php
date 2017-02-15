<?php 

class Fixed {
	private $value = 200;
	
	public function getTariff()
	{
		return $this->value;
	}


}

class Hourly {
	private $value = 100;
	
	public function getTariff()
	{
		return $this->value;
	}
}


class TypeFactory
{
    private $type;
	
	public function create($type)
	{
		$className = $type['type'];
		
		if(class_exists($type['tariff'])) {
			
			return new $className(new $type['tariff'], $type['quantity']);
			
		} else {
		
			return false;
			
		}
		
	}
}


class Speaking
{

    public function __construct($tariff, $quantity)
    {
		$value = $tariff->getTariff();
		$this->getCost($value, $quantity);
    }


    public function getCost($tariff, $quantity)
    {
        echo $tariff * $quantity;
    }

}

class Grammar {
   

    public function __construct($tariff, $quantity)
    {
		$value = $tariff->getTariff();
		$this->getCost($value, $quantity);
    }


    public function getCost($tariff, $quantity)
    {
        echo $tariff * $quantity;
    }

}

$typeLessons = array(
    array(
        'type'  => 'speaking',
		'tariff' => 'fixed',
		'quantity' => 2
        
    ),
    array(
		'type'  => 'grammar',
        'tariff' => 'hourly',
		'quantity' => 5
        
    )
);


$factory = new TypeFactory();

foreach($typeLessons as $type) {
    if(class_exists($type['type']))
    {
        $cart[] = $factory->create($type);
    }
    else
	{
        return false;
    }
} 




//print_r($cart);



	
?>