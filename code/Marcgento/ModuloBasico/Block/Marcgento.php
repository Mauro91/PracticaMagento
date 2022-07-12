<?php


namespace Marcgento\ModuloBasico\Block;

use Magento\Framework\View\Element\Template;

class Marcgento extends Template
{
    public $nombre;
    /**
     * @param Template\Context $context
     * @param array $data
     * @return void
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ){
        $this->nombre = "Mauro";
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getTime(){
        return "Soleado";
    }

    public function getName(){
        return $this->nombre;
    }
}
