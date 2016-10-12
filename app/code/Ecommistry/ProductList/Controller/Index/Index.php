<?php 


namespace Ecommistry\ProductList\Controller\Index;
 
 
class Index extends \Magento\Framework\App\Action\Action {

	protected $resultPageFactory;
	protected $jsonHelper;

	
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory,
		\Magento\Framework\Json\Helper\Data $jsonHelper
	){
		$this->resultPageFactory = $resultPageFactory;
		$this->jsonHelper = $jsonHelper;
		parent::__construct($context);
	}

	
	public function execute(){
		try {
		    return $this->jsonResponse('your response');
		} catch (\Magento\Framework\Exception\LocalizedException $e) {
		    return $this->jsonResponse($e->getMessage());
		} catch (\Exception $e) {
		    $this->logger->critical($e);
		    return $this->jsonResponse($e->getMessage());
		}
	}

	
	public function jsonResponse($response = ''){
		return $this->getResponse()->representJson(
		$this->jsonHelper->jsonEncode($response)
		);
	}
}
