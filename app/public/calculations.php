<?php

function printValue($value) {
    echo "$" . $value;
}

$contract_sale_price = 250000;
$personal_property = 75000;
$settlement_charges_to_borrower = null;
$closing_date = "2023/05/31";
$closing_date = date_create($closing_date);

# Tax Proration

// Reflect user input
$tax_period_municipal_start;
$tax_period_municipal_end;
$municipal_tax_paid = true;

$tax_period_county_start;
$tax_period_county_end;
$county_tax_paid = true;

$tax_period_school_start;
$tax_period_school_end;
$school_tax_paid = true;

// Calculated values
$adjustment_for_municipal_taxes_paid_by_seller_advance = 0;
$adjustment_for_county_taxes_paid_by_seller_advance = 0;
$adjustment_for_school_taxes_paid_by_seller_advance = 0;

/* Calculates the tax amount based on whether the payment was (or will be)
made during the discount, penalty, or base period. */
define('PENALTY_RATE', 0.10);
define('DISCOUNT_RATE', -0.02);
function calculateMunicipalTaxRate($payment_period, $tax_amount) {
    if ($payment_period == "discount") {
        $tax_amount = (DISCOUNT_RATE * $tax_amount) + $tax_amount;
    } elseif ($payment_period == "penalty") {
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

function calculatePerDiem($days_in_tax_period, $tax_amount) {
    return $per_diem = number_format(($tax_amount / $days_in_tax_period), 2);
}

function countDaysBetweenClosingAndEndOfTaxPeriod($closing_date, $end_date) {
    return $num_of_days_between_closing_and_end_tax_period = date_diff($closing_date, $end_date);
}

function calculateProration($per_diem, $num_of_days_between_closing_and_end_tax_period) {
    $municipal_tax_adjustment = 0;
}

$county_tax_proration = 0;
$municipal_tax_proration = 0;
$school_tax_proration = 0;
$tax_adjustments = 0;

/* TODO This needs to be broken out into smaller methods; there's far too much going on here */
function calculateAdjustmentForTaxes($municipal_tax_paid, $county_tax_paid, $school_tax_paid, $adjustment_for_municipal_taxes_paid_by_seller_advance, $adjustment_for_county_taxes_paid_by_seller_advance, $adjustment_for_school_taxes_paid_by_seller_advance) {
    if ($municipal_tax_paid) {
        $adjustment_for_municipal_taxes_paid_by_seller_advance += $municipal_tax_proration;
    }
    if ($county_tax_paid) {
        $adjustment_for_county_taxes_paid_by_seller_advance += $county_tax_proration;
    }
    if ($school_tax_paid) {
        $adjustment_for_school_taxes_paid_by_seller_advance += $school_tax_proration;
    }
    $tax_adjustments = ($adjustment_for_municipal_taxes_paid_by_seller_advance + $adjustment_for_county_taxes_paid_by_seller_advance + $adjustment_for_school_taxes_paid_by_seller_advance);
    return $tax_adjustments;
}

function calculateGrossAmountDueFromBorrower($contract_sale_price, $personal_property, $settlement_charges_to_borrower) {
    echo $gross_amount_due_from_borrower = $contract_sale_price + $personal_property + $settlement_charges_to_borrower;
}

function calculateGrossAmountDueToSeller($contract_sale_price, $personal_property, $tax_adjustments) {
    echo $gross_amount_due_to_seller = $contract_sale_price + $personal_property + $tax_adjustments;
}
    

