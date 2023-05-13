<?php

function printValue($param) {
    echo "$" . $param;
}
$contract_sale_price = 250000;
$personal_property = 75000;
$settlement_charges_to_borrower = null;


# Tax Proration

// Reflect user input
$tax_period_municipal_start;
$tax_period_municipal_end;
$municipal_tax_paid = false;

$tax_period_county_start;
$tax_period_county_end;
$county_tax_paid = false;

$tax_period_school_start;
$tax_period_school_end;
$school_tax_paid = false;

// Calculated values
$adjustment_for_municipal_taxes_paid_by_seller_advance = null;
$adjustment_for_county_taxes_paid_by_seller_advance = null;
$adjustment_for_school_taxes_paid_by_seller_advance = null;

/* Calculates the tax amount based on whether the payment was (or will be)
made during the discount, penalty, or base period. */
define('PENALTY_RATE', 0.10);
define('DISCOUNT_RATE', -0.02);
function calculateMunicipalTaxRate($status, $tax_amount) {
    if ($status == "discount") {
        $tax_amount = (DISCOUNT_RATE * $tax_amount) + $tax_amount;
    } elseif ($status == "penalty") {
        $tax_amount = (PENALTY_RATE * $tax_amount) + $tax_amount;
    } else {
        return $tax_amount;
    }
    return $tax_amount;
}


function countDaysInTaxPeriod($start_date, $end_date) {
    $start_date = date_create($start_date);
    $end_date = date_create($end_date);
    return $days_in_tax_period = date_diff($start_date, $end_date);
}

// TODO add rounding to 2 decimal places
function calculatePerDiem($days_in_tax_period, $tax_amount) {
    return $per_diem = $tax_amount / $days_in_tax_period;
}





function calculateGrossAmountDueFromBorrower($contract_sale_price, $personal_property, $settlement_charges_to_borrower) {
    return $gross_amount_due_from_borrower = $contract_sale_price + $personal_property + $settlement_charges_to_borrower;
}
    

