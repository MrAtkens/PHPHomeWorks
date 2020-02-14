<?

interface Kind{
    public function move(bool $legsStatus);
    public function eat(bool $eatRation);
    public function see(bool $visionStatus);
    public function sleepAnimal(bool $sleepStatus);
    public function hunt(bool $huntStatus);
}