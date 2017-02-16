<?php 


interface Tariff {

	public function getTariff();
}

interface TypeLessons {

	public function getCost($tariff, $quantity);
	
}

class Fixed implements Tariff {
	
	private $value = 200;
	
	public function getTariff()
	{
		return $this->value;
	}


}

class Hourly implements Tariff {
	
	private $value = 100;
	
	public function getTariff()
	{
		return $this->value;
	}
}


class Speaking implements TypeLessons {

    public function __construct($tariff, $quantity)
    {
		$value = $tariff->getTariff();
		$this->getCost($value, $quantity);
    }


    public function getCost($tariff, $quantity)
    {
        return $tariff * $quantity;
    }

}

class Grammar implements TypeLessons {
   

    public function __construct($tariff, $quantity)
    {
		$value = $tariff->getTariff();
		$this->getCost($value, $quantity);
    }


    public function getCost($tariff, $quantity)
    {
        return $tariff * $quantity;
    }

}

class Factory {
	
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

$typeLessons = array(
    array(
        'type'  => 'Speaking',
		'tariff' => 'fixed',
		'quantity' => 2
        
    ),
    array(
		'type'  => 'Grammar',
        'tariff' => 'hourly',
		'quantity' => 1
        
    )
);


$factory = new Factory();

foreach($typeLessons as $type) {
    
	if(class_exists($type['type'])) {
       
	   $factory->create($type);
	   
    } else {
	
        return false;
		
    }
} 







	
?>