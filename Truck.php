<?php 

require_once ('Vehicle.php');

class Truck extends Vehicle
{
  private int $capacity;
  private int $loading = 0;
  
  public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
  {
      parent::__construct($color, $nbSeats, $energy);
      $this->capacity = $capacity;
  }

  public function setCapacity(int $capacity): void
{
    $this->capacity = $capacity;
}

public function getCapacity()
{
    return $this->capacity;
}

public function setLoading(int $loading)
{
    $this->loading= $loading;
}

public function getLoading()
{
    return $this->loading;
}

public function full (int $loading)
{
    $some ='In filling';
    
    if($this->capacity === $loading){
        $some = 'Full';
    }

    return $some;
}

}
