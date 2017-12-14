<?php
// MageConf/FrontendGridAjax/Controller/Grid/AjaxData.php
namespace MageConf\FrontendGridAjax\Controller\Grid;

use Magento\Framework\Controller\Result\JsonFactory as JsonResultFactory;

class AjaxData implements \Magento\Framework\App\ActionInterface
{
    protected $jsonFactory;

    public function __construct(
        JsonResultFactory $jsonFactory
    ) {
        $this->jsonFactory = $jsonFactory;
    }

    public function execute()
    {
        $jsonResult = $this->jsonFactory->create();

        $data = [
            0 =>
                [
                    'name'  => 'Strive Shoulder Pack',
                    'qty'   => 101,
                    'price' => 32.00
                ],
            1 =>
                [
                    'name'  => "Joust Duffle Bag",
                    'qty'   => 100,
                    'price' => 34.00
                ],
            2 =>
                [
                    'name'  => "Crown Summit Backpack",
                    'qty'   => 102,
                    'price' => 38.00
                ],
            3 =>
                [
                    'name'  => "Rival Field Messenger",
                    'qty'   => 98,
                    'price' => 45.949
                ]
            ];

        return $jsonResult->setData($data);
    }
}