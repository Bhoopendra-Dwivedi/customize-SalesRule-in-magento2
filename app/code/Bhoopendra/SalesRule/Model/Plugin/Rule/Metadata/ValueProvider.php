<?php


namespace Bhoopendra\SalesRule\Model\Plugin\Rule\Metadata;

class ValueProvider
{

    public function afterGetMetadataValues(
        \Magento\SalesRule\Model\Rule\Metadata\ValueProvider $subject,
        $result
    ) {
        $applyOptions = [
            'label' => __('Bhoopendra'),
            'value' => [
                [
                    'label' => ' Custom Action',
                    'value' => 'custom-action',
                ],
            ],
        ];
        array_push($result['actions']['children']['simple_action']['arguments']['data']['config']['options'], $applyOptions);
        return $result;
    }
}
