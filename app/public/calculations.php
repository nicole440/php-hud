<?php

function printValue($value) {
    echo "$" . $value;
}

$contract_sale_price = 250000;
$personal_property = 75000;
$settlement_charges_to_borrower = null;
$closing_date = "2023/05/31";
$closing_date = date_create($closing_date);



function calculateGrossAmountDueFromBorrower($contract_sale_price, $personal_property, $settlement_charges_to_borrower) {
    echo $gross_amount_due_from_borrower = $contract_sale_price + $personal_property + $settlement_charges_to_borrower;
}

function calculateGrossAmountDueToSeller($contract_sale_price, $personal_property, $tax_adjustments) {
    echo $gross_amount_due_to_seller = $contract_sale_price + $personal_property + $tax_adjustments;
}
    

