<?

interface BirdKind extends Kind{
    public function fly();
    public function eggPlant();
    public function twit();
}

interface SpiderKind extends Kind{
    public function generatePoison();
    public function generateWeb();
    public function spiderReflex();
}

interface BearKind extends Kind{
    public function generateSkin();
    public function hibernation();
    public function roar();
}

interface LionKind extends Kind{
    public function roar();
    public function callPride();
    public function kickOutSimba();
}

interface SnakeKind extends Kind{
    public function termalVision();
    public function poisonByte();
    public function generatePoison(); 
}