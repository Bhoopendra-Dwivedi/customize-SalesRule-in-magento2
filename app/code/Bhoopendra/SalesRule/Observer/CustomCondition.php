<?php

namespace Bhoopendra\SalesRule\Observer;

class CustomCondition implements \Magento\Framework\Event\ObserverInterface
{
    /**
     * Execute observer.
     * @param \Magento\Framework\Event\Observer $observer
     * @return $this
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $additional = $observer->getAdditional();
        $conditions = (array) $additional->getConditions();

        $conditions = array_merge_recursive($conditions, [
            $this->getCustomCondition()
        ]);

        $additional->setConditions($conditions);
        return $this;
    }

    /**
     * Get condition
     * @return array
     */
    private function getCustomCondition()
    {
        return [
            'label'=> __('Custom Condition'),
            'value'=> \Bhoopendra\SalesRule\Model\Rule\Condition\CustomCondition::class
        ];
    }
}