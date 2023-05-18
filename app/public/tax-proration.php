<?php

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

/* User-selected value; options will be "discount", "penalty", or "base"; 
May eventually add functionality to make this determination based on start/end dates provided. */
$payment_period;

/* Calculates the tax amount based on whether the payment was (or will be)
made during the discount, penalty, or base period. */
define('PENALTY_RATE', 0.10);
define('DISCOUNT_RATE', -0.02);
function calculateTaxRate($payment_period, $tax_amount) {
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

// Calculated values
$adjustment_for_municipal_taxes_paid_by_seller_advance = 0;
$adjustment_for_county_taxes_paid_by_seller_advance = 0;
$adjustment_for_school_taxes_paid_by_seller_advance = 0;
/* Associative Array (Map) */
$tax_status_array = ["municipal" => "paid", "county" => "paid", "school" => "unpaid"];
$tax_amounts_array = ["municipal" => 500, "county" => 500, "school" => 1000];

$county_tax_proration = 0;
$municipal_tax_proration = 0;
$school_tax_proration = 0;
$tax_adjustments = 0;

/* TODO Work on this method (or what will likely be several methods) */
// function calculateAdjustmentForTaxes($tax_status_array, $tax_amounts_array) {

//     foreach($tax_status_array as $taxing_authority => $status) {
//         if ($status == "paid") {

//         }
//     }
//     $tax_adjustments += $adjustment_for_tax_paid_by_seller_advance;
//     return $tax_adjustments;
// }