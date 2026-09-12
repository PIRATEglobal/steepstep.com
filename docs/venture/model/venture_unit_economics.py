#!/usr/bin/env python3
"""Small, dependency-free scenario model for a private-pay DACH physio offer.

Run: python3 venture_unit_economics.py
It prints a scenario table and writes venture_scenarios.csv beside this file.
All amounts are EUR per newly acquired package customer unless stated otherwise.
"""
from csv import DictWriter
from itertools import product
from pathlib import Path

BASE = {
    "package_price": 449.0,
    "clinician_hours": 4.0,
    "clinician_cost_per_hour": 70.0,
    "support_hours": 0.50,
    "support_cost_per_hour": 25.0,
    "payment_pct": 0.02,
    "refund_pct": 0.05,
    "cac": 70.0,
    "repeat_rate": 0.30,
    "repeat_price": 249.0,
    "repeat_clinician_hours": 2.0,
    # Lean founder-operated stack: software, compliance, bookkeeping, insurance,
    # content, and a small support allowance. Clinician delivery is variable above.
    "monthly_overhead": 3000.0,
}

def scenario(name, overrides=None):
    p = BASE | (overrides or {})
    revenue = p["package_price"] * (1 - p["refund_pct"])
    delivery = p["clinician_hours"] * p["clinician_cost_per_hour"]
    support = p["support_hours"] * p["support_cost_per_hour"]
    payment = p["package_price"] * p["payment_pct"]
    first_cm = revenue - delivery - support - payment - p["cac"]
    repeat_cm = p["repeat_rate"] * (p["repeat_price"] * (1 - p["refund_pct"])
        - p["repeat_clinician_hours"] * p["clinician_cost_per_hour"]
        - p["repeat_price"] * p["payment_pct"])
    cohort_cm = first_cm + repeat_cm
    ltv = first_cm + repeat_cm + p["repeat_rate"] ** 2 * repeat_cm
    hours_per_package = p["clinician_hours"]
    capacity_packages_month = 25 * 4.33 / hours_per_package
    break_even_packages = p["monthly_overhead"] / cohort_cm if cohort_cm > 0 else float("inf")
    return {
        "scenario": name, "price": p["package_price"], "CAC": p["cac"],
        "refund_pct": p["refund_pct"], "repeat_rate": p["repeat_rate"],
        "clinician_hours": p["clinician_hours"], "first_contribution": round(first_cm, 2),
        "repeat_contribution": round(repeat_cm, 2), "cohort_contribution": round(cohort_cm, 2),
        "ltv_after_2_repeats": round(ltv, 2), "ltv_cac": round(ltv / p["cac"], 2) if p["cac"] else None,
        "payback_packages": round(p["cac"] / max(first_cm + repeat_cm, 1), 2),
        "capacity_packages_per_clinician_month": round(capacity_packages_month, 1),
        "break_even_packages_month": round(break_even_packages, 1),
    }

SCENARIOS = [
    ("downside", {"package_price": 349, "clinician_hours": 4.5, "clinician_cost_per_hour": 80,
                  "support_hours": .75, "cac": 140, "repeat_rate": .15, "refund_pct": .10}),
    ("base", {}),
    ("upside", {"package_price": 549, "clinician_hours": 3.25, "clinician_cost_per_hour": 65,
                "support_hours": .35, "cac": 55, "repeat_rate": .45, "refund_pct": .03}),
]

def main():
    rows = [scenario(name, overrides) for name, overrides in SCENARIOS]
    output_path = Path(__file__).with_name("venture_scenarios.csv")
    with output_path.open("w", newline="") as f:
        writer = DictWriter(f, fieldnames=rows[0].keys())
        writer.writeheader(); writer.writerows(rows)
    print("scenario | first CM | cohort CM | LTV:CAC | capacity packages/clinician/mo | break-even packages/mo")
    for r in rows:
        print(f"{r['scenario']} | €{r['first_contribution']:.0f} | €{r['cohort_contribution']:.0f} | "
              f"{r['ltv_cac']:.1f}x | {r['capacity_packages_per_clinician_month']:.1f} | {r['break_even_packages_month']:.1f}")

if __name__ == "__main__":
    main()
